<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function index(Post $post)
    {
        return reponse()->json($post->comment()->with('user')->latest()->get());
    }

    public function store(Request $request, Post $post)
    {
        $comment = $post->comment()->create([
            'body' => $request->body,
            'user_id' => Auth::id()
        ]);
        $comment = Comment::where('id', $comment->id)->with('user')->first();
        return $comment->toJson();


        //
    }
}
