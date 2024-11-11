<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-deposit.php'); ?>
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
                    <a class="nav-link" href="<?= $urldomain; ?>/dashboard"><i class="fa fa-user" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Akun Saya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/bank"><i class="fa fa-bank" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Banking</a>
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
                    <a class="nav-link" href="<?= $urldomain; ?>/bank"><i class="fa fa-user" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/deposit"><i class="fa fa-wallet" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Deposit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/withdraw"><i class="fa fa-money-bill-wave" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Withdraw</a>
                  </li>
                </ul>
              </div>
              <?php if ($userLevel == 'user') { ?>
                <div class="card-body py-3 px-3">
                  <?php
                  $useridnya = $u['cuid'];
                  $cekTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$useridnya' AND jenis IN (1,2) AND (transaksi = 'Top Up' OR transaksi = 'Penarikan') AND status = 0") or die(mysqli_error($conn));
                  $ct = mysqli_num_rows($cekTransaksi);
                  if ($ct > 0) {
                    echo '
                      <div class="alert alert-success alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Terdapat transaksi pending. Cek detailnya di halaman <b>Transaksi</b></span>
                        </div>
                      </div>
                    ';
                  } else {
                    if (!empty($_GET['notif'])) {
                      if ($_GET['notif'] == 1) {
                        echo '
                          <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-icon">
                              <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="alert-message">
                              <span>Minimal 1x Transaksi Deposit adalah Rp. ' . $mindepo . '</span>
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
                              <span>Maksimal 1x Transaksi Deposit adalah Rp. ' . $maxdepo . '</span>
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
                              <span>Saldo tidak mencukupi untuk memulai games</span>
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
                              <span>Terdapat transaksi pending. Cek detailnya di halaman <b>Transaksi</b></span>
                            </div>
                          </div>
                        ';
                      }
                    }
                  ?>
                    <form role="form" class="mt-3" action="<?= $urldomain; ?>/function/deposit.php" method="POST">
                      <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                        <h5 class="text-white mb-0">Deposit Saldo</h5>
                      </div>
                      <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 20px 10px;">
                        <p>Dompet Utama</p>
                        <h5 class="text-primary">Rp. <?= $sb['balance']; ?></h5>
                      </div>
                      <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 20px 10px;">
                        <p>Jumlah (IDR)</p>
                        <input type="number" name="nominal" step="1000" min="20000" placeholder="Masukan Jumlah Deposit" class="form-control" value="">
                        <small>Minimal Deposit Rp. <?= $mindepo; ?></small>
                      </div>
                      <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 20px 10px;">
                        <p>Metode Pengirim</p>
                        <select name="pay_from" class="form-control">
                          <option value="<?= $sbs['cuid']; ?>"> <?= $sbs['akun']; ?> - <?= $sbs['no_rek']; ?> A/n <?= $sbs['pemilik']; ?></option>
                        </select>
                        <input class="form-control" type="hidden" name="userID" value="<?= $u['cuid']; ?>" readonly>
                      </div>
                      <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 20px 10px;">
                        <p>Tujuan Pembayaran</p>
                        <select name="metode" class="form-control" required>
                          <option value=""> Pilih Metode </option>
                          <?php
                          if ($automethod == '1') {
                            $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 AND status = 1 AND akun LIKE '%$inibankuser%' ORDER BY akun ASC") or die(mysqli_error($conn));
                          } else if ($automethod == '0') {
                            $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 AND status = 1 ORDER BY akun ASC") or die(mysqli_error($conn));
                          } else {
                            $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 AND status = 1 ORDER BY akun ASC") or die(mysqli_error($conn));
                          }
                          $no = 0;
                          while ($sb = mysqli_fetch_array($sql_bank)) :
                            $no++;
                          ?>
                            <option value="<?= $sb['cuid']; ?>">
                              <?= $sb['akun']; ?>
                            </option>
                          <?php endwhile; ?>
                        </select>
                        <small>Jika tujuan bukan mata uang Rupiah, maka saldo yang didapatkan mengikuti rate kami, detailnya tampil setelah klik deposit.</small>
                      </div>
                      <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 20px 10px;">
                        <p>Promosi (opsional)</p>
                        <select name="gameid" class="form-control">
                          <?php
                          $sql_transaksi = mysqli_query($conn, "SELECT * FROM `tb_post` WHERE kategori = 0 AND cuid NOT IN(SELECT gameid FROM `tb_transaksi` WHERE userID = '$userID' AND jenis = 1 AND status = 1) ORDER BY cuid ASC") or die(mysqli_error($conn));
                          $no = 0;
                          while ($st = mysqli_fetch_array($sql_transaksi)) :
                            $no++;
                          ?>
                            <option value="<?= $st['cuid']; ?>">
                              <?= ucwords(strtolower($st['title'])); ?>
                            </option>
                          <?php endwhile; ?>
                        </select>
                      </div>
                      <input type="hidden" name="catatan" class="form-control" value="no-photo.webp">
                      <input type="hidden" name="postID" class="form-control" value="<?= $u['cuid']; ?>">
                      <button type="submit" name="submit" value="submit" class="btn btn-primary text-white">Deposit</button>
                    </form>
                  <?php } ?>
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