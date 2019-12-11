<?php

namespace App\Http\Controllers;

use App\Http\Tools\AjaxResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * 登录界面
     *
     * @return view
     */
    public function getLoginForm()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'name'     => 'required|string',
            'password' => 'required|string',
        ]);

        if($validator->fails()){
            return AjaxResult::error($validator->errors()->first());
        }

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // 通过认证..
            return AjaxResult::success();
        }else{
            return AjaxResult::success();
        }
    }
}
