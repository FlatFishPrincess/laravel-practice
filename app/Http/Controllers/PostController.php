<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function form(){
        return view('post.form');
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
}
