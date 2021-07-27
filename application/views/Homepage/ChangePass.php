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
      <div id="modal" class="row">
        <div class="mx-auto col-lg-6"> 
          <div class="color-blue">
            <div class="d-flex flex-column min-vh-100 justify-content-center">
              <div class="form-box text-left">
                <form action="Home/changePwdAct" method="POST">
                  <h3>Selamat Datang!</h3>
                  <p>Sepertinya kamu baru pertama kali login nih, yuk ganti password kamu dulu</p>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <p id="check"></p>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number and lowercase letter, and at least 8 or more characters" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <p id="result"></p>
                    <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number and lowercase letter, and at least 8 or more characters" required>
                  </div>
                  <div class="form-group">
                    <div class="row form-button">
                      <div class="col-6 ms-auto">
                        <input class="form-control button-yellow" type="submit" name="submit" value="Simpan">
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
      $(document).ready(function () {
       $("#confirmPassword").keyup(checkPasswordMatch);
     });

      function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        $("#result").css({"margin":"0em 0em 0.5em 0.2em"});

        if (password != confirmPassword){
          $("#result").html("Passwords do not match!");
          $("#result").css({"color":"red"});
        } else{
          $("#result").html("Passwords match.");
          $("#result").css({"color":"green"});
        }
      }
    </script>
    <script>
      var myInput = document.getElementById("password");
      var check = document.getElementById("check");
      check.style.margin = "0em 0em 0.5em 0.2em";

      myInput.onkeyup = function() {
        var lowerCaseLetters = /[a-z]/g;
        var numbers = /[0-9]/g;
        if(myInput.value.match(lowerCaseLetters) && myInput.value.match(numbers) && myInput.value.length >= 8) {  
          check.style.color = "green";
          check.innerHTML = "Password bisa digunakan";
        } else {
          check.style.color = "red";
          check.innerHTML = "Password harus memiliki angka dan tidak boleh kurang dari 8 huruf";
        }
      }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
</html>
