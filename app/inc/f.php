<?php
	
	// 返回JSON函数
	function callbackjson($flag,$msg,$data){
		
		$api_data = array(
			'flag'=>$flag,
			'msg'=>$msg,
			'data'=>$data
		);
	    echo(json_encode($api_data));
	}
	
    //获取当前用户的权限列表
	function hasauthority($num){
		global $db;
		$mobile = $_COOKIE['mobile'];
			$u = $db->get('member',['authority'],['mobile'=>$mobile]);//获取登录用户信息
			$u_authority = $u['authority'];
			$array = explode(',',$u_authority);
			if(in_array($num,$array)){
				return true;
			}else{
				return false;
			}
		
	}

    //获取目录用户的权限列表
	function getauthority($sid,$num){
		global $db;
		$mobile = $_COOKIE['mobile'];
		$u = $db->get('member',['authority'],['id'=>$sid]);//获取登录用户信息
		$u_authority = $u['authority'];
		$array = explode(',',$u_authority);
		if(in_array($num,$array)){
			return true;
		}else{
			return false;
		}
	}

	//分页
	function paging($count,$size,$thisp,$url,$where){
		if($count>=$size){
		$ps=ceil($count/$size);
		$p1=$thisp-1;
		$p2=$thisp-2;
		$n1=$thisp+1;
		$n2=$thisp+2;

		$tpl="<a href='$url?p=1$where'>&lt;&lt; 最前页</a>";
					if($p1>=1){$tpl.="<a href='$url?p=$p1$where'>&lt; 上页</a>";}
					if($p2>=1){$tpl.="<a href='$url?p=$p2$where'>$p2</a>";}
					if($p1>=1){$tpl.="<a href='$url?p=$p1$where'>$p1</a>";}
					$tpl.="<a  class='active'>$thisp</a>";
					if($n1<=$ps){$tpl.="<a href='$url?p=$n1$where'>$n1</a>";}
					if($n2<=$ps){$tpl.="<a href='$url?p=$n2$where'>$n2</a>";}
					if($n1<=$ps){$tpl.="<a href='$url?p=$n1$where'>下页 &gt;</a>";}
					$tpl.="<a href='$url?p=$ps$where'>最后页 &gt;&gt;</a>";
					$tpl.="&nbsp;&nbsp;&nbsp;&nbsp;第 $thisp 页/总 $ps 页，总计 $count 条纪录";
		
		echo "<div class='list-pagging' onclick='toTop();'>".$tpl."&nbsp;&nbsp;跳转到：<select onchange='window.location.href = this.value;'>";
		for($i=1;$i<=$ps;$i++){
			if($i==$thisp){
				echo "<option value='$url?p=$i$where' selected = 'selected'>".$i."</option>";
			}else{
				echo "<option value='$url?p=$i$where'>".$i."</option>";
			}
		}
		
		echo "</select> 页</div>";
		}
	}

	//wlog 操作记录
	function wlog($type,$logtype,$logtext){
		global $db,$ip;
		 
	    if (getenv("HTTP_CLIENT_IP"))  
	        $ip = getenv("HTTP_CLIENT_IP");  
	    else if(getenv("HTTP_X_FORWARDED_FOR"))  
	        $ip = getenv("HTTP_X_FORWARDED_FOR");  
	    else if(getenv("REMOTE_ADDR"))  
	        $ip = getenv("REMOTE_ADDR");  
	    else $ip = "Unknow"; 

		$log = $db->insert("wlog", [
				"type" => $type,
				"memberid" => $_COOKIE['uid'],
				"logtype" => $logtype,
				"logtext" => $logtext,
				"ip" => $ip,
				"creattime" => date('Y-m-d H:i:s')
		]);
		if($log){
			return true;
		}else{
			return false;
		}
	}

	//微信端操作记录 runid
    function wxlog($type,$logtype,$logtext,$runid){
        global $db,$ip;

        if (getenv("HTTP_CLIENT_IP"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if(getenv("HTTP_X_FORWARDED_FOR"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if(getenv("REMOTE_ADDR"))
            $ip = getenv("REMOTE_ADDR");
        else $ip = "Unknow";

        $log = $db->insert("wlog", [
            "type" => $type,
            "memberid" => $runid,
            "logtype" => $logtype,
            "logtext" => $logtext,
            "ip" => $ip,
            "creattime" => date('Y-m-d H:i:s')
        ]);
        if($log){
            return true;
        }else{
            return false;
        }
    }

    //登陆日志
	function wlog_login($m,$type,$logtype,$logtext){
		global $db,$ip;
		 
	    if (getenv("HTTP_CLIENT_IP"))  
	        $ip = getenv("HTTP_CLIENT_IP");  
	    else if(getenv("HTTP_X_FORWARDED_FOR"))  
	        $ip = getenv("HTTP_X_FORWARDED_FOR");  
	    else if(getenv("REMOTE_ADDR"))  
	        $ip = getenv("REMOTE_ADDR");  
	    else $ip = "Unknow"; 

		$log = $db->insert("wlog", [
				"type" => $type,
				"memberid" => $m,
				"logtype" => $logtype,
				"logtext" => $logtext,
				"ip" => $ip,
				"creattime" => date('Y-m-d H:i:s')
		]);
		if($log){
			return true;
		}else{
			return false;
		}
	}

	//短信发送
	function pushSMS($mobile,$text,$uid,$model,$type){
		global $db;
		$app=$db->get('config','*');
		if($app['smsstatus']==0){
			$posttime = date('Y-m-d H:i:s');
			if($uid){
				$uid = $uid;
			}else{
			    $uid = $_COOKIE['uid'];
            }
			$text = $text;
			
			//查询余额
			$getSMSbalance = getSMSbal();
			//发送短信
			if($getSMSbalance > 0){
				
				//$uri = 'http://hy.junlongtech.com:8086/getsms?username='.SMSACCOUNT.'&password='.SMSPWD.'&mobile='.$mobile.'&content='.$text.'&extend='.SMSEXTEND;
				$uri = 'http://hy.junlongtech.com:8086/getsms';
				$data = array(
					"username" => SMSACCOUNT,
					"password" => SMSPWD,
					"mobile" => $mobile,
					"content" => $text,
					"extend" => SMSEXTEND,
					"level"=>1
					);
				$header = array(
		            'Content-Type: application/x-www-form-urlencoded;charset=utf-8',
		        );
				//$pushSMS = file_get_contents($uri);
				$ch = curl_init();
			    //设置选项，包括URL
			    curl_setopt($ch, CURLOPT_URL, $uri);
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			    curl_setopt($ch, CURLOPT_HEADER, 0);
			    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			    curl_setopt($ch,CURLOPT_TIMEOUT,3); 
			     // POST数据
			    curl_setopt($ch, CURLOPT_POST, 1);
			    // 把post的变量加上
			    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
			    //执行并获取url地址的内容
			    $output = curl_exec($ch);
			    $errorCode = curl_errno($ch);
			    //释放curl句柄
			    curl_close($ch);

				$db->insert('sms_log',[
						"mobile" => $mobile,
						"uid" => $uid,
						"text" => $text,
						"posttime" => $posttime,
						"type" => $type,
						"apiback" => $output,
						"model" => $model,
						"status" => 0
					]);
				return true;
				//需要按返回进行处理。
			}else{
				$db->insert('sms_log',[
						"mobile" => $mobile,
						"uid" => $uid,
						"text" => $text,
						"posttime" => $posttime,
						"type" => $type,
						"model" => $model,
						"status" => 1
					]);
				return false;
			}
		}
	}

	//获取短信余额
	function getSMSbal(){
		$a = file_get_contents('http://hy.junlongtech.com:8087/hyWeb/getbalance?username='.SMSACCOUNT.'&password='.SMSPWD);
		return $a;
	}

	//判断是否序列化
	function is_serialized($data) {
		$data = trim($data);
		if ('N;' == $data) return true;
		if (!preg_match('/^([adObis]):/', $data, $badions)) return false;
		switch ($badions[1]) {
		case 'a':
		case 'O':
		case 's':
			if (preg_match("/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $data)) return true;
			break;
		case 'b':
		case 'i':
		case 'd':
			if (preg_match("/^{$badions[1]}:[0-9.E-]+;\$/", $data)) return true;
			break;
		}
		return false;
	}

	//根据id获取员工信息
	function getstaffx($id){
		global $db;
		$x = $db->get('member','*',['id'=>$id]);
		if($x){
			return $x;
		}else{
			return false;
		}
	}

    //根据手机号获取员工信息
	function getstaffxm($id){
		global $db;
		$x = $db->get('member','*',['mobile'=>$id]);
		if($x){
			return $x;
		}else{
			return false;
		}
	}

	//根据id获取客户信息
	function getCustomx($id){
		global $db;
		$x = $db->get('customs','*',['id'=>$id]);
		if($x){
			return $x;
		}else{
			return false;
		}
	}

	//获取答案条数
	function getqareply($id){
		global $db;
		$x = $db->count('qa_reply',['qaid'=>$id]);
		return $x;
	}

	//指定员工的签单量
	function getSatffdayOrder($id,$start,$end){
		global $db;
		if($id==''){
			$num = $db->count('contracts',['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);
		}else{
			$num = $db->count('contracts',['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'ywuid' => $id,
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);
		}
		
		if($num > 0){
			return $num;
		}else{
			return '';
		}
	}

	//指定类型的签单量
	function getSatffdayOrderCate($uid,$cid,$start,$end){
		global $db;
		if($cid >= 8){
			$cid = 3;
		}else{
			$cid = $cid;
		}
		if($uid==''){
			$num = $db->count('contracts',['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'type' => $cid,
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);
		}else{
			$num = $db->count('contracts',['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'type' => $cid,
				'ywuid' => $uid,
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);
		}
		
		
		if($num > 0){
			return $num;
		}else{
			return 0;
		}
	}

	//指定员工的签单量-合同款
	function getSatffdayOrderMT($id,$start,$end){
		global $db;
		if($id==''){
			$num = $db->sum('contracts',['money_total'],['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);
		}else{
			$num = $db->sum('contracts',['money_total'],['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'ywuid' => $id,
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);

			// $s = $db->select('contracts',['money_total'],['AND'=>[
			// 	'status'=>[1,2,3,4,5,7],
			// 	'ywuid' => $id,
			// 	'creattime[>]'=>$start,
			// 	'creattime[<]'=>$end
			// ]]);

			// print_r($s);
		}

		if($num > 0){
			return $num;
		}else{
			return '';
		}
	}

	//指定员工的签单量-预收款
	function getSatffdayOrderMB($id,$start,$end){
		global $db;
		if($id==''){
			$num = $db->sum('contracts',['money_ok'],['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);
		}else{
			$num = $db->sum('contracts',['money_ok'],['AND'=>[
				'status'=>[1,2,3,4,5,7],
				'ywuid' => $id,
				'creattime[>]'=>$start,
				'creattime[<]'=>$end
			]]);
		}

		if($num > 0){
			return $num;
		}else{
			return '';
		}
	}

	//获取分公司名
	function getsubcX($id){
		global $db;
		$x = $db->get('member_subcompany','*',['id'=>$id]);
		return $x['subcompanyname'];
	}

	//获取部门
	function getdepaX($id){
		global $db;
		$x = $db->get('member_department','*',['id'=>$id]);
		return $x['departmentname'];
	}

	//endtime_3.php页统计总金额
	function getcqccount($executor){
        global $db,$executor;
		$dayjia60 = date('Y-m-d', strtotime(' +60 day'));
        if ($executor!=0) {
            $c = $db->sum('contracts', ['money_total'], ['AND' => [
                'type'=>1,
                'status' => 5,
                'status[!]' => [6,7],
                'end_day[<=]' => $dayjia60,
                'end_day[!]' => ['0000-00-00', NULL],
                'contracts.runmember' => $executor,
            ]]);
        }else{
            $c = $db->sum('contracts', ['money_total'], ['AND' => [
                'type'=>1,
                'status' => 5,
                'status[!]' => [6,7],
                'end_day[<=]' => $dayjia60,
                'end_day[!]' => ['0000-00-00', NULL],
            ]]);
        }
		return $c;
	}

	//endtime_2.php页统计总金额
	function getcqccount2($executor){
		global $db,$executor;
		$dayjia60 = date('Y-m-d', strtotime(' +60 day'));
		if ($executor!=0){
            $c = $db->sum('contracts',['money_total'],['AND'=>[
                'type'=>1,
                'zq[<=]' => $dayjia60,
                'zq[!]' => ['0000-00-00',NULL],
                'status[!]' => [6,7],
                'contracts.runmember' => $executor,
            ]]);
        }else{
            $c = $db->sum('contracts',['money_total'],['AND'=>[
                'type'=>1,
                'zq[<=]' => $dayjia60,
                'zq[!]' => ['0000-00-00',NULL],
                'status[!]' => [6,7],
            ]]);
        }
		return $c;
	}

	//contracts_nopayend.php页统计总金额用
    function getcqccount3($subcompany){
        global $db,$subcompany;
        if ($subcompany!=0){
            $d = $db->sum('contracts',['money_total'],[
                'AND'=>[
                    'contracts.ywoid' => $subcompany,
            ]]);
            $b = $db->sum('contracts',['money_ok'],[
                'AND'=>[
                    'contracts.ywoid' => $subcompany,
                ]]);
        }else{
            $d = $db->sum('contracts','money_total');
            $b = $db->sum('contracts','money_ok');
        }
        return $d-$b;
    }

    //contract.php页统计总金额
    function getcqccount4($cmd,$utype,$subcompany,$type,$salesman,$executor,$status,$paytype){
        global $db,$cmd,$utype,$subcompany,$type,$salesman,$executor,$status,$paytype;
        if ($cmd == 'contract_filter'){
            if ($executor!=0){
                $d = $db->sum('contracts',['money_total'],[
                    'AND'=>[
                        "contracts.utype" 	    => $utype,
                        "contracts.ywoid" 	    => $subcompany,
                        "contracts.status" 	    => $status,
                        "contracts.paytype"     => $paytype,
                        "contracts.type" 	    => $type,
                        "contracts.ywuid" 	    => $salesman,
                        "contracts.runmember" 	=> $executor,
                    ],
                ]);
            }else{
                $d = $db->sum('contracts',['money_total'],[
                    'AND'=>[
                        "contracts.utype" 	    => $utype,
                        "contracts.ywoid" 	    => $subcompany,
                        "contracts.status" 	    => $status,
                        "contracts.paytype"     => $paytype,
                        "contracts.type" 	    => $type,
                        "contracts.ywuid" 	    => $salesman,
                    ],
                ]);
            }
        }else{
            $d = $db->sum('contracts','money_total');
        }
        return $d;
    }

    // 说明：获取完整URL
    function curPageURL()
    {
        $pageURL = 'http';

        if ($_SERVER["HTTPS"] == "on")
        {
            $pageURL .= "s";
        }
        $pageURL .= "://";

        if ($_SERVER["SERVER_PORT"] != "80")
        {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        }
        else
        {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    //微信CURL
    function https_request($url,$data)
    {
        // curl 初始化
        $curl = curl_init();
        if ($url==''){
            //微信模板发送url
            $url = 'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=' . Token::getToken();
        }

        // 设置参数
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($curl);
        return $res;

    }

    //微信TOken自动加载
    function __autoload($className)
    {
        if (file_exists('./' . $className . '.php')) {
            include './' . $className . '.php';
        }
    }





