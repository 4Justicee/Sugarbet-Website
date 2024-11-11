<?php
include('session.php');
$postID = $_GET['postID'];
$getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$postID'") or die(mysqli_error($conn));
$gu = mysqli_fetch_array($getUser);
$ciuduser = $gu['cuid'];
$getBank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = '$postID'") or die(mysqli_error($conn));
$gb = mysqli_fetch_array($getBank);
?>
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
              <span class="text-muted fw-light">Dashboard /</span> Profile <?= $gu['user']; ?>
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
                          <span><strong>Well Done!</strong> Profiles Saved!</span>
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
                    $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$ciuduser' ORDER BY cuid DESC") or die(mysqli_error($conn));
                    $s1 = mysqli_fetch_array($sql_1);
                    ?>
                    <form role="form" action="<?= $urladmin; ?>/function/edit-member.php" method="post" enctype="multipart/form-data">
                      <div class="card-title" style="font-weight: 700;">Informasi Personal</div>
                      <div class="form-group mb-2">
                        <label class="form-label">Username :</label>
                        <input class="form-control" type="text" name="user" value="<?= $gu['user']; ?>" readonly>
                        <input class="form-control" type="hidden" name="postID" value="<?= $gu['cuid']; ?>" readonly>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Password :</label>
                        <input class="form-control" type="password" name="pass" value="<?= $gu['re_pass']; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Alamat Email :</label>
                        <input class="form-control" type="text" name="email" value="<?= $gu['email']; ?>" placeholder="Alamat Email">
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">No. HP / Whatsapp :</label>
                        <input class="form-control" type="number" name="no_hp" value="<?= $gu['no_hp']; ?>" placeholder="No. Handphone">
                      </div>
                      <div class="card-title" style="font-weight: 700;">Informasi Pembayaran</div>
                      <div class="form-group mb-2">
                        <label class="form-label">Metode Pembayaran :</label>
                        <select class="form-control input-shadow" style="height: 50px;" name="akun" required>
                          <option value="">Pilih Metode</option>
                          <!--Otomatis sesuai Rek Admin-->
                          <?php
                          $sql_bank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 ORDER BY akun ASC") or die(mysqli_error($conn));
                          $no = 0;
                          while ($sb = mysqli_fetch_array($sql_bank)) :
                            $no++;
                          ?>
                            <option value="<?= $sb['akun']; ?>" <?php if ($gb['akun'] == $sb['akun']) {
                                                                  echo ' selected=selected';
                                                                } ?>><?= $sb['akun']; ?></option>
                            <!--
                            <option value="">Pilih Metode</option>
                            <option value="OVO"<?php if ($gb['akun'] == 'OVO') {
                                                  echo ' selected=selected';
                                                } ?>>OVO</option>
                            <option value="GOPAY"<?php if ($gb['akun'] == 'GOPAY') {
                                                    echo ' selected=selected';
                                                  } ?>>GOPAY</option>
                            <option value="DANA"<?php if ($gb['akun'] == 'DANA') {
                                                  echo ' selected=selected';
                                                } ?>>DANA</option>
                            <option value="LINKAJA"<?php if ($gb['akun'] == 'LINKAJA') {
                                                      echo ' selected=selected';
                                                    } ?>>LINKAJA</option>
                            <option value="SHOPEEPAY"<?php if ($gb['akun'] == 'SHOPEEPAY') {
                                                        echo ' selected=selected';
                                                      } ?>>SHOPEEPAY</option>
                            <option value="BANK BCA"<?php if ($gb['akun'] == 'BANK BCA') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK BCA</option>
                            <option value="BANK BNI"<?php if ($gb['akun'] == 'BANK BNI') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK BNI</option>
                            <option value="BANK BSI"<?php if ($gb['akun'] == 'BANK BSI') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK SYARIAH INDONESIA</option>
                            <option value="BANK MANDIRI"<?php if ($gb['akun'] == 'BANK MANDIRI') {
                                                          echo ' selected=selected';
                                                        } ?>>BANK MANDIRI</option>
                            <option value="BANK SINARMAS"<?php if ($gb['akun'] == 'BANK SINARMAS') {
                                                            echo ' selected=selected';
                                                          } ?>>BANK SINARMAS</option>
                            <option value="BANK MAYORA"<?php if ($gb['akun'] == 'BANK MAYORA') {
                                                          echo ' selected=selected';
                                                        } ?>>BANK MAYORA</option>
                            <option value="BANK BRI"<?php if ($gb['akun'] == 'BANK BRI') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK BRI</option>
                            <option value="BANK BCA SYARIAH"<?php if ($gb['akun'] == 'BANK BCA SYARIAH') {
                                                              echo ' selected=selected';
                                                            } ?>>BANK BCA SYARIAH</option>
                            <option value="BANK MUAMALAT"<?php if ($gb['akun'] == 'BANK MUAMALAT INDONESIA') {
                                                            echo ' selected=selected';
                                                          } ?>>BANK MUAMALAT</option>
                            <option value="BANK OCBC NISP"<?php if ($gb['akun'] == 'BANK OCBC NISP') {
                                                            echo ' selected=selected';
                                                          } ?>>BANK OCBC NISP</option>
                            <option value="BANK UOB"<?php if ($gb['akun'] == 'BANK UOB') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK UOB</option>
                            <option value="BANK PERMATA"<?php if ($gb['akun'] == 'BANK PERMATA') {
                                                          echo ' selected=selected';
                                                        } ?>>BANK PERMATA</option>
                            <option value="BANK DANAMON"<?php if ($gb['akun'] == 'BANK DANAMON') {
                                                          echo ' selected=selected';
                                                        } ?>>BANK DANAMON</option>
                            <option value="BANK BUKOPIN"<?php if ($gb['akun'] == 'BANK BUKOPIN') {
                                                          echo ' selected=selected';
                                                        } ?>>BANK BUKOPIN</option>
                            <option value="BANK CIMB NIAGA"<?php if ($gb['akun'] == 'BANK') {
                                                              echo ' selected=selected';
                                                            } ?>>BANK CIMB NIAGA</option>
                            <option value="BANK ARTOS"<?php if ($gb['akun'] == 'BANK ARTOS') {
                                                        echo ' selected=selected';
                                                      } ?>>BANK ARTOS</option>
                            <option value="BANK BJB"<?php if ($gb['akun'] == 'BANK BJB') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK BJB</option>
                            <option value="BANK BTPN"<?php if ($gb['akun'] == 'BANK BTPN') {
                                                        echo ' selected=selected';
                                                      } ?>>BANK BTPN</option>
                            <option value="BANK DBS"<?php if ($gb['akun'] == 'BANK DBS') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK DBS</option>
                            <option value="BANK DKI"<?php if ($gb['akun'] == 'BANK DKI') {
                                                      echo ' selected=selected';
                                                    } ?>>BANK DKI</option>
                            <option value="BANK HSBC"<?php if ($gb['akun'] == 'BANK HSBC') {
                                                        echo ' selected=selected';
                                                      } ?>>BANK HSBC</option>
                            <option value="BANK JATIM"<?php if ($gb['akun'] == 'BANK JATIM') {
                                                        echo ' selected=selected';
                                                      } ?>>BANK JATIM</option>
                            <option value="BANK MAYBANK"<?php if ($gb['akun'] == 'BANK MAYBANK') {
                                                          echo ' selected=selected';
                                                        } ?>>BANK MAYBANK</option>
                            <option value="BANK MEGA"<?php if ($gb['akun'] == 'BANK MEGA') {
                                                        echo ' selected=selected';
                                                      } ?>>BANK MEGA</option>
                            <option value="BANK NAGARI"<?php if ($gb['akun'] == 'BANK NAGARI') {
                                                          echo ' selected=selected';
                                                        } ?>>BANK NAGARI</option>
                          -->
                          <?php endwhile; ?>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Nama Pemilik :</label>
                        <input class="form-control" type="text" name="full_name" value="<?= $gu['full_name']; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label class="form-label">Nomor Rekening :</label>
                        <input class="form-control" type="number" name="no_rek" value="<?= $gb['no_rek']; ?>">
                      </div>
                      <?php if ($u['level'] == 'superadmin') : ?>
                        <button type="submit" name="submit" class="btn btn-primary">Edit Profil</button>
                      <?php endif; ?>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <?php
                    $hitungDepo = mysqli_query($conn, "SELECT COUNT(*) as totalDepo, SUM(total) as jmlDepo FROM `tb_transaksi` WHERE userID = '$postID' AND jenis = 1 AND status = 1") or die(mysqli_error($conn));
                    $hd = mysqli_fetch_array($hitungDepo);
                    $hitungWede = mysqli_query($conn, "SELECT COUNT(*) as totalWede, SUM(total) as jmlWede FROM `tb_transaksi` WHERE userID = '$postID' AND jenis = 2 AND status = 1") or die(mysqli_error($conn));
                    $hw = mysqli_fetch_array($hitungWede);
                    $hitungTO = mysqli_query($conn, "SELECT * FROM `tb_turnover` WHERE userID = '$postID' AND status = 1") or die(mysqli_error($conn));
                    $ht = mysqli_fetch_array($hitungTO);
                    $ciuduser = $gu['cuid'];
                    ?>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tbody>
                          <?php
                          $sql_1 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$ciuduser' ORDER BY cuid DESC") or die(mysqli_error($conn));
                          $s1 = mysqli_fetch_array($sql_1);
                          ?>
                          <tr>
                            <td>Status Member</td>
                            <td class="text-right" style="text-align: right;">
                              <?php
                              if ($gu['status'] == 1) {
                                echo 'Aktif';
                              } else if ($gu['status'] == 2) {
                                echo 'Nonaktif';
                              }
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <td>Tanggal Mendaftar</td>
                            <td class="text-right" style="text-align: right;"><?= $gu['join_date']; ?></td>
                          </tr>
                          <tr>
                            <td>Terakhir Login</td>
                            <td class="text-right" style="text-align: right;"><?= $gu['last_login']; ?></td>
                          </tr>
                          <tr>
                            <td>Total Deposit</td>
                            <td class="text-right" style="text-align: right;"><?= $hd['totalDepo']; ?></td>
                          </tr>
                          <tr>
                            <td>Total Deposit (Rp)</td>
                            <td class="text-right" style="text-align: right;"><?= number_format($hd['jmlDepo'], 0, ",", "."); ?></td>
                          </tr>
                          <tr>
                            <td>Total Withdraw</td>
                            <td class="text-right" style="text-align: right;"><?= $hw['totalWede']; ?></td>
                          </tr>
                          <tr>
                            <td>Total Withdraw (Rp)</td>
                            <td class="text-right" style="text-align: right;"><?= number_format($hw['jmlWede'], 0, ",", "."); ?></td>
                          </tr>
                          <tr>
                            <td>TurnOver (Rp)</td>
                            <td class="text-right" style="text-align: right;"><?= number_format($ht['sisa_to'], 0, ",", "."); ?></td>
                          </tr>
                          <?php if ($u['level'] == 'superadmin') : ?>
                            <?php if ($s1['cuid'] != '1') : ?>
                              <tr>
                                <td colspan="2">
                                  <a href="<?= $urladmin; ?>/function/user-status.php?postID=<?= $postID ?>&status=<?= $gu['status']; ?>&tipe=1" class="btn <?php if ($gu['status'] == 1) {
                                                                                                                                                              echo 'btn-danger';
                                                                                                                                                            } else {
                                                                                                                                                              echo 'btn-success';
                                                                                                                                                            } ?> w-100 btn-block">
                                    <?php if ($gu['status'] == 1) {
                                      echo 'Nonaktifkan';
                                    } else {
                                      echo 'Aktifkan';
                                    } ?>
                                  </a>
                                </td>
                              </tr>
                            <?php endif; ?>
                          <?php endif; ?>
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
      }, 10000);
    });
  </script>
</body>

</html>