function checkNull(form){
	if(form.uname.value == ""){
		alert('用户名不能为空！');
		form.uname.focus();
		return false;
	}else if(form.ulpwd1.value == ""){
		alert('密码不能为空！');
		form.ulpwd1.focus();
		return false;
	}else if(form.ulpwd2.value == ""){
		alert('密码不能为空！');
		form.ulpwd2.focus();
		return false;
	}else if(form.utel.value == ""){
		alert('电话不能为空！');
		form.utel.focus();
		return false;
	}else if(form.uemail.value == ""){
		alert('邮箱不能为空！');
		form.uemail.focus();
		return false;
	}else if(form.uaddress.value == ""){
		alert('地址不能为空！');
		form.uaddress.focus();
		return false;
	}else if(form.utruename.value == ""){
		alert('真实姓名不能为空！');
		form.utruename.focus();
		return false;
	}else if(form.uquestion.value == ""){
		alert('密保问题不能为空！');
		form.uquestion.focus();
		return false;
	}else if(form.uanswer.value == ""){
		alert('密保答案不能为空！');
		form.uanswer.focus();
		return false;
	}else{
		form.submit();
	}
	
}

function checkName(str){
	var xmlhttp;
	if (str.length==0){ 
  		document.getElementById("isexist").innerHTML="";
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
    			document.getElementById("isexist").innerHTML="用户名可用！";
			}else{
				document.getElementById("isexist").innerHTML="用户名已存在！";
			}
    	}
  	}
	xmlhttp.open("GET","../php/checkuName.php?uname="+str,true);
	xmlhttp.send();
}

function checklPwd(form){ 
	if(form.ulpwd1.value != "" && form.ulpwd2.value != ""){
		if(form.ulpwd1.value.length < 6 || form.ulpwd2.value.length < 6){
			document.getElementById("islequal").innerHTML="密码长度不能低于6位！";
		}else if(form.ulpwd1.value == form.ulpwd2.value){
			document.getElementById("islequal").innerHTML="密码一致！";
		}else{
			document.getElementById("islequal").innerHTML="密码不一致！";
		}
	}
}


function checkPhone(str){ 
	var str1 = /^1(3|4|5|7|8)\d{9}$/;
	if(str != ""){
		if(!(str1.test(str))){ 
       		document.getElementById("isCoNumber").innerHTML="手机号有误！"; 
    	}else{
			document.getElementById("isCoNumber").innerHTML="手机号正确！";
		}
	}
}

function checkEmail(str){ 
	var str1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(str != ""){
    	if(!(str1.test(str))){ 
        	document.getElementById("isCoEmail").innerHTML="邮箱有误！";
    	}else{
			document.getElementById("isCoEmail").innerHTML="邮箱正确！";
		}
	}
}
