<?php

namespace app\Utils;

class JSON
{
    /**
     * 创建响应
     * @access public
     * @param int $status
     * @param string $msg
     * @param array $data
     * @return void
     */
    public function Make(int $status,string $msg,array $data = [])
    {
        $res = [
            "code" => $status,
            "msg" => $msg,
            "data" => $data
        ];
        http_response_code($status);
        echo json_encode($res);die;
    }

    /**
     * 操作成功
     * @access public
     * @param array $data
     * @param string $msg
     * @return void
     */
    public function Success(array $data = [],string $msg = '操作成功！')
    {
        $status = (!is_string($msg) || is_numeric($msg));
        $_msg = $status??$msg;
        $_data = $status?[]:$data;
        $this->Make(200, $_msg, $_data);
    }

    /**
     * 客户端错误
     * @access public
     * @param array $data
     * @param string $msg
     * @return void
     */
    public function Fail(string $msg = "操作失败！", array $data = [])
    {
        $status = is_array($msg);
        $_msg = $status?"操作失败！":$msg;
        $_data = $status?[]:$data;
        $this->Make(400, $_msg, $_data);
    }

    /**
     * 服务端异常
     * @access public
     * @param array $data
     * @param string $msg
     * @return void
     */
    public function Error(string $msg = "服务器异常！", array $data = []){
        $status = is_array($msg);
        $_msg = $status?"服务器异常！":$msg;
        $_data = $status?[]:$data;
        $this->Make(500, $_msg, $_data);
    }
}