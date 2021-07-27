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

    <title>Gerigi ITS 2021</title>
  </head>
  <body>
    <div class="container">
      <div id="title" class="title color-blue">
        <div class="d-flex flex-column min-vh-100 justify-content-center">
          <div class="text-center">
            <h1 class="title-text text-uppercase">Gerigi ITS 2021</h1>
            <h2 class="subtitle-text">Landasan Cakrawala</h2>
          <div class="title-login-button row">
            <a href="#" onclick="myFunction();" class="button-yellow col-lg-2 col-sm-2 mx-auto">Login</a>
            <!-- <button class="button-yellow col-lg-2 col-sm-2 mx-auto" value="Login" onclick="myFunction()"></button> -->
          </div>
          </div>
        </div>
      </div>

      <div id="modal" class="row transparent">
        <div class="mx-auto col-lg-6"> 
          <div class="color-blue">
            <div class="d-flex flex-column min-vh-100 justify-content-center">
              <div class="form-box text-left">
                <form action="Home/loginAct" method="POST">
                  <h3 class="">Yuk Masuk</h3>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <div class="row form-button">
                      <div class="col-6">
                        <input class="form-control button-yellow" type="submit" name="submit" value="Login">
                      </div>
                      <div class="col-6">
                        <a class="form-control button-yellow" onclick="myFunction();">Kembali</a>
                      </div>
                    </div>
                  </div>
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
    <script>
      function myFunction() {
        var modal = document.getElementById("modal");
        var title = document.getElementById("title");
        if(modal.classList.contains("transparent")){
          modal.classList.remove("transparent");
          title.classList.add("transparent");
        }else{
          title.classList.remove("transparent");
          modal.classList.add("transparent");
        }
      }

      const mw = new Movinwords({
        "el": ".title-text",
        "autostart": false,
        "delay": "500",
        "duration": "500",
        "transition": "slideInTop",
        "offset": "25",
        "wordSpacing": "10",
        "events": {
          "start": "(options) => {      console.log('Movinwords has Started!', options)    }",
          "end": "(options) => {      console.log('Movinwords has Ended!', options)    }",
          "wordTransitionStart": "(options) => {      console.log('Word Transition started!', options)    }",
          "wordTransitionEnd": "(options) => {      console.log('Word Transition ended!', options)    }"
        }
      });

      const mw2 = new Movinwords({
        "el": ".subtitle-text",
        "autostart": false,
        "delay": "500",
        "duration": "500",
        "transition": "slideInTop",
        "offset": "25",
        "wordSpacing": "10",
        "events": {
          "start": "(options) => {      console.log('Movinwords has Started!', options)    }",
          "end": "(options) => {      console.log('Movinwords has Ended!', options)    }",
          "wordTransitionStart": "(options) => {      console.log('Word Transition started!', options)    }",
          "wordTransitionEnd": "(options) => {      console.log('Word Transition ended!', options)    }"
        }
      });

      mw.start();
      setTimeout(function(){
        mw2.start();
      }, 1500);
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
</html>
