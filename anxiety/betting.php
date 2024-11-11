<?php include('session.php'); ?>
<!DOCTYPE html>

<html lang="id" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= $urladmin; ?>/assets/" data-template="vertical-menu-template">

<head>
  <!--Viewport-->
  <meta charset="UTF-8">
  <meta name="HandheldFriendly" content="True">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

  <!--Robots-->
  <meta name="robots" content="noindex, nofollow" />
  <title><?php if ($u['level'] === 'superadmin') { ?>Super Admin<?php } elseif ($u['level'] === 'admin') { ?>Admin<?php } else { ?>Member<?php } ?> - <?= $app_name; ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= $urldomain; ?>/upload/favicon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/fonts/fontawesome.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/fonts/tabler-icons.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/fonts/flag-icons.css?<?= $cache; ?>" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/css/rtl/core.css?<?= $cache; ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/css/rtl/theme-default.css?<?= $cache; ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/css/demo.css?<?= $cache; ?>" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/node-waves/node-waves.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/typeahead-js/typeahead.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/apex-charts/apex-charts.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css?<?= $cache; ?>" />

  <!-- Helpers -->
  <script src="<?= $urladmin; ?>/assets/vendor/js/helpers.js?<?= $cache; ?>"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="<?= $urladmin; ?>/assets/vendor/js/template-customizer.js?<?= $cache; ?>"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= $urladmin; ?>/assets/js/config.js?<?= $cache; ?>"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <?php include('sidebar.php'); ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" aria-label="Tutup Navigasi">
              <i class="ti ti-menu-2 ti-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <?php include('top-menu.php'); ?>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search..." />
            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold">
              <span class="text-muted fw-light">Togel /</span> Update Status
            </h4>
            <!-- Invoice List Table -->
            <?php
            if (isset($_GET['submit'])) {
              $today = $_GET['tahun'] . '-' . $_GET['bulan'];
            } else {
              $today = date('Y-m');
            }
            ?>
            <div class="card mb-3 pb-2">
              <div class="card-body">
                <form role="form" class="form-group" method="get" action="">
                  <div class="row">
                    <div class="col-sm-3">
                      <select name="pid" id="market" class="form-control" style="height: 40px!important;" required>
                        <option value="">Pilih</option>
                        <?php
                        $sql_21 = mysqli_query($conn, "SELECT * FROM `tb_pasaran` ORDER BY cuid ASC") or die(mysqli_error($conn));
                        while ($s21 = mysqli_fetch_array($sql_21)) :
                        ?>
                          <option value="<?= $s21['cuid']; ?>" <?php if (isset($_GET['pid'])) {
                                                                  if ($_GET['pid'] == $s21['cuid']) {
                                                                    echo ' selected=selected';
                                                                  }
                                                                } ?>><?= $s21['title']; ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select name="periode" id="periode" class="form-control" style="height: 40px!important;" required>
                        <?php
                        if (isset($_GET['pid'])) {
                          $pid = $_GET['pid'];
                          $kabupaten = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY no ASC") or die(mysqli_error($conn));
                          while ($kk = mysqli_fetch_array($kabupaten)) {
                        ?>
                            <option value="<?= $kk['no']; ?>" <?php if (isset($_GET['pid'])) {
                                                                if ($_GET['periode'] == $kk['no']) {
                                                                  echo ' selected=selected';
                                                                }
                                                              } ?>><?= $kk['no']; ?></option>
                        <?php }
                        } ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block w-100">Filter Data</button>
                    </div>
                    <div class="col-sm-3">
                      <a href="<?= $urladmin; ?>/function/getwinner.php?pid=<?= $_GET['pid']; ?>&periode=<?= $_GET['periode']; ?>" class="btn btn-success btn-block w-100">Get Status</a>
                    </div>
                  </div>
                </form>
                <div class="pt-4">
                  <h5>Update status Menang / Kalah dilakukan manual:</h5>
                  <li>Pertama, pilih market dan pilih Periode</li>
                  <li>Kedua, klik Filter Data, akan tampil daftar taruhan (jika ada)</li>
                  <li>Ketiga, klik Get Status untuk ubah status ke Menang atau Kalah</li>
                  <li>Jika Menang, saldo member akan bertambah sesuai jumlah kemenangan</li>
                  <p><b>Catatan:</b><br>
                    - No. periode tidak tampil jika Result belum keluar dari Provider<br>
                    - Taruhan Pending (Menunggu) dapat dilihat di bagian Pending Status
                  </p>
                </div>
              </div>
            </div>
            <?php if (isset($_GET['pid'])) : ?>
              <div class="card">
                <div class="card-datatable table-responsive">
                  <table class="invoice-list-table table border-top" id="default-datatable">
                    <thead>
                      <tr class="bg-primary">
                        <th class="text-center" style="vertical-align: middle;">#</th>
                        <th class="text-center" style="vertical-align: middle;">Date</th>
                        <th class="text-center" style="vertical-align: middle;">Market</th>
                        <th class="text-center" style="vertical-align: middle;">Periode</th>
                        <th class="text-center" style="vertical-align: middle;">User</th>
                        <th class="text-center" style="vertical-align: middle;">Game</th>
                        <th class="text-center" style="vertical-align: middle;">Bet</th>
                        <th class="text-center" style="vertical-align: middle;">Position</th>
                        <th class="text-center" style="vertical-align: middle;">Amount</th>
                        <th class="text-center" style="vertical-align: middle;">Discount</th>
                        <th class="text-center" style="vertical-align: middle;">Pay</th>
                        <th class="text-center" style="vertical-align: middle;">Win</th>
                        <th class="text-center" style="vertical-align: middle;">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $pid = $_GET['pid'];
                      $periode = $_GET['periode'];
                      $getDepo = mysqli_query($conn, "SELECT * FROM `tb_taruhan` WHERE `pid` = '$pid' AND `periode` = '$periode' ORDER BY cuid ASC") or die(mysqli_error($conn));
                      $no = 0;
                      while ($gd = mysqli_fetch_array($getDepo)) :
                        $no++;
                        $usersID = $gd['userID'];
                        $gameid = $gd['gameid'];
                        $code = $gd['code'];
                        $getGame = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE cuid = '$gameid'") or die(mysqli_error($conn));
                        $gg = mysqli_fetch_array($getGame);
                        $getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
                        $gu = mysqli_fetch_array($getUser);
                        $sql_21 = mysqli_query($conn, "SELECT * FROM `tb_pasaran` WHERE code = '$code'") or die(mysqli_error($conn));
                        $s21 = mysqli_fetch_array($sql_21);
                      ?>
                        <tr>
                          <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no; ?></td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd['created_date']; ?></td>
                          <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s21['title']; ?></td>
                          <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd['periode']; ?></td>
                          <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gu['user']; ?></td>
                          <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gg['title']; ?></td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd['tebak']; ?></td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd['posisi']; ?></td>
                          <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd['nominal'], 0, ",", "."); ?></td>
                          <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd['diskon'], 0, ",", "."); ?></td>
                          <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd['bayar'], 0, ",", "."); ?></td>
                          <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd['jumlah'], 0, ",", "."); ?></td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                            <?php
                            if ($gd['status'] == 0) {
                              if ($gd['keterangan'] == 'Menang') {
                                echo "<span class='text-success'>Menang</span>";
                              } else if ($gd['keterangan'] == '') {
                                echo "<span class='text-warning'>Menunggu</span>";
                              } else {
                                echo "<span class='text-danger'>Kalah</span>";
                              }
                            } else if ($gd['status'] == 1) {
                              if ($gd['keterangan'] == 'Menang') {
                                echo "<span class='text-success'>Menang</span>";
                              } else if ($gd['keterangan'] == '') {
                                echo "<span class='text-warning'>Menunggu</span>";
                              } else {
                                echo "<span class='text-danger'>Kalah</span>";
                              }
                            } else {
                              echo "<span class='text-warning'>Menunggu</span>";
                            }
                            ?>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                  <?php
                  $totalBet = mysqli_query($conn, "SELECT COUNT(*) as bet FROM `tb_taruhan` WHERE `pid` = '$pid' AND `periode` = '$periode'") or die(mysqli_error($conn));
                  $tb = mysqli_fetch_array($totalBet);
                  $totalPay = mysqli_query($conn, "SELECT SUM(bayar) as bet FROM `tb_taruhan` WHERE `pid` = '$pid' AND `periode` = '$periode'") or die(mysqli_error($conn));
                  $tp = mysqli_fetch_array($totalPay);
                  $totalWin = mysqli_query($conn, "SELECT SUM(jumlah) as bet FROM `tb_taruhan` WHERE `pid` = '$pid' AND `periode` = '$periode' AND `keterangan` = 'Menang'") or die(mysqli_error($conn));
                  $tw = mysqli_fetch_array($totalWin);
                  $totalLose = mysqli_query($conn, "SELECT SUM(bayar) as bet FROM `tb_taruhan` WHERE `pid` = '$pid' AND `periode` = '$periode' AND `keterangan` = ''") or die(mysqli_error($conn));
                  $tl = mysqli_fetch_array($totalLose);
                  ?>
                  <p><strong>Total Bet :</strong> <?= number_format($tb['bet'], 0, ",", "."); ?> |
                    <strong>Total Pay :</strong> Rp. <?= number_format($tp['bet'], 0, ",", "."); ?> |
                    <strong>Total Pay Winner :</strong> Rp. <?= number_format($tw['bet'], 0, ",", "."); ?> |
                    <strong>Total Profit Lose :</strong> Rp. <?= number_format($tl['bet'], 0, ",", "."); ?>
                  </p>
                </div>
              </div>
            <?php endif; ?>

            <h4 class="fw-bold pt-4">
              <span class="text-muted fw-light">Togel /</span> Pending Status
            </h4>
            <div class="card">
              <div class="card-datatable table-responsive">
                <table class="invoice-list-table table border-top" id="default-datatable2">
                  <thead>
                    <tr class="bg-primary">
                      <th class="text-center" style="vertical-align: middle;">#</th>
                      <th class="text-center" style="vertical-align: middle;">Date</th>
                      <th class="text-center" style="vertical-align: middle;">Market</th>
                      <th class="text-center" style="vertical-align: middle;">Periode</th>
                      <th class="text-center" style="vertical-align: middle;">User</th>
                      <th class="text-center" style="vertical-align: middle;">Game</th>
                      <th class="text-center" style="vertical-align: middle;">Bet</th>
                      <th class="text-center" style="vertical-align: middle;">Position</th>
                      <th class="text-center" style="vertical-align: middle;">Amount</th>
                      <th class="text-center" style="vertical-align: middle;">Discount</th>
                      <th class="text-center" style="vertical-align: middle;">Pay</th>
                      <th class="text-center" style="vertical-align: middle;">Win</th>
                      <th class="text-center" style="vertical-align: middle;">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $getDepo2 = mysqli_query($conn, "SELECT * FROM `tb_taruhan` WHERE `pid` != 0 AND status = 0 ORDER BY cuid DESC") or die(mysqli_error($conn));
                    $no2 = 0;
                    while ($gd2 = mysqli_fetch_array($getDepo2)) :
                      $no2++;
                      $usersID2 = $gd2['userID'];
                      $gameid2 = $gd2['gameid'];
                      $code2 = $gd2['code'];
                      $getGame2 = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE cuid = '$gameid2'") or die(mysqli_error($conn));
                      $gg2 = mysqli_fetch_array($getGame2);
                      $getUser2 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID2'") or die(mysqli_error($conn));
                      $gu2 = mysqli_fetch_array($getUser2);
                      $sql_22 = mysqli_query($conn, "SELECT * FROM `tb_pasaran` WHERE code = '$code2'") or die(mysqli_error($conn));
                      $s22 = mysqli_fetch_array($sql_22);
                    ?>
                      <tr>
                        <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no2; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd2['created_date']; ?></td>
                        <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s22['title']; ?></td>
                        <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd2['periode']; ?></td>
                        <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gu2['user']; ?></td>
                        <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gg2['title']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd2['tebak']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd2['posisi']; ?></td>
                        <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd2['nominal'], 0, ",", "."); ?></td>
                        <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd2['diskon'], 0, ",", "."); ?></td>
                        <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd2['bayar'], 0, ",", "."); ?></td>
                        <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd2['jumlah'], 0, ",", "."); ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                          <?php
                          if ($gd2['status'] == 0) {
                            if ($gd2['keterangan'] == 'Menang') {
                              echo "<span class='text-success'>Menang</span>";
                            } else if ($gd2['keterangan'] == '') {
                              echo "<span class='text-warning'>Menunggu</span>";
                            } else {
                              echo "<span class='text-danger'>Kalah</span>";
                            }
                          } else if ($gd2['status'] == 1) {
                            if ($gd2['keterangan'] == 'Menang') {
                              echo "<span class='text-success'>Menang</span>";
                            } else if ($gd2['keterangan'] == '') {
                              echo "<span class='text-warning'>Menunggu</span>";
                            } else {
                              echo "<span class='text-danger'>Kalah</span>";
                            }
                          } else {
                            echo "<span class='text-warning'>Menunggu</span>";
                          }
                          ?>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                <div>
                  Copyright   <?= date('Y') ?> <?= $s0['instansi']; ?>. All Rights Reserved. V<?= $versi; ?> (<small><a href="<?= $updatelink; ?>" target="_blank">Cek Update</a></small>)
                </div>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->

      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?= $urladmin; ?>/assets/vendor/libs/jquery/jquery.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/popper/popper.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/js/bootstrap.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/node-waves/node-waves.js?<?= $cache; ?>"></script>

  <script src="<?= $urladmin; ?>/assets/vendor/libs/hammer/hammer.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/i18n/i18n.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/typeahead-js/typeahead.js?<?= $cache; ?>"></script>

  <script src="<?= $urladmin; ?>/assets/vendor/js/menu.js?<?= $cache; ?>"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?= $urladmin; ?>/assets/vendor/libs/apex-charts/apexcharts.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables/jquery.dataTables.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables-responsive/datatables.responsive.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables-buttons/datatables-buttons.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables-buttons/buttons.html5.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/datatables-buttons/buttons.print.js?<?= $cache; ?>"></script>

  <!-- Main JS -->
  <script src="<?= $urladmin; ?>/assets/js/main.js?<?= $cache; ?>"></script>
  <script>
    $(document).ready(function() {
      //Default data table1
      $('#default-datatable').DataTable();
      //Default data table2
      $('#default-datatable2').DataTable();
      setInterval(function() {
        $('#getNotif').load('<?= $urladmin; ?>/getNotif.php');
      }, 10000);
    });
    $("#market").change(function() {
      url = "<?= $urladmin; ?>/getWinner.php?pid=" + $(this).val();
      $('#periode').load(url);
      //console.log(url);
      return false;
    });
  </script>
</body>

</html>