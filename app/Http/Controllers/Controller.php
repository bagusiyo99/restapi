<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
// public function store(Request $request)
// {
//     $validated = $request->validate([
//         'title' => 'required|max:255',
//         'new_content' =>  'required|max:255',
//     ]);

//      $request['author'] = Auth::user()->id;
//      $post = Post::create ($request->all());
//       return new PostDetailResource ($post->loadMissing('writer:id,username'));
// }
