<?php
session_start();
$conn = mysqli_connect('localhost','root','','db_school') or die ('Unable to connect');
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
    <h2> Please Login</h2>
    <div>
<form action = "mencoba.php" method ="post">
<input type = "text" class = "field" name = "Username" placeholder = "Username" required= ""><br/>
<input type = "password" class = "field" name = "Pass" placeholder = "Password" required= ""><br/>
<input type = "submit" class = "field" name = "login" value ="Login"><br/>
</form>
</div>
<?php
if (isset($_POST['login'])){
    $Username = $_POST['Username'];
    $Pass = $_POST['Pass'];
$select = mysqli_query($conn, "select * from tb_student where Username = '$Username' AND Pass = '$Pass' ");
$row = mysqli_fetch_array($select);

if(is_array($row)){
    $_SESSION["Username"] = $row ['Username'];
    $_SESSION["Pass"] = $row ['Pass'];}
    else{
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password");';
        echo 'window.location.href = "mencoba.php"';
        echo '</script>';
    }
}

if(isset($_SESSION["Username"])){
    header("Location:mencoba_login.php");
}
?>
</body>
</html>