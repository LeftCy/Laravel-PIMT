<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function index() {
        return view('search.index');
    }

    public function get(Request $request) {
        
        $number = $request->number;
        $info = User::where('number' ,$number)->first();
        
        /*
        $query = User::query();
        $query->where('number', $number);
        $info = $query->get();
        */

        return view('search.get', compact('number', 'info'));
    }

    public function list(Request $request) {
        /*
        $number = $request->number;
        $info = User::where('number' ,$number)->first();
        */

        $number = $request->number;

        //フォームから送られてきた値を取得
        $name_keyword = $request->name;
        $number_keyword = $request->number;
        $date_keyword = $request->date;
        $dep_keyword = $request->dep;
        $group_keyword = $request->group;
        $customer_keyword = $request->customer;
        $postal_keyword = $request->postal;
        $add_keyword = $request->add;
        $tel_keyword = $request->tel;
        $mobile_keyword = $request->mobile;
        $emergency_keyword = $request->emergency;
        $relation_keyword = $request->relation;


        //$name_keywordの値がセットされていれば、該当するユーザーの情報を$infoに格納する。
        $inputs =   $name_keyword ||
                    $number_keyword ||
                    $date_keyword ||
                    $dep_keyword ||
                    $group_keyword ||
                    $customer_keyword ||
                    $postal_keyword ||
                    $add_keyword ||
                    $tel_keyword ||
                    $mobile_keyword ||
                    $emergency_keyword ||
                    $relation_keyword;

        
        if (isset($inputs)) {
            /*
            $info = User::where('name', $name_keyword)
                    ->orWhere('number', $number_keyword)
                    ->orWhere('date', $date_keyword)
                    ->orWhere('dep', $dep_keyword)
                    ->orWhere('group', $group_keyword)
                    ->orWhere('customer', $customer_keyword)
                    ->orWhere('postal', $postal_keyword)
                    ->orWhere('add', $add_keyword)
                    ->orWhere('tel', $tel_keyword)
                    ->orWhere('mobile', $mobile_keyword)
                    ->orWhere('emergency', $emergency_keyword)
                    ->orWhere('relation', $relation_keyword)
                    ->first();
            */

            $info = DB::table('users')
                    ->where('name', $name_keyword)
                    ->orWhere('number', $number_keyword)
                    ->orWhere('date', $date_keyword)
                    ->orWhere('dep', $dep_keyword)
                    ->orWhere('group', $group_keyword)
                    ->orWhere('customer', $customer_keyword)
                    ->orWhere('postal', $postal_keyword)
                    ->orWhere('add', $add_keyword)
                    ->orWhere('tel', $tel_keyword)
                    ->orWhere('mobile', $mobile_keyword)
                    ->orWhere('emergency', $emergency_keyword)
                    ->orWhere('relation', $relation_keyword)
                    ->get();

        }
        
        //検索結果が複数か、単数か
        $users = count($info);
        $user_count = 0;
        for ($i=0; $i < $users; $i++) { 
            $user_count ++;
        }

        // for debug
        //echo "カウント", $user_count, "件";

        if ($user_count >= 2) {
            return view('search.list', compact('info', 'user_count'));
        } else if ($user_count == 1) {
            return view('search.get', compact('number', 'info'));
        } else {
            $info = null;
            return view('search.get', compact('number', 'info'));
        }

        //return view('search.list', compact('name_keyword', 'info'));
    }
}
