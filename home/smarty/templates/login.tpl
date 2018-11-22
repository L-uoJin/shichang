<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	<link rel="stylesheet" href="css/jigsaw.css">
<style>
#msg {
  width: 100%;
  line-height: 40px;
  font-size: 14px;
  text-align: center;
}
</style>
</head>
<body>
	<div class="jq22-container" style="padding-top:100px">
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">登录</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">注册</label>
			<div class="login-form">
				<form>
				<div class="sign-in-htm">
					<div class="group">
						<label for="username" class="label">用户名</label>
						<input id="username" name="username" value="admin" type="text" class="input">
					</div>
					<div class="group">
						<label for="password" class="label">密码</label>
						<input id="password" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<div class="container">
							<div id="captcha" style="position: relative" data-type="password"></div>
							<div id="msg"></div>
						</div>
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> 保持登录</label>
					</div>						
					<div class="group">
						<input type="button" class="button" value="登录" onClick="sub()">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">忘记密码?</a>
					</div>
				</div>
				</form>
				<form>
				<div class="sign-up-htm">
					<div class="group">
						<label for="users" class="label">用户名</label>
						<input id="users" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">输入密码</label>
						<input id="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="passs" class="label">确认密码</label>
						<input id="passs" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="email" class="label">邮箱地址</label>
						<input id="email" type="text" class="input">
					</div>
					<div class="group">
						<input type="button" class="button" value="注册" id="btn">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">已经成员?</a>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="js/jigsaw.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/reglogin.js">
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
</div>
</body>
</html>