<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create() {
        
        return view('ask_question');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        return \view('home');
    }
}
