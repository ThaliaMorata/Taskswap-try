<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\posts;
use App\Models\Category;
use Illuminate\Http\Request;

class post_Controller extends Controller
{
    public function index(){
        $data = Category::all();
        $posts = posts::all();
        return view('dashboard.dashboard',['data'=>$data],['posts'=>$posts]);
    }
    
    public function store(Request $request){
       $data = $request->validate([
        'post_title' => ['required', 'string', 'max:255'],
        'post_category' => ['required', 'string', 'max:255'],
        'post_content' =>['required', 'string', 'max:255'],
       ]);

       $newpost = posts::create([
            'post_title' => $request->post_title,
            'post_category' => $request->post_category,
            'post_content' => $request->post_content,
       ]);

       return redirect(route('dashboard'));
        
    }

    public function update(Posts $post, Request $request) 
    {
 
        $data = $request->validate([
            'post_title' => ['required', 'string', 'max:255'],
            'post_category' => ['required', 'string', 'max:255'],
            'post_content' =>['required', 'string', 'max:255'],
           ]);
    
        $post->update($data);

        return redirect(route('dashboard'));
    }
    public function delete(Posts $post) 
    {
 
        $post->delete();

        return redirect(route('dashboard'));
    }


}
