<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit banner</title>
</head>
<body>
	<h2>Редактирование баннера</h2>
	<form method="post" action="" name="my_form">
		<p>Название :</p><br>
		<input type="text" name="label"><br>
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
		<p>Начало :<input type="datetime" name="dt_start">
		Конец  :<input type="datetime" name="dt_end"></p><br>
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
   		<textarea name="comment" cols="40" rows="3"></textarea><br>
  		<p><input type="submit" value="Редактирование">
   		<input type="reset" value="Очистить"></p>
	</form>
</body>
</html>