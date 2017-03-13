<?php
	// 判断是否登录
	if(!isset($_COOKIE['mobile']) || $_COOKIE['mobile'] == ''){
		header('Location:login.php');
	}else{
		$mobile = $_COOKIE['mobile'];
		$u = $db->get('member',[
			"[>]member_subcompany" => ["subcompany"=>"id"],
			"[>]member_department" => ["department"=>"id"],
			"[>]member_position" => ["position"=>"id"]
		],'*',['mobile'=>$mobile]);//获取登录用户信息
		
		$u_name = $u['name'];
		$u_subcompanyname = $u['subcompanyname'];
		$u_departmentname = $u['departmentname'];
		$u_positionname = $u['positionname'];
		$u_authority = $u['authority'];//用户权限列表

		$ismanager = $u['ismanager'];
	}
?>