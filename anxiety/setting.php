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

<?php if ($u['level'] == 'superadmin') : ?>

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
            <?php
            $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
            $s2 = mysqli_fetch_array($sql_2);
            $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_admin` WHERE cuid = 1") or die(mysqli_error($conn));
            $s3 = mysqli_fetch_array($sql_3);
            ?>
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">System /</span> <span class="text-muted fw-light">Settings /</span> Setting
              </h4>
              <div class="row">
                <div class="col-sm-6">
                  <div class="card mb-4" id="identitas">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Identitas Web</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <?php
                      if (!empty($_GET['notif'])) {
                        if ($_GET['notif'] == 1) {
                          echo '
                              <div class="alert alert-success d-flex align-items-center" role="alert">
                                <span class="alert-icon text-success me-2">
                                  <i class="ti ti-check ti-xs"></i>
                                </span>
                                <span><strong>Well Done!</strong> Setting Saved!</span>
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
                      ?>
                      <form role="form" action="<?= $urladmin; ?>/function/setting.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                          <label class="form-label">Upload Logo</label>
                          <input type="file" name="image" class="form-control">
                          <small>File jpg, jpeg, bmp, x-png, png, webp, gif</small><br>
                          <img src="<?= $urldomain; ?>/upload/<?= $s2['image']; ?>?<?= date('His') ?>" class="img-fluid" style="max-height: 50px">
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Upload Favicon</label>
                          <input type="file" name="favicon" class="form-control">
                          <img src="<?= $urldomain; ?>/upload/favicon.png?<?= date('His') ?>" class="img-fluid" style="max-height: 50px">
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Meta Title :</label>
                          <input class="form-control" type="text" name="instansi" value="<?= $s2['instansi']; ?>" required>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Meta Keyword :</label>
                          <input class="form-control" type="text" name="keyword" value="<?= $s2['keyword']; ?>" required>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Meta Description :</label>
                          <textarea class="form-control summernoteEditor" type="text" name="deskripsi" required><?= $s2['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Setting Coin :</label>
                          <input class="form-control" type="number" name="coin" value="<?= $s2['coin']; ?>" required>
                          <p></p>
                          <div id="coin">
                            <h5>Apa itu Coin?</h5>
                            <p>Atur 0 untuk web baru yang belum ada transaksi deposit dan withdraw. Nilai Coin setara dengan nilai Rupiah, 1 Coin = 1 IDR.</p>
                            <p>Coin adalah acuan informasi apakah Owner <b>Profit</b> atau <b>Loss</b>, semakin besar nominal Coin dari yang ditentukan, maka <b>Owner Profit</b>. Jika minus atau kurang dari yang ditentukan, maka <b>Owner Loss</b>.</p>
                            <p>Nominal Coin <b>berubah otomatis</b> saat terjadi <b>Deposit</b> dan <b>Withdraw</b> yang dikonfirmasi.</p>
                          </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                      </form>
                    </div>
                  </div>
                  <div class="card mb-4" id="member">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Sistem Member</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <form role="form" action="<?= $urladmin; ?>/function/setting.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                          <label class="form-label">Verifikasi Email : </label><br>
                          <small>Pengguna wajib verifikasi email setelah pendaftaran akun.</small>
                          <select name="vemail" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s2['vemail'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Nonaktif</option>
                            <option value="1" <?php if ($s2['vemail'] == '1') {
                                                echo ' selected=selected';
                                              } ?>>Aktif</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Ganti Rekening : </label><br>
                          <small>Pengguna bisa mengganti metode dan rekening pembayaran pada Akun.</small>
                          <select name="vrek" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s2['vrek'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Nonaktif</option>
                            <option value="1" <?php if ($s2['vrek'] == '1') {
                                                echo ' selected=selected';
                                              } ?>>Aktif</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Sinkronisasi Metode Deposit : </label><br>
                          <small>Pilihan metode deposit sesuai dengan metode pada akun member.</small>
                          <select name="sinkdepo" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s2['sinkdepo'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Nonaktif</option>
                            <option value="1" <?php if ($s2['sinkdepo'] == '1') {
                                                echo ' selected=selected';
                                              } ?>>Aktif</option>
                          </select>
                          <small>Contoh: jika metode deposit member adalah Bank, maka pilihan tujuan deposit hanya metode Bank, begitupun untuk metode lainnya.</small>
                        </div>
                        <button type="submit" name="member" class="btn btn-primary">Publish</button>
                      </form>
                    </div>
                  </div>
                  <div class="card mb-4" id="rtp">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Info RTP Random</h5>
                        <small>Pengaturan minimal dan maksimal RTP. Range 1 - 100</small>
                      </div>
                    </div>
                    <div class="card-body">
                      <form role="form" action="<?= $urladmin; ?>/function/setting.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                          <label class="form-label">Minimal :</label>
                          <input class="form-control" type="number" name="minrtp" min="1" max="100" value="<?= $s2['minrtp']; ?>" required>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Maksimal :</label>
                          <input class="form-control" type="number" name="maxrtp" min="1" max="100" value="<?= $s2['maxrtp']; ?>" required>
                        </div>
                        <button type="submit" name="rtp" class="btn btn-primary">Publish</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card mb-4" id="bonus">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Sistem Komisi & Bonus</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <form role="form" action="<?= $urladmin; ?>/function/setting.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                          <label class="form-label">Bonus Registrasi : </label><br>
                          <small>Setelah pendaftaran akun, bonus otomatis masuk ke saldo akun member.</small>
                          <select name="bonusregister" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s3['bonusregister'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Tanpa Bonus</option>
                            <option value="5000" <?php if ($s3['bonusregister'] == '5000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 5.000</option>
                            <option value="10000" <?php if ($s3['bonusregister'] == '10000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 10.000</option>
                            <option value="25000" <?php if ($s3['bonusregister'] == '25000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 25.000</option>
                            <option value="50000" <?php if ($s3['bonusregister'] == '50000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 50.000</option>
                            <option value="100000" <?php if ($s3['bonusregister'] == '100000') {
                                                      echo ' selected=selected';
                                                    } ?>>Rp. 100.000</option>
                            <option value="200000" <?php if ($s3['bonusregister'] == '200000') {
                                                      echo ' selected=selected';
                                                    } ?>>Rp. 200.000</option>
                            <option value="300000" <?php if ($s3['bonusregister'] == '300000') {
                                                      echo ' selected=selected';
                                                    } ?>>Rp. 300.000</option>
                            <option value="400000" <?php if ($s3['bonusregister'] == '400000') {
                                                      echo ' selected=selected';
                                                    } ?>>Rp. 400.000</option>
                            <option value="500000" <?php if ($s3['bonusregister'] == '500000') {
                                                      echo ' selected=selected';
                                                    } ?>>Rp. 500.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Minimal Deposit : </label>
                          <select name="mindepo" class="form-control input-shadow" required>
                            <option value="5000" <?php if ($s3['mindepo'] == '5000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 5.000</option>
                            <option value="10000" <?php if ($s3['mindepo'] == '10000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 10.000</option>
                            <option value="20000" <?php if ($s3['mindepo'] == '20000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 20.000</option>
                            <option value="50000" <?php if ($s3['mindepo'] == '50000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 50.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Maksimal Deposit : </label>
                          <select name="maxdepo" class="form-control input-shadow" required>
                            <option value="10000000" <?php if ($s3['maxdepo'] == '10000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 10.000.000</option>
                            <option value="20000000" <?php if ($s3['maxdepo'] == '20000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 20.000.000</option>
                            <option value="30000000" <?php if ($s3['maxdepo'] == '30000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 30.000.000</option>
                            <option value="40000000" <?php if ($s3['maxdepo'] == '40000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 40.000.000</option>
                            <option value="50000000" <?php if ($s3['maxdepo'] == '50000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 50.000.000</option>
                            <option value="60000000" <?php if ($s3['maxdepo'] == '60000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 60.000.000</option>
                            <option value="70000000" <?php if ($s3['maxdepo'] == '70000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 70.000.000</option>
                            <option value="80000000" <?php if ($s3['maxdepo'] == '80000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 80.000.000</option>
                            <option value="90000000" <?php if ($s3['maxdepo'] == '90000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 90.000.000</option>
                            <option value="100000000" <?php if ($s3['maxdepo'] == '100000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 100.000.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Minimal Withdraw : </label>
                          <select name="minwede" class="form-control input-shadow" required>
                            <option value="5000" <?php if ($s3['minwede'] == '5000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 5.000</option>
                            <option value="10000" <?php if ($s3['minwede'] == '10000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 10.000</option>
                            <option value="20000" <?php if ($s3['minwede'] == '20000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 20.000</option>
                            <option value="50000" <?php if ($s3['minwede'] == '50000') {
                                                    echo ' selected=selected';
                                                  } ?>>Rp. 50.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Maksimal Withdraw : </label>
                          <select name="maxwede" class="form-control input-shadow" required>
                            <option value="10000000" <?php if ($s3['maxwede'] == '10000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 10.000.000</option>
                            <option value="20000000" <?php if ($s3['maxwede'] == '20000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 20.000.000</option>
                            <option value="30000000" <?php if ($s3['maxwede'] == '30000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 30.000.000</option>
                            <option value="40000000" <?php if ($s3['maxwede'] == '40000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 40.000.000</option>
                            <option value="50000000" <?php if ($s3['maxwede'] == '50000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 50.000.000</option>
                            <option value="60000000" <?php if ($s3['maxwede'] == '60000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 60.000.000</option>
                            <option value="70000000" <?php if ($s3['maxwede'] == '70000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 70.000.000</option>
                            <option value="80000000" <?php if ($s3['maxwede'] == '80000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 80.000.000</option>
                            <option value="90000000" <?php if ($s3['maxwede'] == '90000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 90.000.000</option>
                            <option value="100000000" <?php if ($s3['maxwede'] == '100000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 100.000.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Komisi Referral : </label><br>
                          <small>Totalnya dihitung dari JUMLAH DEPOSIT PERTAMA MEMBER REFERRAL, diberikan setiap deposit pertama ke MEMBER UPLINE.</small>
                          <select name="komaff" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s3['komaff'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Tanpa Komisi</option>
                            <option value="0.01" <?php if ($s3['komaff'] == '0.01') {
                                                    echo ' selected=selected';
                                                  } ?>>1%</option>
                            <option value="0.05" <?php if ($s3['komaff'] == '0.05') {
                                                    echo ' selected=selected';
                                                  } ?>>5%</option>
                            <option value="0.08" <?php if ($s3['komaff'] == '0.08') {
                                                    echo ' selected=selected';
                                                  } ?>>8%</option>
                            <option value="0.10" <?php if ($s3['komaff'] == '0.10') {
                                                    echo ' selected=selected';
                                                  } ?>>10%</option>
                            <option value="0.15" <?php if ($s3['komaff'] == '0.15') {
                                                    echo ' selected=selected';
                                                  } ?>>15%</option>
                            <option value="0.20" <?php if ($s3['komaff'] == '0.20') {
                                                    echo ' selected=selected';
                                                  } ?>>20%</option>
                            <option value="0.25" <?php if ($s3['komaff'] == '0.25') {
                                                    echo ' selected=selected';
                                                  } ?>>25%</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Maksimal Komisi Referral : </label>
                          <select name="maxkomaff" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s3['maxkomaff'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Rp. 0</option>
                            <option value="10000000" <?php if ($s3['maxkomaff'] == '10000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 10.000.000</option>
                            <option value="20000000" <?php if ($s3['maxkomaff'] == '20000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 20.000.000</option>
                            <option value="30000000" <?php if ($s3['maxkomaff'] == '30000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 30.000.000</option>
                            <option value="40000000" <?php if ($s3['maxkomaff'] == '40000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 40.000.000</option>
                            <option value="50000000" <?php if ($s3['maxkomaff'] == '50000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 50.000.000</option>
                            <option value="60000000" <?php if ($s3['maxkomaff'] == '60000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 60.000.000</option>
                            <option value="70000000" <?php if ($s3['maxkomaff'] == '70000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 70.000.000</option>
                            <option value="80000000" <?php if ($s3['maxkomaff'] == '80000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 80.000.000</option>
                            <option value="90000000" <?php if ($s3['maxkomaff'] == '90000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 90.000.000</option>
                            <option value="100000000" <?php if ($s3['maxkomaff'] == '100000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 100.000.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Bonus Rollingan : </label><br>
                          <small>Totalnya dihitung dari ROLLING/TURNOVER GAMEPLAY MEMBER selama 1 minggu, diberikan setiap 1 minggu.</small>
                          <select name="komrolling" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s3['komrolling'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Tanpa Bonus</option>
                            <option value="0.01" <?php if ($s3['komrolling'] == '0.01') {
                                                    echo ' selected=selected';
                                                  } ?>>1%</option>
                            <option value="0.05" <?php if ($s3['komrolling'] == '0.05') {
                                                    echo ' selected=selected';
                                                  } ?>>5%</option>
                            <option value="0.08" <?php if ($s3['komrolling'] == '0.08') {
                                                    echo ' selected=selected';
                                                  } ?>>8%</option>
                            <option value="0.10" <?php if ($s3['komrolling'] == '0.10') {
                                                    echo ' selected=selected';
                                                  } ?>>10%</option>
                            <option value="0.15" <?php if ($s3['komrolling'] == '0.15') {
                                                    echo ' selected=selected';
                                                  } ?>>15%</option>
                            <option value="0.20" <?php if ($s3['komrolling'] == '0.20') {
                                                    echo ' selected=selected';
                                                  } ?>>20%</option>
                            <option value="0.25" <?php if ($s3['komrolling'] == '0.25') {
                                                    echo ' selected=selected';
                                                  } ?>>25%</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Maksimal Bonus Rolling : </label>
                          <select name="maxkomrolling" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s3['maxkomrolling'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Rp. 0</option>
                            <option value="10000000" <?php if ($s3['maxkomrolling'] == '10000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 10.000.000</option>
                            <option value="20000000" <?php if ($s3['maxkomrolling'] == '20000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 20.000.000</option>
                            <option value="30000000" <?php if ($s3['maxkomrolling'] == '30000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 30.000.000</option>
                            <option value="40000000" <?php if ($s3['maxkomrolling'] == '40000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 40.000.000</option>
                            <option value="50000000" <?php if ($s3['maxkomrolling'] == '50000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 50.000.000</option>
                            <option value="60000000" <?php if ($s3['maxkomrolling'] == '60000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 60.000.000</option>
                            <option value="70000000" <?php if ($s3['maxkomrolling'] == '70000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 70.000.000</option>
                            <option value="80000000" <?php if ($s3['maxkomrolling'] == '80000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 80.000.000</option>
                            <option value="90000000" <?php if ($s3['maxkomrolling'] == '90000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 90.000.000</option>
                            <option value="100000000" <?php if ($s3['maxkomrolling'] == '100000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 100.000.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Bonus Cashback : </label><br>
                          <small>Totalnya dihitung dari DEPOSIT MEMBER selama 1 minggu, diberikan setiap 1 minggu.</small>
                          <select name="komcashback" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s3['komcashback'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Tanpa Bonus</option>
                            <option value="0.01" <?php if ($s3['komcashback'] == '0.01') {
                                                    echo ' selected=selected';
                                                  } ?>>1%</option>
                            <option value="0.05" <?php if ($s3['komcashback'] == '0.05') {
                                                    echo ' selected=selected';
                                                  } ?>>5%</option>
                            <option value="0.08" <?php if ($s3['komcashback'] == '0.08') {
                                                    echo ' selected=selected';
                                                  } ?>>8%</option>
                            <option value="0.10" <?php if ($s3['komcashback'] == '0.10') {
                                                    echo ' selected=selected';
                                                  } ?>>10%</option>
                            <option value="0.15" <?php if ($s3['komcashback'] == '0.15') {
                                                    echo ' selected=selected';
                                                  } ?>>15%</option>
                            <option value="0.20" <?php if ($s3['komcashback'] == '0.20') {
                                                    echo ' selected=selected';
                                                  } ?>>20%</option>
                            <option value="0.25" <?php if ($s3['komcashback'] == '0.25') {
                                                    echo ' selected=selected';
                                                  } ?>>25%</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Maksimal Bonus Cashback : </label>
                          <select name="maxkomcashback" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s3['maxkomcashback'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Rp. 0</option>
                            <option value="10000000" <?php if ($s3['maxkomcashback'] == '10000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 10.000.000</option>
                            <option value="20000000" <?php if ($s3['maxkomcashback'] == '20000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 20.000.000</option>
                            <option value="30000000" <?php if ($s3['maxkomcashback'] == '30000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 30.000.000</option>
                            <option value="40000000" <?php if ($s3['maxkomcashback'] == '40000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 40.000.000</option>
                            <option value="50000000" <?php if ($s3['maxkomcashback'] == '50000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 50.000.000</option>
                            <option value="60000000" <?php if ($s3['maxkomcashback'] == '60000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 60.000.000</option>
                            <option value="70000000" <?php if ($s3['maxkomcashback'] == '70000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 70.000.000</option>
                            <option value="80000000" <?php if ($s3['maxkomcashback'] == '80000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 80.000.000</option>
                            <option value="90000000" <?php if ($s3['maxkomcashback'] == '90000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 90.000.000</option>
                            <option value="100000000" <?php if ($s3['maxkomcashback'] == '100000000') {
                                                        echo ' selected=selected';
                                                      } ?>>Rp. 100.000.000</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Hari Bonus Rolling & Cashback : </label>
                          <select name="haribonus" class="form-control input-shadow" required>
                            <option value="1" <?php if ($s3['haribonus'] == '1') {
                                                echo ' selected=selected';
                                              } ?>>Senin</option>
                            <option value="2" <?php if ($s3['haribonus'] == '2') {
                                                echo ' selected=selected';
                                              } ?>>Selasa</option>
                            <option value="3" <?php if ($s3['haribonus'] == '3') {
                                                echo ' selected=selected';
                                              } ?>>Rabu</option>
                            <option value="4" <?php if ($s3['haribonus'] == '4') {
                                                echo ' selected=selected';
                                              } ?>>Kamis</option>
                            <option value="5" <?php if ($s3['haribonus'] == '5') {
                                                echo ' selected=selected';
                                              } ?>>Jumat</option>
                            <option value="6" <?php if ($s3['haribonus'] == '6') {
                                                echo ' selected=selected';
                                              } ?>>Sabtu</option>
                            <option value="0" <?php if ($s3['haribonus'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Minggu</option>
                          </select>
                        </div>
                        <button type="submit" name="bonus" class="btn btn-primary">Publish</button>
                      </form>
                    </div>
                  </div>
                  <div class="card mb-4" id="pengunguman">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Pengumuman</h5>
                        <small>Teks bergerak dibagian pengunguman untuk tampilan DESKTOP maupun MOBILE.</small>
                      </div>
                    </div>
                    <div class="card-body">
                      <form role="form" action="<?= $urladmin; ?>/function/news.php" method="post">
                        <div class="form-group mb-2">
                          <label class="form-label">Konten Pengumuman :</label>
                          <textarea class="form-control summernoteEditor" type="text" name="content" rows="3"><?= $s0['news']; ?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                      </form>
                    </div>
                  </div>
                  <div class="card mb-4" id="footerdesc">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Deskripsi Footer</h5>
                        <small>Tampil dibagian footer untuk tampilan DESKTOP saat pengguna tidak login.</small>
                      </div>
                    </div>
                    <div class="card-body">
                      <form role="form" action="<?= $urladmin; ?>/function/setting.php" method="post">
                        <div class="form-group mb-2">
                          <label class="form-label">Status : </label>
                          <select name="stfooter" class="form-control input-shadow" required>
                            <option value="0" <?php if ($s2['statusfooter'] == '0') {
                                                echo ' selected=selected';
                                              } ?>>Nonaktif</option>
                            <option value="1" <?php if ($s2['statusfooter'] == '1') {
                                                echo ' selected=selected';
                                              } ?>>Aktif</option>
                          </select>
                        </div>
                        <button type="submit" name="statusfooter" class="btn btn-primary">Publish</button>
                      </form>
                    </div>
                    <div class="card-body">
                      <form role="form" action="<?= $urladmin; ?>/function/footer-desc.php" method="post">
                        <div class="form-group mb-2">
                          <label class="form-label">Konten Footer :</label>
                          <textarea class="form-control summernoteEditor" type="text" name="footerdesc" rows="3"><?= $s0['footer']; ?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                      </form>
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
<?php endif; ?>

</html>