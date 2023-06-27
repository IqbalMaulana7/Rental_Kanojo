<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Home.css" />
    <title>Rental Pacar</title>
</head>
<style>

.panel-default{
  width:500px;
  background-color:pink;
  color:white;
}
.panel-default2{
  width:800px;
  background-color:pink;
  color:white;
}
.grid{
display:grid;
grid-template-columns: repeat(4,1fr);

margin: 10px 50px 10px 50px;
align-items:center;
grid-gap: 10px;}

#grid2{
display:grid;
grid-template-columns: repeat(2,1fr);
/* align-items:center; */
margin: 0px 50px 0px 50px;
/* grid-gap: 10px; */
}
.bar1{
  padding-top:65px
}
.bar2{
  padding-top:65px
}
table{
  margin-top:100px;
  margin-bottom:100px
}

.grid > article{
  width:183px;
	border: 2px solid black;

}
.img-area {
	background-color: black;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	min-height: 100vh;
	padding: 2px;
}
.slider .left-slide,.slider .right-slide{
  position: absolute;
  height: 40px;
  width: 40px;
  background-color: black;
  opacity: 50%;
  border-radius: 50%;
  color:#ffffff;
  font-size: 20px;
  top:50%;
  cursor: pointer;
  margin-top: 50px;
  text-align: center;
  line-height: 40px;
}

.slider{
    width: 1200px;
    height: auto;
}

.slider .left-slide{
	left: 30px;
}

.slider .right-slide{
	right: 30px;
}

.slider .slider-items .item img{
    box-shadow: 0px 10px black;
    opacity: 80%;
    width: 100%;
	display: block;
    height: 500px;
}

.slider .slider-items .item{
	display: none;
	position: relative;
}

.slider .slider-items .item.active{
	display: block;
}
.search a{
    font-size: larger;
}

.slider{
position: relative;
background: hsl(237, 100%, 4%);
width: auto;
height: 519px;
overflow: hidden;
border-radius: 10px;
}

.slider .slide{
position: absolute;
width: 100%;
height: 100%;
clip-path: circle(0% at 0 50%);
}

.slider .slide.active{
clip-path: circle(150% at 0 50%);
transition: 2s;
}

.slider .slide img{
position: absolute;
width: 100%;
height: 100%;
object-fit: cover;
}

.slider .slide .info h2{
font-size: 2em;
font-weight: 800;
}

.slider .slide .info p{
font-size: 1em;
font-weight: 400;
}

.navigation{
height: 500px;
display: flex;
align-items: center;
justify-content: space-between;
opacity: 0;
transition: opacity 0.5s ease;
}

.slider:hover .navigation{
opacity: 1;
}

.prev-btn, .next-btn{
width: 45px;
height: 60px;
z-index: 999;
font-size: 2em;
color: #222;
background: white;
padding: 10px 10px 10px 10px;
cursor: pointer;
opacity: 50%;
}

.prev-btn{
border-top-right-radius: 3px;
border-bottom-right-radius: 3px;
}

.next-btn{
border-top-left-radius: 3px;
border-bottom-left-radius: 3px;
}

.navigation-visibility{
z-index: 999;
display: flex;
justify-content: center;
}

.navigation-visibility .slide-icon{
z-index: 999;
background: rgba(255, 255, 255, 0.5);
width: 20px;
height: 10px;
transform: translateY(-50px);
margin: 0 6px;
border-radius: 2px;
box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
}

.navigation-visibility .slide-icon.active{
background: #4285F4;
}

@media (max-width: 900px){
.slider{
    width: 100%;
}

.slider .slide .info{
    position: relative;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}
}

@media (max-width: 500px){
.slider .slide .info h2{
    font-size: 1.8em;
    line-height: 40px;
}

#feature{
    width: auto;
}

.slider .slide .info p{
    font-size: 0.9em;
}
}
.mb15{
  background-color:pink;
  text-align:center;
}
section{
  background-color:yellow;
}
    </style>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#" >Rental Pacar</a> 
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="btn btn-custom active4 shadow-sm" href="#py">About Us</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active29 shadow-sm" href="Login.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
    

<div id="main" style="margin:50px 400px 100px 400px;">
<h2 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hapus akun Rental Pacar</font></font></h2>


<form action="" method="post" style="background-color:yellow;">
<table style="margin: 20px;">
  <h5 style="text-align:center; margin-top:10px;">Reservasi Tanggal sewa pacar "Rental Pacar"</h5>
  <tr>
    <td width="200">Username</td>
    <td><input type="text" name="username"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="text" name="password"></td>
  </tr>
</table>
<div align="right" style="margin: 20px">
  <input class="btn btn-custom active23" type="submit" value="Hapus akun" name="proses"></input>
</div>
</form>
</div>

<?php
include "konek.php";

if(isset($_POST['proses'])){
?><?php
    $sql = "select username, password from user where username = '$_POST[username]'";
    $hasil = ($konek->query($sql));
    $row = [];
    if ($hasil->num_rows > 0){
    $row = $hasil->fetch_all(MYSQLI_ASSOC);
    }
    $username = encrypt($_POST['username']);
    mysqli_query($konek,"delete from user where
    username = '$_POST[username]'
    ");
    echo "<p style='text-align:center; color:red;'>Akun telah terhapus. Silahkan login kembali</p>";
    ?>
   
<?php
}
?>







</div>
<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">affiliate program</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="#">watch</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">shoes</a></li>
              <li><a href="#">dress</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="javascript/Script.js"></script>
</body>
</html>