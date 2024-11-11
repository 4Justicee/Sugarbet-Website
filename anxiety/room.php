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

  <!-- Helpers -->
  <script src="<?= $urladmin; ?>/assets/vendor/js/helpers.js?<?= $cache; ?>"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="<?= $urladmin; ?>/assets/vendor/js/template-customizer.js?<?= $cache; ?>"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= $urladmin; ?>/assets/js/config.js?<?= $cache; ?>"></script>

  <script src="<?= $urladmin; ?>/assets/vendor/libs/jquery/jquery.js?<?= $cache; ?>"></script>
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
              <span class="text-muted fw-light">Information /</span> Room Member
            </h4>
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-10">
                <!-- Invoice List Table -->
                <div class="card">
                  <div class="card-datatable table-responsive">
                    <table class="invoice-list-table table border-top">
                      <thead>
                        <tr class="bg-primary">
                          <th class="text-center" style="vertical-align: middle;">#</th>
                          <th class="text-center" style="vertical-align: middle;">User</th>
                          <th class="text-center" style="vertical-align: middle;">Room</th>
                          <th class="text-center" style="vertical-align: middle;">Deposit</th>
                          <th class="text-center" style="vertical-align: middle;">Current Balance</th>
                          <th class="text-center" style="vertical-align: middle;">Win/Lose</th>
                          <th class="text-center" style="vertical-align: middle;">Action</th>
                        </tr>
                      </thead>
                      <tbody id="chat-content">
                        <?php
                        $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_ppplayer` WHERE status = 1 ORDER BY cuid DESC") or die(mysqli_error($conn));
                        $no = 0;
                        while ($s1 = mysqli_fetch_array($sql_1)) :
                          $no++;
                          $externalPlayerId = $s1['externalPlayerId'];
                          $usersID = $s1['userID'];
                          $provider = $s1['provider'];
                          $getProvider = mysqli_query($conn, "SELECT * FROM `tb_tripayapi` WHERE provider = '$provider'") or die(mysqli_error($conn));
                          $gp = mysqli_fetch_array($getProvider);
                          $providerID = $gp['cuid'];
                          $urlRequest = $gp['urlRequest'];
                          $secureLogin = $gp['api_key'];
                          $secretKey = $gp['secret_key'];
                          $getTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$usersID' AND jenis = 5 AND providerID = '$providerID' AND status = 1 ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
                          $gt = mysqli_fetch_array($getTransaksi);
                          $getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
                          $gu = mysqli_fetch_array($getUser);
                        ?>
                          <tr>
                            <td class="text-center" style="vertical-align: middle; white-space: normal;"><?= $no; ?></td>
                            <td style="vertical-align: middle; white-space: normal;"><?= $gu['user']; ?></td>
                            <td style="vertical-align: middle; white-space: normal;"><?= $s1['provider']; ?></td>
                            <td class="text-right" style="vertical-align: middle; white-space: normal;">Rp. <?= number_format($gt['total'], 0, ",", "."); ?></td>
                            <td class="text-right" id="chat-content" style="vertical-align: middle; white-space: normal;">
                              <?php
                              echo number_format($s1['balance'], 0, ",", ".");
                              ?>
                            </td>
                            <td class="text-center" style="vertical-align: middle; white-space: normal;">
                              <?php
                              if ($gt['total'] == $newSaldo) {
                                echo '
                                              <span class="btn btn-primary btn-sm">Draw</span>
                                          ';
                              } else if ($gt['total'] > $newSaldo) {
                                echo '
                                              <span class="btn btn-danger btn-sm">Loss</span>
                                          ';
                              } else {
                                echo '
                                              <span class="btn btn-success btn-sm">Profit</span>
                                          ';
                              }
                              ?>
                            </td>
                            <td class="text-center" style="vertical-align: middle; white-space: normal;">
                              <a href="<?= $urladmin; ?>/function/end-<?= $s1['provider']; ?>.php?extplayer=<?= $usersID; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure want End Session this User?');">
                                Kick Member
                              </a>
                            </td>
                          </tr>
                        <?php endwhile; ?>
                        <script>
                          $(document).ready(function() {
                            setInterval(function() {
                              $('#chat-content').load('<?= $urladmin; ?>/getbalance.php');
                            }, 5000);
                          });
                        </script>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-sm-1"></div>
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