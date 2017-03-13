<?php

/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/2/8
 * Time: 16:13
 * 这里是token类 用来获取access_token
 */
class Token
{

    public static $tokenFile = './token.txt';
    public static $tokenExpireTime = 3600;

    // 入口方法 外面调用此接口是 先经过getToken()
    public static function getToken()
    {
        // 判断缓存的 合法
        if (!self::checkTokenFileExists() || self::checkTokenExpire()) {
            // 请求token
            $res = self::requestToken();
            // 写入
            self::writeToken($res);
            return $res;
        }

        return self::readToken();

    }

    // 请求的方法
    public static function requestToken()
    {
        //至上会计服务号
        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx9f2d1785175d240a&secret=2aacbdec8fbe702af7a4747cc838ea2a';

        //我的测试号
        //$url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx20fae7e8c8b0616d&secret=d4624c36b6795d1d99dcf0547af5443d';

        $res = https_request($url);
        // json 转为数组
        $res = json_decode($res, true);
        $token = $res['access_token'];

        if (!empty($token)) {
            return $token;
        } else {
            return false;
        }
    }

    // 写入token 缓存
    public static function writeToken($token)
    {
        file_put_contents(self::$tokenFile, $token);
    }

    // 读取token 缓存
    public static function readToken()
    {
        return file_get_contents(self::$tokenFile);
    }

    // 判断token缓存是否存在
    public static function checkTokenFileExists()
    {
        return file_exists(self::$tokenFile);
    }

    // 判断缓存是否有效
    public static function checkTokenExpire()
    {
        return filemtime(self::$tokenFile) + self::$tokenExpireTime < time();
    }

}