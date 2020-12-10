<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function index() {

        $users = DB::select('select * from users');
        $count = count($users);

        return view('top.index', compact('count'));
    }
}
