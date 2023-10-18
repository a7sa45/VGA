<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit',]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutorials = Tutorial::all();
        return view('tutorials.index', ['tutorials' => $tutorials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tutorials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title'  => ['required', 'string'],
            'description'   => ['required', 'string'],
            'url'    => ['required', 'url'],
            'image_path'   => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'file_path'  => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],    
        ]);

        if($request->image_path){
            $imageName = time().'.'.$request->image_path->extension();
            // Public Folder
            $request->image_path->move(public_path('images'), $imageName);
        }

        if($request->file_path){
            $fileNmae = time().'.'.$request->file_path->extension();
            // Public Folder
            $request->file_path->move(public_path('files'), $imageName);
        }

        $tutorial = new Tutorial();

        $tutorial->title = $data['title'];
        $tutorial->description = $data['description'];
        $tutorial->url = $data['url'];
        $tutorial->image_path = $imageName;
        $tutorial->file_path = $fileNmae;
        $tutorial->user_id = auth()->user()->id;
        $tutorial->save();

        

        return redirect('/tutorials')->with('success', 'تم انشاء الاختصار بنجاح !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tutorial $tutorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutorial $tutorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutorial $tutorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutorial $tutorial)
    {
        //
    }
}
