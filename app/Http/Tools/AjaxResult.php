<?php

namespace App\Http\Tools;

/**
 * ajax消息返回
 * Class AjaxResult
 * @package App\Http\Tools
 */
class AjaxResult
{
    /**
     * 成功返回
     * @param string $msg
     * @param string $data
     * @return array
     */
    public static function success($msg = '', $data = '')
    {
        return [
            'code' => 0,
            'msg' => $msg,
            'data' => $data
        ];
    }

    /**
     * 失败返回
     * @param string $msg
     * @param string $data
     * @return array
     */
    public static function error($msg = '', $data = '')
    {
        return [
            'code' => 1,
            'msg' => $msg,
            'data' => $data
        ];
    }

    /**
     * 返回表格请求
     * @param string $count 个数
     * @param string $msg
     * @param string $data 列表数组
     * @return array
     */
    public static function pageReturn($count = '', $data = '', $msg = '')
    {
        return [
            'code' => 0,
            'msg' => $msg,
            'count' => $count,
            'data' => $data
        ];
    }
}
