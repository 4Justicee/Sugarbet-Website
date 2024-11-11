<?php
ob_start();
if (!isset($_SESSION)) {
  session_start();
}
date_default_timezone_set("Asia/Jakarta");

include('../config/koneksi.php');

$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);
$site_key = $config['captcha']['sitekey'];
?>

<?php if (isset($_SESSION['user'])) {
  header('location:' . $urladmin . '/dashboard/');
} else { ?>
  <!DOCTYPE html>
  <html lang="id" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= $urladmin; ?>/assets/" data-template="vertical-menu-template">

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
    <!-- Vendor -->
    <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css?<?= $cache; ?>" />
    <!-- Page -->
    <link rel="stylesheet" href="<?= $urladmin; ?>/assets/vendor/css/pages/page-auth.css?<?= $cache; ?>" />
    <!-- Helpers -->
    <script src="<?= $urladmin; ?>/assets/vendor/js/helpers.js?<?= $cache; ?>"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= $urladmin; ?>/assets/js/config.js?<?= $cache; ?>"></script>

    <?php if ($site_key != '') : ?>
      <script src="https://www.google.com/recaptcha/api.js"></script>
    <?php endif; ?>

  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="<?= $urldomain; ?>" class="app-brand-link gap-2">
                  <img src="<?= $urldomain; ?>/upload/<?= $s0['image']; ?>?<?= $cache; ?>" alt="logo icon" style="display: block; margin: 0 auto; width: 100%;">
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 pt-2"></h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>
              <?php

              if (!empty($_GET['error'])) {
                if ($_GET['error'] == 1) {
                  echo '
                      <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                          <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span>Username and Password Required!</span>
                      </div>
                    ';
                }
                if ($_GET['error'] == 2) {
                  echo '
                      <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                          <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span>Username Wrong!</span>
                      </div>
                    ';
                }
                if ($_GET['error'] == 3) {
                  echo '
                      <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                          <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span>Password Wrong!</span>
                      </div>
                    ';
                }
                if ($_GET['error'] == 4) {
                  echo '
                      <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                          <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span>Username and Password Not Match!</span>
                      </div>
                    ';
                }
                if ($_GET['error'] == 5) {
                  echo '
                      <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                          <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span>Another user has logged in with your User ID!</span>
                      </div>
                    ';
                }
                if ($_GET['error'] == 6) {
                  echo '
                      <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                          <i class="ti ti-bell ti-xs"></i>
                        </span>
                        <span>Your Account Not Active, Please Activate your account!</span>
                      </div>
                    ';
                }
                if ($_GET['error'] == 7) {
                  echo '
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <span class="alert-icon text-warning me-2">
                    <i class="ti ti-bell ti-xs"></i>
                    </span>
                    <span><strong>Perhatian!</strong> Please Verify Captcha!</span>
                    </div>
                    ';
                }
              }
              ?>
              <form id="formAuthentication" class="mb-3" action="<?= $urladmin; ?>/login-proses.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label text-white">Username</label>
                  <input type="text" class="form-control" id="email" name="user" placeholder="Enter your username" autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label text-white" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="pass" placeholder="********" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer" id="mybtn" onclick="change()"><i class="ti ti-eye"></i></span>
                  </div>
                </div>
                <small>Memastikan bahwa kamu bukan robot.</small>
                <div class="mb-3 d-flex justify-content-center">
                  <!--sitekey google apikey-->
                  <div class="g-recaptcha" data-sitekey="<?= $site_key; ?>"></div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

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
    <script src="<?= $urladmin; ?>/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js?<?= $cache; ?>"></script>
    <script src="<?= $urladmin; ?>/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js?<?= $cache; ?>"></script>
    <script src="<?= $urladmin; ?>/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js?<?= $cache; ?>"></script>

    <!-- Main JS -->
    <script src="<?= $urladmin; ?>/assets/js/main.js?<?= $cache; ?>"></script>

    <!-- Page JS -->
    <script src="<?= $urladmin; ?>/assets/js/pages-auth.js?<?= $cache; ?>"></script>

    <script>
      //Show hide password
      function change() {
        var x = document.getElementById('password').type;
        if (x == 'password') {
          document.getElementById('password').type = 'text';
          document.getElementById('mybtn').innerHTML = '<i class="ti ti-eye-off"></i>';
        } else {
          document.getElementById('password').type = 'password';
          document.getElementById('mybtn').innerHTML = '<i class="ti ti-eye"></i>';
        }
      }
    </script>

  </body>

  </html>
<?php } ?>