<?php
    $link = mysql_connect("localhost","mixa","mixa");
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
    mysql_select_db('temp') or die(' not db ');
    $result = mysql_query("SELECT id FROM `baneer`") or die(' not query: ' . mysql_error());
    
    while ($row = mysql_fetch_assoc($result)){
        $res = mysql_query("SELECT * FROM `baneer`");
        $arr = mysql_fetch_assoc($res); 
        $banners[] = $arr;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <table id="table_banner">
        <tr>
            <th>Id</th>
            <th>Name banner</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach($banners as $banner): ?>
        <tr>
            <td>
                <?php echo $banner['id'];?>
            </td>
            <td>
                <?php echo htmlspecialchars($banner['name']);?>
            </td>
            <td><a href="edit.php?id=<?php echo $banner['id'];?>"><img src="images/Documents%20Edit%202.png" alt=""></a></td>
            <td><a href=""><img src="images/Documents%20Delete.png" alt=""></a></td>       
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>