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
  