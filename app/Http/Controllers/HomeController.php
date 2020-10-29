<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Current user
        $userId  = Auth::id();

        $user    = User::find($userId);

        $posts   = $user->posts;
        // return $posts;die();
        // return $user;die();
        return view('home', compact('posts'));
    }
}
