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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Fishing', '$pengguna')") or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('seo/meta/all-top-public.php'); ?>
  <?php include('seo/meta/public-fishing.php'); ?>
  <?php include('seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <h1 class="sr-only">Fishing <?= $app_name; ?></h1>

    <!--Start topbar header-->
    <?php include('partials/top-menu.php'); ?>
    <!--End topbar header-->

    <!--MOBILE-->
    <div class="bg-custom d-block d-sm-none">
      <div class="mobileprovider">
        <ul class="nav" style="width: 1000px; height: auto;">
          <?php
          $sql_provider = mysqli_query($conn, "SELECT a.*, b.* FROM tb_provider as a INNER JOIN tb_tripayapi as b ON a.providerid = b.provider WHERE a.jenis = 4 ORDER BY a.cuid") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_provider)) {
            $provider = $sp['providerid'];
            $hitungProduk = mysqli_query($conn, "SELECT * FROM `tb_gamelist` WHERE provider = '$provider' AND `datatype` = 'FISHING'") or die(mysqli_error($conn));
            $hp = mysqli_num_rows($hitungProduk);
            if ($hp > 0) {
          ?>
              <li class="nav-item menuprovider">
                <a href="<?= $urldomain; ?>/fishing/<?= $sp['slug']; ?>">
                  <img data-sizes="auto" data-src="<?= $urldomain; ?>/upload/<?= $sp['provider']; ?>.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload img-fluid styleimgprovider" alt="<?= $slogan; ?>">
                </a>
              </li>
          <?php }
          } ?>
        </ul>
      </div>
    </div>

    <!--PC-->
    <div class="bg-custom d-none d-sm-block pb-3 pt-0">
      <div class="container">
        <ul class="nav" style="justify-content: center;">
          <?php
          $sql_provider = mysqli_query($conn, "SELECT a.*, b.* FROM tb_provider as a INNER JOIN tb_tripayapi as b ON a.providerid = b.provider WHERE a.jenis = 4 ORDER BY a.cuid") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_provider)) {
            $provider = $sp['providerid'];
            $hitungProduk = mysqli_query($conn, "SELECT * FROM `tb_gamelist` WHERE provider = '$provider' AND `datatype` = 'FISHING'") or die(mysqli_error($conn));
            $hp = mysqli_num_rows($hitungProduk);
            if ($hp > 0) {
          ?>
              <li class="nav-item menuprovider">
                <a href="<?= $urldomain; ?>/fishing/<?= $sp['slug']; ?>">
                  <img data-sizes="auto" data-src="<?= $urldomain; ?>/upload/<?= $sp['provider']; ?>.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload img-fluid styleimgprovider" alt="<?= $slogan; ?>">
                </a>
              </li>
          <?php }
          } ?>
        </ul>
      </div>
    </div>

    <!--Search-->
    <?php include('partials/search.php'); ?>

    <div class="bg-custom pb-5">
      <div class="container">
        <div class="row">
          <?php
          if (isset($_GET['provider'])) {
            $provider = $_GET['provider'];
            $sql_provider = mysqli_query($conn, "SELECT * FROM `tb_provider` WHERE slug = '$provider'") or die(mysqli_error($conn));
            $sp = mysqli_fetch_array($sql_provider);
            $providerID = $sp['providerid'];
            $where = "`provider` = '" . $providerID . "' AND";
            $pageLink = 'fishing/' . $provider . '/';
          } else {
            $where = "`provider` = 'Joker' AND";
            $pageLink = 'fishing/?';
          }

          $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamelist` WHERE $where `datatype` IN ('FISHING') ORDER BY gameidnumeric DESC") or die(mysqli_error($conn));
          while ($s3 = mysqli_fetch_array($sql_3)) :
            if (isset($_SESSION['user'])) {
              $externalPlayerId = $_SESSION['user'];
              $playUrl = $urldomain . '/gameplay/' . $s3['provider'] . '/?gamecode=' . $s3['gameid'];
            } else {
              $playUrl = $urldomain . '/login';
            }

          ?>
            <div class="col-sm-2 col-4 text-center pt-0 p-2">
              <a href="<?= $playUrl; ?>" target="_blank">
                <img data-sizes="auto" data-src="<?= $urldomain; ?>/<?= $s3['image']; ?>" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="Fishing <?= $app_name; ?>">
                <p class="mt-2 d-none d-sm-block"><?= $s3['gamename']; ?></p>
                <small class="mt-2 d-block d-sm-none"><?= $s3['gamename']; ?></small>
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