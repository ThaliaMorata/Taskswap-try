<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post; // Corrected the import statement

class FindTask extends Controller
{
    public function index()
    {
        $data = Category::all();
        $posts = \App\Models\posts::all(); // Corrected the namespace for the Post model
        return view('findTask.Find_Task', compact('data', 'posts'));
    }

    public function createPost(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_category' => 'required|string|max:255',
            'post_content' => 'required|string',
        ]);

        // Create new post
        $post = new \App\Models\posts(); // Corrected the namespace for the Post model
        $post->post_title = $validatedData['post_title'];
        $post->post_category = $validatedData['post_category'];
        $post->post_content = $validatedData['post_content'];
        $post->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Post created successfully');
    }
}
