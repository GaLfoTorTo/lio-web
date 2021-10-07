<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function feed(){
        $posts = Posts::with('usuario')->orderBy('created_at', 'DESC')->get();
        return response()->json($posts, 200);
    }

    public function novo(Request $request){

        if($request->hasFile('post_temp')) {
            $nome_post = 'user_'.$request->user_id.'_'.date('YmdHmi').'.'.$request->post_temp->getClientOriginalExtension();
            $request['post'] = '/uploads/posts/' . $nome_post;
            ($request->post);
            $request->post_temp->move(public_path('uploads/posts'), $nome_post);
        }

        $Post = Posts::create($request->all());
        return response()->json(['success' => 'Publicado com sucesso!'], 200);
    }
}
