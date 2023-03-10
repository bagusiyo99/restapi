<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function store(Request $request)
    {
        $validated = $request->validate([
        'post_id' => 'required|exists:posts,id',
        'comments_content' => 'required',
    ]);

    $request ['user_id'] = auth()->user()->id;

    $comment = comment::create( $request->all());

    return response()->json($comment);
    }
}
