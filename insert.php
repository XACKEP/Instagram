<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'main_sasha');
	$query = mysqli_query($connect, "SELECT * FROM post INNER JOIN instagram ON post.inst_id = instagram.id");
	$query2 = mysqli_query($connect, "INSERT INTO post(p_img, p_text, inst_id) VALUES ('images/" . $_FILES['img']['name'] ."', '" . $_POST['p_text'] . "','" . $_POST['id'] . "')");
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);	
	header('Location: http://aaaapple/instagram/post.php?id=' . $_POST['id']) ;
	?>