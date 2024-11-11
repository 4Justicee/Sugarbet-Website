<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-password.php'); ?>
  <?php include('../seo/meta/all-bottom.php'); ?>
  <!--Partial header main-->
  <?php include('../partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start topbar header-->
    <?php include('../partials/top-menu.php'); ?>
    <!--End topbar header-->

    <div class="dashboard pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12 d-none d-sm-block">
            <div class="card shadow-sm">
              <div class="card-header text-white text-center pb-1" style="background: #151819;">
                <h4><?= $u['user']; ?></h4>
                <p>Terakhir Masuk: <?= date('d M Y H:i:s', strtotime($u['last_login'])); ?></p>
              </div>
              <div class="card-body">
                <h5 class="text-center">PUSAT AKUN</h5>
                <hr style="background: <?= $s0['warnadasar']; ?>; border: 1px solid <?= $s0['warnadasar']; ?>; margin-top: 25px;">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/dashboard"><i class="fa fa-user" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Akun Saya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/bank"><i class="fa fa-bank" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history"><i class="fa fa-calendar" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Transaksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/referrals"><i class="fa fa-users" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Referral</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/logout"><i class="fa fa-power-off" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Keluar</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-sm-12">
            <div class="card">
              <div class="card-header p-0">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/dashboard"><i class="fa fa-user" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/profil"><i class="fa fa-pencil" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/password"><i class="fa fa-lock" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Password</a>
                  </li>
                </ul>
              </div>
              <?php if ($userLevel == 'user') { ?>
                <div class="card-body py-3 px-3">
                  <?php

                  if (!empty($_GET['notif'])) {
                    if ($_GET['notif'] == 1) {
                      echo '
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <div class="alert-icon">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="alert-message">
                            <span><strong>Well done!</strong> Perubahan Password Disimpan!</span>
                          </div>
                        </div>
                      ';
                    }
                    if ($_GET['notif'] == 2) {
                      echo '
                        <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <div class="alert-icon">
                            <i class="fa fa-exclamation-circle"></i>
                          </div>
                          <div class="alert-message">
                            <span>Password yang Anda masukan salah!</span>
                          </div>
                        </div>
                      ';
                    }
                    if ($_GET['notif'] == 3) {
                      echo '
                        <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <div class="alert-icon">
                            <i class="fa fa-exclamation-circle"></i>
                          </div>
                          <div class="alert-message">
                            <span>Password Yang Anda Masukan Tidak Sama!</span>
                          </div>
                        </div>
                      ';
                    }
                  }
                  ?>
                  <form role="form" class="mt-3" action="<?= $urldomain; ?>/function/password.php" method="POST">
                    <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                      <h5 class="text-white mb-0">Informasi Password</h5>
                    </div>
                    <table class="table">
                      <tbody>
                        <tr class="text-white">
                          <td class="text-left" style="border-top: 0;">Password Baru</td>
                          <td class="text-left" style="border-top: 0;">
                            <input type="password" class="form-control" name="pass" pattern="[a-z0-9A-Z]{8}+" title="Kombinasi Huruf dan Angka, Minimal 8 Karakter" required>
                          </td>
                        </tr>
                        <tr class="text-white">
                          <td class="text-left" style="border-top: 0;">Konfirmasi Password</td>
                          <td class="text-left" style="border-top: 0;">
                            <input type="password" class="form-control" name="repass" pattern="[a-z0-9A-Z]{8}+" title="Kombinasi Huruf dan Angka, Minimal 8 Karakter" required>
                          </td>
                        </tr>
                        <tr class="text-white">
                          <td class="text-left" style="border-top: 0; vertical-align: middle;">Password Lama</td>
                          <td class="text-left" style="border-top: 0;">
                            <input type="password" class="form-control" name="old_pass" required>
                          </td>
                        </tr>
                        <tr class="text-white">
                          <td class="text-left" style="border-top: 0;"></td>
                          <td class="text-left" style="border-top: 0;">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary text-white">Simpan</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </form>
                </div>
              <?php } else { ?>
                <div class="card-body py-3 px-3">
                  <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 20px 10px;">
                    Anda login sebagai Admin / Super Admin. Fitur ini hanya untuk User / Player.
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="bg-custom" style="height: 10px;"></div>

  <!--Start footer-->
  <?php include('../footer.php'); ?>
</body>

</html>