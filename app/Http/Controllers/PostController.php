<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'Desc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Current User
        $user          = Auth::user();
        $request->validate([
            'title'    => 'bail|required|min:3',
            'body'     => 'bail|required|min:5'
        ]);
        $post          = new Post();
        $post->title   = $request->title;
        $now           = date('h:i:s');
        $post->slug    = str_replace(' ', '-', strtolower($post->title)).'-'.$now;
        $post->body    = $request->body;
        $post->user_id = $user->id;
        $post->save();
        return redirect('/home')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $request->validate([
            'title' => 'bail|required|min:3',
            'body'  => 'bail|required|min:5'
        ]);
        $post->title = $request->title;
        $now         = date('h:i:s');
        $post->slug  = str_replace(' ', '-', strtolower($post->title)).'-'.$now;
        $post->body  = $request->body;
        $post->save();
        return redirect('/home')->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->delete();
        return redirect('/home')->with('error', 'Post Deleted Successfully');
    }
}
