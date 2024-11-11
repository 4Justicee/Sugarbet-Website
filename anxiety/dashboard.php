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
            <div class="row">
              <?php
              $today = date('Y-m');
              $sql_1 = mysqli_query($conn, "SELECT SUM(total) as deposit FROM `tb_transaksi` WHERE status = 1 AND jenis = 1 AND date LIKE '$today%'") or die(mysqli_error($conn));
              $s1 = mysqli_fetch_array($sql_1);
              $sql_2 = mysqli_query($conn, "SELECT SUM(total) as withdraw FROM `tb_transaksi` WHERE status = 1 AND jenis = 2 AND date LIKE '$today%'") or die(mysqli_error($conn));
              $s2 = mysqli_fetch_array($sql_2);
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE status = 1 AND level = 'user'") or die(mysqli_error($conn));
              $s3 = mysqli_num_rows($sql_3);
              $sql_6 = mysqli_query($conn, "SELECT SUM(hits) as visitor FROM `tb_stat`") or die(mysqli_error($conn));
              $s6 = mysqli_fetch_array($sql_6);
              ?>
              <!-- Statistics -->
              <div class="col-xl-12 mb-4 col-lg-12 col-12">
                <div class="card h-100">
                  <div class="card-header">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title mb-0">Statistics</h5>
                      <small class="text-muted">Statistik Bulan Ini</small>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row gy-3">
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-info me-3 p-2">
                            <i class="ti ti-users ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0"><?= $s3; ?></h5>
                            <small>Total Member (<a href="<?= $urladmin; ?>/member/">Cek Detail</a>)</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-danger me-3 p-2">
                            <i class="ti ti-shopping-cart ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0"><?= number_format($s1['deposit'], 0, ",", "."); ?></h5>
                            <small>Total Deposit (<a href="<?= $urladmin; ?>/topup/">Cek Detail</a>)</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-primary me-3 p-2">
                            <i class="ti ti-chart-pie-2 ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0">Rp. <?= number_format($s2['withdraw'], 0, ",", "."); ?></h5>
                            <small>Total Withdraw (<a href="<?= $urladmin; ?>/withdraw/">Cek Detail</a>)</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="badge rounded-pill bg-label-success me-3 p-2">
                            <i class="ti ti-currency-dollar ti-sm"></i>
                          </div>
                          <div class="card-info">
                            <h5 class="mb-0"><?= number_format($fiversAgentBalance, 0, ",", "."); ?></h5>
                            <small>Total Coin <?php if ($u['level'] == 'superadmin') { ?>(<a href="<?= $urladmin; ?>/setting/#coin">Apa itu Coin?</a>) <?php } ?></small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Statistics -->

              <!-- Revenue Report -->
              <div class="col-12 col-xl-12 mb-4 col-lg-12">
                <div class="card h-100">
                  <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                    <div class="card-title mb-0">
                      <h5 class="mb-0">Laporan Keuangan</h5>
                      <small class="text-muted">Transaksi Bulan Ini</small>
                    </div>
                    <!-- </div> -->
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                        <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                          <h1 class="mb-0">Rp. <?= number_format($s1['deposit'], 0, ",", "."); ?></h1>
                          <div class="badge rounded bg-label-success"></div>
                        </div>
                        <small class="text-muted"></small>
                      </div>
                      <div class="col-12 col-md-8">
                        <div id="weeklyEarningReports"></div>
                      </div>
                    </div>
                    <div class="border rounded p-3 mt-2">
                      <div class="row gap-4 gap-sm-0">
                        <div class="col-6 col-sm-6">
                          <div class="d-flex gap-2 align-items-center">
                            <div class="badge rounded bg-label-primary p-1">
                              <i class="ti ti-currency-dollar ti-sm"></i>
                            </div>
                            <h6 class="mb-0">Total Deposit</h6>
                          </div>
                          <h4 class="my-2 pt-1">Rp. <?= number_format($s1['deposit'], 0, ",", "."); ?></h4>
                          <div class="progress w-75" style="height: 4px">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6">
                          <div class="d-flex gap-2 align-items-center">
                            <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                            <h6 class="mb-0">Total Withdraw</h6>
                          </div>
                          <h4 class="my-2 pt-1">Rp. <?= number_format($s2['withdraw'], 0, ",", "."); ?></h4>
                          <div class="progress w-75" style="height: 4px">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Revenue Report -->

              <!-- Popular Product -->
              <div class="col-md-12 col-xl-12 mb-4">
                <div class="card h-100">
                  <div class="card-header d-flex justify-content-between">
                    <div class="card-title m-0 me-2">
                      <h5 class="m-0 me-2">Permintaan Deposit</h5>
                      <small class="text-muted">Permintaan Deposit Terakhir</small>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr class="bg-primary text-white">
                            <th class="text-center" style="vertical-align: middle;">#</th>
                            <th class="text-center" style="vertical-align: middle;">TrxID</th>
                            <th class="text-center" style="vertical-align: middle;">Date</th>
                            <th class="text-center" style="vertical-align: middle;">User</th>
                            <th class="text-center" style="vertical-align: middle;">Pay Method</th>
                            <th class="text-center" style="vertical-align: middle;">User Method</th>
                            <th class="text-center" style="vertical-align: middle;">Deposit Amount</th>
                            <th class="text-center" style="vertical-align: middle;">Note</th>
                            <th class="text-center" style="vertical-align: middle;">Status</th>
                            <th class="text-center" style="vertical-align: middle;">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE jenis = 1 AND userID NOT IN (1,2) AND status = 0 ORDER BY cuid DESC LIMIT 10") or die(mysqli_error($conn));
                          $no = 0;
                          while ($s1 = mysqli_fetch_array($sql_1)) :
                            $no++;
                            $metode = $s1['metode'];
                            $pay_from = $s1['pay_from'];
                            $IDuser = $s1['userID'];
                            $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$IDuser'") or die(mysqli_error($conn));
                            $s2 = mysqli_fetch_array($sql_2);
                            $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE cuid = '$metode'") or die(mysqli_error($conn));
                            $s3 = mysqli_fetch_array($sql_3);
                            $sql_4 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE cuid = '$pay_from'") or die(mysqli_error($conn));
                            $s4 = mysqli_fetch_array($sql_4);
                          ?>
                            <tr>
                              <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no; ?></td>
                              <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['kd_transaksi']; ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= date('Y-m-d', strtotime($s1['date'])); ?><br><?= date('H:i:s', strtotime($s1['date'])); ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s2['user']; ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if ($s1['metode'] == 0) {
                                                                                                                              echo 'By Sistem';
                                                                                                                            } else {
                                                                                                                              echo $s3['akun'];
                                                                                                                            } ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if ($s1['pay_from'] == 0) {
                                                                                                                              echo 'By Sistem';
                                                                                                                            } else {
                                                                                                                              echo $s4['akun'];
                                                                                                                            } ?></td>
                              <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($s1['total'], 0, ",", "."); ?> IDR</td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                                <?php if ($s1['note'] == '') {
                                  echo "Tanpa Bukti & Catatan";
                                } else if ($s1['note'] == 'no-photo.webp') { ?>
                                  <a href="<?= $urldomain; ?>/upload/bukti/no-photo.webp" class="btn btn-sm btn-primary" target="_blank">Tanpa Bukti</a>
                                <?php } else if ($s1['note'] != 'no-photo.webp' or $s1['note'] != 'no-photo.jpg') { ?>
                                  <?php if ($domainutama == $urldomain) { ?>
                                    <a href="<?= $urldomain; ?>/upload/bukti/<?= $s1['note']; ?>" class="btn btn-sm btn-primary" target="_blank">Bukti</a><br>
                                  <?php } else { ?>
                                    <a onclick="alert('Karna Deposit dari domain lain, untuk melihat bukti transfer cek nama web di Catatan (ex: bukti_namaweb_123.png), klik linknya dan ubah domain di address bar sesuai domain lain Anda. Hubungi developer jika belum paham.');" class="btn btn-sm btn-primary  text-white">Bukti</a><br>
                                    <a href="<?= $urldomain; ?>/upload/bukti/<?= $s1['note']; ?>" target="_blank"><?= $s1['note']; ?></a>
                                  <?php } ?>
                                <?php } else {
                                  echo $s1['note'];
                                } ?>
                              </td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                                <?php
                                if ($s1['status'] == 0) {
                                  echo '
                                    <div class="btn btn-warning btn-sm">Pending</div>
                                  ';
                                } else if ($s1['status'] == 1) {
                                  echo '
                                    <div class="btn btn-success btn-sm">Sukses</div>
                                  ';
                                } else {
                                  echo '
                                    <div class="btn btn-danger btn-sm">Ditolak</div>
                                  ';
                                } ?>
                              </td>
                              <td class="text-center" style="vertical-align: middle; white-space: nowrap; font-size: 14px;">
                                <?php if ($s2['level'] == 'superadmin' or $s2['level'] == 'admin') { ?>
                                  <a href="<?= $urladmin; ?>/function/reject_topup.php?cuid=<?= $s1['cuid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to Reject this Transaction?');">Tolak</a>
                                <?php } else { ?>
                                  <a href="<?= $urladmin; ?>/request_depo/" class="btn btn-info btn-sm">Detail</a>
                                <?php } ?>
                              </td>
                            </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Popular Product -->

              <!-- Popular Product -->
              <div class="col-md-12 col-xl-12 mb-4">
                <div class="card h-100">
                  <div class="card-header d-flex justify-content-between">
                    <div class="card-title m-0 me-2">
                      <h5 class="m-0 me-2">Permintaan Withdraw</h5>
                      <small class="text-muted">Permintaan Withdraw Terakhir</small>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr class="bg-primary text-white">
                            <th class="text-center" style="vertical-align: middle;">#</th>
                            <th class="text-center" style="vertical-align: middle;">TrxID</th>
                            <th class="text-center" style="vertical-align: middle;">Date</th>
                            <th class="text-center" style="vertical-align: middle;">User</th>
                            <th class="text-center" style="vertical-align: middle;">Pay Method</th>
                            <th class="text-center" style="vertical-align: middle;">User Method</th>
                            <th class="text-center" style="vertical-align: middle;">Withdraw Amount</th>
                            <th class="text-center" style="vertical-align: middle;">Note</th>
                            <th class="text-center" style="vertical-align: middle;">Status</th>
                            <th class="text-center" style="vertical-align: middle;">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE jenis = 2 AND userID NOT IN (1,2) AND status = 0 ORDER BY cuid DESC LIMIT 10") or die(mysqli_error($conn));
                          $no = 0;
                          while ($s1 = mysqli_fetch_array($sql_1)) :
                            $no++;
                            $metode = $s1['metode'];
                            $pay_from = $s1['pay_from'];
                            $IDuser = $s1['userID'];
                            $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$IDuser'") or die(mysqli_error($conn));
                            $s2 = mysqli_fetch_array($sql_2);
                            $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE cuid = '$metode'") or die(mysqli_error($conn));
                            $s3 = mysqli_fetch_array($sql_3);
                            $sql_4 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE cuid = '$pay_from'") or die(mysqli_error($conn));
                            $s4 = mysqli_fetch_array($sql_4);
                          ?>
                            <tr>
                              <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no; ?></td>
                              <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['kd_transaksi']; ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= date('Y-m-d', strtotime($s1['date'])); ?><br><?= date('H:i:s', strtotime($s1['date'])); ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s2['user']; ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if ($s1['pay_from'] == 0) {
                                                                                                                              echo 'By System';
                                                                                                                            } else {
                                                                                                                              echo $s4['akun'];
                                                                                                                            } ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if ($s1['metode'] == 0) {
                                                                                                                              echo 'By System';
                                                                                                                            } else {
                                                                                                                              echo $s3['akun'];
                                                                                                                            } ?></td>
                              <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($s1['total'], 0, ",", "."); ?> IDR</td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                                <?php if ($s1['note'] == '') {
                                  echo "Tanpa Bukti & Catatan";
                                } else if ($s1['note'] == 'no-photo.webp') { ?>
                                <?php } else if ($s1['note'] != 'no-photo.webp' or $s1['note'] != 'no-photo.jpg') { ?>
                                  <?php if ($domainutama == $urldomain) { ?>
                                    <?= $s1['note']; ?>
                                  <?php } else { ?>
                                    <?= $s1['note']; ?>
                                  <?php } ?>
                                <?php } else {
                                  echo $s1['note'];
                                } ?>
                              </td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                                <?php
                                if ($s1['status'] == 0) {
                                  echo '
                                    <div class="btn btn-warning btn-sm">Pending</div>
                                  ';
                                } else if ($s1['status'] == 1) {
                                  echo '
                                    <div class="btn btn-success btn-sm">Sukses</div>
                                  ';
                                } else {
                                  echo '
                                    <div class="btn btn-danger btn-sm">Ditolak</div>
                                  ';
                                } ?>
                              </td>
                              <td class="text-center" style="vertical-align: middle; white-space: nowrap; font-size: 14px;">
                                <?php if ($s2['level'] == 'superadmin' or $s2['level'] == 'admin') { ?>
                                  <a href="<?= $urladmin; ?>/function/reject_withdraw.php?cuid=<?= $s1['cuid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to Reject this Transaction?');">Tolak</a>
                                <?php } else { ?>
                                  <a href="<?= $urladmin; ?>/request_wd/" class="btn btn-info btn-sm">Detail</a>
                                <?php } ?>
                              </td>
                            </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Popular Product -->

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
  <script src="<?= $urladmin; ?>/assets/js/dashboards-analytics.js?<?= $cache; ?>"></script>
  <script>
    $(document).ready(function() {
      setInterval(function() {
        $('#getNotif').load('<?= $urladmin; ?>/getNotif.php');
      }, 10000);
    });
  </script>
</body>

</html>