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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Promo', '$pengguna')") or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-public.php'); ?>
  <?php include('../seo/meta/public-promo.php'); ?>
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
              <h1 class="h2">Promosi & Event</h1>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="accordion" id="accordionExample">
              <div class="row">
                <?php
                $sql_promo = mysqli_query($conn, "SELECT * FROM `tb_post` ORDER BY cuid DESC") or die(mysqli_error($conn));
                $no = 0;
                while ($sp = mysqli_fetch_array($sql_promo)) :
                  $no++;
                ?>
                  <div class="col-sm-6 col-12">
                    <div class="card mb-4 p-0">
                      <div class="card-header p-0" id="headingOne<?= $no; ?>">
                        <img data-sizes="auto" data-src="<?= $domainutama; ?>/upload/blog/<?= $sp['image']; ?>" class="lazyload img-fluid" alt="promo">
                        <div class="p-2 px-3">
                          <div class="row">
                            <div class="col-sm-8">
                              <h2 class="h5 mt-2"><?= $sp['title']; ?></h2>
                            </div>
                            <div class="col-sm-4">
                              <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseOne<?= $no; ?>" aria-expanded="true" aria-controls="collapseOne">
                                Selengkapnya
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="collapseOne<?= $no; ?>" class="collapse" aria-labelledby="headingOne<?= $no; ?>" data-parent="#accordionExample">
                        <div class="card-body">
                          <?= $sp['content']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
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