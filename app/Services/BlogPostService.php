<?php

namespace App\Services;

use App\Models\BlogPost;

class BlogPostService
{
    public function getMostRecentPosts($limit = 3)
    {
        return BlogPost::select('slug', 'main_tag', 'title', 'thumbnail', 'posted_at')
            ->orderBy('created_at', 'desc')
            ->take($limit)
            ->get();
    }

    public function getActivePosts($perPage = 9)
    {
        return BlogPost::where('is_active', true)
            ->orderBy('posted_at', 'desc')
            ->paginate($perPage);
    }

    public function getPostBySlug(string $slug)
    {
        return BlogPost::where('slug', $slug)->firstOrFail();
    }
}