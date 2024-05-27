<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use enshrined\svgSanitize\Sanitizer;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Response;
use Auth;
use Storage;

class AizUploadController extends Controller
{
    public function index(Request $request)
    {
        $all_uploads = Upload::query();
        $search = $request->search;
        $sort_by = $request->sort;

        if ($search) {
            $all_uploads->where('file_original_name', 'like', '%'.$search.'%');
        }

        $all_uploads = $this->applySorting($all_uploads, $sort_by);

        $all_uploads = $all_uploads->paginate(60)->appends($request->query());

        return view('backend.uploaded_files.index', compact('all_uploads', 'search', 'sort_by'));
    }

    public function create()
    {
        return view('backend.uploaded_files.create');
    }

    public function show_uploader(Request $request)
    {
        return view('uploader.aiz-uploader');
    }

    public function upload(Request $request)
    {
        $type = array(
            "jpg" => "image",
            "jpeg" => "image",
            "png" => "image",
            "svg" => "image",
            "webp" => "image",
            "gif" => "image",
            "mp4" => "video",
            "mpg" => "video",
            "mpeg" => "video",
            "webm" => "video",
            "ogg" => "video",
            "avi" => "video",
            "mov" => "video",
            "flv" => "video",
            "swf" => "video",
            "mkv" => "video",
            "wmv" => "video",
            "wma" => "audio",
            "aac" => "audio",
            "wav" => "audio",
            "mp3" => "audio",
            "zip" => "archive",
            "rar" => "archive",
            "7z" => "archive",
            "doc" => "document",
            "txt" => "document",
            "docx" => "document",
            "pdf" => "document",
            "csv" => "document",
            "xml" => "document",
            "ods" => "document",
            "xlr" => "document",
            "xls" => "document",
            "xlsx" => "document"
        );

        if ($request->hasFile('aiz_file')) {
            $upload = new Upload;
            $extension = strtolower($request->file('aiz_file')->getClientOriginalExtension());

            if (isset($type[$extension])) {
                $upload->file_original_name = null;
                $arr = explode('.', $request->file('aiz_file')->getClientOriginalName());
                for ($i = 0; $i < count($arr) - 1; $i++) {
                    if ($i == 0) {
                        $upload->file_original_name .= $arr[$i];
                    } else {
                        $upload->file_original_name .= ".".$arr[$i];
                    }
                }

                if ($extension == 'svg') {
                    $sanitizer = new Sanitizer();
                    // Load the dirty svg
                    $dirtySVG = file_get_contents($request->file('aiz_file'));

                    // Pass it to the sanitizer and get it back clean
                    $cleanSVG = $sanitizer->sanitize($dirtySVG);

                    // Load the clean svg
                    file_put_contents($request->file('aiz_file'), $cleanSVG);
                }

                $path = $request->file('aiz_file')->store('uploads/all', 'local');
                $size = $request->file('aiz_file')->getSize();

                // Return MIME type ala mimetype extension
                $finfo = finfo_open(FILEINFO_MIME_TYPE);

                // Get the MIME type of the file
                $file_mime = finfo_file($finfo, base_path('public/').$path);

                if ($type[$extension] == 'image') {
                    try {
                        $manager = new ImageManager(new Driver());
                        $img = $manager->read($request->file('aiz_file')->getRealPath());
                        $height = $img->height();
                        $width = $img->width();
                        if ($width > $height && $width > 1500) {
                            $img->resize(1500, null, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        } elseif ($height > 1500) {
                            $img->resize(null, 800, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        }
                        $img->save(base_path('public/').$path);
                        clearstatcache();
                        $size = $img->filesize();
                    } catch (\Exception $e) {
                        //dd($e);
                    }
                }

                $upload->extension = $extension;
                $upload->file_name = $path;
                $upload->user_id = Auth::user()->id;
                $upload->type = $type[$upload->extension];
                $upload->file_size = $size;
                $upload->save();
            }
            return '{}';
        }
    }

    public function get_uploaded_files(Request $request)
    {
        $uploads = Upload::where('user_id', Auth::user()->id);

        if ($request->search) {
            $uploads->where('file_original_name', 'like', '%'.$request->search.'%');
        }

        if ($request->sort) {
            $uploads = $this->applySorting($uploads, $request->sort);
        }

        return $uploads->paginate(60)->appends($request->query());
    }

    public function destroy($id)
    {
        $upload = Upload::findOrFail($id);

        try {
            unlink(public_path().'/'.$upload->file_name);

            $upload->delete();
        } catch (\Exception $e) {
            $upload->delete();
        }

        return back();
    }

    public function bulk_uploaded_files_delete(Request $request)
    {
        if ($request->id) {
            foreach ($request->id as $file_id) {
                $this->destroy($file_id);
            }
            return 1;
        } else {
            return 0;
        }
    }

    public function get_preview_files(Request $request)
    {
        $ids = explode(',', $request->ids);
        $files = Upload::whereIn('id', $ids)->get();
        $new_file_array = [];

        foreach ($files as $file) {
            $file['file_name'] = app('url')->asset('public/'.$file->file_name);

            if ($file->external_link) {
                $file['file_name'] = $file->external_link;
            }

            $new_file_array[] = $file;
        }

        return $new_file_array;
    }

    public function all_file()
    {
        $uploads = Upload::all();
        foreach ($uploads as $upload) {
            try {
                unlink(public_path().'/'.$upload->file_name);
                $upload->delete();
            } catch (\Exception $e) {
                $upload->delete();
            }
        }

        Upload::query()->truncate();

        return back();
    }

    public function attachment_download($id)
    {
        $project_attachment = Upload::find($id);
        try {
            $file_path = public_path($project_attachment->file_name);
            return Response::download($file_path);
        } catch (\Exception $e) {
            return back();
        }
    }

    public function file_info(Request $request)
    {
        $file = Upload::findOrFail($request['id']);

        return view('backend.uploaded_files.info', compact('file'));
    }

    public function applySorting($query, $sort_by)
    {
        switch ($sort_by) {
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            case 'smallest':
                $query->orderBy('file_size', 'asc');
                break;
            case 'largest':
                $query->orderBy('file_size', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        return $query;
    }

}
