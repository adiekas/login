<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {
	header('location:./../login.php');
	exit();
}
?>

<!doctype html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portofolio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#home" class="navbar-brand page-scroll">Adi Eka S</a>
      </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="./../logout.php">Logout</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- akhir navbar -->
    
    <!-- jumbotron -->
    <div class="jumbotron text-center">
       <img src="gambar/woke.jpg" class="img-circle">
    <h1 class="display-2">Adi Eka Septianto</h1>
    <p class="lead">Siswa | Smkn 8 Jember | XI RPL 1</p>
  </div>
<div class="page-scroll">

    <!-- akhir jumbotron -->


<!-- about -->
<section class="about" id="about">
  <div class="=container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center">About</h2>
        <hr>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-5 col-sm-offset-1">
        <p class="pkiri"> Haii Sobat!!! Android adalah sebuah sistem operasi khusus yang dirancang untuk perangkat mobile layar sentuh atau disebut dengan smartphone. Sistem operasi ini merupakan pengembangan dari sistem operasi Linux yang sudah terbukti ketangguhan dan kehandalannya.Sistem operasi Android mulai dikembangkan pada tahun 2003 oleh 4 pakar teknologi bernama Andy Rubin, Rich Miner, Nick Sears dan Chris White. Pada tanggal 17 Agustus 2005 perusahaan Google berhasil mengakuisisi Android, Inc sebagai anak perusahaannya. Walaupun Android sudah diakuisisi Google, pendiri perusahaan Android masih berperan penuh terhadap pengembangan sistem operasi ini.Android OS merupakan sebuah sistem operasi terbuka dibawah lisensi Apache yang memungkinkan sistem operasi ini dapat dikembangkan, dimodifikasi dan didistribusikan oleh pihak - pihak lain. Selain itu sistem operasi Android juga didukung oleh banyak pengembang aplikasi, sehingga dapat meningkatkan fungsi Android itu sendiri. Hal ini dapat dibuktikan dengan adanya aplikasi - aplikasi di Play Store yang hingga saat ini sudah mencapai 50 miliar lebih.</p>
      </div>
      <div class="col-sm-5">
        <p class="pkanan">Untuk masalah keamanan, sistem operasi Android dirancang untuk berjalan di sandbox ( sebuah area pada sistem yang terisolir ) yang memungkinkan pengguna tidak memiliki akses pada sistem pada saat memasang sebuah aplikasi, kecuali ijin akses secara eksplisit diberikan. Beberapa virus atau malware kemungkinan dapat menyerang perangkat seluler yang menggunakan sistem operasi Android, hal ini biasanya disebabkan oleh pemasangan aplikasi dari sumber tidak terpercaya ( selain Google Play Store ). Akan tetapi apabila sobat komputer memasang aplikasi melalui Google Play Store, kemungkinan perangkat sobat terinfeksi virus atau malware sangat minim.
        Salain digunakan untuk perangkat smartphone, Sistem operasi Android juga dikembangkan untuk perangkat elektronik lainnya seperti, televisi yang dikenal dengan Android TV, elektronik mobil yang dikenal dengan Android Auto dan jam tangan yang dikenal dengan Android Wear.Fungsi Android pada perangkat smartphone sangatlah banyak sekali, terlebih dengan dukungan pengembang aplikasi - aplikasi berbasis Android, menjadikan fungsi Android semakin meningkat.</p>
      </div>
    </div>
  </div>
</section>
<!-- akhir about -->


<!-- portfolio -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Portfolio</h2>
        <hr>
      </div>
    </div>

    
      <div class="col-sm-4">
         <a href="" class="thumbnail"   >
          <img src="gambar/android1.jpg">
        </a>
      </div> 

      <div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/android2.jpg">
        </a>
      </div> 

      <div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/android3.jpg">
        </a>
      </div> 

      <div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/android4.jpg">
        </a>
      </div>   
          
 <div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/android5.jpg">
        </a>
      </div>   
          

      <div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/android6.jpg">
        </a>
      </div>  
    </div>
  </div>
</section>
<!-- akhir portfolio -->

<!-- contact -->
<section class="contact" id="contact">
  <div class="container">
  <div class="row">
    <div class="col-sm-12  text-center">
      <h2>Contact</h2>
      <hr>
    </div>
  </div>
</div>


  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <form>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
        </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" class="form-control" placeholder="Masukkan Email">
        </div>
          <div class="form-group">
          <label for="telp">No Telepon</label>
          <input type="tel" id="telp" class="form-control" placeholder="Masukkan No Telepon">
        </div>
        <select class="form-control">
          <option>-- Choose Category --</option>
          <option>Web Design</option>
          <option>Web Development</option>
        </select>
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
      </form>
    </div>
    </div>
  </div>
</section>
<!-- akhir contact -->



<!-- footer -->
<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <p>&copy; copyright 2019 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/ekas.adi">adi eka s</a>.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="http://youtube.com/webprograming" class="
        btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to Youtube</a>
      </div>
    </div>
  </div>
</footer>

<!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
  </body>
</html>
