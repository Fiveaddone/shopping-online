function checksNull(form){
	if(form.sname.value == ""){
		alert('用户名不能为空！');
		form.sname.focus();
		return false;
	}else if(form.spwd1.value == ""){
		alert('密码不能为空！');
		form.spwd1.focus();
		return false;
	}else if(form.spwd1.value == ""){
		alert('密码不能为空！');
		form.spwd2.focus();
		return false;
	}else if(form.stel.value == ""){
		alert('电话不能为空！');
		form.stel.focus();
		return false;
	}else if(form.semail.value == ""){
		alert('邮箱不能为空！');
		form.semail.focus();
		return false;
	}else if(form.struename.value == ""){
		alert('真实姓名不能为空！');
		form.struename.focus();
		return false;
	}else if(form.squestion.value == ""){
		alert('密保问题不能为空！');
		form.squestion.focus();
		return false;
	}else if(form.sanswer.value == ""){
		alert('密保答案不能为空！');
		form.sanswer.focus();
		return false;
	}else{
		form.submit();
	}
	
}

function checksName(str){
	var xmlhttp;
	if (str.length==0){ 
  		document.getElementById("issexist").innerHTML="";
 		return;
  	}
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}else{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function(){
 		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if(xmlhttp.responseText == 0){
    			document.getElementById("issexist").innerHTML="用户名可用！";
			}else{
				document.getElementById("issexist").innerHTML="用户名已存在！";
			}
    	}
  	}
	xmlhttp.open("GET","../php/checksName.php?sname="+str,true);
	xmlhttp.send();
}

function checksPwd(form){
	if(form.spwd1.value != "" && form.spwd2.value != ""){
		if(form.spwd1.value.length < 6 || form.spwd2.value.length < 6){
			document.getElementById("issequal").innerHTML="密码长度不能低于6位！";
		}else if(form.spwd1.value == form.spwd2.value){
			document.getElementById("issequal").innerHTML="密码一致！";
		}else{
			document.getElementById("issequal").innerHTML="密码不一致！";
		}
	}
}

function checksPhone(str){ 
	var str1 = /^1(3|4|5|7|8)\d{9}$/;
	if(str != ""){
		if(!(str1.test(str))){ 
       		document.getElementById("isCosNumber").innerHTML="手机号有误！"; 
    	}else{
			document.getElementById("isCosNumber").innerHTML="手机号正确！";
		}
	}
}

function checksEmail(str){ 
	var str1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(str != ""){
    	if(!(str1.test(str))){ 
        	document.getElementById("isCosEmail").innerHTML="邮箱有误！";
    	}else{
			document.getElementById("isCosEmail").innerHTML="邮箱正确！";
		}
	}
}

