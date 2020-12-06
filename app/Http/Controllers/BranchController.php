<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function index() {
        //検索結果画面での押したボタンによって、画面の推移先を「社員番号」の情報をもって推移すること。

        return view('branch.branch');
    }
}
