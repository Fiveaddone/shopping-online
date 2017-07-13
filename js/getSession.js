function getSession(str){

	var xmlhttp;
	var isse=false;
	var response;
	if(str == null){
		return;
	}
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}else{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function(){
 		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			isse=true;
			
			response = xmlhttp.responseText;
    	
    	}
  	}
	xmlhttp.open("GET","../php/getSession.php?index="+str,false);
	xmlhttp.send();
	if(isse){
		return response;
	}
}