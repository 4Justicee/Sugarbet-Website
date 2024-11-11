<?php //PRIVATE PAGES
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

include('../config/koneksi.php');
$sid = session_id();
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

$pengguna = $s0['user'];
$sql_1a = mysqli_query($conn, "SELECT * FROM `tb_social` WHERE user = '$pengguna'") or die(mysqli_error($conn));
$s1a = mysqli_fetch_array($sql_1a);
$sql_1b = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '$pengguna'") or die(mysqli_error($conn));
$s1b = mysqli_fetch_array($sql_1b);
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d');
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Maintenance Game', '$pengguna')") or die(mysqli_error($conn));

//Check Integration Status
$hasil0 = json_decode($WL->providerList(), true);

if ($hasil0['msg'] == 'SUCCESS') {
  header('location: /');
  exit();
} ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/private-maintenance.php'); ?>
  <?php include('../seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('../partials/header-main.php'); ?>

  <!-- Flickity Style-->
  <link rel="stylesheet" href="<?= $urldomain; ?>/assets/css/flickity.min.css?<?= $cache; ?>">
  <style>
    .carousel img {
      width: 100%;
      margin-right: 10px;
    }

    @media screen and (max-width: 768px) {

      /* half-width cells for larger devices */
      .carousel img {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <div class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 text-center">
            <img src="<?= $urldomain; ?>/upload/maintenance_imge.webp" class="img-fluid" style="display: block; margin: 0 auto; margin-top: 25%;">
            <h4>Mohon maaf, saat ini games sedang maintenance di server pusat, ini biasa terjadi kisaran 15 menit, silakan dicoba kembali beberapa menit kedepan, terima kasih :)</h4>
            <a href="<?= $urldomain; ?>" class="btn btn-primary">Kembali Ke Home</a>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
    </div>

    <!--Start footer-->
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= $urldomain; ?>/assets/js/jquery.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/popper.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/bootstrap.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/jquery.countdown.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/main.js?<?= $cache; ?>"></script>

  <!-- simplebar js -->
  <script src="<?= $urldomain; ?>/assets/plugins/simplebar/js/simplebar.js?<?= $cache; ?>"></script>

  <!-- horizontal-menu js -->
  <script src="<?= $urldomain; ?>/assets/js/horizontal-menu.js?<?= $cache; ?>"></script>

  <!-- Custom scripts -->
  <script src="<?= $urldomain; ?>/assets/plugins/summernote/dist/summernote-bs4.min.js?<?= $cache; ?>"></script>

  <!--Select Plugins Js-->
  <script src="<?= $urldomain; ?>/assets/plugins/select2/js/select2.min.js?<?= $cache; ?>"></script>

  <!--Data Tables js-->
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/jszip.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/pdfmake.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/vfs_fonts.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.print.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js?<?= $cache; ?>"></script>

  <!-- Flickity Style-->
  <script src="<?= $urldomain; ?>/assets/js/flickity.min.js?<?= $cache; ?>"></script>
</body>

</html>