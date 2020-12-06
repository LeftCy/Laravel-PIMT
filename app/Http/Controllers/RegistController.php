<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fabades\DB;
use App\User;

class RegistController extends Controller
{
    //登録ページを呼び出す
    public function index() {
        return view('regist.index');
    }

    public function thanks(Request $request) {

        //フォームで受け取った値を取得
        $inputs = $request->all();

        $user = new User();
        $user->name = $request->input('name');
        $user->number = $request->input('number');
        $user->date = $request->input('date');
        $user->dep = $request->input('dep');
        $user->group = $request->input('group');
        $user->customer = $request->input('customer');
        $user->postal = $request->input('postal');
        $user->add = $request->input('add');
        $user->tel = $request->input('tel');
        $user->mobile = $request->input('mobile');
        $user->emergency = $request->input('emergency');
        $user->relation = $request->input('relation');

        //保存
        $user->save();

        return view('regist.thanks', compact('inputs'));
    }
}
