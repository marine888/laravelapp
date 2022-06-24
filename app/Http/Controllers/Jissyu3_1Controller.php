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
        return view('___(5)___', $data);
    }

    public function post(___(6)___)
    {
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは、' . $msg . 'さん！',
        ];
        return view('___(7)___', $data);
    }
} -->
