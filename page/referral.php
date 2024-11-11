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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Referral', '$pengguna')") or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-public.php'); ?>
  <?php include('../seo/meta/public-referral.php'); ?>
  <?php include('../seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('../partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <h1 class="sr-only">Program Referral <?= $app_name; ?></h1>

    <!--Start topbar header-->
    <?php include('../partials/top-menu.php'); ?>
    <!--End topbar header-->

    <div class="clearfix pb-6"></div>
    <div class="bg-custom pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div>
              <h1 class="h2">Program Referral</h1>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="pb-5">
              <div class="section bg-white text-dark rounded-lg">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                      <p>Ajak pengguna baru ke <?= $app_name; ?> menggunakan link afiliasi, dan kamu menerima komisi <?= $tekskomaff; ?>% dari setiap deposit mereka. Cookie pelacakan afiliasi kami bertahan selama 90 hari.</p>
                      <p>Kamu akan menerima komisi <?= $tekskomaff; ?>% dari semua pengguna yang mendaftar dalam waktu 90 hari setelah mengklik link afiliasimu.</p>
                      <p>Bagikan link referensi ke teman-teman untuk mendapatkan bonus hadiah dan komisi afiliasi sebesar <?= $tekskomaff; ?>% dari setiap deposit pertama mereka.</p>
                      <p>Lihat link referensi Anda di halaman <a class="text-primary" href="<?= $urldomain; ?>/referrals"><?= $sp['nama_page']; ?>Referrals</a></p>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-6 px-1">
                      <ul class="nav flex-column bg-dark rounded mb-3">
                        <li class="nav-item">
                          <a class="nav-link" href="<?= $urldomain; ?>/contact"><i class="fa fa-circle-dot"></i> Hubungi Kami</a>
                        </li>
                        <?php
                        $sql_page = mysqli_query($conn, "SELECT * FROM `tb_page` ORDER BY cuid ASC LIMIT 4") or die(mysqli_error($conn));
                        while ($sp = mysqli_fetch_array($sql_page)) :
                        ?>
                          <li class="nav-item">
                            <a class="nav-link" href="<?= $urldomain; ?>/page/<?= $sp['slug']; ?>"><i class="fa fa-circle-dot"></i> <?= $sp['nama_page']; ?></a>
                          </li>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-6 px-1">
                      <ul class="nav flex-column bg-dark rounded mb-3">
                        <li class="nav-item">
                          <a class="nav-link" href="/dashboard"><i class="fa fa-circle-dot"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/bank"><i class="fa fa-circle-dot"></i> Banking</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/history"><i class="fa fa-circle-dot"></i> Transaksi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/referral"><i class="fa fa-circle-dot"></i> Referral</a>
                          <a class="nav-link" href="/promo"><i class="fa fa-circle-dot"></i> Promo</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <img data-sizes="auto" data-src="<?= $urldomain; ?>/upload/referral.webp" class="lazyload img-fluid" alt="referral">
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