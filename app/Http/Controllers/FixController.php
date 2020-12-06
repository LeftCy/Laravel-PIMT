<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FixController extends Controller
{
    //
    public function index() {
        return view('fix.index');
    }

    public function fix(Request $request) {
        $number = $request->number;
        return view('fix.get', compact('number'));
    }
}
