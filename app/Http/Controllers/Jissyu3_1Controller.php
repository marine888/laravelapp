<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu3_1Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'お名前を入力下さい。',
        ];
        return view('Jissyu3_1.input', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは、' . $msg . 'さん！',
        ];
        return view('Jissyu3_1.output', $data);
    }


}
