<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard mahasiswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>img/Green.png">
    <link rel="stylesheet" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>css/style.css" />
    <link rel="stylesheet" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>css/fontawesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="<?=base_url('assets/Dashboard-mahasiswa/') ?>css/modal-component.css" />
</head>


<body>


    <!-- navbar section start -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand m-3" href="#"><img src="<?=base_url('assets/Dashboard-mahasiswa/') ?>img/Component 1 – 1.svg" alt="" class="mx-2"> GERIGI 2021</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#rundown">Rundown</a>
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
                        <h2>Kamu berada di kelompok besar <span class="nmr-kelompok"><?=$klmpkbesar['namaKelBesar'] ?></span><br> Kelompok kecil <span class="nmr-kelompok"><?=$klmpkkecil['namaKelKecil'] ?></span><button type="button" class="btn ms-1 rounded-circle" data-bs-toggle="modal" data-bs-target="#anggota-kelompok"  title="Anggota kelompok">
                          <i class="fa fa-users" aria-hidden="true"></i>
                        </button>
                        <br>
                        GERIGI hari ke - <span class="nmr-hari">
                          <?php if (date('Y-m-d')=='2021-08-13') {
                            echo "1";
                          }elseif (date('Y-m-d')=='2021-08-14') {
                            echo "2";
                          }elseif (date('Y-m-d')=='2021-08-15') {
                            echo "3";
                          }else{
                            echo "0";
                          } ?></span></h2>
                        <a href="<?php if ($link==NULL) {
                          echo "#";
                        }else{
                          echo $link['link_zoom'];
                        } ?>" target="_blank" class="zoom btn mx-2"><img src="<?=base_url('assets/Dashboard-mahasiswa/') ?>img/NicePng_youtube-icon-png_10087079.svg" alt="" class="img-zoom"> Link Zoom</a>
                        <a href="<?php if ($link==NULL) {
                          echo "#";
                        }else{
                          echo $link['link_presensi'];
                        } ?>" target="_blank" class="presensi btn mx-2">Presensi</a>
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
              </table>
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
                               <a target="_blank" href="<?=base_url('Mahasiswa/get_link/').$data['idRundown'] ?>" class="link-test btn">Link <?=$data['nama'] ?></a>
                             <?php } ?></td>
                         </tr>
                         <?php } ?>
                     </tbody>
                  </table>
            </div>
        </div>
      </div>


      <!-- footer section start -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col col-md-3 my-5 text-center text-md-start">
              <a href="#" class="logo-footer">
                <img src="<?=base_url('assets/Dashboard-mahasiswa/') ?>img/Component 1 – 1.svg" alt="" class="my-5">
                GERIGI 2021
              </a>
            </div>
            <div class="col-12 col-md-6 my-5 text-center text-md-start">
              <h2 class="mb-4">Sekretariat Gerigi ITS</h2>
              <p>Ruang 204 Gedung SCC lt 2, Kampus Sukolilo<br>Institut Teknologi Sepuluh Nopember<br>Surabaya 60111, Jawa Timur</p>
            </div>
            <div class="col col-md-3 text-center text-md-end my-5">
              <h2>Find us</h2>
              <a href="https://www.instagram.com/gerigiits/" class="icon mx-2" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
              <a href="https://www.youtube.com/c/GerigiITS/featured" class="icon mx-2" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </footer>








      

<!-- script -->
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/jquery.min.js"></script>
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/jquery.transit.min.js"></script>
<script src="<?=base_url('assets/Dashboard-mahasiswa/') ?>js/custom.js"></script>

</body>


</html>