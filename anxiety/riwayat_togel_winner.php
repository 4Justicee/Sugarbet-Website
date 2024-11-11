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
              <span class="text-muted fw-light">Transaction /</span> Riwayat Togel Winner
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
                      <select name="tahun" id="tahunis" class="form-control select2-example" style="height: 40px!important;" required>
                        <option value="">Pilih Tahun </option>
                        <?php
                        for ($i = 2023; $i <= date('Y'); $i++) :
                        ?>
                          <option value="<?= $i; ?>"> <?= $i; ?> </option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select name="bulan" id="bulanis" class="form-control select2-example" style="height: 40px!important;" required>
                        <option value="">Pilih Bulan </option>
                        <?php
                        for ($i = 0; $i < 12; $i++) :
                          $a = $i + 1;
                          $aa = strlen($a);
                          if ($aa == 1) {
                            $bulans = '0' . $a;
                          } else {
                            $bulans = $a;
                          }
                        ?>
                          <option value="<?= $bulans; ?>"> <?= $bulan[$i]; ?> </option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block w-100">Filter Data</button>
                    </div>
                    <div class="col-sm-3">

                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-datatable table-responsive">
                <table id="default-datatable" class="invoice-list-table table border-top">
                  <thead>
                    <tr class="bg-primary">
                      <th class="text-center" style="vertical-align: middle;">#</th>
                      <th class="text-center" style="vertical-align: middle;">TrxID</th>
                      <th class="text-center" style="vertical-align: middle;">Date</th>
                      <th class="text-center" style="vertical-align: middle;">User</th>
                      <th class="text-center" style="vertical-align: middle;">Game Play</th>
                      <th class="text-center" style="vertical-align: middle;">Periode</th>
                      <th class="text-center" style="vertical-align: middle;">Angka</th>
                      <th class="text-center" style="vertical-align: middle;">Jumlah</th>
                      <th class="text-center" style="vertical-align: middle;">Ket</th>
                      <th class="text-center" style="vertical-align: middle;">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_taruhan` WHERE pid != 0 AND keterangan = 'Menang' AND status = 1 AND userID NOT IN (1,2) AND `created_date` LIKE '$today%' ORDER BY cuid DESC") or die(mysqli_error($conn));
                    $no = 0;
                    while ($s1 = mysqli_fetch_array($sql_1)) :
                      $no++;
                      $IDuser = $s1['userID'];
                      $keterangan = $s1['keterangan'];
                      $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$IDuser'") or die(mysqli_error($conn));
                      $s2 = mysqli_fetch_array($sql_2);
                    ?>
                      <tr>
                        <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no; ?></td>
                        <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['cuid']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= date('Y-m-d', strtotime($s1['created_date'])); ?><br><?= date('H:i:s', strtotime($s1['created_date'])); ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s2['user']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['code']; ?> <?= $s1['posisi']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['periode']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['tebak']; ?></td>
                        <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?= number_format($s1['jumlah'], 0, ",", "."); ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['keterangan']; ?></td>
                        <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                          <?php
                          if ($s1['status'] == 0) {
                            echo '
                                <span class="badge-dot">
                                  <i class="bg-warning"></i> Menunggu
                                </span>
                              ';
                          } else if ($s1['status'] == 1) {
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