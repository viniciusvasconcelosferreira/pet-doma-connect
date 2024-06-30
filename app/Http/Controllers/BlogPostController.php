<?php

namespace App\Http\Controllers;

use App\Services\BlogPostService;

class BlogPostController extends Controller
{
    protected $blogPostService;

    public function __construct(BlogPostService $blogPostService)
    {
        $this->blogPostService = $blogPostService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->blogPostService->getActivePosts();
        $title = 'Blogs | PET D.O.M.A';

        return view('frontend.blog.index', compact('posts', 'title'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = $this->blogPostService->getPostBySlug($slug);
        $title = $post->title.' - '.$post->main_tag.' | PET D.O.M.A';

        return view('frontend.blog.show', compact('post', 'title'));
    }
}
