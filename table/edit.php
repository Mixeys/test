<?php 
echo "hello";
$link = mysql_connect("localhost","mixa","mixa");
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
mysql_select_db('temp') or die(' not db ');
$id = $_GET['id'];
$res = mysql_query("SELECT `name`, `on_off`, `page`, `dt_start`, `dt_end`, `min_page`, `comment` FROM `baneer` WHERE id = '$id'");
var_dump($res);
$row = mysql_fetch_assoc($res);
var_dump($row);    
    
if(isset($_POST['save'])){
	$label = $_POST['label'];
	$on_off = $_POST['on_off'];
	$page = implode(" , ",$_POST['page']);
	$dt_start = strtotime($_POST['dt_start']);
	$dt_start_new = date("Y-m-d H:i:s", $dt_start);
	$dt_end = strtotime($_POST['dt_end']);
	$dt_end_new = date("Y-m-d H:i:s", $dt_end);
	$min_page = (int) $_POST['min_page'];
	$comment = $_POST['comment'];
	mysql_query("UPDATE `baneer` SET `name`= '$label',`on_off`= '$on_off',`page`= '$page',`dt_start`= '$dt_start_new',`dt_end`= '$dt_end_new',`min_page`= '$min_page',`comment`= '$comment' WHERE id = '$id'");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	<form method="post" action="edit.php" name="my_form" id="formBanner">
		<p>Название :</p><br>
		<input type="text" name="label" value="<?php echo $row['name'];?>"><span style="color:red" id="ban"></span><br>
		<p>Включить или выключить баннер :</p><br>
		<p><input type="radio" name="on_off" value="On" checked>Вкл.</p><br> 
		<p><input type="radio" name="on_off" value="Off">Выкл.</p><br>
		<p>Страницы для отображения баннера :</p><br>
		<select name="page[]" size="3" multiple>
			<option selected value="index">Главная страница</option>
			<option  value="goods">Страница товара</option>
			<option  value="search">Страница поиска</option>
			<option  value="category">Страница категорий</option>
			<option  value="contacts">Страница контактов</option>
		</select><br>
		<p>Дата и время отображения баннера(начало и конец) :</p><br>
		<p>Начало :<input type="text" name="dt_start" value="<?=$row['dt_start'];?>">
		Конец  :<input type="text" name="dt_end" value="<?=$row['dt_end'];?>"></p><br>
		<p>Минимальное количество просмотров страницы : </p><br>
		<select name="min_page" size="1">
			<option value="0" selected>0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select><br>
		<p>Комментарий :</p><Br>
   		<textarea name="comment" cols="40" rows="3" value="<?=$row['comment'];?>"></textarea><br>
	    <div class="form-actions">
		    <button type="save" class="btn btn-primary">Сохранить</button>
		    <button type="button" class="btn">Очистить</button>
    	</div>
	</form>
</body>
</html>