<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-taruhan.php'); ?>
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
            <?php
            $pid = $_GET['pid'];
            $getPasaran = mysqli_query($conn, "SELECT * FROM `tb_pasaran` WHERE cuid = '$pid'") or die(mysqli_error($conn));
            $gp = mysqli_fetch_array($getPasaran);
            ?>
            <div class="card">
              <div class="card-body py-3 px-3">
                <div class="mt-2 mb-3" style="background: <?= $s0['warnahover']; ?>; padding: 20px 10px;">
                  <h5 class="text-white mb-0">MARKET: <?= $gp['title']; ?><span class="float-right"><button type="button" data-toggle="modal" data-target="#modalPasaran" class="btn btn-success" style="margin-top: -14px;">Ganti</button></span></h5>
                  <div class="modal fade" id="modalPasaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" aria-label="market">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content" style="background: #151819;">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Market</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Tutup Navigasi">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <table class="table">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">Market</th>
                                <th class="text-center pt-2 pb-2">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $getPasarans = mysqli_query($conn, "SELECT * FROM `tb_pasaran` ORDER BY cuid ASC") or die(mysqli_error($conn));
                              while ($gps = mysqli_fetch_array($getPasarans)) :
                              ?>
                                <tr>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF; width: 80%;"><?= $gps['title']; ?></td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <a href="<?= $urldomain; ?>/taruhan?pid=<?= $gps['cuid']; ?>" class="btn btn-primary text-white">Pilih</a>
                                  </td>
                                </tr>
                              <?php endwhile; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $timeNow = date('H:i:s');
                if ($timeNow > $gp['time_open'] && $timeNow < $gp['close_result']) {
                ?>
                  <div class="text-center">
                    <?php
                    $getGame = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 0 ORDER BY cuid ASC") or die(mysqli_error($conn));
                    while ($gg = mysqli_fetch_array($getGame)) :
                      if (isset($_GET['gameid'])) {
                        if ($gg['cuid'] == $_GET['gameid']) {
                          $tombol = 'btn-primary text-white';
                        } else {
                          $tombol = 'btn-outline-primary text-white';
                        }
                      } else {
                        $tombol = 'btn-outline-primary text-white';
                      }

                    ?>
                      <a href="<?= $urldomain; ?>/taruhan?pid=<?= $gp['cuid']; ?>&gameid=<?= $gg['cuid']; ?>" class="btn <?= $tombol; ?> mb-2"><?= $gg['title']; ?></a>
                    <?php endwhile; ?>
                  </div>
                  <hr>
                  <?php
                  if (isset($_GET['gameid'])) {
                    if ($_GET['gameid'] == 1) {
                  ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhan4d.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Angka Taruhan</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              for ($i = 1; $i <= 5; $i++) :
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;"><?= $i; ?></td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="tel" class="form-control" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0; border-radius: 0;" maxlength="4" name="angka[]" value="">
                                    <span>4D = 4Angka, 3D = 3Angka, 2D = 2Angka</span>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" name="nominal[]" min="1000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="7" value="">
                                    <span>Minimal 1.000</span>
                                  </td>
                                </tr>
                              <?php endfor; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 5) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhancb.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">Angka</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              for ($i = 0; $i < 10; $i++) :
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $i; ?>
                                    <input type="hidden" name="angka[]" value="<?= $i; ?>">
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endfor; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 6) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhancb2d.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Angka Taruhan</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              for ($i = 1; $i <= 5; $i++) :
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;"><?= $i; ?></td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="tel" class="form-control" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="2" name="angka[]" value="">
                                    <span>2Angka</span>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" name="nominal[]" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="7" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endfor; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 7) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhancn.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Angka Taruhan</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              for ($i = 1; $i <= 5; $i++) :
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;"><?= $i; ?></td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="tel" class="form-control" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="3" name="angka[]" value="">
                                    <span>3Angka</span>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" name="nominal[]" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="7" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endfor; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 8) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhancj.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">Angka</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                                <th class="text-center pt-2 pb-2">AS/KOP/KEPALA/EKOR</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              for ($i = 0; $i < 10; $i++) :
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $i; ?>
                                    <input type="hidden" name="angka[]" value="<?= $i; ?>">
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <select name="posisi[]" class="form-control" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;">
                                      <?php
                                      $sql_21 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 8 ORDER BY cuid ASC") or die(mysqli_error($conn));
                                      while ($s21 = mysqli_fetch_array($sql_21)) :
                                      ?>
                                        <option value="<?= $s21['title']; ?>"><?= $s21['title']; ?></option>
                                      <?php endwhile; ?>
                                    </select>
                                    <span>&nbsp;</span>
                                  </td>
                                </tr>
                              <?php endfor; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 9) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhantengah.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Kei (%)</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              for ($i = 1; $i <= 10; $i++) :
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $i; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 9 ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="angka<?= $i; ?>" id="exampleRadios<?= $i . $nos; ?>" value="<?= $gg1['title']; ?>">
                                        <label class="form-check-label text-white" for="exampleRadios<?= $i . $nos; ?>">
                                          <?= $gg1['title']; ?>
                                        </label>
                                      </div>
                                    <?php endwhile; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 9 ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <?= $gg1['price']; ?>.00&nbsp;&nbsp;
                                    <?php endwhile; ?>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal<?= $i; ?>" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endfor; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 13) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhandasar.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th colspan="4" class="text-left">DASAR GANJIL/GENAP</th>
                              </tr>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  1
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(14,15) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  2
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(14,15) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  3
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(14,15) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  4
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(14,15) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th colspan="4" class="text-left">DASAR BESAR/KECIL</th>
                              </tr>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  1
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(16,17) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  2
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(16,17) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  3
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(16,17) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  4
                                </td>
                                <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                    <?php
                                    $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 13 AND cuid IN(16,17) ORDER BY cuid ASC") or die(mysqli_error($conn));
                                    $nos = 0;
                                    while ($gg1 = mysqli_fetch_array($getGame1)) :
                                      $nos++;
                                    ?>
                                      <option value="<?= $gg1['title']; ?>"><?= $gg1['title']; ?> ( <?= $gg1['price']; ?>% )</option>
                                    <?php endwhile; ?>
                                  </select>
                                  <span>&nbsp;</span>
                                </td>
                                <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                  <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                  <span>Minimal 10.000</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 22) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhanshio.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php for ($a = 1; $a <= 5; $a++) : ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $a; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <select class="form-control" name="angka[]" style="background: #F1F1FF; color: #000!important; border-radius: 0;">
                                      <?php
                                      for ($i = 1; $i <= 12; $i++) :
                                        if ($i == 1) {
                                          $shio = 'Kuda';
                                        } else if ($i == 2) {
                                          $shio = 'Ular';
                                        } else if ($i == 3) {
                                          $shio = 'Naga';
                                        } else if ($i == 4) {
                                          $shio = 'Kelinci';
                                        } else if ($i == 5) {
                                          $shio = 'Harimau';
                                        } else if ($i == 6) {
                                          $shio = 'Kerbau';
                                        } else if ($i == 7) {
                                          $shio = 'Tikus';
                                        } else if ($i == 8) {
                                          $shio = 'Babi';
                                        } else if ($i == 9) {
                                          $shio = 'Anjing';
                                        } else if ($i == 10) {
                                          $shio = 'Ayam';
                                        } else if ($i == 11) {
                                          $shio = 'Monyet';
                                        } else if ($i == 12) {
                                          $shio = 'Kambing';
                                        }
                                      ?>
                                        <option value="<?= $i . '_' . $shio; ?>"><?= $i . ' ' . $shio; ?></option>
                                      <?php endfor; ?>
                                    </select>
                                    <span>&nbsp;</span>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endfor; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 23) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhansilang.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th colspan="4" class="text-left">SILANG</th>
                              </tr>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Kei (%)</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 23 AND cuid IN(24,25,26) ORDER BY cuid ASC") or die(mysqli_error($conn));
                              $nosa = 0;
                              while ($gg1 = mysqli_fetch_array($getGame1)) :
                                $nosa++;
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $nosa; ?>
                                  </td>
                                  <td class="text-left" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="hidden" name="angka[]" value="<?= $gg1['title']; ?>">
                                    <?= $gg1['title']; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $gg1['price']; ?>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endwhile; ?>
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th colspan="4" class="text-left">HOMO</th>
                              </tr>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Kei (%)</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 23 AND cuid IN(27,28,29) ORDER BY cuid ASC") or die(mysqli_error($conn));
                              $nosa = 0;
                              while ($gg1 = mysqli_fetch_array($getGame1)) :
                                $nosa++;
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $nosa; ?>
                                  </td>
                                  <td class="text-left" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="hidden" name="angka[]" value="<?= $gg1['title']; ?>">
                                    <?= $gg1['title']; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $gg1['price']; ?>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endwhile; ?>
                            </tbody>
                          </table>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                    <?php } else if ($_GET['gameid'] == 30) {
                    ?>
                      <form role="form" action="<?= $urldomain; ?>/function/taruhankembang.php" method="POST">
                        <input type="hidden" name="pid" value="<?= $pid; ?>">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th colspan="4" class="text-left">KEMBANG</th>
                              </tr>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Kei (%)</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 30 AND cuid IN(31,32,33) ORDER BY cuid ASC") or die(mysqli_error($conn));
                              $nosa = 0;
                              while ($gg1 = mysqli_fetch_array($getGame1)) :
                                $nosa++;
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $nosa; ?>
                                  </td>
                                  <td class="text-left" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="hidden" name="angka[]" value="<?= $gg1['title']; ?>">
                                    <?= $gg1['title']; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $gg1['price']; ?>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endwhile; ?>
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th colspan="4" class="text-left">KEMPIS</th>
                              </tr>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Kei (%)</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 30 AND cuid IN(34,35,36) ORDER BY cuid ASC") or die(mysqli_error($conn));
                              $nosa = 0;
                              while ($gg1 = mysqli_fetch_array($getGame1)) :
                                $nosa++;
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $nosa; ?>
                                  </td>
                                  <td class="text-left" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="hidden" name="angka[]" value="<?= $gg1['title']; ?>">
                                    <?= $gg1['title']; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $gg1['price']; ?>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endwhile; ?>
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="bg-light text-white">
                                <th colspan="4" class="text-left">KEMBAR</th>
                              </tr>
                              <tr class="bg-light text-white">
                                <th class="text-center pt-2 pb-2">No</th>
                                <th class="text-center pt-2 pb-2">Tebak</th>
                                <th class="text-center pt-2 pb-2">Kei (%)</th>
                                <th class="text-center pt-2 pb-2">Nominal (Rp)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $getGame1 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE parent = 30 AND cuid IN(37,38,39) ORDER BY cuid ASC") or die(mysqli_error($conn));
                              $nosa = 0;
                              while ($gg1 = mysqli_fetch_array($getGame1)) :
                                $nosa++;
                              ?>
                                <tr>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $nosa; ?>
                                  </td>
                                  <td class="text-left" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="hidden" name="angka[]" value="<?= $gg1['title']; ?>">
                                    <?= $gg1['title']; ?>
                                  </td>
                                  <td class="text-center" style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <?= $gg1['price']; ?>
                                  </td>
                                  <td style="border-top: 0; vertical-align: middle; color: #F1F1FF;">
                                    <input type="number" class="form-control" min="10000" step="1000" max="1000000" style="background: #F1F1FF; color: #000!important; text-align: center!important; border-radius: 0;" maxlength="4" name="nominal[]" value="">
                                    <span>Minimal 10.000</span>
                                  </td>
                                </tr>
                              <?php endwhile; ?>
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <button type="submit" name="submit" class="btn btn-primary text-white mt-3">Pasang Taruhan</button>
                      </form>
                  <?php }
                  } ?>
                <?php } else { ?>
                  <h3 class="text-center mt-5 mb-5">Market Telah Ditutup!</h3>
                <?php } ?>
              </div>
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