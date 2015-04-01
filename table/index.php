<?php
    $link = mysql_connect("localhost","mixa","mixa");
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
    echo "Success connect";
    mysql_select_db('temp') or die(' not db ');
    $result = mysql_query("SELECT id FROM `baneer`") or die(' not query: ' . mysql_error());
    
    for($i =1; $row = mysql_fetch_assoc($result); $i++){
        $res = mysql_query("SELECT id, name FROM `baneer` WHERE `id`= '$i'") or die(' not query: ' . mysql_error());
        $arr = mysql_fetch_assoc($res); 
        $banners[$i - 1] = $arr;
    }
    
    mysql_close($link);
    // $banners = array( array('id' => 1, 'name' => "Banner 1" ), array ( 'id' => 2, 'name' =>  "Banner 2"), array ( 'id' => 3, 'name' =>  "Banner 3"), array ( 'id' => 4, 'name' =>  "Banner 4"), array ( 'id' => 5, 'name' =>  "Banner 5"));
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
        <?php foreach($banners as $key => $value){ ?>
        <tr>
           <?php foreach ($value as $k => $v) {
                    if ($k == 'id'){
                        echo "<td>";
                        echo htmlspecialchars($v);}
                        echo "</td>";
                    if ($k == 'name'){
                        echo "<td>";
                        echo htmlspecialchars($v);}
                        echo "</td>";
                         } ?>
            <td><a href="edit.php"><img src="images/Documents%20Edit%202.png" alt=""></a></td>
            <td><a href=""><img src="images/Documents%20Delete.png" alt=""></a></td>       
        </tr>
        <?php   } ?>
    </table>
</body>
</html>