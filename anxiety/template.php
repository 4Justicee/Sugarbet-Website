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
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet" />

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
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
  <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/summernote/dist/summernote-bs4.css" />

  <!-- Helpers -->
  <script src="<?= $urladmin; ?>/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="<?= $urladmin; ?>/assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= $urladmin; ?>/assets/js/config.js"></script>
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
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
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
              <span class="text-muted fw-light">System /</span> <span class="text-muted fw-light">Settings /</span> Template

            </h4>
            <div class="row">
              <div class="col-sm-5">
                <div class="card mb-4">
                  <div class="card-body">
                    <?php
                    if (!empty($_GET['notif'])) {
                      if ($_GET['notif'] == 1) {
                        echo '
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                        <span class="alert-icon text-success me-2">
                        <i class="ti ti-check ti-xs"></i>
                        </span>
                        <span><strong>Sukses!</strong> Template Saved!</span>
                        </div>
                        ';
                      }
                      if ($_GET['notif'] == 2) {
                        echo '
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                        <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span><strong>Perhatian!</strong> Max Image Size 2MB!</span>
                        </div>
                        ';
                      }
                      if ($_GET['notif'] == 3) {
                        echo '
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                        <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span><strong>Perhatian!</strong> Only JPG atau PNG!</span>
                        </div>
                        ';
                      }
                    }
                    ?>
                    <form role="form" action="<?= $urladmin; ?>/function/template.php" method="post" enctype="multipart/form-data">
                      <h5>Tema Website</h5>
                      <div class="form-group mb-2">
                        <label class="form-label">Pilih Template</label>
                        <select name="template" id="template" class="form-control">
                          <option value="1" <?php if ($s0['temautama'] == 1) {
                                              echo ' selected=selected';
                                            } ?>> Template 1 </option>
                          <option value="2"> Coming soon </option>
                          <option value="3"> Coming soon </option>
                          <option value="4"> Coming soon </option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Template Footer</label>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customRadioFoot1">
                                <input name="footere" class="form-check-input" type="radio" value="1" id="customRadioFoot1" <?php if ($s0['temafooter'] == 1) {
                                                                                                                              echo 'checked';
                                                                                                                            } ?> />
                                <span class="custom-option-header">
                                  <img src="<?= $urldomain; ?>/assets/images/themes/footer_1.webp" class="img-fluid" style="display: block; margin: 0 auto;">
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customRadioFoot2">
                                <input name="footere" class="form-check-input" type="radio" value="2" id="customRadioFoot2" <?php if ($s0['temafooter'] == 2) {
                                                                                                                              echo 'checked';
                                                                                                                            } ?> />
                                <span class="custom-option-header">
                                  <img src="<?= $urldomain; ?>/assets/images/themes/footer_2.webp" class="img-fluid" style="display: block; margin: 0 auto;">
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content" for="customRadioFoot3">
                                <input name="footere" class="form-check-input" type="radio" value="3" id="customRadioFoot3" <?php if ($s0['temafooter'] == 3) {
                                                                                                                              echo 'checked';
                                                                                                                            } ?> />
                                <span class="custom-option-header">
                                  <img src="<?= $urldomain; ?>/assets/images/themes/footer_3.webp" class="img-fluid" style="display: block; margin: 0 auto;">
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" name="tema" class="btn btn-primary">Publish</button>
                      <a href="<?= $urladmin; ?>/template/" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <form role="form" action="<?= $urladmin; ?>/function/template.php" method="post" enctype="multipart/form-data">
                      <h5>Warna Default</h5>
                      <div class="form-group mb-2">
                        <div class="row">
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#0B7DDA 0%, #0D47A1 50%, #030C30 100%);" for="customRadioTemp1">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#0B7DDA" id="customRadioTemp1" <?php if ($s0['warnadasar'] == '#0B7DDA') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#DC3545 0%, #AD1F2D 50%, #160405 100%);" for="customRadioTemp2">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#DC3545" id="customRadioTemp2" <?php if ($s0['warnadasar'] == '#DC3545') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#DCC709 0%, #AB9B07 50%, #181601 100%);" for="customRadioTemp3">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#DCC709" id="customRadioTemp3" <?php if ($s0['warnadasar'] == '#DCC709') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#6329D6 0%, #451D96 50%, #0A0416 100%);" for="customRadioTemp4">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#6329D6" id="customRadioTemp4" <?php if ($s0['warnadasar'] == '#6329D6') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#04AA6D 0%, #049560 50%, #011910 100%);" for="customRadioTemp5">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#04AA6D" id="customRadioTemp5" <?php if ($s0['warnadasar'] == '#04AA6D') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#00CCCC 0%, #009999 50%, #001A1A 100%);" for="customRadioTemp6">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#00CCCC" id="customRadioTemp6" <?php if ($s0['warnadasar'] == '#00CCCC') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#05B9E1 0%, #0490AF 50%, #011519 100%);" for="customRadioTemp7">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#05B9E1" id="customRadioTemp7" <?php if ($s0['warnadasar'] == '#05B9E1') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#FF80EE 0%, #FF33E4 50%, #1A0016 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#FF80EE" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#FF80EE') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#c04848 0%, #983434 50%, #130707 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#c04848" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#c04848') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#f07241 0%, #d44811 50%, #180802 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#f07241" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#f07241') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#e38533 0%, #81715e 50%, #160c03 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#e38533" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#e38533') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#ddbc95 0%, #b38867 50%, #130d06 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#ddbc95" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#ddbc95') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#f79b77 0%, #755248 50%, #180801 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#f79b77" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#f79b77') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#2988bc 0%, #2f496e 50%, #050f15 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#2988bc" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#2988bc') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#bc6d4f 0%, #500805 50%, #120a07 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#bc6d4f" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#bc6d4f') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#dda288 0%, #7e675e 50%, #140a06 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#dda288" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#dda288') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#cdab81 0%, #6c5f5b 50%, #120d07 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#cdab81" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#cdab81') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#9f4636 0%, #6c2d2c 50%, #130807 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#9f4636" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#9f4636') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#6c2d2c 0%, #42313a 50%, #120807 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#6c2d2c" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#6c2d2c') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#e45355 0%, #c71f22 50%, #160304 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#e45355" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#e45355') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#dbae58 0%, #bd8928 50%, #150f04 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#dbae58" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#dbae58') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#ef968f 0%, #e7534b 50%, #160604 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#ef968f" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#ef968f') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#128277 0%, #004d47 50%, #031615 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#128277" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#128277') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-2 p-0">
                            <div class="form-check custom-option custom-option-basic">
                              <label class="form-check-label custom-option-content py-2" style="background: linear-gradient(to right,#ebcb80 0%, #e3b74f 50%, #160704 100%);" for="customRadioTemp8">
                                <input name="warnadasar" class="form-check-input" type="radio" value="#ebcb80" id="customRadioTemp8" <?php if ($s0['warnadasar'] == '#ebcb80') {
                                                                                                                                        echo 'checked';
                                                                                                                                      } ?> />
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <small>Jika menggunakan Warna Custom, Warna Default otomatis <span class="text-danger">nonaktif</span>.</small><br><br>
                      <button type="submit" name="warna" class="btn btn-primary">Publish</button>
                      <a href="<?= $urladmin; ?>/template/" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
                <div class="card mb-4">
                  <div class="card-body">
                    <form role="form" action="<?= $urladmin; ?>/function/setting.php" method="post" enctype="multipart/form-data">
                      <h5>Warna Custom</h5>
                      <small>Kode warna html (HEX). Contoh: #0B7DDA warna biru. Lihat di <a href="https://seosecret.id/color-picker" target="_blank">Daftar Kode Warna</a></small>
                      <p />
                      <div class="form-group mb-2">
                        <label class="form-label">Warna Dasar :</label>
                        <small>warna utama website.</small>
                        <span class="btn float-right btn-sm mr-1 mb-1" style="background-color: <?= $s0['warnadasar']; ?>;"></span>
                        <input class="form-control" type="text" name="warnadasar" value="<?= $s0['warnadasar']; ?>" required>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Warna Hover :</label>
                        <small>15% lebih gelap dari warna dasar.</small>
                        <span class="btn float-right btn-sm mr-1 mb-1" style="background-color: <?= $s0['warnahover']; ?>;"></span>
                        <input class="form-control" type="text" name="warnahover" value="<?= $s0['warnahover']; ?>" required>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Warna Background :</label>
                        <small>95% lebih gelap dari warna dasar.</small>
                        <span class="btn float-right btn-sm mr-1 mb-1" style="background-color: <?= $s0['warnabg']; ?>;"></span>
                        <input class="form-control" type="text" name="warnabg" value="<?= $s0['warnabg']; ?>" required>
                      </div>
                      <p />
                      <h5>Font Situs</h5>
                      <div class="form-group mb-2">
                        <label class="form-label">Google Font</label>
                        <select name="urlweb" class="form-control input-shadow" required>
                          <option value="<?= $s0['urlweb']; ?>" selected="selected"><?= str_replace('+', ' ', $s0['urlweb']); ?></option>
                          <?php include('font.php'); ?>
                        </select>
                      </div>
                      <button type="submit" name="custom" class="btn btn-primary">Publish</button>
                      <a href="<?= $urladmin; ?>/template/" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-3" id="result">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5>Preview Template</h5>
                    <img src="<?= $urldomain; ?>/assets/images/themes/home_<?= $s0['temautama']; ?>.webp" class="img-fluid" style="display: block; margin: 0 auto;">
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
      }, 10000);
      $('.summernoteEditor').summernote({
        height: 300,
        tabsize: 2
      });
      $("#template").change(function() {
        url = "<?= $urladmin; ?>/select_template.php?id=" + $(this).val();
        $('#result').load(url);
        return false;
      });
    });
  </script>
</body>

</html>