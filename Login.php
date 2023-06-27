<?php
function encryptMessage($plain)
{
    $n = 2581;
    $l = ceil(log($n, 2));
    $e = 2399;

    $plain_byte = utf8_encode($plain);
    $cipher_binary = "";
    for ($i = 0; $i < strlen($plain_byte); $i++) {
        $x = bcpowmod(ord($plain_byte[$i]), $e, $n);
        $cipher_binary .= str_pad(decbin($x), $l, "0", STR_PAD_LEFT);
    }
    while (strlen($cipher_binary) % 8 > 0) {
        $cipher_binary .= "0";
    }

    $cipher_byte = "";
    for ($i = 0; $i < strlen($cipher_binary); $i += 8) {
        $tmp = substr($cipher_binary, $i, 8);
        $tmp = bindec($tmp);
        $cipher_byte .= chr($tmp);
    }
    $cipher_base64 = base64_encode($cipher_byte);
    return $cipher_base64;
}
require_once("databases/connection.php");
include("konek.php");
if (isset($_POST['register'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = encryptMessage($_POST["password"]);
    $email = encryptMessage(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));

    // Mengenkripsi password dan email sebelum menyimpan ke database


    $sqlnya = "SELECT * FROM user WHERE username = :username";
    $stmt = $db->prepare($sqlnya);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty($row)) {
        echo '<script type = "text/javascript">';
        echo 'alert("Created Account Failed!");';
        echo 'window.location.href = "Login.php"';
        echo '</script>';
    } else {
        $sql = "INSERT INTO user (username, email, password) 
                VALUES (:username, :email, :password)";
        $stmt = $db->prepare($sql);

     $params = array(
            ":username" => $username,
            ":password" => $password,
            ":email" => $email
        );

        $saved = $stmt->execute($params);

        if ($saved) {
            header("Location: Login.php");
            echo '<script type = "text/javascript">';
            echo 'alert("Account Successfully Created!");';
            echo 'window.location.href = "Login.php"';
            echo '</script>';
        }
    }
}

if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = ($_POST["password"]);
    $encrypted_password = encryptMessage($password);
    $sql = "SELECT * FROM user WHERE username=:username";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($encrypted_password == $user["password"]) {
            session_start();
            if ($username == 'admin') {
                $_SESSION["admin"] = true;
                header("Location: Data_pemesanan.php");
            } else   {
                $_SESSION["user"] = true;
                header("Location: Home.php");
            }
            
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid Username or Password");';
            echo 'window.location.href = "Login.php"';
            echo '</script>';
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Username or Password");';
        echo 'window.location.href = "Login.php"';
        echo '</script>';
    }
    
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    
    <head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/Login.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" id="signup" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input class="form-control" type="text" name="username" placeholder="Username" required/>
			<input class="form-control" type="email" name="email" placeholder="Email" required/>
			<input class="form-control" type="password" name="password"placeholder="Password" required/>
			<button type="submit" name="register">Sign Up</button>
		</form>
	</div>


	<div class="form-container sign-in-container">
		<form action="" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input class="form-control" type="text" name="username" placeholder="Username" required/>
			<input class="form-control" type="password" name="password"placeholder="Password" required/>
			<a href="forgot.php">Forgot your password?</a>
			<button type="submit" name="login">Sign In</button>
		</form>
	</div>


	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal details</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hi There!</h1>
				<p>Enter your personal details to open an account with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="javascript/Login.js" charset="utf-8"></script>
</body>

</html>