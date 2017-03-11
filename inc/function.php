<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/5
 * Time: 18:25
 * 自定义function
 */

// 返回JSON函数
function callbackjson($flag,$msg,$data){

    $api_data = array(
        'flag'=>$flag,
        'msg' =>$msg,
        'data'=>$data
    );
    echo(json_encode($api_data));
}

//登陆日志
function log($type, $logtext)
{
    global $db, $ip;

    if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else $ip = "Unknow";

    $m = $_COOKIE['id']!=''?$_COOKIE['id']:'';

    $log = $db->insert("log", [
        "ip"        => $ip,
        "type"      => $type,
        "runid"     => $m,
        "logtext"   => $logtext,
        "creattime" => date('Y-m-d H:i:s'),
        "status"    => 1,
    ]);
    if ($log) {
        return true;
    } else {
        return false;
    }
}

?>
