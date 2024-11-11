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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Lupa Password', '$pengguna')") or die(mysqli_error($conn));
?>

<?php if (isset($_SESSION['user'])) {
  header('location:' . $urldomain . '/dashboard');
} else { ?>
  <!DOCTYPE html>
  <html lang="id">

  <head>
    <?php include('../seo/meta/all-top-public.php'); ?>
    <?php include('../seo/meta/public-forgot.php'); ?>
    <?php include('../seo/meta/all-bottom.php'); ?>

    <!--Partial header main-->
    <?php include('../partials/header-main.php'); ?>

  </head>

  <body>
    <!-- Start wrapper-->
    <div id="wrapper">

      <h1 class="sr-only">Lupa Password <?= $app_name; ?></h1>

      <!--Start topbar header-->
      <?php include('../partials/top-menu.php'); ?>

      <!--End topbar header-->
      <div class="bg-custom dashboard pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h3 class="mb-3">
                Lupa Password
              </h3>
              <p class="text-white">Silahkan masukan alamat email Anda untuk melakukan reset password.</p>
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
                      <div class="alert alert-danger alert-dismissible mb-3" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Alamat email tidak ditemukan!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 2) {
                        echo '
                      <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-check"></i>
                      </div>
                      <div class="alert-message">
                      <span>Reset password berhasil, silahkan periksa email Anda</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 3) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-3" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Sepertinya terjadi kesalahan, silahkan coba lagi!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 4) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-3" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Alamat email tidak valid!</span>
                      </div>
                      </div>
                      ';
                      }
                    }
                    ?>
                    <form role="form" action="<?= $urldomain; ?>/function/reset-proses.php" method="POST">
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Email Address</p>
                        <input id="email" type="email" name="email" class="form-control" value="" autocomplete="email" placeholder="email@gmail.com" onkeyup="saveValue(this);" required>
                      </div>
                      <button type="submit" name="submit" value="submit" class="btn btn-success text-white btn-lg btn-block mt-3">Reset</button>
                      <hr>
                      <p class="text-center text-white">Berhasil reset password?</p>
                      <a href="<?= $urldomain; ?>/login" class="btn btn-primary text-white btn-block">Masuk</a>
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
      //No space input
      $("#email").on({
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
      document.getElementById("email").value = getSavedValue("email");

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