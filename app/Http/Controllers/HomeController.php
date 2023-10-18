<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
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
        $this->middleware('auth')->except('editor');
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

    public function editor()
    {
        return view('index');
    }
}
