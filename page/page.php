<?php //PUBLIC PAGES
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
$slug = $_GET['p'];
$sql_pages = mysqli_query($conn, "SELECT * FROM `tb_page` WHERE slug = '$slug'") or die(mysqli_error($conn));
$pages = mysqli_fetch_array($sql_pages);
$pageName = $pages['nama_page'];
$pageContent = $pages['content'];
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, '$pageName', '$pengguna')") or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-public.php'); ?>
  <?php include('../seo/meta/public-page.php'); ?>
  <?php include('../seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('../partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start topbar header-->
    <?php include('../partials/top-menu.php'); ?>
    <!--End topbar header-->

    <div class="clearfix pb-6"></div>
    <div class="bg-custom pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <h1 class="h2"><?= $pageName; ?></h1>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="pb-5">
              <div class="section bg-white text-dark rounded-lg">
                <div class="card-body">
                  <?= $pageContent; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!--Start footer-->
    <?php include('../footer.php'); ?>

</body>

</html>