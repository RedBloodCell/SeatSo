<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

require_once 'resources\org\code\Code.class.php';
class LoginController extends CommonController
{
    public function login()
    {
        if($input = Input::all()){
            $code = new \Code();
            $_code = $code ->get();
            if(strtoupper($input['code']) != $_code) {
                return back()->with('msg', '验证码错误！');
            }
            if($input['user_phone'] == null){
                return back() -> with('msg','请输入用户名和密码！');
            }
            $user_phone = $input['user_phone'];
            $results = DB::select("select * from user where user_phone = $user_phone");
            if($results == null){
                return back() -> with('msg','用户不存在！');
            }
            foreach ($results as $user) {
                $user_pass = $user -> user_pass;
            }
            if(Crypt::decrypt($user_pass) != $input['user_pass']){
                return back() -> with('msg','密码错误！');
            }
            session(['user'=>$user]);
            return redirect('user/index');
        }else {
            return view('user.login');
        }
    }

    public function code()
    {
        $code = new \Code();
        $code -> make();
    }
}
