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
  padding-top:4px;
  text-align:center;
  background-color:pink;
  height:45px;
}
#mb15{
  padding-top:4px;
  text-align:center;
  background-color:pink;
  height:45px;
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
<section style="margin:50px 300px 200px 300px;">


<p><a href="#">
  <center>
  <img src="https://rent-kano.net/images/ser_0.jpg" alt="pacar sewaan Osaka" width="720" height="500" class="wa">
</center>
</a></p>
<div id="py">  </div>
<h2 id="mb15" style="margin-top:90px;text-align:center">
  <font style="vertical-align: inherit;">
    <font style="vertical-align: inherit;">Rental Pacar Bersama Menamanimu</font>
  </font>
</h2>
<center>
  <img src="https://rent-kano.net/images/ser_1.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="229" class="wa">
</center>
  <p><span class="color1"><strong><font style="vertical-align: inherit;">
    <font style="vertical-align: inherit;">Penggunaan normal</font></font></strong></span>
  </p>
  <p><span id="under"><font style="vertical-align: inherit;">
    <font style="vertical-align: inherit;">Lihat panel dan temukan gadis yang ingin kamu kencani!</font></font>
  </span></p>
  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami memiliki semua jenis gadis di toko kami. </font>
  <font style="vertical-align: inherit;">Penampilan, tentu saja, kepribadian individu, pekerjaan (pekerja, pelajar, dll.), Dan berbagai... Dan staf juga dapat menemukan pacar yang cocok untuk Anda. </font>
  <font style="vertical-align: inherit;">Pacar yang menghubungi lebih awal, pacar yang terlambat, dan pacar yang selalu menulis blog. </font>
  <font style="vertical-align: inherit;">Hanya gadis-gadis yang telah memenuhi standar kami yang dapat dipekerjakan sebagai pacar sewaan.</font></font><p></p>

<h2 class="mb15"><font style="vertical-align: inherit;">
  <font style="vertical-align: inherit;">Sewa peringkat pacar/tampilan lainnya</font></font>
</h2>
<center>
	<img src="https://rent-kano.net/images/ser_2a.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="250" class="wa"><br>
	</center>
  <p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Premium</font>
  </font></strong></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> : Dia adalah pacar "ramah Tuhan" kelas tertinggi yang dapat dipercaya dengan ketenangan pikiran, dan dia memiliki sesuatu yang bersinar, dan dia secara khusus dikenali oleh toko.</font></font></p>
	<p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biasa</font>
  </font></strong></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ... Nikmati dan sembuhkan dan serahkan padanya</font></font></p>
	<p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Junior</font>
  </font></strong></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ... dia memenuhi standar minimum</font></font></p>
  <p><span class="under"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lainnya ・ Pakaian renang OK ・ Yukata OK ・ dll juga ditampilkan.</font></font></span></p>

<h2 class="mb15" style="height:90px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda dapat mengirim LINE atau Mail ke pacar favorit Anda secara gratis!</font></font></h2>
<center>  
<img src="https://rent-kano.net/images/ser_3.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="200" class="wa"><br>
</center>  
<p><span class="under"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pertama-tama, yuk sesuaikan jadwal dengan pacar kesayanganmu lewat LINE atau trial mail! </font></font></span><br>
  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
	(LINE digunakan untuk mengoordinasikan jadwal. Klik di sini untuk catatan terperinci tentang penggunaan LINE.)</font></font></p>
	<center>
  <img src="https://rent-kano.net/images/ser_4.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="200" class="wa"><br>
</center>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kirim LINE atau Mail ke pacar favorit Anda ・Anda juga dapat mengirim ke banyak pacar yang Anda suka!</font></font></p>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saat gadis itu memeriksa emailnya, Anda akan menerima email dari </font></font>
  <span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">○△□@gmail.com</font></font></strong></span>
  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda menerimanya di ponsel Anda, harap batalkan penunjukan penolakan surat! </font>
  <font style="vertical-align: inherit;">Dimungkinkan juga untuk mengirim email percobaan ke beberapa pacar yang Anda suka.</font></font></p>
  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font>
  <h2 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mari kita tunggu balasannya</font></font></h2>
	<center>
  <img src="https://rent-kano.net/images/ser_5.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="200" class="wa"><br>
</center>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beberapa pacar membalas dengan cepat dan beberapa pacar membalas dengan lambat.</font></font></p>
	<p><span class="under"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pacar Point TOP30 (Premium) cepat membalas dan merekomendasikan!</font></font></span></p>
  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font>
  <h2 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jadwalkan satu sama lain</font></font></h2>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dia juga seorang pelajar atau pekerja. </font><font style="vertical-align: inherit;">Kami perlu menyesuaikan jadwal, jadi harap dipahami! </font>
  <font style="vertical-align: inherit;">Selain itu, jika Anda ingin menghubungi sekretariat jika merepotkan, kami akan menyesuaikannya satu per satu.</font></font></p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font>
  <h2 class="mb15" style="height:90px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Setelah menyesuaikan jadwal, ayo ajukan tanggal!</font></font></h2>
	<center>
  <img src="https://rent-kano.net/images/ser_7.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="200" class="wa"><br>
</center>
  <p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami telah menyiapkan formulir aplikasi reservasi</font></font></strong></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> online , jadi silakan isi di sana.</font></font></p>
	<p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reservasi melalui telepon</font></font></strong></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">・Jika Anda tidak tahu cara masuk, Anda juga dapat melakukan reservasi melalui telepon.</font></font></p>
	<p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reservasi LINE</font></font></strong></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> : Kami juga menerima reservasi dari sekretariat resmi LINE</font></font></p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

  </font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam hal reservasi online, masukkan informasi dan tekan tombol berlaku, dan Anda akan menerima email konfirmasi otomatis dalam 5 menit (saat ini reservasi sementara).</font></font></p>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Itu akan tiba dari info@pacar.</font></font></p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
  </font></font><h2 class="mb15" style="height:90px"  ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda akan menerima email konfirmasi setelah konfirmasi</font></font></h2>
	<center>
  <img src="https://rent-kano.net/images/ser_9.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="200" class="wa"><br>
</center>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Setelah mengonfirmasi dengannya di sekretariat, Anda akan menerima </font></font><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">"email panduan kencan"</font></font></strong></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> . </font>
  <font style="vertical-align: inherit;">(Ini adalah reservasi resmi)</font></font></p>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Konfirmasi isi aplikasi dan nomor rekening tertera disana.</font></font></p>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda ingin membayar dengan kartu kredit, </font><font style="vertical-align: inherit;">faktur akan dikirim dari </font></font><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">paypal.jp</font></font></strong></span><font style="vertical-align: inherit;"></font></p>

  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">* Silahkan hubungi kami jika ada kesalahan. </font><font style="vertical-align: inherit;">kirim yang diperbaiki</font></font></p>
  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><h2 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">melakukan pembayaran</font></font></h2>
	<center>
  <img src="https://rent-kano.net/images/ser_8.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="200" class="wa"><br>
</center>
  <p><span class="color4"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mari kita selesaikan sehari sebelum tanggal</font></font></strong></span><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (transfer bank, pembayaran kartu melalui Paypal)</font></font></strong></p>
	<p><span class="under"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika tidak ada pembayaran, dia tidak akan muncul di tempat pertemuan...</font></font></span></p>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda lupa melakukan transfer bank, atau jika Anda tidak dapat membayar reservasi sebelumnya, Anda dapat membayar tunai pada hari itu. </font><font style="vertical-align: inherit;">Dalam hal ini, silakan hubungi sekretariat. </font><font style="vertical-align: inherit;">Gadis tidak bisa berkencan tanpa kontak. </font>
  <font style="vertical-align: inherit;">Tolong hati-hati. </font><font style="vertical-align: inherit;">(Pembayaran tunai juga dapat dilakukan untuk pelanggan yang telah menggunakannya beberapa kali.)</font></font></p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font>
  <h2 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tanggal hari</font></font></h2>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mari beri tahu apa yang akan menjadi landmark di tempat tertentu! </font><font style="vertical-align: inherit;">Akan lebih mudah untuk menemukannya! </font><font style="vertical-align: inherit;">(Contoh: T-shirt putih dengan tas hitam, dll.) Dia juga akan memberi tahu Anda pakaian hari ini.</font></font></p>
  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><h2 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bertemu di tempat pertemuan!</font></font></h2>
	<center><img src="https://rent-kano.net/images/ser_10.jpg" alt="Sewa Kanojo Osaka Namba Umeda Tennoji" width="720" height="200" class="wa"></center><br>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bergabung! </font><font style="vertical-align: inherit;">Nikmati kencan Anda!</font></font></p>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perpanjangan </font></font><span class="under"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">juga dimungkinkan</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> . </font><font style="vertical-align: inherit;">Silakan hubungi dia langsung.</font></font></p>
	<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Harap </font><font style="vertical-align: inherit;">dicatat bahwa </font></font><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jika Anda terlambat, itu akan dihitung setelah 30 menit .</font></font></strong></span><font style="vertical-align: inherit;"></font></p>
  <h2 class="mb15"><a name="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">■ </font></font></a><span class="mb1em"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jam ​​penerimaan</font></font></span></h2>
  <center>
  <table width="80%" class="ta1 mb15">
    <tbody><tr>
      <th width="150"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Waktu tanggal yang tersedia</font></font></p></th>
      <td width="500"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6:00 ~ sampai kereta terakhir</font></font></p></td>
    </tr>
    <tr>
      <th><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hubungi jam penerimaan</font></font></p></th>
      <td><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10:00~21:00 (buka sepanjang tahun) </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
      (Harap kirim email setelah pukul 21:00)</font></font></p></td>
    </tr>
    <tr>
      <th><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nomor telepon</font></font></p></th>
      <td><strong><span class="color2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telepon Gratis 0120-444-532</font></font></span></strong></td>
    </tr>
      <tr>
      <th><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Surat</font></font></p></th>
      <td><strong><span class="color1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">info@rentalpacar</font></font></span></strong></td>
    </tr>
    <tr>
      <th><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jam penerimaan reservasi WEB</font></font></p></th>
      <td><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">penerimaan 24 jam</font></font></p></td>
      </tr>
    <tr>
      <th><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Metode penerimaan email</font></font></p></th>
      <td><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulir aplikasi khusus</font></font></p><p><a href="form.php"><img src="https://rent-kano.net/images/yoyaku.jpg" width="100" height="17" alt="Reservasi pacar sewa Shinsaibashi pekerjaan paruh waktu berpenghasilan tinggi" class="wa"></a></p></td>
      </tr>

    </tbody>
  </table>
      </center>
<h2 class="mb15"><a name="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">■ </font></font></a><span class="mb1em"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Penyewaan Reservasi Kanojo Sendai</font></font></span></h2>
<br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Ada tiga metode di bawah ini.
</font></font><br><br>
<h3 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">◆ Reservasi dari situs</font></font></h3><br>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Silakan isi halaman reservasi tanggal di situs dan kirimkan. </font><font style="vertical-align: inherit;">Segera setelah jadwal dikonfirmasi oleh CAST, kami akan mengirimkan email dari sekretariat.

</font></font></p><center>
<p><a href="#"><img src="https://rent-kano.net/images/yoyaku.jpg" width="200" height="33" alt="Sewa Pacar Reservasi Renkano Namba" class="wa"></a></p></center>

<h3 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">◆ Reservasi pada hari itu</font></font></h3><br>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemesanan dapat dilakukan melalui telepon atau online. </font><font style="vertical-align: inherit;">Dari pukul 10:00 hingga 21:00　</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
*1 Pelanggan yang menjadi anggota dan </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">pelanggan pertama kali dapat menggunakannya. </font><font style="vertical-align: inherit;">Kami tidak menerima reservasi melalui email, karena konfirmasi mungkin tertunda. </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
(*1 = pelanggan yang telah menggunakan toko kami beberapa kali)</font></font><br><br>
</p><h3 class="mb15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">◆Pemesanan di muka</font></font></h3><br>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami dapat menerima panggilan telepon dan email. </font><font style="vertical-align: inherit;">Saat melakukan reservasi melalui email, kursus akan memakan waktu minimal 120 menit. </font><font style="vertical-align: inherit;">Pemesanan dapat dilakukan dari satu bulan sebelumnya.</font></font><br>
 </center                    


</p></section>
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