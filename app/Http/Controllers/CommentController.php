<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd($request);
        $tutorial = Tutorial::findOrFail($request->tutorial_id);

        $user_id = auth()->user()->id;

        $comment = new Comment();

        $comment->comment = $request->comment;
        $comment->user_id = $user_id;
        $comment->tutorial_id = $request->tutorial_id;
        $comment->save();

        return back()->with('success', 'تم إضافة التعليق !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        if($comment == null)
        {
            abort(404);
        }
        //$this->authorize('update', $comment);
        $comment->delete();
        return back()->with('warning', 'تم حذف التعليق !');
    }
}
