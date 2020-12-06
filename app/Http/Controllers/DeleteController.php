<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Exception;

class DeleteController extends Controller
{
    //
    public function index() {
        return view('delete.index');
    }

    public function confirm(Request $request) {

        //入力された社員番号の社員情報を表示する
        $number = $request->number;
        $info = User::where('number' ,$number)->first();
        //上記に orWhere を追加して、複数検索を可能にすること

        /*
        try {
            $info = User::where('number' ,$number)->first();
            return view('delete.confirm', compact('number', 'info'));
        } catch (Exception $e) {
            return view('delete.confirm', compact('number', 'info'));
        }
        */
        
        return view('delete.confirm', compact('number', 'info'));
        

        
    }
}
