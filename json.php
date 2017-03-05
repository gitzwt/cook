<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/3/5
 * Time: 18:16
 */

require 'Slim/Slim.php';
require_once 'inc/medoo.php';
require_once 'inc/config.php';
require_once 'inc/function.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->config(array(
    'debug' => true
));

//厨师招募
$app->post('/cooker_join', function () {
    global $flag, $msg, $data, $db, $domain, $home;
    if(isset($_POST['phone']) && $_POST['phone']!='') {
        $has = $db->get("kitchener", '*', [
            "phone" => $_POST['phone'],
        ]);

        if(!$has){
            $cid = $db->insert('kitchener', [
                'name'       => $_POST['name'],
                'phone'      => $_POST['phone'],
                'status'     => 1,
                'creattime'  => date('Y-m-d H:i:s'),
                'experience' => $_POST['experience'],
            ]);

            if($cid>0){
                $flag = 200;
                $msg = '您的申请已成功提交。申请ID:'.$cid;
            }else{
                $flag = 400;
                $msg = '提交失败，请重试。注意数据格式。';
            }

        }else{
            $flag = 400;
            $msg = '手机号已存在，请不要重复录入。';
        }
    }else{
        $flag = 400;
        $msg = '手机号不能为空，且格式必须正确。';
    }
    callbackjson($flag,$msg,$data);
    log(2,$msg);
});


$app->run();