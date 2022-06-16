<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }


    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);
        dd($request->username);
        if ($request->fails()) {
            return response()->json(['errors' => $request->errors()->all()]);
        }
        return response()->json(['success' => 'Record is successfully added']);
    }
}
