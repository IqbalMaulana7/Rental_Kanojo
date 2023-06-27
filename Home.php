
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
$sub_table = array(
  'A' => 'c',
  'B' => 'S',
  'C' => 'P',
  'D' => ' ',
  'E' => ',',
  'F' => 'b',
  'G' => '5',
  'H' => '4',
  'I' => 'U',
  'J' => 'C',
  'K' => 'R',
  'L' => 'q',
  'M' => 'u',
  'N' => 'T',
  'O' => 'E',
  'P' => 'z',
  'Q' => 'o',
  'R' => 'i',
  'S' => 'Z',
  'T' => 'a',
  'U' => 'd',
  'V' => 'V',
  'W' => 'n',
  'X' => 'G',
  'Y' => 'F',
  'Z' => 'Q',
  'a' => 'y',
  'b' => 'A',
  'c' => 'l',
  'd' => 'h',
  'e' => '2',
  'f' => 'm',
  'g' => '9',
  'h' => 'f',
  'i' => 'I',
  'j' => 'v',
  'k' => 'H',
  'l' => '0',
  'm' => 'K',
  'n' => 's',
  'o' => 'W',
  'p' => 't',
  'q' => '3',
  'r' => 'k',
  's' => 'g',
  't' => 'w',
  'u' => 'e',
  'v' => 'D',
  'w' => '.',
  'x' => 'M',
  'y' => 'p',
  'z' => 'J',
  '0' => 'X',
  '1' => 'L',
  '2' => '1',
  '3' => 'j',
  '4' => 'r',
  '5' => 'Y',
  '6' => 'O',
  '7' => '6',
  '8' => '7',
  '9' => 'x',
  ' ' => 'B',
  ',' => '8',
  '.' => 'N'
);

function substitusi_encryption($plain_text, $sub_table) {
  $encrypted_text = '';
  for ($i = 0; $i < strlen($plain_text); $i++) {
      $char = $plain_text[$i];
      if (array_key_exists($char, $sub_table)) {
          $encrypted_text .= $sub_table[$char];
      } else {
          $encrypted_text .= $char;
      }
  }
  return $encrypted_text;
}
function substitusi_decryption($encrypted_text, $sub_table) {
  $decrypted_text = '';
  for ($i = 0; $i < strlen($encrypted_text); $i++) {
      $char = $encrypted_text[$i];
      if (in_array($char, $sub_table)) {
          foreach ($sub_table as $key => $value) {
              if ($value === $char) {
                  $decrypted_text .= $key;
                  break;
              }
          }
      } else {
          $decrypted_text .= $char;
      }
  }
  return $decrypted_text;
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

margin: 10px 50px 10px -100px;
align-items:center;
grid-gap: 10px;}

#grid2{
display:grid;
margin:0px 200px 200px 80px;
grid-template-columns: repeat(2,1fr);
/* align-items:center; */

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
    width:200px;
    height:430px;
    background-color:pink;
    border: 2px solid #e97991;
    box-shadow: 20px;
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
.waktu{
  color:pink;
  font-size:50px;
  text-align:center;
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
              <a class="btn btn-custom active2" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active3 shadow-sm" href="Pacar.php">Pacar</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active4 shadow-sm" href="Reservasi.php">Reservasi</a>
            </li>
            <li class="nav-item">
</ul>
            <div class="dropdown" >
                <button class="btn btn-custom active29 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                  More
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background-color:rgb(181, 217, 248);text-align:center">
                  <li><a class="dropdown-item" href="Bookmark.php" style="color:gold">Bookmark</a></li>
                  <li><a class="dropdown-item" href="deleteacc.php" style="color:green">Hapus akun</a></li>
                  <form method="POST" action="">

        <li><button type="submit" name="logout" class="dropdown-item" style="color:red">Logout</button></li>
    </form>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
</nav>

<div class="bar1">
<div >
<div class="slider">
        <div class="slide active">
            <img src="https://leosigh.com/wp-content/uploads/2020/03/Chizuru-Mizuhara-Rent-A-Girlfriend-anime.jpg" alt="">
            <div class="info">
        </div>
    </div>
    <div class="slide">
        <img src="https://c4.wallpaperflare.com/wallpaper/354/907/744/kanojo-okarishimasu-rent-a-girlfriend-anime-girls-chizuru-mizuhara-waifu2x-pink-hd-wallpaper-preview.jpg" alt="">
        <div class="info">
        </div>
    </div>
    <div class="slide">
        <img src="https://leosigh.com/wp-content/uploads/2020/03/Chizuru-Mizuhara-Rent-A-Girlfriend-anime.jpg" alt="">
        <div class="info">
        </div>
    </div>
    <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"><</i>
        <i class="fas fa-chevron-right next-btn">></i>
    </div>
    <div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
    </div>
    </div>
    </div>
        <div class="left-slide"></div>
        <div class="right-slide"></div>
    </div>
</div>
<section>

<center>	
<h2><font style="vertical-align: inherit;"><div style="width:700px;padding: 2px; margin-top:20px; border: 2.5px solid #ff0099; background: #f9d8f2; border-radius: 10px; color: #000000;"><font style="vertical-align: inherit;">Pemberitahuan dari sekretariat</font></font></div></h2>

<div style="width:700px;padding: 2px; border: 2.5px solid #ff0099; background: #f9d8f2; border-radius: 10px; color: #000000;">
    <p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Update Informasi Pacar Online</font></font></strong></span><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2022/7/1 </font></font><span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">update</font></font></span></strong><br>
		
</p><div class="case">
<img src="https://rent-kano.net/images/mini_bosyuu.jpg" alt="img" height="30" width="30"><a href="recruit.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami mencari pacar baru yang cantik dari usia 18 hingga 45 tahun </font></font></a><span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">!!</font></font></span><p></p>
</div></div>		
	<br>
	</center>
<div style="width:700px;padding: 2px; margin: auto; border: 2.5px solid #ffc06e; background: #fff8e8; border-radius: 10px; color: #000000;">
  <p><span class="color1"><strong><font style="vertical-align: inherit;"><Center><font style="vertical-align: inherit;">Publikasi media Diperbarui 1 </font></font></strong></span><font style="vertical-align: inherit;"><strong><span class="pinkicon"><font style="vertical-align: inherit;">April</font></span></strong></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2021</font></font><span class="pinkicon"><font style="vertical-align: inherit;"></font></center></span></strong><br>
</p>
<div margin="auto;">
<img src="https://rent-kano.net/images/youtube.jpg" alt="img" height="14" width="30"><a href="https://youtu.be/R8M7lYSAGfA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ditampilkan di YouTuber Kyonkuma CHANEL! </font></font><span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami berkolaborasi dengan YouTuber BARU</font></font></span></a><br>
<img src="https://rent-kano.net/images/youtube.jpg" alt="img" height="14" width="30"><a href="https://youtu.be/KtlGLpP2pH0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Rafael! </font></font><span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Penyiaran Fukuoka baru</font></font></span></a><br>
<img src="https://rent-kano.net/images/tv.png" alt="img" height="21" width="30"><a href="http://www.fbs.co.jp/lily_bakari/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , pacar online "Lily-san to Bakari-san" diperkenalkan! </font></font><span class="newicon"><font style="vertical-align: inherit;"></font></span></a><br>	 
<img src="https://rent-kano.net/images/tv.png" alt="img" height="21" width="30"><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TOKYO MX </font></font></a><font style="vertical-align: inherit;"><a href="http://www.fbs.co.jp/lily_bakari/"><span class="newicon"><font style="vertical-align: inherit;">BARU "Minggu penuh warna! </font></span></a><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;">! </font></a><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;">! </font></a><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;">] Pengenalan situs! </font></a></font><br>	  
<img src="https://rent-kano.net/images/youtube.jpg" alt="img" height="14" width="30"><a href="https://www.youtube.com/watch?v=zY5dL3iKBb4&amp;feature=youtu.be"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Diperkenalkan oleh seorang YouTuber, </font></font></a><br>	  
<img src="https://rent-kano.net/images/tv.png" alt="img" height="21" width="30"><a href="https://www.youtube.com/watch?v=773YDcHZK8c"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ditayangkan di TV pada pukul 24 dalam kontak dekat dengan Osaka!</font></font></a><br>	  

<small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TV Thailand (luar negeri), Yomiuri TV, saluran resmi YouTube dengan 1,36 juta orang, dan saluran Facebook dengan 460.000 orang. </font><font style="vertical-align: inherit;">Itu diterbitkan di majalah SPA! edisi 26/5! </font><font style="vertical-align: inherit;">NHK mewawancarai dan bersiap untuk siaran</font></font></small><br>
</div>
</div>
</div>		  
	
	
	


<br><center><div style="width:700px;padding: 2px; border: 2.5px solid #ff0099; background: #f9d8f2; border-radius: 10px; color: #000000;">
	<span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Merekrut pemeran baru </font></font></span><a href="recruit.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami mencari pacar baru yang cantik dari usia 18 hingga 45 tahun!!</font></font></a></div>
<br></center><section>
	

<br>
	

</div>
</section>
<div class="waktu">
<?php
date_default_timezone_set("Asia/Jakarta");

    $waktu_lengkap = date('N j/n/Y H:i:s');
        function tanggal_indonesia($waktu_lengkap){
        $nama_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Ahad');
        $nama_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September',
        'Oktober','Nopember','Desember');

        $pisah_waktu =explode(" ",$waktu_lengkap);
        $hari = $pisah_waktu[0];
        $tanggal =$pisah_waktu[1];
        $jam = $pisah_waktu[2];

        $hari_baru = $nama_hari[$hari];
        $pisah_tanggal = explode("/",$tanggal);
        $tanggal_baru = $pisah_tanggal[0]." ".$nama_bulan[$pisah_tanggal[1]]." ".$pisah_tanggal[2];

        return $hari_baru.", ".$tanggal_baru." jam ".$jam." WIB";
        }

    echo tanggal_indonesia($waktu_lengkap);

?>
</div>
<div class="bar2" style="display:flex; margin-left:320px;" >
<h2>Pick Up</h2>
<p style="padding-top:20px;">GirlFriend</p>
<a class="btn btn-custom active23" href="Pacar.php">Lihat model pacar lainnya.....</a>
</div>
</div>
<!--  -->
<?php
$items = [
  [
    'Gambar'      => 'https://i.pinimg.com/564x/eb/b9/27/ebb927b6021ce5d5ecc8c51ec859b5fd.jpg',
    'Nama'        => 'Chisato',
    'Deskripsi'   => 'Ulang Tahun:  23 September <br>   Hobi: Memasak<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Di Café LycoReco, dia bekerja dengan gembira dan ceria sebagai gadis poster yang memproklamirkan diri.</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/736x/d3/a4/72/d3a4720642b6fb57a63891cc21b5e75f.jpg',
    'Nama'        => 'Chizuru',
    'Deskripsi'   => 'Ulang Tahun:  19 April <br>   Hobi: Akting<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Chizuru memiliki rambut coklat kastanye setinggi pinggang yang diikat dengan poni yang menggantung di sisi kanan dan mata coklat muda.</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/736x/a6/d2/6a/a6d26a2a4414cbb9c7cdbeffc54137fd.jpg',
    'Nama'        => 'Chitoge',
    'Deskripsi'   => 'Ulang Tahun:  7 Juni <br>   Hobi: Makan<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Ciri khasnya yang paling menonjol adalah pita merah yang selalu dia gunakan untuk mengikat rambutnya yang diberikan oleh Hana Kirisaki</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/d5/27/b6/d527b6f8ef736bd3af40843557b719db.jpg',
    'Nama'        => 'Ram',
    'Deskripsi'   => 'Ulang Tahun:  22 September <br>   Hobi: Traveling<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Dia memiliki saudara kembar yang sama sama menekuni pekerjaan ini, dia terlihat imut dan kalem</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/6c/0b/66/6c0b664f37d6ac5177347412f76d3e2e.jpg',
    'Nama'        => 'Rem',
    'Deskripsi'   => 'Ulang Tahun:  22 September <br>   Hobi: Olahraga<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Dia memiliki saudara kembar yang sama sama menekuni pekerjaan ini, dia terlihat aura kakak dan menawan</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/564x/65/6a/c2/656ac2f93ec723ccf2a06fea641f3853--profile-pictures-sunshine.jpg',
    'Nama'        => 'Riko',
    'Deskripsi'   => 'Ulang Tahun:  17 Oktober <br>   Hobi: Bernyanyi<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Riko terlihat dewasa dan mudah diajak interaksi dan dia memliki sifat perhatian</p>',
  ],

  [
    'Gambar'      => 'https://cdn.myanimelist.net/images/characters/13/264395.jpg',
    'Nama'        => 'Rena',
    'Deskripsi'   => 'Ulang Tahun:  5 Maret <br>   Hobi: Bernyanyi<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Selain berani dia juga genit itu terlihat dari caranya bicara dan menyebut dirinya sendiri dengan "Chan"</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/bc/89/27/bc892786a4addc35ec382daebb3bcffc.jpg',
    'Nama'        => 'Alice',
    'Deskripsi'   => 'Ulang Tahun:  9 April <br>   Hobi: Memasak<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Alice Zurberg adalah putri dari kepala Desa Rulid Gasupht Zuberg , serta teman masa kecil Eugeo dan Kirito.</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/2a/49/34/2a49342dc596db91472a5f42d971fbb3.jpg',
    'Nama'        => 'Akari',
    'Deskripsi'   => 'Ulang Tahun:  24 July <br>   Hobi: Bernyanyi<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Akari sebagai salah satu karakter utama YuruYuri , MiniYuri , Tensei Shitara Akari dake Slime datta ken</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/736x/4d/08/85/4d0885341f054cb6f482997555a925a4.jpg',
    'Nama'        => 'Aqua',
    'Deskripsi'   => 'Ulang Tahun:  1 Agustus <br>   Hobi: Menari<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Dia adalah dewi air yang membimbing manusia ke alam baka; di dalam, dia disembah oleh Ordo Axis .</p>',
  ],

  [
    'Gambar'      => 'https://i.pinimg.com/originals/56/54/11/565411366c43f0832c4a7ac074be9b7e.jpg',
    'Nama'        => 'Ayumu',
    'Deskripsi'   => 'Ulang Tahun:  1 Maret <br>   Hobi: Bernyanyi<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Meski tidak bisa menyanyi atau menari, Ayumu tetap berani menjadi idol di sekolah sendiri.</p>',
  ],
  [
    'Gambar'      => 'https://i1.sndcdn.com/artworks-a97bKtSqgVNU2sM9-0enDuQ-t500x500.jpg',
    'Nama'        => 'Rias',
    'Deskripsi'   => 'Ulang Tahun:  30 April <br>   Hobi: Olahraga<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px; margin-left: 5px; margin-right: 5px;">
    Rambut merahnya yang sangat cerah membuatnya terlihat berkilau dan menawan </p>',
  ],


];
?>
<?php

$toprak = [
  [
    'Gambar'      => 'https://i.pinimg.com/564x/eb/b9/27/ebb927b6021ce5d5ecc8c51ec859b5fd.jpg',
    'Nama'        => '<a>Chisato</a>',
    'Deskripsi'   => 671
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/736x/4d/08/85/4d0885341f054cb6f482997555a925a4.jpg',
    'Nama'        => '<a>Aqua</a>',
    'Deskripsi'   => 278
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/56/54/11/565411366c43f0832c4a7ac074be9b7e.jpg',
    'Nama'        => '<a>Ayumu</a>',
    'Deskripsi'   => 320
  ],
  [
    'Gambar'      => 'https://i1.sndcdn.com/artworks-a97bKtSqgVNU2sM9-0enDuQ-t500x500.jpg',
    'Nama'        => '<a>Rias</a>',
    'Deskripsi'   => 589
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/2a/49/34/2a49342dc596db91472a5f42d971fbb3.jpg',
    'Nama'        => '<a>Akari</a>',
    'Deskripsi'   => 109
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/bc/89/27/bc892786a4addc35ec382daebb3bcffc.jpg',
    'Nama'        => '<a>Alice</a>',
    'Deskripsi'   => 499
  ],
  [
    'Gambar'      => 'https://cdn.myanimelist.net/images/characters/13/264395.jpg',
    'Nama'        => '<a>Rena</a>',
    'Deskripsi'   => 394
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/564x/65/6a/c2/656ac2f93ec723ccf2a06fea641f3853--profile-pictures-sunshine.jpg',
    'Nama'        => '<a>Riko</a>',
    'Deskripsi'   => 298
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/736x/d3/a4/72/d3a4720642b6fb57a63891cc21b5e75f.jpg',
    'Nama'        => '<a>Chizuru</a>',
    'Deskripsi'   => 594
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/736x/a6/d2/6a/a6d26a2a4414cbb9c7cdbeffc54137fd.jpg',
    'Nama'        => '<a>Chitoge</a>',
    'Deskripsi'   => 483
  ],


];


usort($toprak,
function($a,$b){
  return strnatcasecmp($b['Deskripsi'],$a['Deskripsi']);
})
?>
  <div id="grid2" style="padding-left:50px" >
    
        <table class="table table-danger" style=width:290px;height:100px;border-color:#e97991  border="0" cellpadding="0" cellspacing="0">
        <tr style="color:white">
                <th colspan="3" style="background-color:gold;text-align:center">Top Rank</th>
                </tr>        
        <tr style="color:white;margin-right:200px">
                <th scope="col" style="background-color:#e97991">No</th>
                  <th scope="col" style="background-color:#e97991;text-align:center">Model</th>
                  <th scope="col" style="background-color:#e97991">Score</th>
                </tr>
                <?php
                $indeks=0;
                 foreach ($toprak as $toprak=>$topraks) { ?>
                        <td style="color:#e97991">
                            <?php $indeks += 1;
                            echo $indeks;?>
                        </td>
                        <td style="color:#e97991">
                          
                        <img src="<?php echo $topraks["Gambar"]?>" width="50px" height="50px" >
                            <?php echo $topraks["Nama"]; ?>
                            
                        </td>
                        <td style="padding-top:22px;color:#e97991">
                        <?php echo $topraks["Deskripsi"]; ?>
                 </td>
                    </tr>
                <?php
                }
                ?>

            </table>
      <main class= "grid">
      <?php
        foreach ($items as $items) { ?>
          <article >
          <center>
          <a class="btn btn-warning" href="/Projek_Kanojo/Reservasi.php" >Pesan</a>
          </center>
          <p></p>
          
          <div style="display:flex;padding-left:23px;">
            <img src="<?php echo $items["Gambar"]?>" magin="auto" width="150px" height="150px"> 
            
          </div>
          <?php
          include "konek.php";
          $tel = $items['Nama'];
          $sql = "select nama, keterangan from talent where nama = '$tel'";
          $hasil = ($konek->query($sql));
          $row = [];
          if ($hasil->num_rows > 0){
          $row = $hasil-> fetch_all(MYSQLI_ASSOC);
          foreach($row as $rows){
            if ($rows['nama'] == $tel) {
              echo "<p align='center'>Status: ".substitusi_decryption($rows['keterangan'],$sub_table)."</p>";
            }
          }
          }
          ?>
          <div class ="konten">
          <h2 style="font-size:25px;text-align:center;color:#e97991 " ><?php echo $items["Nama"]; ?></h2>
          <p style="font-size:11px;text-align:center;"><?php echo $items["Deskripsi"]; ?></p>
          </div>
          
     

          </article>
        <?php 
        } 
        ?>

      </main>
    </div>
    <section>
     <center> 
    <div class="panel panel-default">
    <div class="panel-body"><h2>Blog Terbaru Mereka</h2></div>
  </div>
        </center>
<center>
<div class="twitter-timeline twitter-timeline-rendered" style="display: flex; width: 340px; max-width: 100%; margin-top: 0px; margin-bottom: 0px;">
<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 340px; height: 600px; display: block; flex-grow: 1;" title="Garis waktu Twitter" src="https://syndication.twitter.com/srv/timeline-profile/screen-name/rentkano?dnt=false&amp;embedId=twitter-widget-0&amp;features=eyJ0ZndfdGltZWxpbmVfbGlzdCI6eyJidWNrZXQiOlsibGlua3RyLmVlIiwidHIuZWUiLCJ0ZXJyYS5jb20uYnIiLCJ3d3cubGlua3RyLmVlIiwid3d3LnRyLmVlIiwid3d3LnRlcnJhLmNvbS5iciJdLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdGltZWxpbmVfMTIwMzQiOnsiYnVja2V0IjoidHJlYXRtZW50IiwidmVyc2lvbiI6bnVsbH0sInRmd190d2VldF9lZGl0X2JhY2tlbmQiOnsiYnVja2V0Ijoib24iLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3JlZnNyY19zZXNzaW9uIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19jaGluX3BpbGxzXzE0NzQxIjp7ImJ1Y2tldCI6ImNvbG9yX2ljb25zIiwidmVyc2lvbiI6bnVsbH0sInRmd190d2VldF9yZXN1bHRfbWlncmF0aW9uXzEzOTc5Ijp7ImJ1Y2tldCI6InR3ZWV0X3Jlc3VsdCIsInZlcnNpb24iOm51bGx9LCJ0Zndfc2Vuc2l0aXZlX21lZGlhX2ludGVyc3RpdGlhbF8xMzk2MyI6eyJidWNrZXQiOiJpbnRlcnN0aXRpYWwiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2V4cGVyaW1lbnRzX2Nvb2tpZV9leHBpcmF0aW9uIjp7ImJ1Y2tldCI6MTIwOTYwMCwidmVyc2lvbiI6bnVsbH0sInRmd19kdXBsaWNhdGVfc2NyaWJlc190b19zZXR0aW5ncyI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdmlkZW9faGxzX2R5bmFtaWNfbWFuaWZlc3RzXzE1MDgyIjp7ImJ1Y2tldCI6InRydWVfYml0cmF0ZSIsInZlcnNpb24iOm51bGx9LCJ0Zndfc2hvd19ibHVlX3ZlcmlmaWVkX2JhZGdlIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd190d2VldF9lZGl0X2Zyb250ZW5kIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH19&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=ja&amp;maxHeight=600px&amp;origin=https%3A%2F%2Ftokyo.rent-kano.net%2Findex.html&amp;sessionId=ec7a590107200976b1b72693fb2d7c5d7d23030c&amp;showHeader=true&amp;showReplies=false&amp;theme=dark&amp;transparent=false&amp;widgetsVersion=a3525f077c700%3A1667415560940"></iframe></div> 
<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</center>
<br>

</section>
    <section>
      <center>
      <div class="panel panel-default2">
    <div class="panel-body"><h2>Pacar Sewa・Pertanyaan yang Sering Diajukan</h2></div>
  </div>
<img src="https://tokyo.rent-kano.net/images/22.gif" width="720" height="274" alt="Tokyo Rental Girlfriend Stasiun Shibuya" class="wa">
  <hr class="line">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T. Bisakah saya menghubungi gadis itu sebelum kencan?</font></font></strong><br>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ya kamu bisa. </font><font style="vertical-align: inherit;">Kami hanya akan menghubungi Anda di gmail atau saluran resmi.</font></font><br>
</p><hr class="line">
  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T. Bolehkah makan nasi saja?</font></font></strong><br>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ya, tidak apa-apa. </font><font style="vertical-align: inherit;">Harap bayar tagihan di restoran dan biaya untuk tanggal tersebut (biaya pindahan setelah bergabung, biaya tiket, dll.).</font></font><br>
   </p><hr class="line">
   <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Q. Saya ingin melakukan reservasi, bagaimana cara melakukan reservasi?</font></font></strong><br>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Silakan melakukan reservasi dari formulir reservasi. </font><font style="vertical-align: inherit;">Pemesanan dapat dilakukan melalui telepon atau saluran resmi.
</font></font></p><hr class="line">
</div>
</center>
    </section>

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
































 <!-- <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg"  width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg"  width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg"  width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg"  width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
        <article>
        <img src ="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" width="180px">
        <div class ="konten">
          <h2> APPtizer</h2>
          <p>merupakan hidangan
            utamaascaacsasasccsaacc
            ascascasca
            scsacascsaacs. </p>
        </div>
        </article>
 -->