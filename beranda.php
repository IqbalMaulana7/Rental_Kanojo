<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="">Home</a></li>
        <?php
        $level = $_SESSION['level'] == 'admin';
        if($level){
        ?>
        <?php header('location:side.php');?>
        <?php }else{ ?>
            <?php header('location: /Projek_Kanojo/Home.php');?>
            <?php } ?>

        </ul>
</body>
</html>