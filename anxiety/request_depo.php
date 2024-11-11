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
            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light">Transaction /</span> Permintaan Deposit
            </h4>

            <!-- Invoice List Table -->
            <div class="card">
              <div class="card-datatable table-responsive">
                <table id="default-datatable" class="invoice-list-table table border-top">
                  <thead>
                    <tr class="bg-primary">
                      <th class="text-center" style="vertical-align: middle;">#</th>
                      <th class="text-center" style="vertical-align: middle;">TrxID</th>
                      <th class="text-center" style="vertical-align: middle;">Date</th>
                      <th class="text-center" style="vertical-align: middle;">User</th>
                      <th class="text-center" style="vertical-align: middle;">Pay Method</th>
                      <th class="text-center" style="vertical-align: middle;">Receiver Name</th>
                      <th class="text-center" style="vertical-align: middle;">Pay Destination</th>
                      <th class="text-center" style="vertical-align: middle;">User Method</th>
                      <th class="text-center" style="vertical-align: middle;">Sender Name</th>
                      <th class="text-center" style="vertical-align: middle;">Pay From</th>
                      <th class="text-center" style="vertical-align: middle;">Deposit Amount</th>
                      <th class="text-center" style="vertical-align: middle;">Transfer Amount</th>
                      <th class="text-center" style="vertical-align: middle;">Note</th>
                      <th class="text-center" style="vertical-align: middle;">Status</th>
                      <th class="text-center" style="vertical-align: middle;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE jenis = 1 AND userID NOT IN (1,2) AND status = 0 ORDER BY cuid DESC") or die(mysqli_error($conn));
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

                      //Proses rate mata uang
                      $trxID = $s1['kd_transaksi'];
                      $sql_5 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE kd_transaksi = '$trxID'") or die(mysqli_error($conn));
                      $s5 = mysqli_fetch_array($sql_5);
                      $s5_cek = mysqli_num_rows($sql_5);
                      $totaltransaksi5 = $s5['total'];
                      $metode5 = $s5['metode'];
                      //get bank admin
                      $getBank5 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE cuid = '$metode5'") or die(mysqli_error($conn));
                      $gb5 = mysqli_fetch_array($getBank5);
                      $metodenya5 = $gb5['akun'];
                      if (stripos($metodenya5, ('CRYPTO')) !== FALSE) {
                        if (stripos($metodenya5, ('BTC')) !== FALSE or stripos($metodenya5, ('BITCOIN')) !== FALSE) {
                          $currency5 = 'BTC';
                          $totbar5 = $totaltransaksi5 / $ratebitcoin;
                          $totbarfix5 = number_format($totbar5, 8, ",", ".");
                          $namapengirim = 'Blockchain BTC';
                          $nomorpengirim = 'Address Pengirim';
                          $namapenerima = 'Blockchain BTC';
                        } else if (stripos($metodenya5, ('ETH')) !== FALSE or stripos($metodenya5, ('ETHEREUM')) !== FALSE) {
                          $currency5 = 'ETH';
                          $totbar5 = $totaltransaksi5 / $rateethereum;
                          $totbarfix5 = number_format($totbar5, 8, ",", ".");
                          $namapengirim = 'Blockchain ETH';
                          $nomorpengirim = 'Address Pengirim';
                          $namapenerima = 'Blockchain ETH';
                        } else if (stripos($metodenya5, ('USDT')) !== FALSE or stripos($metodenya5, ('TRC20')) !== FALSE) {
                          $currency5 = 'USDT TRC20';
                          $totbar5 = $totaltransaksi5 / $rateusdt;
                          $totbarfix5 = number_format($totbar5, 8, ",", ".");
                          $namapengirim = 'Blockchain USDT';
                          $nomorpengirim = 'Address Pengirim';
                          $namapenerima = 'Blockchain USDT';
                        }
                      } else if (stripos($metodenya5, ('PAYPAL')) !== FALSE) {
                        $currency5 = 'USD';
                        $totbar5 = $totaltransaksi5 / $rateusd;
                        $totbarfix5 = number_format($totbar5, 2, ",", ".");
                        $namapengirim = $s4['pemilik'];
                        $nomorpengirim = 'Email Paypal Pengirim';
                        $namapenerima = $s3['pemilik'];
                      } else if (stripos($metodenya5, ('PULSA')) !== FALSE) {
                        if (stripos($metodenya5, ('TSEL')) !== FALSE or stripos($metodenya5, ('TELKOMSEL')) !== FALSE) {
                          $currency5 = 'PULSA';
                          $totbar5 = $totaltransaksi5 / $ratepulsa;
                          $totrate5 = ceil($totbar5 / 1000) * 1000;
                          $totbarfix5 = number_format($totrate5, 0, ",", ".");
                          $namapengirim = 'Operator TELKOMSEL';
                          $nomorpengirim = 'Nomor Pengirim';
                          $namapenerima = 'Operator TELKOMSEL';
                        } else if (stripos($metodenya5, ('ISAT')) !== FALSE or stripos($metodenya5, ('INDOSAT')) !== FALSE) {
                          $currency5 = 'PULSA';
                          $totbar5 = $totaltransaksi5 / $ratepulsa;
                          $totrate5 = ceil($totbar5 / 1000) * 1000;
                          $totbarfix5 = number_format($totrate5, 0, ",", ".");
                          $namapengirim = 'Operator INDOSAT';
                          $nomorpengirim = 'Nomor Pengirim';
                          $namapenerima = 'Operator INDOSAT';
                        } else if (stripos($metodenya5, ('AXIS')) !== FALSE or stripos($metodenya5, ('AXIS')) !== FALSE) {
                          $currency5 = 'PULSA';
                          $totbar5 = $totaltransaksi5 / $ratepulsa;
                          $totrate5 = ceil($totbar5 / 1000) * 1000;
                          $totbarfix5 = number_format($totrate5, 0, ",", ".");
                          $namapengirim = 'Operator AXIS';
                          $nomorpengirim = 'Nomor Pengirim';
                          $namapenerima = 'Operator AXIS';
                        } else if (stripos($metodenya5, ('XL')) !== FALSE or stripos($metodenya5, ('XL AXIATA')) !== FALSE) {
                          $currency5 = 'PULSA';
                          $totbar5 = $totaltransaksi5 / $ratepulsa;
                          $totrate5 = ceil($totbar5 / 1000) * 1000;
                          $totbarfix5 = number_format($totrate5, 0, ",", ".");
                          $namapengirim = 'Operator XL AXIATA';
                          $nomorpengirim = 'Nomor Pengirim';
                          $namapenerima = 'Operator XL AXIATA';
                        }
                      } else if (stripos($metodenya5, ('QRIS')) !== FALSE) {
                        $currency5 = 'IDR';
                        $totbar5 = $totaltransaksi5 / $rateidr;
                        $totbarfix5 = number_format($totbar5, 0, ",", ".");
                        $namapengirim = $s4['pemilik'];
                        $nomorpengirim = 'Nomor / QR Pengirim';
                        $namapenerima = $s3['pemilik'];
                      } else if (stripos($metodenya5, ('EMONEY')) !== FALSE) {
                        $currency5 = 'IDR';
                        $totbar5 = $totaltransaksi5 / $rateidr;
                        $totbarfix5 = number_format($totbar5, 0, ",", ".");
                        $namapengirim = $s4['pemilik'];
                        $nomorpengirim = 'Nomor / QR Pengirim';
                        $namapenerima = $s3['pemilik'];
                      } else if (stripos($metodenya5, ('BANK')) !== FALSE) {
                        $currency5 = 'IDR';
                        $totbar5 = $totaltransaksi5 / $rateidr;
                        $totbarfix5 = number_format($totbar5, 0, ",", ".");
                        $namapengirim = $s4['pemilik'];
                        $nomorpengirim = 'Rekening Pengirim';
                        $namapenerima = $s3['pemilik'];
                      } else {
                        $currency5 = 'IDR';
                        $totbar5 = $totaltransaksi5 / $rateidr;
                        $totbarfix5 = number_format($totbar5, 0, ",", ".");
                        $namapengirim = $s4['pemilik'];
                        $nomorpengirim = 'Rekening Pengirim';
                        $namapenerima = $s3['pemilik'];
                      }

                      //Info metode pengirim pembayaran
                      if ($s1['metode'] == 0) {
                        $notestatusdepo = 'Transfer Amount adalah Jumlah yang Ditransfer. Deposit Amount adalah Saldo yang Diterima. Pembayaran ini manual di input oleh admin.';
                      } else {
                        if ($s3['akun'] == $s4['akun']) {
                          $notestatusdepo = 'Transfer Amount adalah Jumlah yang Ditransfer. Deposit Amount adalah Saldo yang Diterima. Metode deposit di akun member ini sama dengan metode tujuan (dari ' . $s4['akun'] . ' ke ' . $s3['akun'] . ').';
                        } else {
                          $notestatusdepo = 'Transfer Amount adalah Jumlah yang Ditransfer. Deposit Amount adalah Saldo yang Diterima. Metode deposit di akun member ini tidak sama dengan metode tujuan (dari ' . $s4['akun'] . ' ke ' . $s3['akun'] . ').';
                        }
                      }
                    ?>
                      <tr>
                        <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no; ?></td>
                        <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['kd_transaksi']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= date('d-m-Y', strtotime($s1['date'])); ?><br><?= date('H:i:s', strtotime($s1['date'])); ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s2['user']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><b><?php if ($s1['metode'] == 0) {
                                                                                                                            echo 'By System';
                                                                                                                          } else {
                                                                                                                            echo $s3['akun'];
                                                                                                                          } ?></b></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><b><?php if ($s1['metode'] == 0) {
                                                                                                                            echo 'By System';
                                                                                                                          } else {
                                                                                                                            echo $namapenerima;
                                                                                                                          } ?></b></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if ($s1['metode'] == 0) {
                                                                                                                        echo 'By System';
                                                                                                                      } else {
                                                                                                                        echo $s3['no_rek'];
                                                                                                                      } ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><b><?php if ($s1['metode'] == 0) {
                                                                                                                            echo 'By System';
                                                                                                                          } else {
                                                                                                                            echo $s4['akun'];
                                                                                                                          } ?></b></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><b><?php if ($s1['metode'] == 0) {
                                                                                                                            echo 'By System';
                                                                                                                          } else {
                                                                                                                            echo $namapengirim;
                                                                                                                          } ?></b></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if ($s1['metode'] == 0) {
                                                                                                                        echo 'By System';
                                                                                                                      } else {
                                                                                                                        echo $s4['no_rek'];
                                                                                                                      } ?> (<?= $nomorpengirim; ?>)</td>
                        <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px;"><b class="text-success"><?= number_format($totaltransaksi5, 0, ",", "."); ?></b> IDR</td>
                        <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px;"><b class="text-warning"><?= $totbarfix5; ?></b> <?= $currency5; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                          <?php if ($s1['note'] == '') { ?>
                            <a onclick="alert('<?= $notestatusdepo; ?>');" class="btn btn-sm btn-info text-white">Info</a><br>
                            Tanpa Bukti & Catatan.
                          <?php } else if ($s1['note'] == 'Bonus') {
                            echo $s1['transaksi'];
                          } else if ($s1['note'] == 'no-photo.webp') { ?>
                            <a onclick="alert('<?= $notestatusdepo; ?>');" class="btn btn-sm btn-info text-white">Info</a>
                            <a href="<?= $urldomain; ?>/upload/bukti/no-photo.webp" target="_blank">Tanpa Bukti</a><br>
                          <?php } else if ($s1['note'] != 'no-photo.webp' or $s1['note'] != 'no-photo.jpg') { ?>
                            <?php if ($domainutama == $urldomain) { ?>
                              <a onclick="alert('<?= $notestatusdepo; ?>');" class="btn btn-sm btn-info text-white">Info</a><br>
                              <a href="<?= $urldomain; ?>/upload/bukti/<?= $s1['note']; ?>" target="_blank">Bukti</a>
                            <?php } else { ?>
                              <a onclick="alert('<?= $notestatusdepo; ?>');" class="btn btn-sm btn-info text-white">Info</a><br>
                              <a onclick="alert('Karna Deposit dari domain lain, untuk melihat bukti transfer cek nama web di Catatan (ex: bukti_namaweb_123.png), klik linknya dan ubah link gambar di address bar sesuai nama web pada domain lain. Hubungi developer jika belum paham.');" class="btn btn-sm btn-primary text-white">Bukti</a><br>
                              Catatan: <a href="<?= $urldomain; ?>/upload/bukti/<?= $s1['note']; ?>" target="_blank"><?= $s1['note']; ?></a>
                            <?php } ?>
                          <?php } else { ?>
                            <a onclick="alert('<?= $notestatusdepo; ?>');" class="btn btn-sm btn-info text-white">Info</a><br>
                            <?= $s1['note']; ?>
                          <?php } ?>
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
                          }
                          ?>
                        </td>
                        <td class="text-center" style="vertical-align: middle; white-space: nowrap; font-size: 14px;">
                          <?php if ($s2['level'] == 'superadmin' or $s2['level'] == 'admin') { ?>
                            <a href="<?= $urladmin; ?>/function/reject_topup.php?cuid=<?= $s1['cuid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to Reject this Transaction?');">Tolak</a>
                          <?php } else { ?>
                            <a href="<?= $urladmin; ?>/function/proses_topup.php?cuid=<?= $s1['cuid']; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure want to Confirm this Transaction?');">Proses</a>
                            <a href="<?= $urladmin; ?>/function/reject_topup.php?cuid=<?= $s1['cuid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to Reject this Transaction?');">Tolak</a>
                          <?php } ?>
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
      //Default data table
      $('#default-datatable').DataTable();
      setInterval(function() {
        $('#getNotif').load('<?= $urladmin; ?>/getNotif.php');
      }, 10000);
    });
  </script>
</body>

</html>