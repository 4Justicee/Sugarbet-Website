<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-dashboard.php'); ?>
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
          <div class="col-lg-8 col-sm-12" style="font-size: 13px;">
            <div class="card">
              <div class="card-header p-0">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/dashboard"><i class="fa fa-user" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/profil"><i class="fa fa-pencil" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/password"><i class="fa fa-lock" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Password</a>
                  </li>
                </ul>
              </div>
              <?php if ($userLevel == 'user') { ?>
                <div class="card-body py-3 px-3">
                  <div class="text-white p-2" style="background: #151819;">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="row">
                          <div class="col-6">
                            <a class="nav-link text-center" href="<?= $urldomain; ?>/deposit"><i class="fa fa-wallet fa-2x"></i><br>Deposit</a>
                          </div>
                          <div class="col-6">
                            <a class="nav-link text-center" href="<?= $urldomain; ?>/withdraw"><i class="fa fa-money-bill-wave fa-2x"></i><br>Withdraw</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                    <h5 class="text-white mb-0">Informasi Akun</h5>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 mb-3">
                      <h5 class="mb-3">Detail Profil</h5>
                      <div class="text-white p-2" style="background: #151819;">
                        <table class="table">
                          <tbody>
                            <tr class="text-white">
                              <td style="border: 0;">Nama: </td>
                              <td style="border: 0;"><?= $u['full_name']; ?></td>
                            </tr>
                            <tr class="text-white">
                              <td style="border: 0;">User: </td>
                              <td style="border: 0;"><?= $u['user']; ?></td>
                            </tr>
                            <tr class="text-white">
                              <td style="border: 0;">Email: </td>
                              <td style="border: 0;"><?= $u['email']; ?></td>
                            </tr>
                            <tr class="text-white">
                              <td style="border: 0;">HP / WA: </td>
                              <td style="border: 0;"><?= $u['no_hp']; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <h5 class="mb-3">Detail Perbankan</h5>
                      <div class="text-white p-3 pl-3 pr-3" style="background: #151819;">
                        <p><?= $sbs['pemilik']; ?></p>
                        <h4 style="letter-spacing: 5px; line-height: 1.5;"><?= $sbs['no_rek']; ?></h4>
                        <p>&nbsp;</p>
                        <p><?= $sbs['akun']; ?></p>
                        <p>Mata Uang IDR</p>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                    <h5 class="text-white mb-0">Informasi Statistik</h5>
                  </div>
                  <div class="row">
                    <?php
                    $startDay = date('Y-m-d H:i:s');
                    $startWeek = date('Y-m-d H:i:s', strtotime('-7 day'));
                    $startMonth = date('Y-m-d H:i:s', strtotime('-30 day'));

                    //Week
                    $totalSpin1 = mysqli_query($conn, "SELECT COUNT(*) as spin FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startWeek' AND '$startDay'") or die(mysqli_error($conn));
                    $ts1 = mysqli_fetch_array($totalSpin1);
                    $totalBet1 = mysqli_query($conn, "SELECT SUM(nominal) as nominal FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startWeek' AND '$startDay'") or die(mysqli_error($conn));
                    $tb1 = mysqli_fetch_array($totalBet1);
                    $totalWin1 = mysqli_query($conn, "SELECT SUM(bayar) as win FROM `tb_taruhan` WHERE keterangan = 'Menang' AND `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startWeek' AND '$startDay'") or die(mysqli_error($conn));
                    $tp1 = mysqli_fetch_array($totalWin1);
                    $totalLos1 = mysqli_query($conn, "SELECT SUM(bayar) as loss FROM `tb_taruhan` WHERE keterangan = 'Kalah' AND `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startWeek' AND '$startDay'") or die(mysqli_error($conn));
                    $tl1 = mysqli_fetch_array($totalLos1);

                    //Month
                    $totalSpin2 = mysqli_query($conn, "SELECT COUNT(*) as spin FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startMonth' AND '$startDay'") or die(mysqli_error($conn));
                    $ts2 = mysqli_fetch_array($totalSpin2);
                    $totalBet2 = mysqli_query($conn, "SELECT SUM(nominal) as nominal FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startMonth' AND '$startDay'") or die(mysqli_error($conn));
                    $tb2 = mysqli_fetch_array($totalBet2);
                    $totalWin2 = mysqli_query($conn, "SELECT SUM(bayar) as win FROM `tb_taruhan` WHERE keterangan = 'Menang' AND `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startMonth' AND '$startDay'") or die(mysqli_error($conn));
                    $tp2 = mysqli_fetch_array($totalWin2);
                    $totalLos2 = mysqli_query($conn, "SELECT SUM(bayar) as loss FROM `tb_taruhan` WHERE keterangan = 'Kalah' AND `pid` = 0 AND userID = '$userID' AND `created_date` BETWEEN '$startMonth' AND '$startDay'") or die(mysqli_error($conn));
                    $tl2 = mysqli_fetch_array($totalLos2);
                    ?>
                    <div class="col-sm-6 mb-3">
                      <h5 class="mb-3">Statistik Minggu Ini</h5>
                      <div class="text-white p-3 pl-3 pr-3" style="background: #151819;">
                        <li>
                          Note:
                          <?php if ($tp1['win'] < $tl1['loss']) { ?>
                            <span class="text-danger">Loss</span>
                          <?php } else if ($tp1['win'] > $tl1['loss']) { ?>
                            <span class="text-success">Win</span>
                          <?php } else { ?>
                            <span class="text-primary">Draw</span>
                          <?php } ?>
                        </li>
                        <li>Total Spin: <?= $ts1['spin']; ?></li>
                        <li>Total Win: Rp. <?= number_format($tp1['win'], 0, ",", "."); ?></li>
                        <li>Total Loss: Rp. <?= number_format($tl1['loss'], 0, ",", "."); ?></li>
                        <li>Total Turnover: Rp. <?= number_format($tb1['nominal'], 0, ",", "."); ?></li>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <h5 class="mb-3">Statistik Bulan Ini</h5>
                      <div class="text-white p-3 pl-3 pr-3" style="background: #151819;">
                        <li>
                          Note:
                          <?php if ($tp2['win'] < $tl2['loss']) { ?>
                            <span class="text-danger">Loss</span>
                          <?php } else if ($tp2['win'] > $tl2['loss']) { ?>
                            <span class="text-success">Win</span>
                          <?php } else { ?>
                            <span class="text-primary">Draw</span>
                          <?php } ?>
                        </li>
                        <li>Total Spin: <?= $ts2['spin']; ?></li>
                        <li>Total Win: Rp. <?= number_format($tp2['win'], 0, ",", "."); ?></li>
                        <li>Total Loss: Rp. <?= number_format($tl2['loss'], 0, ",", "."); ?></li>
                        <li>Total Turnover: Rp. <?= number_format($tb2['nominal'], 0, ",", "."); ?></li>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      Catatan: statistik ini dari gameplay slot dengan spin normal (free spin dan scatter tidak diperhitungkan).
                    </div>
                  </div>
                </div>
                <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                  <h5 class="text-white mb-0">Informasi Transaksi</h5>
                </div>
                <div class="row mx-1">
                  <div class="col-sm-6 mb-3">
                    <h5 class="mb-3">5 Deposit Terakhir</h5>
                    <div class="text-white p-2" style="background: #151819;">
                      <table class="table">
                        <thead>
                          <tr class="bg-primary text-white">
                            <th class="text-center" style="border: 0;">Tanggal</th>
                            <th class="text-center" style="border: 0;">Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $getDeposit = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE jenis = 1 AND status = 1 AND userID = '$userID' ORDER BY cuid DESC LIMIT 5") or die(mysqli_error($conn));
                          while ($gd = mysqli_fetch_array($getDeposit)) {
                            $totalnya = $gd['total'] / 1000;
                          ?>
                            <tr class="text-white">
                              <td style="border: 0;"><?= date($gd['date']); ?></td>
                              <td style="border: 0;"><?= number_format($gd['total'], 0, ",", "."); ?></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <h5 class="mb-3">5 Withdraw Terakhir</h5>
                    <div class="text-white p-2" style="background: #151819;">
                      <table class="table">
                        <thead>
                          <tr class="bg-primary text-white">
                            <th class="text-center" style="border: 0;">Tanggal</th>
                            <th class="text-center" style="border: 0;">Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $getWithdraw = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE jenis = 2 AND status = 1 AND userID = '$userID' ORDER BY cuid DESC LIMIT 5") or die(mysqli_error($conn));
                          while ($gw = mysqli_fetch_array($getWithdraw)) :
                            $totalnya = $gw['total'] / 1000;
                          ?>
                            <tr class="text-white">
                              <td style="border: 0;"><?= $gw['date']; ?></td>
                              <td style="border: 0;"><?= number_format($gw['total'], 0, ",", "."); ?></td>
                            </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
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

  </div>

  <div class="bg-custom" style="height: 10px;"></div>

  <!--Start footer-->
  <?php include('../footer.php'); ?>
</body>

</html>