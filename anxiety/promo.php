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
              <span class="text-muted fw-light">Information /</span> Promotion
            </h4>
            <div class="row">
              <div class="col-sm-6">
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
                                <span><strong>Well Done!</strong> Promotion Saved!</span>
                              </div>
                            ';
                      }
                      if ($_GET['notif'] == 2) {
                        echo '
                              <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <span class="alert-icon text-warning me-2">
                                  <i class="ti ti-bell ti-xs"></i>
                                </span>
                                <span>Max Image Size 2MB!</span>
                              </div>
                            ';
                      }
                      if ($_GET['notif'] == 3) {
                        echo '
                              <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <span class="alert-icon text-warning me-2">
                                  <i class="ti ti-bell ti-xs"></i>
                                </span>
                                <span>Only JPG atau PNG!</span>
                              </div>
                            ';
                      }
                    }
                    if (isset($_GET['postID'])) {
                      $catID = $_GET['postID'];
                      $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_post` WHERE cuid = '$catID'") or die(mysqli_error($conn));
                      $s2 = mysqli_fetch_array($sql_2);
                    }
                    ?>
                    <form role="form" action="<?= $urladmin; ?>/function/add-promo.php" method="post" enctype="multipart/form-data">
                      <div class="form-group mb-2">
                        <label class="form-label">Upload Image :</label>
                        <input class="form-control" type="file" name="image">
                        <?php if (isset($_GET['postID'])) : ?>
                          <img src="<?= $domainutama; ?>/upload/blog/<?= $s2['image']; ?>?<?= date('His') ?>" class="img-fluid rounded mt-1" style="max-height: 300px">
                        <?php endif; ?>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Promotion Title :</label>
                        <input class="form-control" type="text" name="title" value="<?php if (isset($_GET['postID'])) {
                                                                                      echo $s2['title'];
                                                                                    } ?>" required>
                        <input class="form-control" type="hidden" name="postID" value="<?php if (isset($_GET['postID'])) {
                                                                                          echo $s2['cuid'];
                                                                                        } ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Description :</label>
                        <textarea class="form-control summernoteEditor" type="text" name="content"><?php if (isset($_GET['postID'])) {
                                                                                                      echo $s2['content'];
                                                                                                    } ?></textarea>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Jenis Promo :</label>
                        <select name="kategori" class="form-control" required>
                          <option> Pilih </option>
                          <option value="0" <?php if (isset($_GET['postID'])) {
                                              if ($s2['kategori'] == 0) {
                                                echo ' selected=selected';
                                              }
                                            } ?>> Deposit </option>
                          <option value="1" <?php if (isset($_GET['postID'])) {
                                              if ($s2['kategori'] == 1) {
                                                echo ' selected=selected';
                                              }
                                            } ?>> Lainnya </option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Percentage (%) :</label>
                        <input class="form-control" type="text" name="persen" value="<?php if (isset($_GET['postID'])) {
                                                                                        echo $s2['persen'];
                                                                                      } ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Satuan Turn Over :</label>
                        <select name="satuan" class="form-control" required>
                          <option> Pilih </option>
                          <option value="0" <?php if (isset($_GET['postID'])) {
                                              if ($s2['satuan'] == 0) {
                                                echo ' selected=selected';
                                              }
                                            } ?>> kali </option>
                          <option value="1" <?php if (isset($_GET['postID'])) {
                                              if ($s2['satuan'] == 1) {
                                                echo ' selected=selected';
                                              }
                                            } ?>> Rupiah </option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Minimal Turn Over :</label>
                        <input class="form-control" type="text" name="min_to" value="<?php if (isset($_GET['postID'])) {
                                                                                        echo $s2['min_to'];
                                                                                      } ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Maksimal Bonus :</label>
                        <input class="form-control" type="text" name="max_bonus" value="<?php if (isset($_GET['postID'])) {
                                                                                          echo $s2['max_bonus'];
                                                                                        } ?>">
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                      <a href="<?= $urladmin; ?>/promo/" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <!-- Invoice List Table -->
                <div class="card">
                  <div class="card-datatable table-responsive">
                    <table id="default-datatable" class="invoice-list-table table border-top">
                      <thead>
                        <tr class="bg-primary">
                          <th class="text-center">#</th>
                          <th class="text-center">Promotion Title</th>
                          <th class="text-center">Min Turn Over</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_post` ORDER BY cuid ASC") or die(mysqli_error($conn));
                        $no = 0;
                        while ($s1 = mysqli_fetch_array($sql_1)) :
                          $no++;
                          $idkategori = $s1['cuid'];
                        ?>
                          <tr>
                            <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $no; ?></td>
                            <td class="text-left" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $s1['title']; ?></td>
                            <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                              <?php
                              if ($s1['satuan'] == 0) {
                                echo $s1['min_to'] . ' Kali';
                              } else {
                                echo number_format($s1['min_to'], 0, ",", ".");
                              }
                              ?>
                            </td>
                            <td class="text-center" style="vertical-align: middle; font-size: 14px;">
                              <a href="<?= $urladmin; ?>/promo/?postID=<?= $s1['cuid']; ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                              </a>
                              <a href="<?= $urladmin; ?>/function/del-post.php?cuid=<?= $s1['cuid']; ?>&jenis=1" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want remove this data?');">
                                <i class="fa fa-trash"></i>
                              </a>
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
      $('.summernoteEditor').summernote({
        height: 300,
        tabsize: 2
      });
      setInterval(function() {
        $('#getNotif').load('<?= $urladmin; ?>/getNotif.php');
      }, 10000);
    });
  </script>
</body>

</html>