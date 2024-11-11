<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-togel.php'); ?>
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
                    <a class="nav-link" href="<?= $urldomain; ?>/bank"><i class="fa fa-bank" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/history"><i class="fa fa-calendar" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Transaksi</a>
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
                    <a class="nav-link" href="<?= $urldomain; ?>/history"><i class="fa fa-bank" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history-bonus"><i class="fa fa-gift" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Bonus</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history-slot"><i class="fa fa-gamepad" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Gameplay</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/history-togel"><i class="fa fa-gamepad" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Togel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history-betting"><i class="fa fa-gamepad" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Taruhan</a>
                  </li>
                </ul>
              </div>
              <?php if ($userLevel == 'user') { ?>
                <div class="card-body py-3 px-3">
                  <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                    <h5 class="text-white mb-0">Riwayat Togel</h5>
                    <small>1 minggu terakhir</small>
                  </div>

                  <?php
                  $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$userID' AND level NOT IN ('superadmin','admin')") or die(mysqli_error($conn));
                  $s2 = mysqli_fetch_array($sql_2);
                  $IDuser = $s2['cuid'];
                  ?>

                  <div class="table-responsive">
                    <table id="default-datatable" class="table table-bordered">
                      <thead>
                        <tr class="bg-light">
                          <th class="text-center text-white">Tanggal</th>
                          <th class="text-center text-white">Market</th>
                          <th class="text-center text-white">Game</th>
                          <th class="text-center text-white">Periode</th>
                          <th class="text-center text-white">Bet</th>
                          <th class="text-center text-white">Posisi</th>
                          <th class="text-center text-white">Jumlah</th>
                          <th class="text-center text-white">Win/Lose</th>
                          <th class="text-center text-white">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $startDay = date('Y-m-d H:i:s');
                        $startWeek = date('Y-m-d H:i:s', strtotime('-7 day'));
                        $startMonth = date('Y-m-d H:i:s', strtotime('-30 day'));

                        $sql_transaksi = mysqli_query($conn, "SELECT * FROM `tb_taruhan` WHERE userID = '$IDuser' AND pid != 0 AND (`created_date` BETWEEN '$startWeek' AND '$startDay') ORDER BY cuid DESC") or die(mysqli_error($conn));
                        while ($st = mysqli_fetch_array($sql_transaksi)) :
                          $pid = $st['pid'];
                          $gameid = $st['gameid'];
                          $getPasaran = mysqli_query($conn, "SELECT * FROM `tb_pasaran` WHERE cuid = '$pid'") or die(mysqli_error($conn));
                          $gp = mysqli_fetch_array($getPasaran);
                          $getGame = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE cuid = '$gameid'") or die(mysqli_error($conn));
                          $gg = mysqli_fetch_array($getGame);
                        ?>
                          <tr>
                            <td class="text-center text-white"><?= $st['created_date']; ?></td>
                            <td class="text-left text-white"><?= $gp['title']; ?></td>
                            <td class="text-left text-white"><?= $gg['title']; ?></td>
                            <td class="text-center text-white"><?= $st['periode']; ?></td>
                            <td class="text-center text-white"><?= $st['tebak']; ?></td>
                            <td class="text-center text-white"><?= $st['posisi']; ?></td>
                            <td class="text-right text-white"><?= number_format($st['bayar'], 0, ",", "."); ?></td>
                            <td class="text-center text-white"><?= number_format($st['jumlah'], 0, ",", "."); ?></td>
                            <td class="text-center text-white">
                              <?php
                              if ($st['status'] == 0) {
                                if ($st['keterangan'] == 'Menang') {
                                  echo "<span class='text-success'>Menang</span>";
                                } else if ($st['keterangan'] == 'Kalah') {
                                  echo "<span class='text-danger'>Lose</span>";
                                } else if ($st['keterangan'] == '') {
                                  echo "<span class='text-warning'>Menunggu</span>";
                                }
                              } else if ($st['status'] == 1) {
                                if ($st['keterangan'] == 'Menang') {
                                  echo "<span class='text-success'>Menang</span>";
                                } else if ($st['keterangan'] == 'Kalah') {
                                  echo "<span class='text-danger'>Kalah</span>";
                                } else if ($st['keterangan'] == '') {
                                  echo "<span class='text-warning'>Menunggu</span>";
                                }
                              }
                              ?>
                            </td>
                          </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
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

  <div class="bg-custom" style="height: 10px;"></div>

  <!--Start footer-->
  <?php include('../footer.php'); ?>

  <script>
    $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();
    });
  </script>
</body>

</html>