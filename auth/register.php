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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Daftar', '$pengguna')") or die(mysqli_error($conn));

if ($gantirek == '0') {
  $usergantirek = '0';
} else if ($gantirek == '1') {
  $usergantirek = '1';
} else {
  $usergantirek = '0';
}
?>

<?php if (isset($_SESSION['user'])) {
  header('location:' . $urldomain . '/dashboard');
} else { ?>
  <!DOCTYPE html>
  <html lang="id">

  <head>
    <?php include('../seo/meta/all-top-public.php'); ?>
    <?php include('../seo/meta/public-register.php'); ?>
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
                Pendaftaran Akun
              </h3>
              <p class="text-white">Silahkan isi formulir berikut dengan valid untuk melakukan pendaftaran akun.</p>
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
                      if ($_GET['notif'] == 2) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Username sudah terdaftar!</span>
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
                      <span>Alamat email sudah terdaftar!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 4) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>No. HP sudah terdaftar!</span>
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
                      <span>Nomor rekening sudah terdaftar!</span>
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
                      <span>Alamat email tidak valid!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 7) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>No. HP / WhatsApp tidak valid!</span>
                      </div>
                      </div>
                      ';
                      }
                      if ($_GET['notif'] == 8) {
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
                      if ($_GET['notif'] == 9) {
                        echo '
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <div class="alert-icon">
                      <i class="fa fa-exclamation-triangle"></i>
                      </div>
                      <div class="alert-message">
                      <span>Username yang valid bukan email</span>
                      </div>
                      </div>
                      ';
                      }
                    }
                    ?>
                    <form role="form" action="<?= $urldomain; ?>/function/step-1.php" method="POST">
                      <div class="mt-2 mb-3 text-white bg-primary rounded p-3">
                        <h5 class="text-white mb-0">INFORMASI PERSONAL</h5>
                      </div>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Username <span class="text-danger"> *</span></p>
                        <input id="user" type="text" name="user" class="form-control" value="" autocomplete="username" placeholder="Username" onkeyup="saveValue(this);" required>
                      </div>
                      <?php if ($verifreg == '0') : ?>
                        <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                          <p>Password <span class="text-danger"> *</span></p>
                          <span class="badge badge-success float-right mb-1" id="mybtn" type="button" onclick="changepass()"><i class="fa fa-eye"></i> Show
                          </span>
                          <input id="password" type="password" name="pass" class="form-control" value="" autocomplete="off" placeholder="Password" onkeyup="saveValue(this);" required>
                        </div>
                      <?php endif; ?>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Email Aktif <span class="text-danger"> *</span></p>
                        <input id="email" type="email" name="email" class="form-control" value="" autocomplete="email" placeholder="email@gmail.com" onkeyup="saveValue(this);" required>
                        <?php if ($verifreg != '0') : ?>
                          <small>Ctt: password akun dikirim ke email ini, pastikan email aktif. Anda dapat merubah password setelah pendaftaran.</small>
                        <?php endif; ?>
                      </div>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>No. HP / Whatsapp <span class="text-danger"> *</span></p>
                        <input id="no_hp" type="number" name="no_hp" class="form-control" value="" autocomplete="phone" placeholder="0853xxxxxxxx" onkeyup="saveValue(this);" required>
                        <small>Ctt: withdraw diatas 100juta membutuhkan verifikasi nomor hp, pastikan nomor Anda aktif dan dapat dihubungi.</small>
                      </div>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Diundang oleh (opsional)</p>
                        <input id="sponsor" type="text" name="sponsor" class="form-control" value="<?php if (isset($_GET['ref'])) {
                                                                                                      echo $_GET['ref'];
                                                                                                    } ?>" placeholder="Username Referral">
                      </div>
                      <div class="mt-2 mb-3 text-white bg-primary rounded p-3">
                        <h5 class="text-white mb-0">INFORMASI PEMBAYARAN</h5>
                      </div>
                      <?php if ($usergantirek == '0') : ?>
                        <div class="mt-2 mb-3 text-white bg-danger rounded p-1">
                          <div>Perhatian! Data ini tidak dapat diubah setelah pendaftaran akun.</div>
                        </div>
                      <?php endif; ?>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Metode Pembayaran <span class="text-danger"> *</span></p>
                        <select id="akun" name="akun" class="form-control input-shadow" onkeyup="saveValue(this);" required>
                          <option value="">Pilih Metode</option>
                          <optgroup label="BANK">
                                                            <option value="BANK BCA">BANK BCA</option>
                                                            <option value="BANK BNI">BANK BNI</option>
                                                            <option value="BANK TABUNGAN NEGARA">BANK TABUNGAN NEGARA</option>
                                                            <option value="BANK MANDIRI">BANK MANDIRI</option>
                                                            <option value="BANK MASPION">BANK MASPION</option>
                                                            <option value="BANK SINARMAS">BANK SINARMAS</option>
                                                            <option value="BANK MAYORA">BANK MAYORA</option>
                                                            <option value="BANK BRI">BANK BRI</option>
                                                            <option value="BANK BCA SYARIAH">BANK BCA SYARIAH</option>
                                                            <option value="BANK MUAMALAT INDONESIA">BANK MUAMALAT INDONESIA</option>
                                                            <option value="BANK OCBC NISP">BANK OCBC NISP</option>
                                                            <option value="BANK UOB">BANK UOB</option>
                                                            <option value="BANK PERMATA">BANK PERMATA</option>
                                                            <option value="BANK DANAMON">BANK DANAMON</option>
                                                            <option value="BANK BUKOPIN">BANK BUKOPIN</option>
                                                            <option value="BANK CIMB NIAGA">BANK CIMB NIAGA</option>
                                                            <option value="BANK SYARIAH INDONESIA">BANK SYARIAH INDONESIA</option>
                                                            <option value="BANK ARTHA GRAHA">BANK ARTHA GRAHA</option>
                                                            <option value="BANK ARTOS">BANK ARTOS</option>
                                                            <option value="BANK BJB">BANK BJB</option>
                                                            <option value="BANK BTPN">BANK BTPN</option>
                                                            <option value="BANK COMMONWEATLH">BANK COMMONWEATLH</option>
                                                            <option value="BANK DBS">BANK DBS</option>
                                                            <option value="BANK DKI">BANK DKI</option>
                                                            <option value="BANK HSBC">BANK HSBC</option>
                                                            <option value="BANK JATIM">BANK JATIM</option>
                                                            <option value="BANK MAYBANK">BANK MAYBANK</option>
                                                            <option value="BANK MEGA">BANK MEGA</option>
                                                            <option value="BANK NAGARI">BANK NAGARI</option>
                                                            <option value="BANK JAGO">BANK JAGO</option>
                                                            <option value="SEA BANK">BANK SEABANK</option>
                                                        </optgroup>
                                                        <optgroup label="WALLET">
                                                            <option value="OVO">OVO</option>
                                                            <option value="GOPAY">GOPAY</option>
                                                            <option value="DANA">DANA</option>
                                                            <option value="LINKAJA">LINKAJA</option>
                                                            <option value="SAKUKU">SAKUKU</option>
                                                            <option value="SHOPEEPAY">SHOPEEPAY</option
                                                        </optgroup>
                        </select>
                        <small>Ket: nama bank / emoney, qris, operator, paypal, crypto, dll</small>
                      </div>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Nama Pemilik <span class="text-danger"> *</span></p>
                        <input id="full_name" type="text" name="full_name" class="form-control" value="" autocomplete="name" placeholder="Pemilik Rek Bank / Emoney" onkeyup="saveValue(this);" required>
                        <small>Ket: nama lengkap, pemilik rek / emoney, nama qris, nama paypal, dll</small>
                      </div>
                      <div class="mt-2 mb-3 text-white bg-light rounded-lg py-3 px-2">
                        <p>Nomor Rekening <span class="text-danger"> *</span></p>
                        <input id="no_rek" type="text" name="no_rek" class="form-control" value="" autocomplete="phone" placeholder="No. Rek Bank / Emoney" onkeyup="saveValue(this);" required>
                        <small>Ket: no. rek / emoney, link qr code, no. hp, email paypal, alamat crypto, dll</small>
                      </div>
                      <button type="submit" name="submit" value="submit" class="btn btn-success text-white btn-lg btn-block mt-3">Daftar</button>
                      <hr>
                      <p class="text-center text-white">Sudah punya akun?</p>
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
      $("#user,#email,#no_hp,#no_rek").on({
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
      document.getElementById("user").value = getSavedValue("user");
      document.getElementById("email").value = getSavedValue("email");
      document.getElementById("no_hp").value = getSavedValue("no_hp");
      document.getElementById("akun").value = getSavedValue("akun");
      document.getElementById("full_name").value = getSavedValue("full_name");
      document.getElementById("no_rek").value = getSavedValue("no_rek");

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