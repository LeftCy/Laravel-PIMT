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

        $info = new User();
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

        //保存
        $info->save();

        return view('regist.thanks', compact('inputs', 'info'));
    }
}
