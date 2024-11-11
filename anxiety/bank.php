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
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/select2/select2.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/apex-charts/apex-charts.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css?<?= $cache; ?>" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/summernote/dist/summernote-bs4.css" />

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
              <span class="text-muted fw-light">Transaction /</span> Rekening Deposit
            </h4>
            <div class="row">
              <?php if ($u['level'] == 'superadmin') : ?>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <?php
                      if (!empty($_GET['notif'])) {
                        if ($_GET['notif'] == 1) {
                          echo '
                              <div class="alert alert-success d-flex align-items-center" role="alert">
                                <span class="alert-icon text-success me-2">
                                  <i class="ti ti-check ti-xs"></i>
                                </span>
                                <span><strong>Well Done!</strong> Account Bank Saved!</span>
                              </div>
                            ';
                        }
                        if ($_GET['notif'] == 2) {
                          echo '
                              <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <span class="alert-icon text-warning me-2">
                                  <i class="ti ti-check ti-xs"></i>
                                </span>
                                <span>Image Required!</span>
                              </div>
                            ';
                        }
                        if ($_GET['notif'] == 3) {
                          echo '
                              <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <span class="alert-icon text-warning me-2">
                                  <i class="ti ti-check ti-xs"></i>
                                </span>
                                <span>Only jpg, jpeg, bmp, x-png, png, webp or gif file are accepted.</span>
                              </div>
                            ';
                        }
                        if ($_GET['notif'] == 4) {
                          echo '
                              <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <span class="alert-icon text-warning me-2">
                                  <i class="ti ti-check ti-xs"></i>
                                </span>
                                <span>Nama metode sudah ada, gunakan nama lain.</span>
                              </div>
                            ';
                        }
                        if ($_GET['notif'] == 5) {
                          echo '
                              <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <span class="alert-icon text-warning me-2">
                                  <i class="ti ti-check ti-xs"></i>
                                </span>
                                <span>Metode default hanya dapat dinonaktifkan.</span>
                              </div>
                            ';
                        }
                        if ($_GET['notif'] == 6) {
                          echo '
                              <div class="alert alert-success d-flex align-items-center" role="alert">
                                <span class="alert-icon text-success me-2">
                                  <i class="ti ti-check ti-xs"></i>
                                </span>
                                <span>Metode telah dihapus.</span>
                              </div>
                            ';
                        }
                      }
                      if (isset($_GET['postID'])) {
                        $postID = $_GET['postID'];
                        $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE cuid = '$postID'") or die(mysqli_error($conn));
                        $s2 = mysqli_fetch_array($sql_2);
                        if (stripos($s2['akun'], ('CRYPTO')) !== FALSE) {
                          $ketlogo = 'Ket: logo cryptocurrency';
                          $ketmetode = 'Ket: nama metode. Contoh: CRYPTO ETH';
                          $ketpemilik = 'Ket: nama crypto. Contoh: ETHEREUM';
                          $ketrekening = 'Ket: alamat crypto. Contoh: TGgGGfFJKsB8vdgokGWKfdJAot7BoXkPnx';
                          $jdlpemilik = 'Nama Crypto';
                          $jdlrekening = 'Wallet Address';
                        } else if (stripos($s2['akun'], ('PAYPAL')) !== FALSE) {
                          $ketlogo = 'Ket: logo paypal';
                          $ketmetode = 'Ket: nama metode. Contoh: PAYPAL';
                          $ketpemilik = 'Ket: nama lengkap di paypal';
                          $ketrekening = 'Ket: email paypal';
                          $jdlpemilik = 'Nama Pemilik';
                          $jdlrekening = 'Email Paypal';
                        } else if (stripos($s2['akun'], ('PULSA')) !== FALSE) {
                          $ketlogo = 'Ket: logo operator';
                          $ketmetode = 'Ket: nama metode. Contoh: PULSA TSEL';
                          $ketpemilik = 'Ket: nama operator. Contoh: TELKOMSEL';
                          $ketrekening = 'Ket: nomor hp';
                          $jdlpemilik = 'Nama Operator';
                          $jdlrekening = 'Nomor HP';
                        } else if (stripos($s2['akun'], ('QRIS')) !== FALSE) {
                          $ketlogo = 'Ket: logo qris';
                          $ketmetode = 'Ket: nama metode. Contoh: QRIS';
                          $ketpemilik = 'Ket: nama lengkap di qris';
                          $ketrekening = 'Ket: link gambar qr code. Contoh: ' . $urldomain . '/assets/images/payment/SCAN_QRIS.png';
                          $jdlpemilik = 'Nama Pemilik';
                          $jdlrekening = 'Link Gambar QR Code';
                        } else if (stripos($s2['akun'], ('EMONEY')) !== FALSE) {
                          $ketlogo = 'Ket: logo emoney';
                          $ketmetode = 'Ket: nama metode. Contoh: EMONEY DANA';
                          $ketpemilik = 'Ket: nama lengkap di emoney';
                          $ketrekening = 'Ket: nomor emoney';
                          $jdlpemilik = 'Nama Pemilik';
                          $jdlrekening = 'Nomor Emoney';
                        } else if (stripos($s2['akun'], ('BANK')) !== FALSE) {
                          $ketlogo = 'Ket: logo bank';
                          $ketmetode = 'Ket: nama metode. Contoh: BANK BCA';
                          $ketpemilik = 'Ket: nama lengkap di rekening';
                          $ketrekening = 'Ket: nomor rekening';
                          $jdlpemilik = 'Nama Pemilik';
                          $jdlrekening = 'Nomor Rekening';
                        } else {
                          $ketlogo = 'Ket: logo bank / emoney, logo qris, logo operator, logo paypal, logo crypto, dll';
                          $ketmetode = 'Ket: nama bank / emoney, qris, operator, paypal, crypto, dll';
                          $ketpemilik = 'Ket: nama lengkap, pemilik rek / emoney, nama qris, nama paypal, dll';
                          $ketrekening = 'Ket: no. rek / emoney, link qr code, no. hp, email paypal, alamat crypto, dll';
                          $jdlpemilik = 'Nama Pemilik';
                          $jdlrekening = 'Nomor Rekening';
                        }
                      } else {
                        $ketlogo = 'Ket: logo bank / emoney, logo qris, logo operator, logo paypal, logo crypto, dll';
                        $ketmetode = 'Ket: nama bank / emoney, qris, operator, paypal, crypto, dll';
                        $ketpemilik = 'Ket: nama lengkap, pemilik rek / emoney, nama qris, nama paypal, dll';
                        $ketrekening = 'Ket: no. rek / emoney, link qr code, no. hp, email paypal, alamat crypto, dll';
                        $jdlpemilik = 'Nama Pemilik';
                        $jdlrekening = 'Nomor Rekening';
                      }
                      ?>
                      <form role="form" action="<?= $urladmin; ?>/function/add-bank.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                          <?php if (!isset($_GET['postID'])) { ?>
                            <label>Upload Logo</label>
                            <input type="file" name="image" class="form-control" value="<?php if (isset($_GET['postID'])) {
                                                                                          echo $s2['image'];
                                                                                        } ?>" <?php if (!isset($_GET['postID'])) {
                                                                                                echo 'required';
                                                                                              } ?>>
                            <small><?= $ketlogo; ?></small>
                          <?php } else { ?>
                            <img src="<?= $domainutama; ?>/upload/bank/<?= $s2['image']; ?>?<?= date('His') ?>" class="img-fluid rounded mt-1" style="max-height: 300px">
                          <?php } ?>
                          <input class="form-control" type="hidden" name="postID" value="<?php if (isset($_GET['postID'])) {
                                                                                            echo $s2['cuid'];
                                                                                          } ?>">
                        </div>
                        <div class="form-group mb-2">
                          <label>Metode Pembayaran</label>
                          <input type="text" name="akun" class="form-control" value="<?php if (isset($_GET['postID'])) {
                                                                                        echo $s2['akun'];
                                                                                      } ?>" <?php if (isset($_GET['postID'])) {
                                                                                              echo 'disabled';
                                                                                            } else {
                                                                                              echo 'required';
                                                                                            } ?>>
                          <small><?= $ketmetode; ?></small>
                        </div>
                        <div class="form-group mb-2">
                          <label><?= $jdlpemilik; ?></label>
                          <input type="text" name="pemilik" class="form-control" value="<?php if (isset($_GET['postID'])) {
                                                                                          echo $s2['pemilik'];
                                                                                        } ?>" <?php if (!isset($_GET['postID'])) {
                                                                                                echo 'required';
                                                                                              } ?>>
                          <small><?= $ketpemilik; ?></small>
                        </div>
                        <div class="form-group mb-2">
                          <label><?= $jdlrekening; ?></label>
                          <input type="text" name="no_rek" class="form-control" value="<?php if (isset($_GET['postID'])) {
                                                                                          echo $s2['no_rek'];
                                                                                        } ?>" <?php if (!isset($_GET['postID'])) {
                                                                                                echo 'required';
                                                                                              } ?>>
                          <small><?= $ketrekening; ?></small>
                          <?php if (stripos($s2['akun'], ('QRIS')) !== FALSE) : ?>
                            <hr>
                            <img src="<?php if (isset($_GET['postID'])) {
                                        echo $s2['no_rek'];
                                      } ?>" style="max-height: 200px">
                          <?php endif; ?>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                          <a href="<?= $urladmin; ?>/bank/" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <div class="<?php if ($u['level'] == 'superadmin') { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?>">
                <div class="card">
                  <div class="card-body">
                    <div class="card-datatable table-responsive">
                      <table id="default-datatable" class="invoice-list-table table border-top">
                        <thead>
                          <tr class="bg-primary">
                            <th class="text-center" style="vertical-align: middle;">No</th>
                            <th class="text-center" style="vertical-align: middle;">Logo</th>
                            <th class="text-center" style="vertical-align: middle;">Metode</th>
                            <th class="text-center" style="vertical-align: middle;">Nama/Pemilik</th>
                            <th class="text-center" style="vertical-align: middle;">No.Rek/Tujuan</th>
                            <th class="text-center" style="vertical-align: middle;">Status</th>
                            <th class="text-center" style="vertical-align: middle;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 ORDER BY akun ASC") or die(mysqli_error($conn));
                          $no = 0;
                          while ($s1 = mysqli_fetch_array($sql_1)) :
                            $no++;
                          ?>
                            <tr>
                              <td class="text-center" style="vertical-align: middle;"><?= $no; ?></td>
                              <td class="text-left" style="vertical-align: middle; white-space: normal;">
                                <img src="<?= $domainutama; ?>/upload/bank/<?= $s1['image']; ?>" class="img-fluid" style="max-height: 50px">
                              </td>
                              <td class="text-left" style="vertical-align: middle; white-space: normal;"><?= $s1['akun']; ?></td>
                              <td class="text-left" style="vertical-align: middle; white-space: normal;"><?= $s1['pemilik']; ?></td>
                              <td class="text-left" style="vertical-align: middle; white-space: normal;"><?= $s1['no_rek']; ?></td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal;">
                                <?php
                                if ($s1['status'] == 1) {
                                  echo '
                                      <span class="text-success">
                                        Online
                                      </span>
                                    ';
                                } else if ($s1['status'] == 0) {
                                  echo '
                                      <span class="text-warning">
                                        Offline
                                      </span>
                                    ';
                                }
                                ?>
                              </td>
                              <td class="text-center" style="vertical-align: middle; white-space: normal;">
                                <a href="<?= $urladmin; ?>/function/bank-status.php?postID=<?= $s1['cuid']; ?>&status=<?= $s1['status']; ?>" class="btn <?php if ($s1['status'] == 1) {
                                                                                                                                                          echo 'btn-warning';
                                                                                                                                                        } else {
                                                                                                                                                          echo 'btn-success';
                                                                                                                                                        } ?> btn-sm m-1" title="<?php if ($s1['status'] == 1) {
                                                                                                                                                                                  echo 'Nonaktifkan';
                                                                                                                                                                                } else {
                                                                                                                                                                                  echo 'Aktifkan';
                                                                                                                                                                                } ?>"><i class="fa fa-power-off"></i></a>
                                <?php if ($u['level'] == 'superadmin') : ?>
                                  <?php if ($s1['cuid'] == 1 or $s1['cuid'] == 2 or $s1['cuid'] == 3 or $s1['cuid'] == 4 or $s1['cuid'] == 5 or $s1['cuid'] == 6 or $s1['cuid'] == 7 or $s1['cuid'] == 8 or $s1['cuid'] == 9 or $s1['cuid'] == 10 or $s1['cuid'] == 11 or $s1['cuid'] == 12 or $s1['cuid'] == 13 or $s1['cuid'] == 14 or $s1['cuid'] == 15 or $s1['cuid'] == 16 or $s1['cuid'] == 17 or $s1['cuid'] == 18 or $s1['cuid'] == 19 or $s1['cuid'] == 20 or $s1['cuid'] == 21 or $s1['cuid'] == 22 or $s1['cuid'] == 23) { ?>
                                    <a href="<?= $urladmin; ?>/bank/?postID=<?= $s1['cuid']; ?>" class="btn btn-primary btn-sm m-1" title="Edit">
                                      <i class="fa fa-edit"></i>
                                    </a>
                                  <?php } else { ?>
                                    <a href="<?= $urladmin; ?>/bank/?postID=<?= $s1['cuid']; ?>" class="btn btn-primary btn-sm m-1" title="Edit">
                                      <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?= $urladmin; ?>/function/del-bank.php?cuid=<?= $s1['cuid']; ?>" class="btn btn-danger btn-sm m-1" title="Hapus" onclick="return confirm('Are you sure want remove this data?');">
                                      <i class="fa fa-trash"></i>
                                    </a>
                                  <?php } ?>
                                <?php endif; ?>
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
  <script src="<?= $urladmin; ?>/assets/vendor/libs/select2/select2.js?<?= $cache; ?>"></script>
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
  <script src="<?= $urladmin; ?>/assets/js/forms-selects.js?<?= $cache; ?>"></script>
  <script src="<?= $urladmin; ?>/assets/vendor/libs/summernote/dist/summernote-bs4.min.js?<?= $cache; ?>"></script>
  <script>
    $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();
      setInterval(function() {
        $('#getNotif').load('<?= $urladmin; ?>/getNotif.php');
      }, 1000);
    });
  </script>
</body>

</html>