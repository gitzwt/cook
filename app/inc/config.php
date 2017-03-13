<?php
	error_reporting(0);
	ini_set('date.timezone','Asia/Shanghai');
	ini_set('max_execution_time', '0');

	/*$db = new medoo([
	    'database_type' => 'mysql',
	    'database_name' => 'zs',
	    'server' => '127.0.0.1',
	    'username' => 'root',
	    'password' => '811005',
	    'port' => 85,
	    'charset' => 'utf8',
        'prefix'  => 'zscrm_'
	]);*/

    $db = new medoo([
        'database_type' => 'mysql',
        'database_name' => 'zs',
        'server' => '127.0.0.1',
        'username' => 'root',
        'password' => 'zwt12345',
        'port' => 3306,
        'charset' => 'utf8',
        'prefix'  => 'zscrm_'
    ]);

	if(!$db){
		echo "数据库无法连接，请稍后...";
	}
	
	$app=$db->get('config','*');
	
	define('APPNAME',$app['appname']);
	define('VERSION',$app['version']);
	define('PSIZE',10);

	define('SMSACCOUNT','zhishangkuaiji');
	define('SMSPWD',strtoupper(md5('zskj123456')));
	define('SMSEXTEND',4444);

	// sms
	// 账号zhishangkuaiji
	// 密码zskj123456 密码需要32位大写MD5加密
	// extend=4444

	$GLOBALS['flag'] = 0;
	$GLOBALS['msg'] = '';
	$GLOBALS['data'] = array();

    $GLOBALS['domain'] = 'localhost';
    $GLOBALS['home'] = 'http://localhost/work/wap/login.php';
	/*$GLOBALS['domain'] = 'wap.cw2009.com';
	$GLOBALS['home'] = 'http://wap.cw2009.com/login.php';*/

	if($app['appstatus']==1){
		header('Location:close.php');
	}

?>