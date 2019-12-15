<?php

namespace App\Http\Controllers;

use App\Http\Tools\AjaxResult;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 用户列表
     */
    public function index(){
        return view('user/index');
    }

    public function getList(){
        $data = User::paginate(1);
        return AjaxResult::pageReturn($data->total(),$data->getCollection()->toArray());
    }
}
