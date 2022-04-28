<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class TagController extends Controller
{
    public function index($slug)
    {
        // get the requested tag
        $tag = Tag::where('slug', $slug)->firstOrFail();

        // get the posts with the requested tag
        $posts = $tag->posts()
            ->where('is_published', true)
            -orderBy('id', 'desc')
            ->paginate(5);

        // get all categories
        $categories = Category::all();

        // get all tags
        $tags = Tags::all();

        // return the data to the corresponding view
        return view('tag', [
            'tag' => $tag,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
