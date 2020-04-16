<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function store(CommentRequest $request){
        Comment::create($request->all());
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();
    }
}
