<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller

{
    public function index()
    {
        return view('add-blog-post-form');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:6',
            'description'=>'required|min:3|max:100'
        ],
    [
        'title.required' => 'Վերնագիրը գրելը պարտադիր է',
        'title.required' => 'պետք է լինի 6 տառից ավել',
        'description.required' => 'պետք է լինի 3-ից ավել տառ'
    ]);
        
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}