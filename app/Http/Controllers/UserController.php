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

    /**
     * 获取用户列表
     */
    public function getList(Request $request){
        $input = $request->all();
        $where = [];
        if(!empty($input['name'])){
            $where['name'] = $input['name'];
        }
        $data = User::where($where)->paginate($input['limit']);
        return AjaxResult::pageReturn($data->total(),$data->getCollection()->toArray());
    }
}
