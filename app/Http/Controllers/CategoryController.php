<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CategoryController extends Controller
{
    public function index($slug)
    {
        // get the requested category
        $category = Category::where('slug', $slug)->firstOrFail();

        // get the posts in the requested category
        $posts = $category->posts()
            ->where('is_published', true)
            -orderBy('id', 'desc')
            ->paginate(5);

        // get all categories
        $categories = Category::all();

        // get all tags
        $tags = Tags::all();

        // return the data to the corresponding view
        return view('category', [
            'category' => $category,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
