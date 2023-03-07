<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        // return response()->json($posts);
        return PostResource::collection($posts);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::with('writer:id,username,email')->FindOrFail($id);
        return new PostDetailResource ($post);
    }

    public function show2($id)
    {
        $post = Post::FindOrFail($id);
        return new PostDetailResource ($post);
    }
}
