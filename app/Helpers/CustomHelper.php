<?php
use Illuminate\Support\Facades\DB;

if (!function_exists('count_answer')) {
    function count_answer($id)
    {
        $total = App\Comment::where('post_id', $id)->get()->count();

        return $total;
    }
}

if (!function_exists('total_answer')) {
    function total_answer()
    {
        $total = App\Comment::all()->count();
        
        return $total;
    }
}

if (!function_exists('total_question')) {
    function total_question()
    {
        $total = App\Post::all()->count();

        return $total;
    }
}