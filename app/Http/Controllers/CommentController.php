<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
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

            return new CommentResource ($comment->loadMissing('commentator:id,username'));

    }

      public function update (Request $request ,$id) 
    {
        $validated = $request->validate([
        'comments_content' => 'required',
    ]);

        $comment = comment::FindOrFail($id);
        $comment->update ($request->only('comments_content'));

            return new CommentResource ($comment->loadMissing('commentator:id,username'));

    }

       public function destory ($id) 
    {
        $comment = comment::FindOrFail($id);
        $comment->delete();

            return new CommentResource ($comment->loadMissing('commentator:id,username'));

    }

}
