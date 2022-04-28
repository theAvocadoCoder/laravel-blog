<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function show($slug)
    {
        // get requested post if published
        $post = Post::where('is_published', true)
            ->where('slug', $slug)
            ->firstOrFail();

        // get all tags for requested post
        $post_tags = $post->tags;

        // get all categories
        $categories = Category::all();

        // get all tags
        $tags = Tag::all();

        // return post view with corresponding values
        return view('post', [
            'post' => $post,
            'post_tags' => $post_tags,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
