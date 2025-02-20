<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
  
     public function index()
    {  $posts= Post::get();
        //
        return view('posts.index',['posts'=>$posts]);
    }
    public function show(Post $post) {
       // return Post::findOrFail($id);
       return view('posts.show',['post'=>$post]);
    }
    public function create(){
        return view('posts.create',['post'=>new Post()]);
    }
    public function store(SavePostRequest $request){
     Post::create($request->validated());
 
     //  return redirect()->route('posts.index');
    // session()->flash('status','Post Created!');
     return to_route('posts.index')->with('status','Post Created!');
    }
    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }
    public function update(SavePostRequest $request,Post $post){
     $post->update($request->validated());
    /* $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->save();
        */
      //  return redirect()->route('posts.index');
     // session()->flash('status','Post Updated!');
      return to_route('posts.index')->with('status','Post Updated!');
    }
    
}
