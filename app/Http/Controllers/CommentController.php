<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Nieuwspost;

use App\Http\Requests;

class CommentController extends Controller
{
     public function store(Request $request, $post_id)
    {
        $this->validate($request, array(
            'comment'   =>  'required|min:5|max:2000'
            ));
        
        $post = Nieuwspost::find($post_id);
       
        $comment = new Comment();
        $comment->content = $request->comment;
        $comment->user_id = auth()->user()->id;
        $comment->nieuwspost()->associate($post);
        $comment->save();
        
        
        return redirect('nieuwsposts/'.$post_id)->with('post', $post)->with('success', 'Comment geplaatst');
    }
}
