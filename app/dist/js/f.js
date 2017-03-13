function islogin(){
	var storage = window.localStorage;  
    var uid = storage["uid"]; 
    var userxm = storage["userxm"];
    console.log('Uid Logined:' + uid + ' / ' + userxm);
    //$.alert(userxm);
    if(uid==undefined || uid==''){
    	window.location = 'login.html';
    	return false;
    }else{
    	$('.uxb').text(userxm);
    }
    return uid;
}

function logout(){
	$.confirm('您确定要退出登录吗？','提示',function(){
		var storage = window.localStorage;  
	    storage.clear();
		window.location = 'login.html';
	},function(){
	});
}

function getuuid(){
	var storage = window.localStorage;  
    var uuid = storage["uuid"]; 
    if(uuid == undefined || uuid==''){
    	storage["uuid"] = 'TEDC2-23D34-223D34-23VED-23AS3';
    }else{
    	uuid = storage["uuid"];
    }
	$('.uuid').text(uuid);
	$('.uuid_s').text(uuid.substr(0,4)+'***'+uuid.substr(-4,4));
}

//获取网址参数
function GetQueryString(name){
   var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
   var r = window.location.search.substr(1).match(reg);
   if(r!=null)return  unescape(r[2]); return null;
}

