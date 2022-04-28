<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller
{
    public function show()
    {
        // get all the categories
        $categories = Category::all();

        // get published posts, sort by decreasing order of id
        $posts = Post::where('is_published', true)->orderBy('id', 'desc')->paginate(5);

        // get all the tags
        $tags = Tag::all();

        // return the data to the corresponding view
        return view('home', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
