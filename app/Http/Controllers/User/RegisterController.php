<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RegisterController extends CommonController
{
    public function register()
    {
        if($input = Input::all()){
            $user_phone =$input['user_phone'];
            $user_pass =$input['user_pass'];
            $user_pass = Crypt::encrypt($user_pass);
            DB::insert("insert into user (user_phone, user_pass) values ($user_phone, '$user_pass')");
            return redirect('user/login') -> with('msg','恭喜你！注册成功！');
        }else{
            return view('user.register');
        }
    }
}
