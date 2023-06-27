<?php
session_start(); // Panggil session_start() di awal

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: Login.php"); // Jika tidak ada session "admin" atau session "admin" tidak bernilai true, redirect ke halaman login
    exit();
}
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: Login.php");
  exit;
}
function decryptMessage($chiper)
{
    $n = 2581;
    $l = ceil(log($n, 2));
    $d = 2047;

    $chiper_byte = base64_decode($chiper);
    $chiper_binnary = "";
    for ($i = 0; $i < strlen($chiper_byte); $i++) {
        $chiper_binnary .= str_pad(decbin(ord($chiper_byte[$i])), 8, "0", STR_PAD_LEFT);
    }

    $plain = "";
    for ($i = 0; $i < strlen($chiper_binnary); $i += $l) {
        $x = substr($chiper_binnary, $i, $l);
        $x = bindec($x);
        $plain .= chr(bcpowmod($x, $d, $n));
    }

    return $plain;
}
if (isset($_POST['download'])) {
  include "konek.php";
  $sql = "SELECT * FROM user";
  $hasil = $konek->query($sql);
  $row = [];
  if ($hasil->num_rows > 0) {
      $row = $hasil->fetch_all(MYSQLI_ASSOC);
  }

  // Mendekripsi data password dan email sebelum dimasukkan ke dalam file CSV
  foreach ($row as &$data) {
      $data['password'] = decryptMessage($data['password']);
      $data['email'] = decryptMessage($data['email']);
  }

  // Membuat file CSV
  $filename = 'data_user.csv';
  $file = fopen($filename, 'w');

  // Menulis header kolom
  $first_row = true;
  foreach ($row as $data) {
      if ($first_row) {
          fputcsv($file, array_keys($data));
          $first_row = false;
      }
  }

  // Menulis data ke dalam file
  foreach ($row as $data) {
      fputcsv($file, $data);
  }

  // Menutup file
  fclose($file);

  // Mengatur header untuk mengunduh file
  header('Content-Type: application/csv');
  header('Content-Disposition: attachment; filename=' . $filename);
  header('Pragma: no-cache');
  readfile($filename);

  // Menghapus file setelah diunduh
  unlink($filename);

  exit(); // Menghentikan eksekusi script setelah mengunduh file
}

// Kode selanjutnya di bawah ini adalah bagian HTML dari Data_user.php
// ...
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
window.setTimeout("waktu()",1000);  
function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

	var popupWindow = null;
	function centeredPopup(url,winName,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	popupWindow = window.open(url,winName,settings)
}
</script>
          <style type="text/css">

          </style>
   </head>
<style>
    /* Google Fonts Import Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background: #11101d;
  z-index: 100;
  transition: all 0.5s ease;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #1d1b31;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #1d1b31;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details{
  background: none;
}
.sidebar.close .profile-details{
  width: 78px;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 52px;
  width: 52px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 12px;
}
.home-section{
  position: relative;
  background: #E4E9F7;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content{
  height: 60px;
  display: flex;
  align-items: center;
}
.crud{
    padding-top:20px;
  padding-left:1170px;
}
.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}
@media (max-width: 400px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
  .sidebar{
    width: 78px;
  }
  .sidebar.close{
    width: 0;
  }
  .home-section{
    left: 78px;
    width: calc(100% - 78px);
    z-index: 100;
  }
  .sidebar.close ~ .home-section{
    width: 100%;
    left: 0;
  }
}
table.scroll {
		width:500px;
		border:1px #a9c6c9 solid;
	}
	table.scroll thead {
		display:table;
		width:100%;
		background-color: salmon;
	}
	table.scroll tbody {
		display:block;
		height:300px;
		overflow:auto;
		float:left;
		width:100%;
	}
	table.scroll tbody tr {
		display:table;
		width:auto;
	}
	table.scroll th, td {
		width:250px;
	}
  .waktu{
    margin-left:200px
  }
    </style>
   <body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='far fa-address-card'></i>
      <span class="logo_name">Rental Kanojo</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Data</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Data</a></li>
          <li><a href="Data_kanojo.php">Data Kanojo</a></li>
          <li><a href="Data_user.php">Data User</a></li>
          <li><a href="Data_pemesanan.php">Data Pemesanan</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">About</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">About</a></li>
        </ul>
      </li>
      <li>

    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job" >
        <div class="profile_name"> Admin</div>
      </div>
      <form method="POST" action="">
      <button type="submit" name="logout" style="border: none; background: none; cursor: pointer;">
        <i class='bx bx-log-out'></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Halo Admin</span>
      <div class=waktu>
      <table width="1000">
            <tr>
            <td width="200"><div class="Tanggal"><h4><script language="JavaScript">document.write(tanggallengkap);</script></div></h4></td> 
            <td align="left" width="30"> - </td>
            <td align="left" width="120"> <h4><div id="output" class="jam"></div></h4></td>
            </tr>
            </table>
</div>
    </div>
  </section>
  <?php
include "konek.php";
$sql = "select * from user";
$hasil = ($konek->query($sql));
$row = [];
if ($hasil->num_rows > 0){
    $row = $hasil->fetch_all(MYSQLI_ASSOC);
}


?>
<div id="main" style="margin:50px 400px 100px 400px;">
<h2 class="mb15"><font style="vertical-align: inherit;"><center><font style="vertical-align: inherit;">Data User</font></center></font></h2>
<center><form method="POST" >
        <input type="submit" name="download" value="Download Data" class="btn btn-primary">
    </form><center>
</div>
<div >
  
</div>
<table class="table table-danger" border="1px" style="text-align:center ;width:70%; margin-left:auto; margin-right: auto; border-color:#e97991  ">
    <thead>
    <tr>
            <th>id_user</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
            <th>level</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(!empty($row))
            foreach($row as $rows)
            { 
        ?>
        <tr>

        <td><?php echo $rows['id_user']; ?></td>
          <td><?php echo $rows['username']; ?></td>
          <td><?php echo ($rows['password']); ?></td>
          <td><?php echo decryptMessage($rows['email']); ?></td>
          <td><?php echo $rows['level']; ?></td>

        </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    function downloadData() {
        window.location.href = "download.php";
    }
</script>
  <script>
    
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
