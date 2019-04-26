<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function form($_id = false){
        $data = false;
        if($_id){
            $data = Post::findOrFail($_id);
            // return view('post.form', compact('data'));
        }
        return view('post.form', compact('data'));
    }

    public function save(Request $request){
        // return dd($request->title);
        $data = new Post($request->all());
        $data->created_by = \Auth::user()->name;
        $data->save();
        if($data){
            return redirect()->route('home');
        } else {
            return back();
        }
    }

    public function update(Request $request, $_id){
        $data = Post::findOrFail($_id);
        $data->title = $request->title;
        $data->comment = $request->comment;
        $data->save();
        if($data){
            return redirect()->route('home');
        } else {
            return back();
        }
    }

    public function delete($_id){
        $data = Post::destroy($_id);
        if($data){
            return redirect()->route('home');
        } else {
            return dd('cannot delete this post');
        }
    }
}
