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
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css?<?= $cache; ?>" />

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
            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light">Transaction /</span> Turnover Member
            </h4>
            <!-- Invoice List Table -->
            <?php
            if (isset($_GET['submit'])) {
              $today = $_GET['tahun'] . '-' . $_GET['bulan'];
            } else {
              $today = date('Y-m');
            }
            ?>
            <div class="card mb-3">
              <div class="card-body">
                <form role="form" class="form-group" method="get" action="">
                  <div class="row">
                    <div class="col-sm-3">
                      <select name="pid" class="form-control" style="height: 40px!important;" required>
                        <option value="">Pilih User</option>
                        <?php
                        $sql_21 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE level NOT IN ('superadmin','admin') ORDER BY cuid DESC") or die(mysqli_error($conn));
                        while ($s21 = mysqli_fetch_array($sql_21)) :
                        ?>
                          <option value="<?= $s21['cuid']; ?>" <?php if (isset($_GET['pid'])) {
                                                                  if ($_GET['pid'] == $s21['cuid']) {
                                                                    echo ' selected=selected';
                                                                  }
                                                                } ?>><?= $s21['user']; ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="start_date" class="form-control datepicker" placeholder="Start Date" required>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="end_date" class="form-control datepicker" placeholder="End Date" required>
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block w-100">Filter Data</button>
                    </div>
                  </div>
                </form>
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
                        <th class="text-center" style="vertical-align: middle;">User</th>
                        <th class="text-center" style="vertical-align: middle;">Game</th>
                        <th class="text-center" style="vertical-align: middle;">Bet Amount</th>
                        <th class="text-center" style="vertical-align: middle;">Win/Lose</th>
                        <th class="text-center" style="vertical-align: middle;">Note</th>
                        <th class="text-center" style="vertical-align: middle;">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $pid = $_GET['pid'];
                      $startDate = date('Y-m-d 00:00:00', strtotime($_GET['start_date']));
                      $endDate = date('Y-m-d 00:00:00', strtotime($_GET['end_date']));
                      $getDepo = mysqli_query($conn, "SELECT * FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$pid' AND `created_date` BETWEEN '$startDate' AND '$endDate' ORDER BY cuid DESC") or die(mysqli_error($conn));
                      $no = 0;
                      while ($gd = mysqli_fetch_array($getDepo)) :
                        $no++;
                        $usersID = $gd['userID'];
                        $gameid = $gd['gameid'];
                        $getGame = mysqli_query($conn, "SELECT * FROM `tb_game` WHERE cuid = '$gameid'") or die(mysqli_error($conn));
                        $gg = mysqli_fetch_array($getGame);
                        $getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
                        $gu = mysqli_fetch_array($getUser);
                      ?>
                        <tr>
                          <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no; ?></td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd['created_date']; ?></td>
                          <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gu['user']; ?></td>
                          <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $gd['code']; ?></td>
                          <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($gd['nominal'], 0, ",", "."); ?></td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                            <?php
                            if ($gd['bayar'] < $gd['nominal']) {
                              echo '<span class="text-danger"> -' . number_format($gd['bayar'], 0, ",", ".") . '</span>';
                            } else {
                              echo '<span class="text-success"> +' . number_format($gd['bayar'], 0, ",", ".") . '</span>';
                            }
                            ?>
                          </td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                            <?php
                            if ($gd['keterangan'] == 'Menang') {
                              echo 'Menang';
                            } else if ($gd['keterangan'] == 'Kalah') {
                              echo 'Kalah';
                            } else {
                              echo 'Menunggu';
                            }
                            ?>
                          </td>
                          <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                            <?php
                            if ($gd['status'] == 0) {
                              echo '
                              <span class="badge-dot">
                              <i class="bg-warning"></i> Menunggu
                              </span>
                              ';
                            } else if ($gd['status'] == 1) {
                              echo '
                              <span class="badge-dot">
                              <i class="bg-success"></i> Sukses
                              </span>
                              ';
                            } else {
                              echo '
                              <span class="badge-dot">
                              <i class="bg-danger"></i> Ditolak
                              </span>
                              ';
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
                  $totalSpin = mysqli_query($conn, "SELECT COUNT(*) as spin FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$pid' AND `created_date` BETWEEN '$startDate' AND '$endDate'") or die(mysqli_error($conn));
                  $ts = mysqli_fetch_array($totalSpin);

                  $totalBet = mysqli_query($conn, "SELECT SUM(nominal) as nominal FROM `tb_taruhan` WHERE `pid` = 0 AND userID = '$pid' AND `created_date` BETWEEN '$startDate' AND '$endDate'") or die(mysqli_error($conn));
                  $tb = mysqli_fetch_array($totalBet);

                  $totalWin = mysqli_query($conn, "SELECT SUM(bayar) as win FROM `tb_taruhan` WHERE keterangan = 'Menang' AND `pid` = 0 AND userID = '$pid' AND `created_date` BETWEEN '$startDate' AND '$endDate'") or die(mysqli_error($conn));
                  $tp = mysqli_fetch_array($totalWin);

                  $totalLos = mysqli_query($conn, "SELECT SUM(bayar) as loss FROM `tb_taruhan` WHERE keterangan = 'Kalah' AND `pid` = 0 AND userID = '$pid' AND `created_date` BETWEEN '$startDate' AND '$endDate'") or die(mysqli_error($conn));
                  $tl = mysqli_fetch_array($totalLos);

                  $AmbilTO = mysqli_query($conn, "SELECT * FROM `tb_turnover` WHERE userID NOT IN (1,2) AND `userID` = '$pid' AND `status` = 1 ORDER BY cuid DESC") or die(mysqli_error($conn));
                  $gto = mysqli_num_rows($AmbilTO);
                  $AmbilST = mysqli_query($conn, "SELECT * FROM `tb_turnover` WHERE userID NOT IN (1,2) AND `userID` = '$pid' AND `status` = 1 ORDER BY cuid DESC") or die(mysqli_error($conn));
                  $gtz = mysqli_fetch_array($AmbilST);

                  if ($gto == 0) {
                    $totalTO = 0;
                    $sisaTO = 0;
                  } else {
                    $totalTO = $gtz['total_to'];
                    $sisaTO = $totalTO - $tb['nominal'];
                  }
                  ?>
                  <h5>Detail Transaksi <?= $gu['user']; ?></h5>
                  <ul>
                    <li>
                      Note:
                      <?php if ($tp['win'] < $tl['loss']) { ?>
                        <span class="text-danger">Loss</span>
                      <?php } else if ($tp['win'] > $tl['loss']) { ?>
                        <span class="text-success">Win</span>
                      <?php } else { ?>
                        <span class="text-primary">Draw</span>
                      <?php } ?>
                    </li>
                    <li>Total Spin: <?= $ts['spin']; ?></li>
                    <li>Total Bet: <?= number_format($tb['nominal'], 0, ",", "."); ?></li>
                    <li>Total Win: Rp. <?= number_format($tp['win'], 0, ",", "."); ?></li>
                    <li>Total Loss: Rp. <?= number_format($tl['loss'], 0, ",", "."); ?></li>
                    <li>Total Turnover: Rp. <?= number_format($totalTO, 0, ",", "."); ?></li>
                    <li>Sisa Turnover: Rp. <?= number_format($sisaTO, 0, ",", "."); ?></li>
                  </ul>
                </div>
              </div>
            <?php endif; ?>
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
  <script src="<?= $urladmin; ?>/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js?<?= $cache; ?>"></script>

  <!-- Main JS -->
  <script src="<?= $urladmin; ?>/assets/js/main.js?<?= $cache; ?>"></script>
  <script>
    $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();
      $('.datepicker').datepicker({
        todayHighlight: true,
        format: 'dd-mm-yyyy',
        orientation: isRtl ? 'auto right' : 'auto left'
      });
      setInterval(function() {
        $('#getNotif').load('<?= $urladmin; ?>/getNotif.php');
      }, 1000);
    });
  </script>
</body>

</html>