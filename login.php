<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'main_sasha');
	$query = mysqli_query($connect, "SELECT * from instagram where login = '" . $_POST['login'] . "' and  pass = '" . $_POST['pass'] . "'");
	$result = $query->fetch_assoc();
	if($query->num_rows != 0){
    header('Location: http://aaaapple/instagram/post.php?id=' . $result['id']);
	} else{
    header("Location: http://aaaapple/instagram/autorization.php?text=Данного пользователя не существует или введён неверный пароль");
}
 ?>