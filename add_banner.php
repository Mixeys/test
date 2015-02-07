<?php
	error_reporting(-1);
	header('Content-Type:text/html; charset=utf-8');

	$link = mysqli_connect('localhost', 'mixa', 'mixa', 'temp');

	if(isset($_POST['submit'])){
		$label = $_POST['label'];
		$on_off = $_POST['on_off'];
		$page = implode(" , ",$_POST['page']);
		$dt_start = strtotime($_POST['dt_start']);
		$dt_start_new = date("Y-m-d H:i:s", $dt_start);
		$dt_end = strtotime($_POST['dt_end']);
		$dt_end_new = date("Y-m-d H:i:s", $dt_end);
		$min_page = (int) $_POST['min_page'];
		$comment = $_POST['comment'];
		var_dump($_POST);

		mysqli_query($link,"INSERT INTO `baneer`(`name`, `on_off`, `page`, `dt_start`, `dt_end`, `min_page`, `comment`) 
							VALUES ('$label', '$on_off', '$page', '$dt_start_new', '$dt_end_new', '$min_page', '$comment') ");
		mysqli_close($link);
		echo 'Баннер добавлен.';
	}



?>