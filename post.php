<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background:lightblue; font-family: Arial;">
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'main_sasha'); 
$query = mysqli_query($connect, "SELECT * FROM post INNER JOIN instagram ON post.inst_id = instagram.id  ORDER BY post.id DESC");
$query2 = mysqli_query($connect, "SELECT * from instagram where id = '" . $_GET['id'] . "'");
$logo2 = $query2->fetch_assoc();?>
<div class="container max-width-100">
<h2>Вы авторизовались как:</h2>
<div class="d-flex">
<?php echo '<img src="' . $logo2['img'] . '" style="height:100px; border-radius:200px;">'; ?>
<div class="ml-3">
<?php echo '<h2>' . $logo2['login'] . '</h2>'; ?>
<?php echo '<h5>' . $logo2['name'] . '</p>'; ?>
</div>
</div>
<div class="mt-4">
<h3>Создание постов</h3>
</div>
<form action="insert.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="img" class="">
	<input type="" name="p_text" placeholder="Введите текст">
		<?php echo '<input type="hidden" name="email" value="' . $logo2['email'] . '" placeholder="email">'?>
		<?php echo '<input type="hidden" name="name" value="' . $logo2['name'] . '" placeholder="name">'?>
		<?php echo '<input type="hidden" name="login" value="' . $logo2['login'] . '" placeholder="login">'?>
		<?php echo '<input type="hidden" name="pass" value="' . $logo2['pass'] . '" placeholder="password">'?>
		<?php echo '<input type="hidden" name="img" value="' . $logo2['img'] . '">'?>
		<?php echo '<input type="hidden" name="id" value="' . $logo2['id'] . '">'?>
	<button class="btn-primary btn-sm">Создать пост</button>
</form>
<div class="" style="margin-left: 150px; margin-top: 100px">
<h2>Записи пользователей</h2>
</div>
<div style="width:600px; box-sizing:border-box;" class="bg-info pl-5">
<?php
	for($i=0;$i<$query->num_rows; $i++){
		$logo = $query->fetch_assoc();
		echo '<div class="mt-5">';
		echo '<div style="display:flex"> <img src="' . $logo['img'] . '" height="50px" width="50px" style="border-radius:100px">';
		echo '<h2 style="margin-left:10px; font-family:Arial; margin-top:10px">' . $logo['login'] . '</h2> </div>';
		echo '<img src="' . $logo['p_img'] . '" style="height:300px;width:520px">';
		echo '<p style="font-size:20px; color:white">' . $logo['p_text'] . '</p>';
		echo '</div>';
	}
 ?>
</div>
</div>
</body>
</html>