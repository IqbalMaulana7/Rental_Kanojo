<?php
session_start();
if (!isset($_SESSION['user'])) {
  // Redirect atau tindakan lainnya jika session user tidak ada
  header('Location: login.php');
  exit();
}

if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: Login.php");
  exit;
}
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
              <a class="btn btn-custom active2" href="Home.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active3 shadow-sm" href="Pacar.php">Pacar</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active4 shadow-sm" href="#">Reservasi</a>
            </li>
            <li class="nav-item">
</ul>
            <div class="dropdown" >
                <button class="btn btn-custom active29 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                  More
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background-color:rgb(181, 217, 248);text-align:center">
                  <li><a class="dropdown-item" href="bookmark.php" style="color:gold">Bookmark</a></li>
                  <li><a class="dropdown-item" href="deleteacc.php" style="color:green">Hapus akun</a></li>
                  <li><a class="dropdown-item" href="Dashboard.php" style="color:red">Logout</a></li>
                </ul>
              </div>
          </ul>
        </div>
      </div>
</nav>
<div id="main" style="margin:50px 400px 100px 400px;">
<h2 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulir reservasi tanggal</font></font></h2>
<img src="https://rent-kano.net/images/20_1.jpg" width="720" height="195" alt="Penyewaan Kanojo Umeda Shinsaibashi" class="wa"><br>
<font style="vertical-align: inherit;"><center><font style="vertical-align: inherit;">Silakan isi informasi berikut dan kirimkan.</font></center></font>

<form action="" method="post" style="background-color:yellow;">
<table style="margin: 20px;">
  <h5 style="text-align:center; margin-top:10px;">Reservasi Tanggal sewa pacar "Rental Pacar"</h5>
  <tr>
    <td width="200">Nama (Nama asli)</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td></td>
    <td><p>Masukkan nama lengkap anda</p></td>
  </tr>
  <tr>
    <td>Nomor telepon</td>
    <td><input type="text" name="nomor"></td>
  </tr>
  <tr>
    <td></td>
    <td><p>(Tidak harus menggunakan tanda hubung)</p></td>
  </tr>
  <tr>
    <td>usia</td>
    <td><input type="text" name="usia"></td>
  </tr>
  <tr>
    <td>Nama Pacar yang diinginkan</td>
    <td><input type="text" name="kanojoo"></td>
  </tr>
  <tr>
    <td>Tanggal dan waktu reservasi</td>
    <td><input type="text" name="tanggal"></td>
  </tr>
  <tr>
    <td></td>
    <td><p>Contoh: 24 Desember (Jumat) mulai pukul 17.00 hingga 3 jam</p></td>
  </tr>
  <tr>
    <td>Tempat pertemuan</td>
    <td><input type="text" name="tempat"></td>
  </tr>
  <tr>
    <td></td>
    <td><p>Catatan : Selama kencan, kencan akan berakhir ketika ada cerita seperti mengharukan / ingin menjalin hubungan dewasa / aktivitas ayah / ingin bertemu tanpa melalui toko. Harap hati-hati membaca dan mengikuti barang-barang terlarang dan persyaratan penggunaan yang dijelaskan di situs</p></td>
  </tr>
</table>
<div align="right" style="margin: 20px">
  <input class="btn btn-custom active23" type="submit" value="Checkout" name="proses"></input>
</div>
</form>
<?php
include "konek.php";
function encrypt($word) {
  $encrypted_word = "";
  $length = strlen($word);
  for ($i = 0; $i < $length; $i++) {
      $ascii_val = ord($word[$i]);
      $shifted_val = $ascii_val + 17;
      if ($shifted_val > 126) {
          $shifted_val = 32 + ($shifted_val - 127);
      }
      $encrypted_word .= chr($shifted_val);
  }
  return $encrypted_word;
}



if(isset($_POST['proses'])){
  // Mengenkripsi nilai yang dimasukkan sebelum menyimpannya
  $nama = encrypt($_POST['nama']);
  $nomor = encrypt($_POST['nomor']);
  $usia = encrypt($_POST['usia']);
  $kanojoo = encrypt($_POST['kanojoo']);
  $tanggal = encrypt($_POST['tanggal']);
  $tempat = encrypt($_POST['tempat']);


  mysqli_query($konek,"INSERT INTO pemesanan SET
  nama = '$nama',
  nomor = '$nomor',
  usia = '$usia',
  kanojoo = '$kanojoo',
  tanggal = '$tanggal',
  tempat = '$tempat'
  ");

  echo "<p style='text-align:center; color:red;'>Berhasil memesan! Silahkan tunggu chat dari pacar yang sudah dipesan.</p>";
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