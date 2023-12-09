<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('editor', 'deleteCoo');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = Auth::user();
        $tutorials = Tutorial::all()->where('user_id', $user->id);
        return view('home', compact('tutorials'));
    }

    public function teacher()
    {
        $teachers = User::all()->where('role', 'teacher');
        return view('teacher', compact('teachers'));
    }

    public function deleteCoo()
    {
        return response('deleted')->cookie('graph_id', null, -1);
    }
}
