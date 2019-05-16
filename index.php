<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
	body{
		background:lightgrey;
	}
	.form{
		background:white;
		padding-left:50px;
		padding-right:50px;
		padding-top: 80px;
	}
	.btn{
		color: white;
		padding-left: 42px;
		padding-right: 42px;
	}
	.title{
		font-size: 15px
	}
</style>
<div class="container d-flex" style="padding-left:400px; box-sizing:border-box; padding-top:200px;">
	<div>
		<img src="images/inst.png" height="550px" class="d-block" style="margin-left:-310px">
	</div>
<form action="registration.php" method="POST" class="form">
	<img src="images/logo.png" height="65px">
	<div>
		<input type="" name="email" placeholder="email">
	</div>
	<div>
		<input type="" name="name" placeholder="name">
	</div>
	<div>
		<input type="" name="login" placeholder="login">
	</div>
	<div>
		<input type="hidden" name="img" value="images/tf2.jpg">
	</div>
	<div>
		<input type="password" name="pass" placeholder="password">
	</div>
	<div>
		<button class="btn btn-primary">Регистрация</button>
	</div>
	<div>
		<p class="d-flex"><h3 class="title">Есть аккаунт? </h3><a href="autorization.php">Вход</a></p>
	</div>
</form>
</div>
</body>
</html>