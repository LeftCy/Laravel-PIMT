<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class FixController extends Controller
{
    //
    public function index() {
        return view('fix.index');
    }

    public function fix(Request $request) {
        $number = $request->number;
        $info = User::where('number' ,$number)->first();
        
        return view('fix.fix', compact('number', 'info'));
    }

    public function fixed(Request $request) {
        $number = $request->number;
        $info = User::where('number' ,$number)->first();

        $info->name = $request->input('name');
        $info->number = $request->input('number');
        $info->date = $request->input('date');
        $info->dep = $request->input('dep');
        $info->group = $request->input('group');
        $info->customer = $request->input('customer');
        $info->postal = $request->input('postal');
        $info->add = $request->input('add');
        $info->tel = $request->input('tel');
        $info->mobile = $request->input('mobile');
        $info->emergency = $request->input('emergency');
        $info->relation = $request->input('relation');

        $info->save();


        
        return view('fix.fixed', compact('number', 'info'));
    }
}
