<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/homepage/css/style.css">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/LogoGerigi.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/homepage/movinwords/movinwords.css" />

    <title><?=$title ?></title>
  </head>
  <body>
    <div class="container">
      <div id="modal" class="row">
        <div class="mx-auto col-lg-6"> 
          <div class="color-blue">
            <div class="d-flex flex-column min-vh-100 justify-content-center">
              <div class="form-box text-left">
                <form action="<?=base_url('Mahasiswa/upload_link/').$id ?>" method="POST" accept-charset="utf-8">
                  <h3>Form Submit Link Tugas</h3>
                  <?php if ($cekTugas == 0) { ?>
                  	<p>Silahkan masukan link tugasmu di form berikut</p>
                    <p style="color: red;">Perhatian!! Hanya bisa melakukan submit 1 kali <br>
                    sebelum disimpan harap dipastikan kembali link yang dimasukkan sudah benar !</p>
                  	<div class="form-group">
                  		<label for="link">Link Tugas</label>
                  		<input class="form-control" type="text" name="link" id="link" placeholder="Link Tugas" autocomplete="off" autofocus="on" required>
                  	</div>
                  	<div class="form-group">
                  		<div class="row form-button">
                  			<div class="col-6 ms-auto">
                  				<a class="form-control button-yellow" href="<?php echo base_url()?>">Kembali</a>
                  			</div>
                  			<div class="col-6 ms-auto">
                  				<input class="form-control button-yellow" type="submit" name="submit" value="Simpan">
                  			</div>
                  		</div>
                  	</div>
                  <?php } else { ?>
                  	<p>Kamu sudah submit link tugas kamu</p>
                  	<a class="form-control button-yellow" href="<?php echo base_url()?>">Kembali</a>
                  <?php } ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/homepage/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/homepage/movinwords/movinwords.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
</html>
