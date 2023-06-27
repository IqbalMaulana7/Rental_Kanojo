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
              <a class="btn btn-custom active3 shadow-sm" href="Pacar">Pacar</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active4 shadow-sm" href="Reservasi.php">Reservasi</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active29 shadow-sm" href="Dashboard.php">Logout</a>
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
	
<div style="width:700px;padding: 2px; border: 2.5px solid #ff0099; background: #f9d8f2; border-radius: 10px; color: #000000;">
  <p><span class="color1"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publikasi mediaDiperbarui 1 </font></font></strong></span><font style="vertical-align: inherit;"><strong><span class="pinkicon"><font style="vertical-align: inherit;">April</font></span></strong></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2021</font></font><span class="pinkicon"><font style="vertical-align: inherit;"></font></span></strong><br>
</p>

<img src="images/youtube.jpg" alt="img" height="14" width="30"><a href="https://youtu.be/R8M7lYSAGfA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ditampilkan di YouTuber Kyonkuma CHANEL! </font></font><span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami berkolaborasi dengan YouTuber BARU</font></font></span></a><br>
<img src="images/youtube.jpg" alt="img" height="14" width="30"><a href="https://youtu.be/KtlGLpP2pH0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Rafael! </font></font><span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Penyiaran Fukuoka baru</font></font></span></a><br>
<img src="images/tv.png" alt="img" height="21" width="30"><a href="http://www.fbs.co.jp/lily_bakari/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , pacar online "Lily-san to Bakari-san" diperkenalkan! </font></font><span class="newicon"><font style="vertical-align: inherit;"></font></span></a><br>	 
<img src="images/tv.png" alt="img" height="21" width="30"><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TOKYO MX </font></font></a><font style="vertical-align: inherit;"><a href="http://www.fbs.co.jp/lily_bakari/"><span class="newicon"><font style="vertical-align: inherit;">BARU "Minggu penuh warna! </font></span></a><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;">! </font></a><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;">! </font></a><a href="https://s.mxtv.jp/variety/colorful/"><font style="vertical-align: inherit;">] Pengenalan situs! </font></a></font><br>	  
<img src="images/youtube.jpg" alt="img" height="14" width="30"><a href="https://www.youtube.com/watch?v=zY5dL3iKBb4&amp;feature=youtu.be"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Diperkenalkan oleh seorang YouTuber, </font></font></a><br>	  
<img src="images/tv.png" alt="img" height="21" width="30"><a href="https://www.youtube.com/watch?v=773YDcHZK8c"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ditayangkan di TV pada pukul 24 dalam kontak dekat dengan Osaka!</font></font></a><br>	  

<small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TV Thailand (luar negeri), Yomiuri TV, saluran resmi YouTube dengan 1,36 juta orang, dan saluran Facebook dengan 460.000 orang. </font><font style="vertical-align: inherit;">Itu diterbitkan di majalah SPA! edisi 26/5! </font><font style="vertical-align: inherit;">NHK mewawancarai dan bersiap untuk siaran</font></font></small><br>
</div>
</div>		  
	
	
	


<br><center><div style="width:700px;padding: 2px; border: 2.5px solid #ff0099; background: #f9d8f2; border-radius: 10px; color: #000000;">
	<span class="newicon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Merekrut pemeran baru </font></font></span><a href="recruit.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami mencari pacar baru yang cantik dari usia 18 hingga 45 tahun!!</font></font></a></div>
<br></center><section>
	

<br>
	

</div>
</center>
</section>
<div class="bar2" style="display:flex; margin-left:380px;" >
<h2>Pick Up</h2>
<p style="padding-top:20px;">GirlFriend</p>
<a class="btn btn-custom active23" href="#">Lihat model pacar lainnya.....</a>
</div>
</div>

<!--  -->
<?php
$items = [
  [
    'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
  ],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],
[
  'Gambar'      => 'https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg',
  'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
  'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan',
],


];
?>
<?php
$toprak = [
  [
    'Nama'        => '<a href="https://www.google.com/">chisato</a>',
    'Deskripsi'   => 671
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">akne</a>',
    'Deskripsi'   => 278
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">Mitsu xa</a>',
    'Deskripsi'   => 320
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 589
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 109
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 499
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 394
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 298
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 594
  ],
  [
    'Nama'        => '<a href="https://www.google.com/">APPLE iPhone 13 Pro Max</a>',
    'Deskripsi'   => 483
  ],


];
usort($toprak,function($a,$b){return strnatcmp($b['Deskripsi'],$a['Deskripsi']);});
?>
  <div id="grid2" >
    
        <table style=width:100%; border="1" cellpadding="0" cellspacing="0">
            

               
                <?php
                 foreach ($toprak as $toprak=>$topraks) { ?>
                        <td>
                            <img src="https://i.pinimg.com/736x/c9/86/35/c9863546e453fde8c497778f79339ef0.jpg" alt="" width="50px" height="50px">
                            <?php echo $topraks["Nama"]; ?>
                            
                        </td>
                        <td>
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
        <article>
        
          <img src="<?php echo $items["Gambar"]?>" width="180px" height="180px"> 
        <div class ="konten">
        <p><?php echo $items["Nama"]; ?></p>
        <p><?php echo $items["Deskripsi"]; ?></p>
        </div>
        
        </article>
        <?php } ?>

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