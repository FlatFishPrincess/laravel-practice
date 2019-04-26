<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostApiController extends Controller
{
    //
    public function index(){
        return response()->json(Post::get(), 200);
    }

    public function show($_id){
        $post = Post::find($_id);
        if(is_null($post)){
            return response()->json(null, 404);
        }
        return response()->json(Post::findOrFail($_id), 200);
    }

    public function add(Request $request){
        $post = Post::create($request->all());
        $rules = [
            'title' => 'required',
            'created_by' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 404);
        }
        return response()->json($post, 201);
    }

    public function update(Request $request, $_id){
        // $post->update($request->all());
        $post = Post::find($_id);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function delete(Request $request, $_id){
        $post = Post::find($_id);
        $post->delete();
        return response()->json(null, 204);
    }

    public function errors(){
        return response()->json(['msg' => 'Title is required!'], 501);
    }
}
