<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Tools\AjaxResult;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * 登录界面
     *
     * @return view
     */
    public function getLoginForm()
    {
        return view('auth.login');
    }

    /**登录验证
     * @param Request $request
     * @return array
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'captcha' => 'required|captcha',
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
            return AjaxResult::error("用户名或密码错误！");
        }
    }

}
