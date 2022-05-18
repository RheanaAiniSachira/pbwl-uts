<?php
// mulai session
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

//cek status login
if(!isset($_SESSION['status'])){
    header("location:login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Zakat</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/menu.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
        <div id="wrapper" class="active">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><img class="img-thumbnail" src="assets/img/logo.jpg" alt="" style="width: 100px; height: 100px; margin-top:10px;border-radius: 20px 20px 20px 20px;"></li>
        </ul>
        <ul id="sidebar_menu" class="sidebar-nav" style="margin-top: 60px;">
            <li class="sidebar-brand"><a id="menu-toggle" href="index.php">Beranda<span id="main_icon"></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">     
            <li><a href="add_data.php">Tambah Data Zakat</a></li>
            <li><a href="list_data.php">Data Zakat</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
        </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              <p class="well lead" style="margin-top: 10px;">Beranda</p>
            </div>
          </div>
        </div>

        <div class="page-content inset">
          <div class="jumbotron" style="margin: 20px 20px 20px 20px; padding: 20px 20px 20px 20px">
              <p>
                Sejarah Mesjid Agung Al-Muhsinin <br>
                  <ul>
                    <li>Masjid Agung Al-Muhsinin adalah masjid terbesar di Kota Solok, terletak menghadap Jalan Datuak Perpatih Nan Sabatang, Kelurahan Aro IV Korong, Lubuk Sikarah. Masjid ini menjadi tuan rumah kegiatan keagamaan skala regional seperti tabligh akbar dan pertemuan jemaah, khususnya di Kota Solok.</li>
                    <li>Dibangun sejak 2009 dengan biaya pembangunan Rp36,63 miliar, peresmian masjid dilakukan oleh Wakil Menteri Agama Republik Indonesia Nasaruddin Umar pada 14 Desember 2011. Pembangunan dikerjakan mengandalkan dana Rp35,45 miliar dari APBD Kota Solok dan infak yang terhimpun sebesar Rp1,18 miliar.</li>
                    <li>Masjid ini pertama berdiri sejak 1984 dan saat itu belum menyandang status sebagai masjid agung. Namun, bangunannya rusak berat setelah rangkaian gempa bumi pada Maret 2007. Pembangunan kembali dimulai pada 20 Agunstus 2009. Bangunan utama berupa ruang salat terdiri dari dua lantai dengan denah dasar ruang lepas 35 × 35 meter. Masjid dikelilingi empat menara masing-masing setinggi 40 meter. Arsitekturnya terinspirasi dari Masjid Atta'Awun di Puncak, Bogor, Jawa Barat.</li>
                  </ul>
              </p>
          </div>
        </div>
        
      </div>
      
    </div>
</body>
</html>