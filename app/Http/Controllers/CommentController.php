<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Reply;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest  $request
     * @param  \App\BlogPost  $id
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request, $id)
    {
        $user = Auth::user();
        if(!$user){
            $post = BlogPost::find($id);

            $comment = new Comment();
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->post()->associate($post);
            $comment->save();

            return back()->with('success_message','Comment successfully added!');
        } else {
            $post = BlogPost::find($id);

            $comment = new Comment();
            $comment->user()->associate($user);
            $comment->comment = $request->comment;
            $comment->post()->associate($post);
            $comment->save();

            return back()->with('success_message','Comment successfully added!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest  $request
     * @param  \App\Comment  $comment_id
     * @return \Illuminate\Http\Response
     */
    public function reply(CommentRequest $request, $comment_id)
    {
        $user = Auth::user();
        $comment = Comment::find($comment_id);
        if(!$user){
            $reply = new Reply();
            $reply->comment()->associate($comment);
            $reply->name = $request->name;
            $reply->email = $request->email;
            $reply->comment = $request->comment;
            $reply->save();

            return back()->with('success_message','Comment successfully added!');
        } else {
            $reply = new Reply();
            $reply->comment()->associate($comment);
            $reply->user()->associate($user);
            $reply->comment = $request->comment;
            $reply->save();

            return back()->with('success_message','Comment successfully added!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if(auth()->id() == $comment->user_id) {
            $reply = Reply::where(['comment_id'=>$comment->id]);
            $com = Comment::where(['user_id'=>auth()->id(), 'id'=>$comment->id]);
            if ($reply->count() > 0 && $com->count() > 0) {
                $reply->delete();
                $com->delete();
                return back()->with('success_message','Comment with replies successfully deleted!');
            } else if($com->count() > 0){
                $com->delete();
                return back()->with('success_message','Comment successfully deleted!');
            } else{
                return back()->withErrors('Comment can deleted only from owner!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroyReply(Reply $reply)
    {
        if(auth()->id() == $reply->user_id) {
            $rep = Reply::where(['id'=>$reply->id,'user_id'=>auth()->id()]);
            $rep->delete();
            return back()->with('success_message','Comment successfully deleted!');
        } else{
            return back()->withErrors('Comment can deleted only from owner!');
        }
    }
}
