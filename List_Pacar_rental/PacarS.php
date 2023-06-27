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
<?php
include("../konek.php");
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
    margin: 100px 80px 100px 200px;
    align-items:center;
    grid-gap: 10px;
   
}
.grid h2{
    font-size:29px;
}

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
              <a class="btn btn-custom active2" href="/Projek_Kanojo/Home.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active3 shadow-sm" href="#">Pacar</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-custom active4 shadow-sm" href="/Projek_Kanojo/Reservasi.php">Reservasi</a>
            </li>
            <li class="nav-item">
</ul>
            <div class="dropdown" >
                <button class="btn btn-custom active29 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                  More
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background-color:rgb(181, 217, 248);text-align:center">
                  <li><a class="dropdown-item" href="/Projek_Kanojo/bookmark.php" style="color:gold">Bookmark</a></li>
                  <li><a class="dropdown-item" href="/Projek_Kanojo/deleteacc.php" style="color:green">Hapus akun</a></li>
                  <li><a class="dropdown-item" href="/Projek_Kanojo/Dashboard.php" style="color:red">Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
</nav>

<?php
$items = [
  [
    'Gambar'      => 'https://i.pinimg.com/originals/98/bb/e4/98bbe4abc421cf68af8de48489966f4b.png',
    'Nama'        => 'Sinon',
    'Deskripsi'   => 'Ulang Tahun:  5 Maret <br>   Hobi: Bernyanyi<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
    Tenang dan keren adalah   menggambarkan kepribadian Sinon dan juga dia terlihat menawan.</p>',
  ],
  [
    'Gambar'      => 'https://nfcilovers.files.wordpress.com/2012/04/sakura-sakura-haruno-8426495-640-481.jpg',
    'Nama'        => 'Sakura',
    'Deskripsi'   => 'Ulang Tahun:  10 Febuari <br>   Hobi: Memasak<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
    seorang gadis yang cantik dan baik, dia sangat cantik membuat para lelaki mengaguminya</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/564x/15/f9/85/15f985ee70c41988bec18bd370a30304.jpg',
    'Nama'        => 'Shinoa',
    'Deskripsi'   => 'Ulang Tahun:  29 Agustus <br>   Hobi: Olahraga<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
    Kepribadiannya menjengkelkan, ia sering meledek atau menjahili, namun dia sekekali terlihat lucu</p>',
  ],
  [
    'Gambar'      => 'https://otakotaku.com/asset/img/character/2017/04/izumi-sagiri-58ea5c2149bcbp.jpg',
    'Nama'        => 'Sagiri',
    'Deskripsi'   => 'Ulang Tahun:  17 April <br>   Hobi: Menggambar<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
    Sagiri merupakan seorang pendiam namun, diamnya itu lah yang membuat para lelaki menyukainya  </p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/3f/ae/dc/3faedc2dd802887d09542274037ecbbe.jpg',
    'Nama'        => 'Sayu',
    'Deskripsi'   => 'Ulang Tahun:  20 Januari <br>   Hobi: Traveling<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
     Sayu merupakan karakter yang aktif, hal itu membuatmu selalu ceria disaat bersamanya</p>',
  ],
  [
    'Gambar'      => 'https://cdn.myanimelist.net/images/characters/7/422025.jpg',
    'Nama'        => 'Setsuna',
    'Deskripsi'   => 'Ulang Tahun:  29 Juni <br>   Hobi: Olahraga<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
    Setsuna mudah marah namun, dia imut dan penurut disaat bersamanya</p>',
  ],
  [
    'Gambar'      => 'https://i.pinimg.com/originals/20/cc/3e/20cc3e4e8e84734c0c3ffcb65d3830b9.jpg',
    'Nama'        => 'Shion',
    'Deskripsi'   => 'Ulang Tahun:  17 Oktober <br>   Hobi: Bernyanyi<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
    Shion terlihat dewasa dan mudah diajak interaksi dan dia memliki sifat perhatian</p>',
  ],

  [
    'Gambar'      => 'https://i0.wp.com/beneaththetangles.com/wp-content/uploads/2013/03/suzuka-asahina.jpg',
    'Nama'        => 'Suzuka',
    'Deskripsi'   => 'Ulang Tahun:  5 Maret <br>   Hobi: Bernyanyi<br><p style="font-size:11px;text-align:center;">Deskripsi:</p><p style="font-size:11px;text-align:justify;margin-top:-20px;margin-left:5px;margin-right:5px;">
    Selain berani dia juga genit itu terlihat dari caranya bicara dan menyebut dirinya sendiri dengan "Chan"</p>',
  ],
];
?>
<center>
<div class="letter_az" style="padding-top:100px"  >
<h2>List Pacar Rental</h2>
 <a href="PacarA.php" class="active">A</a>
 <a href="Pacar0.php" class="non">B</a>
 <a href="PacarC.php" class="non">C</a>
 <a href="PacarD.php" class="non">D</a>
 <a href="Pacar0.php" class="non">E</a>
 <a href="PacarF.php" class="non">F</a>
 <a href="Pacar0.php" class="non">G</a>
 <a href="PacarH.php" class="non">H</a>
 <a href="Pacar0.php" class="non">I</a>
 <a href="PacarJ.php" class="non">J</a>
 <a href="PacarK.php" class="non">K</a>
 <a href="PacarL.php" class="non">L</a>
 <a href="PacarM.php" class="non">M</a>
 <a href="Pacar0.php" class="non">N</a>
 <a href="Pacar0.php" class="non">O</a>
 <a href="Pacar0.php" class="non">P</a>
 <a href="Pacar0.php" class="non">Q</a>
 <a href="PacarR.php" class="non">R</a>
 <a href="PacarS.php" class="non">S</a>
 <a href="Pacar0.php" class="non">T</a>
 <a href="Pacar0.php" class="non">U</a>
 <a href="Pacar0.php" class="non">V</a>
 <a href="Pacar0.php" class="non">W</a>
 <a href="Pacar0.php" class="non">X</a>
 <a href="Pacar0.php" class="non">Y</a>
 <a href="Pacar0.php" class="non">Z</a></div>
</center>
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
        <div class ="konten">
        <?php
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
        <h2 style="font-size:25px;text-align:center;color:#e97991 " ><?php echo $items["Nama"]; ?></h2>
        <p style="font-size:11px;text-align:center;"><?php echo $items["Deskripsi"]; ?></p>
        </div>
       
        </article>
        <?php } ?>

      </main>

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