<?php
    $banners = array("Banner 1", "Banner 2", "Banner 3", "Banner 4", "Banner 5");
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
            <td><?=$key ?></td>
            <td><?=$value ?></td>
            <td><a href="edit.php"><img src="images/Documents%20Edit%202.png" alt=""></a></td>
            <td><a href=""><img src="images/Documents%20Delete.png" alt=""></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>