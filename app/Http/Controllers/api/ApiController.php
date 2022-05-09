<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ApiController extends Controller
{
    //ユーザー登録
    public function create(Request $request) {
        $user = User::create([
            'email' => $request->email,
            'nickname' => $request->nickname,
            'sex' => $request->sex,
            'birthday' => $request->birthday,
            'prefectures' => $request->prefectures
        ]);

        return response()->json($user);
    }

    //ユーザープロフィールを取得
    public function fetch(Request $request) {
        $user = User::find($request->user_id);
        return response()->json($user);
    }
}
