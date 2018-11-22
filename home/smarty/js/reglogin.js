    var flag=false;	
	function sub(){
		var name=document.getElementById('username').value;
		var pass=document.getElementById('password').value;
		
		 $.ajax({
             url:'controller/chkname.php?name='+name+"&pass="+pass,
            type: "GET",
            dataType: "json",
            success: function (data) {
                if (data == 1||data==3) {
                   alert("登录失败");
                   	return false;
                }
                else if(data==2&&flag==true){
					alert("登录成功!")
						window.location.href="index.php";
                }
                else if(data==2&&flag==false){				
							alert("验证失败!")	
								return false;
					}
            },
            error: function () {
                alert("连接失败");
                return false;
            }
        });
			}
 	 jigsaw.init(document.getElementById('captcha'), function () {
  	 flag=true;
    document.getElementById('msg').innerHTML = '验证成功！'  
  })
  

  $("#btn").click(function(){
  var myreg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
     if($("#users").val()=="")
     	{
     		alert("请输入用户名");
     		return false;
     	}
     	if($("#pass").val()=="")
     	{
     		alert("请输入用户名");
     		return false;
     	}
     	if($("#passs").val()!=$("#pass").val())
     	{
     		alert("两次密码不一致");
     		return false;
     	}
                if ($("#email").val() =="") {
                    alert("Email不能为空！");
                    return false;
                }
                  var falg=$("#email").val().search(myreg)
               if(falg==-1)
               {
               	alert("Email格式不正确！");
                    return false;
               }

             $.ajax({
             url:'controller/reg_chk.php?name='+$("#users").val()+"&pass="+$("#pass").val()+"&email="+$("#email").val(),
            type: "GET",
            dataType: "json",
            success: function (data) {
                if (data==3) {
                   alert("注册失败");
                   return false;
                }
                else  if (data==1) {
                   alert("用户名占用");
                   return false;
                }
                else if(data==2){
					alert("注册成功!")
						window.location.href="login.php";
                }
            },
            error: function () {
                alert("连接失败");
                return false;
            }
        });
  })