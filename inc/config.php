<?php
error_reporting(0);
ini_set('date.timezone','Asia/Shanghai');
ini_set('max_execution_time', '0');
$db = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'cook',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => 'zwt12345',
    'port' => 3306,
    'charset' => 'utf8',
]);

if(!$db){
    echo "数据库无法连接，请稍后...";
}

$GLOBALS['flag'] = 0;
$GLOBALS['msg'] = '';
$GLOBALS['data'] = array();

?>