<?php //PUBLIC PAGES
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

include('config/koneksi.php');
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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Slot Lainnya', '$pengguna')") or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('seo/meta/all-top-public.php'); ?>
  <?php include('seo/meta/public-slot-lainnya.php'); ?>
  <?php include('seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <h1 class="sr-only">Slot Lainnya di <?= $app_name; ?></h1>

    <!--Start topbar header-->
    <?php include('partials/top-menu.php'); ?>
    <!--End topbar header-->

    <div class="bg-custom d-block d-sm-none">
      <div class="mobileprovider">
        <ul class="nav" style="width: 1000px; height: auto;">
          <?php
          $sql_provider = mysqli_query($conn, "SELECT * FROM `tb_wprovider` WHERE `type` = 'live'") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_provider)) :
            $provider = $sp['code'];
            $hitungProduk = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = '$provider'") or die(mysqli_error($conn));
            $hp = mysqli_num_rows($hitungProduk);
            if ($hp > 0) :
          ?>
              <li class="nav-item menuprovider">
                <a href="<?= $urldomain; ?>/casino/<?= $sp['code']; ?>">
                  <img data-sizes="auto" style="width: 80px; height: 80px;" data-src="<?= $urldomain; ?>/upload/provider/<?= $sp['code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload img-fluid styleimgprovider" alt="<?= $slogan; ?>">
                  <span class="textprovider"><?= $sp['code']; ?></span>
                </a>
              </li>
          <?php endif;
          endwhile; ?>
        </ul>
      </div>
    </div>

    <!--PC-->
    <div class="bg-custom d-none d-sm-block pb-3 pt-0">
      <div class="container">
        <ul class="nav" style="justify-content: center;">
          <?php
          $sql_provider = mysqli_query($conn, "SELECT * FROM `tb_wprovider` WHERE `type` = 'live'") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_provider)) :
            $provider = $sp['code'];
            $hitungProduk = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = '$provider'") or die(mysqli_error($conn));
            $hp = mysqli_num_rows($hitungProduk);
            if ($hp > 0) :
          ?>
              <li class="nav-item menuprovider">
                <a href="<?= $urldomain; ?>/casino/<?= $sp['code']; ?>">
                  <img data-sizes="auto" style="width: 80px; height: 80px;" data-src="<?= $urldomain; ?>/upload/provider/<?= $sp['code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload img-fluid styleimgprovider" alt="<?= $slogan; ?>">
                  <span class="textprovider"><?= $sp['code']; ?></span>
                </a>
              </li>
          <?php endif;
          endwhile; ?>
        </ul>
      </div>
    </div>

    <!--Search-->
    <?php include('partials/search.php'); ?>

    <div class="bg-custom pb-5">
      <div class="container">
        <div class="row">
          <?php
          $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = 'EVOLUTION' ORDER BY RAND() LIMIT 54") or die(mysqli_error($conn));
          while ($s3 = mysqli_fetch_array($sql_3)) :
            if (isset($_SESSION['user'])) {
              $externalPlayerId = $_SESSION['user'];
              $playUrl = $urldomain . '/gameplay/' . $s3['game_category'] . '/?gamecode=' . $s3['game_code'] . '&providercode=' . $s3['game_provider'];
            } else {
              $playUrl = $urldomain . '/login';
            }
          ?>
            <div class="col-sm-2 col-4 text-center pt-0 p-2">
              <a href="<?= $playUrl; ?>">
                <img data-sizes="auto" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="Slot <?= $app_name; ?>">
                <p class="mt-2 d-none d-sm-block"><?= $s3['game_name']; ?></p>
                <small class="mt-2 d-block d-sm-none"><?= $s3['game_name']; ?></small>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
        <p>&nbsp;</p>
      </div>
    </div>

  </div>

  <div class="bg-custom" style="height: 10px;"></div>

  <!--Start footer-->
  <?php include('footer.php'); ?>
</body>

</html>