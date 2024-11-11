<?php //PUBLIC PAGES
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

include('../config/koneksi.php');
$sid = session_id();
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

$pengguna = $s0['user'];
$sql_1a = mysqli_query($conn, "SELECT * FROM `tb_social` WHERE user = '$pengguna'") or die(mysqli_error($conn));
$s1a = mysqli_fetch_array($sql_1a);
$sql_1b = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '$pengguna'") or die(mysqli_error($conn));
$s1b = mysqli_fetch_array($sql_1b);
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d');
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Masuk', '$pengguna')") or die(mysqli_error($conn));
?>

<?php if (isset($_SESSION['user'])) {
  header('location:' . $urldomain . '/dashboard');
} else { ?>
  <!DOCTYPE html>
  <html lang="id">

  <head>
    <?php include('../seo/meta/all-top-public.php'); ?>
    <?php include('../seo/meta/public-login.php'); ?>
    <?php include('../seo/meta/all-bottom.php'); ?>

    <!--Partial header main-->
    <?php include('../partials/header-main.php'); ?>

  </head>

  <body>
    <!-- Start wrapper-->
    <div id="wrapper">

      <h1 class="sr-only">Masuk <?= $app_name; ?></h1>

      <!--Start topbar header-->
      <?php include('../partials/top-menu.php'); ?>

      <!--End topbar header-->
      <div class="bg-custom dashboard pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h3 class="mb-3">
                Masuk ke Akun Saya
              </h3>
              <p class="text-white">Silahkan masukan username dan password Anda untuk masuk ke sistem.</p>
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body p-2">
                  <div class="text-white p-2" style="background: #151819;">
                    <?php

                    if (!empty($_GET['notif'])) {
                      if ($_GET['notif'] == 1) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Username atau password salah!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 2) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Password yang Anda masukan salah!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 3) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Username atau password salah!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 4) {
                        echo '
                      <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-check"></i>
                      </div>
                      <div class="alert-message">
                      <span>Akun berhasil dibuat</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 5) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Oops.. Sepertinya akun ini tidak aktif!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 6) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Silakan masuk terlebih dahulu</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 7) {
                        echo '
                      <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Cek email untuk mengetahui password & verifikasi akun</span>
                      </div>
                      </div>
                      ';
                      }
                    }
                    ?>
                    <form role="form" action="<?= $urldomain; ?>/function/login-proses.php" method="POST">
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Username</p>
                        <input id="username" type="text" name="user" class="form-control" value="" autocomplete="username" placeholder="Username" onkeyup="saveValue(this);" required>
                      </div>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Password</p>
                        <span class="badge badge-success float-right mb-1" id="mybtn" type="button" onclick="changepass()"><i class="fa fa-eye"></i> Show
                        </span>
                        <input id="password" type="password" name="pass" class="form-control" value="" autocomplete="password" placeholder="Password" onkeyup="saveValue(this);" required>
                      </div>
                      <div class="form-group text-right mb-2">
                        <p class="text-white"><a href="<?= $urldomain; ?>/forgot"><i class="fa fa-lock"></i>&nbsp; Lupa Password?</a></p>
                      </div>
                      <button type="submit" name="submit" value="submit" class="btn btn-success text-white btn-lg btn-block mt-3">Masuk</button>
                      <hr>
                      <p class="text-center text-white">Belum punya akun?</p>
                      <a href="<?= $urldomain; ?>/register" class="btn btn-primary text-white btn-block">Daftar</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
        </div>
      </div>

      <!-- End wrapper-->
    </div>

    <div class="bg-custom" style="height: 10px;"></div>

    <!--Start footer-->
    <?php include('../footer.php'); ?>

    <script>
      //Show hide password
      function changepass() {
        var x = document.getElementById('password').type;
        if (x == 'password') {
          document.getElementById('password').type = 'text';
          document.getElementById('mybtn').innerHTML = '<i class="fa fa-eye-slash"></i> Hide';
        } else {
          document.getElementById('password').type = 'password';
          document.getElementById('mybtn').innerHTML = '<i class="fa fa-eye"></i> Show';
        }
      }
    </script>
    <script>
      //No space input
      $("#username,#password").on({
        keydown: function(e) {
          if (e.which === 32)
            return false;
        },
        change: function() {
          this.value = this.value.replace(/\s/g, "");
        }
      });
    </script>
    <script>
      //Save cache record
      document.getElementById("username").value = getSavedValue("username");
      document.getElementById("password").value = getSavedValue("password");

      function saveValue(e) {
        var id = e.id;
        var val = e.value;
        localStorage.setItem(id, val);
      }

      function getSavedValue(v) {
        if (!localStorage.getItem(v)) {
          return "";
        }
        return localStorage.getItem(v);
      }
    </script>

  </body>

  </html>
<?php } ?>