<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use DB;
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        $views = Post::orderBy('view_count', 'DESC')->get();
        $postId = Comment::all()->unique('post_id')->pluck('post_id');
        $noAnswers = DB::table('posts')->whereNotIn('posts.id', $postId)->orderBy('created_at', 'DESC')->get();

        return view('home', compact('posts', 'views', 'noAnswers'));
    }

    public function create()
    {
        return view('create_post');
    }

    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        Post::create($request->all());

        return redirect()->route('posts.home');
    }

    public function show($id)
    {
        $post = Post::find($id);
        $view_count = $post->view_count +1;
        $post['view_count'] = $view_count;
        DB::table('posts')->where('id', $id)->update(['view_count' => $view_count]);

        return view('post-details', compact('post'));
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
