<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard mahasiswa</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="<?php echo base_url() ?>assets/img/LogoGerigi.png">
  <link rel="stylesheet" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>css/style.css" />
  <link rel="stylesheet" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>css/fontawesome/css/fontawesome-all.min.css" />
  <!-- <link rel="stylesheet" href="<?php //base_url('assets/Dashboard-mahasiswa/') ?>css/modal-component.css" /> -->
</head>


<body>


  <!-- navbar section start -->
  <nav id="nav" class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand m-3" href="#"><img src="<?=base_url('assets/') ?>img/LogoGerigi.svg" alt="" class="mx-2" height="75"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https://drive.google.com/drive/folders/1RclnakPpYVYml-jeWV58is3WIcl15vSH?usp=sharing"target="_blank">Kebutuhan Peserta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://gerigi-its.com/KumpulSuratIzin"target="_blank">Pengumpulan Surat Izin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://gerigi-its.com/SegeraKumpulkanResume" target="_blank">Pengumpulan Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('home/logout') ?>">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- intro section start -->
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Selamat datang,<!-- di GERIGI day <span class="nmr-hari">0</span>,--><br><span class="nama"><?=$this->session->userdata('nama'); ?></span></h1>
          <h2>Kamu berada di 
            Distrik <span class="nmr-kelompok"><?=$klmpkbesar['namaKelBesar'] ?></span>,
            Zona <span class="nmr-kelompok"><?=$klmpkkecil['namaKelKecil'] ?></span>
            <button type="button" class="btn ms-1 rounded-circle" data-bs-toggle="modal" data-bs-target="#anggota-kelompok"  title="Anggota kelompok">
              <i class="fa fa-users" aria-hidden="true"></i>
            </button><br>
            GERIGI hari ke - <span class="nmr-hari">
              <?php if (date('Y-m-d')=='2021-08-14') {
                echo "1";
              }elseif (date('Y-m-d')=='2021-08-15') {
                echo "2";
              }elseif (date('Y-m-d')=='2021-08-16') {
                echo "3";
              }else{
                echo "0";
              } ?></span>
            </h2>
            <a href="
            <?php if ($link==NULL) {
              echo "#";
              }else{
                echo $link['link_zoom'];
              } ?>"
              <?php if ($link==NULL) {
                echo "";
              }else{ ?>
                target="_blank";
              <?php } ?>
              class="zoom btn mx-2">
              <img src="<?=base_url('assets/Dashboard-mahasiswa/') ?>img/NicePng_youtube-icon-png_10087079.svg" alt="" class="img-zoom"> Link Zoom
            </a>
            <a href="
            <?php if ($link==NULL) {
              echo "#";
              }else{
                echo $link['link_presensi'];
              } ?>"
              <?php if ($link==NULL) {
                echo "";
              }else{ ?>
                target="_blank";
              <?php } ?> 
              class="presensi btn mx-2">Presensi
            </a><br>
            <a href="https://drive.google.com/drive/folders/10J-I581exrWMmluUrqMPXksICanUNizN?usp=sharing" class="presensi btn mx-2" target="_blank">Download VBG</a>
          </div>
        </div>
      </div>
    </div>

    <!-- modal section start -->
    <div class="modal fade" id="anggota-kelompok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anggota kelompok kecil <span class="nmr-kelompok"><?=$klmpkkecil['namaKelKecil'] ?></span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered table-striped text-center" style="table-layout: fixed; word-wrap: break-word;">
              <colgroup>
                <col span="1" style="width: 18%;">
                <col span="1" style="width: 45%;">
                <col span="1" style="width: 45%;">
              </colgroup>
              <tbody>
               <tr>
                 <th>No</th>
                 <th>Nama</th>
                 <th>NRP</th>
               </tr>
               <?php
               $no=1;
               foreach ($temankelompok as $data) { ?>
                 <tr style="background-color: white;">
                   <td><?=$no++ ?></td>
                   <td><?=$data['nama'] ?></td>
                   <td><?=$data['username'] ?></td>
                 </tr>
               <?php } ?>
             </tbody>
           </table>
           <!-- </table> -->
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- rundown section start -->
  <div class="rundown" id="rundown">
    <div class="container">
      <div class="row text-center">
        <h1 class="my-5">Rundown Acara</h1>
      </div>
      <div class="row text-center justify-content-center">
        <table style="width: 88%;" class="table table-striped">
          <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 35%;">
            <col span="1" style="width: 35%;">
            <col span="1" style="width: 35%;">
          </colgroup>
          <tbody>
           <tr>
             <th>No</th>
             <th>Acara</th>
             <th>Jam</th>
             <th>Link</th>
           </tr>
           <?php
           if ($rundown == NULL) { ?>
             <tr style="background-color: white;">
               <td colspan="4">-</td>
             </tr>
           <?php } 
           $no=1;
           foreach ($rundown as $data) { ?>  
             <tr style="background-color: white;">
               <td><?=$no++ ?></td>
               <td><?=$data['nama'] ?></td>
               <td><?=$data['jam'] ?></td>
               <td><?php if ($data['hasLink']=='Tidak') {
                 echo "-";
               }else{ ?>
                 <a href="<?=$data['linkRundown'] ?>"
                  <?php if ($data['linkRundown'] != "#") {
                    echo "target='_blank'";
                  } ?>
                  class="link-test btn">Link 
                  <?php 
                  if (strpos(strtoupper($data['nama']), strtoupper('Pretest')) !== false) {
                    echo "Pretest";
                  }
                  if (strpos(strtoupper($data['nama']), strtoupper('Postest')) !== false) {
                    echo "Postest";
                  }
                  if (strpos(strtoupper($data['nama']), strtoupper('Interaksi')) !== false) {
                    echo "Interaksi";
                  }
                  if (strpos(strtoupper($data['nama']), strtoupper('Materi')) !== false) {
                    echo "Feedback";
                  }
                  ?>

                </a>
                <?php } ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <div class="row text-center">
          <h1 class="my-5">Info Penugasan</h1>
        </div>
        <div class="row text-center justify-content-center">
          <table style="width: 88%;" class="table table-striped">
            <colgroup>
              <col span="1" style="width: 5%;">
              <col span="1" style="width: 35%;">
              <col span="1" style="width: 35%;">
              <!-- <col span="1" style="width: 35%;"> -->
            </colgroup>
            <tbody>
             <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Keterangan</th>
             </tr>
             <?php
             if ($info_tugas == NULL) { ?>
               <tr style="background-color: white;">
                 <td colspan="4">-</td>
               </tr>
             <?php } 
             $no=1;
             foreach ($info_tugas as $data) { ?>  
               <tr class="text-start" style="background-color: white;">
                 <td><?=$no++ ?></td>
                 <td><?=$data['nama_tugas'] ?></td>
                 <td><?=$data['keterangan'] ?></td>
               </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>


 <!-- footer section start -->
 <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col col-md-3 my-5 text-center text-md-start">
        <a href="#" class="logo-footer">
          <img src="<?=base_url('assets/') ?>img/LogoGerigiPutih.svg" alt="" class="my-4" height="75">
        </a>
      </div>
      <div class="col-12 col-md-6 my-5 text-center text-md-start">
        <h2 class="mb-4">Sekretariat Gerigi ITS</h2>
        <p>Ruang 204 Gedung SCC lt 2, Kampus Sukolilo<br>Institut Teknologi Sepuluh Nopember<br>Surabaya 60111, Jawa Timur</p>
      </div>
      <div class="col col-md-3 text-center text-md-end my-5">
        <h2>Find us</h2>
        <a href="https://www.instagram.com/gerigiits/" class="icon mx-2" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
        <a href="https://lin.ee/9RzWujK" class="icon mx-2" target="_blank"><i class="fab fa-line" aria-hidden="true"></i></a>
        <a href="https://twitter.com/ItsGerigi" class="icon mx-2" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/c/GerigiITS/featured" class="icon mx-2" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        <a href="https://www.tiktok.com/@gerigiits" class="icon mx-2" target="_blank"><i class="fab fa-tiktok" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/company/gerigi-its-2021/" class="icon mx-2" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</footer>










<!-- script -->
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/jquery.min.js"></script>
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/jquery.transit.min.js"></script>
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/custom.js"></script>
<!-- <script type="text/javascript">
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      $("#nav").css("background", "linear-gradient(180deg, #FFFFFF 0%, rgba(196, 196, 196, 0) 292.36%)");
    } else {
      $("#nav").css("background", "transparent");
    }
  });
</script> -->

</body>


</html>