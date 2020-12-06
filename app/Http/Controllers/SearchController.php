<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class SearchController extends Controller
{
    //
    public function index() {
        return view('search.index');
    }

    public function get(Request $request) {
        $number = $request->number;
        $info = User::where('number' ,$number)->first();



        return view('search.get', compact('number', 'info'));
    }
}
