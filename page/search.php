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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Slot', '$pengguna')") or die(mysqli_error($conn));

$keyword = $_GET['keyword'];
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-public.php'); ?>
  <?php include('../seo/meta/public-search.php'); ?>
  <?php include('../seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('../partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <h1 class="sr-only">Main Game Slot & Casino <?= $app_name; ?></h1>

    <!--Start topbar header-->
    <?php include('../partials/top-menu.php'); ?>
    <!--End topbar header-->

    <!--MOBILE-->
    <div class="bg-custom d-block d-sm-none">
      <div class="mobileprovider">
        <ul class="nav" style="width: 1000px; height: auto;">
          <?php
          $sql_provider = mysqli_query($conn, "SELECT * FROM `tb_wprovider` WHERE `type` = 'slot'") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_provider)) :
            $provider = $sp['code'];
            $hitungProduk = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = '$provider'") or die(mysqli_error($conn));
            $hp = mysqli_num_rows($hitungProduk);
            if ($hp > 0) :
          ?>
              <li class="nav-item menuprovider">
                <a href="<?= $urldomain; ?>/slot/<?= $sp['code']; ?>">
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
          $sql_provider = mysqli_query($conn, "SELECT * FROM `tb_wprovider` WHERE `type` = 'slot'") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_provider)) :
            $provider = $sp['code'];
            $hitungProduk = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = '$provider'") or die(mysqli_error($conn));
            $hp = mysqli_num_rows($hitungProduk);
            if ($hp > 0) :
          ?>
              <li class="nav-item menuprovider">
                <a href="<?= $urldomain; ?>/slot/<?= $sp['code']; ?>">
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
    <div class="bg-custom pt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-8 col-sm-8">
            <form action="<?= $urldomain; ?>/search" method="GET">
              <div class="input-group">
                <input type="text" class="form-control" id="keyword" name="keyword" autocomplete="off" placeholder="Pencarian..." aria-label="Pencarian..." aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <style>
                #res {
                  position: absolute;
                  width: 90%;
                  max-width: 90%;
                  cursor: pointer;
                  overflow-y: auto;
                  max-height: 400px;
                  box-sizing: border-box;
                  z-index: 2;
                  border-color: white;
                  margin-top: -2px;
                  color: #000;
                }

                .link-class {
                  border-color: white;
                }

                .list-group {
                  border-radius: 0;
                }

                .link-class:hover {
                  background-color: #fff;
                  color: #000;
                  cursor: pointer;
                }
              </style>
              <div class="container">
                <ul class="list-group" style="margin-left: 0!important;" id="res"></ul>
              </div>
            </form>
          </div>
          <div class="col-md-2 col-sm-2"></div>
        </div>
      </div>
    </div>

    <!--Result-->
    <div class="bg-custom pt-2 pb-5">
      <div class="container">
        <div class="row">
          <?php
          $keyword = $_GET['keyword'];
          $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE game_name LIKE '%$keyword%' ORDER BY RAND() LIMIT 24") or die(mysqli_error($conn));
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
                <img data-sizes="auto" style="height: 87px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="<?= $s3['game_name']; ?>">
                <p class="mt-2 d-none d-sm-block"><?= $s3['game_name']; ?></p>
                <small class="mt-2 d-block d-sm-none"><?= $s3['game_name']; ?></small>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="row pt-4">
          <div class="col-md-12 col-sm-12 pb-4">
            <h4 class="text-center mb-2">
              Label Website
            </h4>
            <div class="row">
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Slots
                </a>
                <a href="<?= $urldomain; ?>/casino" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Casino
                </a>
                <a href="<?= $urldomain; ?>/togel" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Togel
                </a>
                <a href="<?= $urldomain; ?>/sports" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Blog
                </a>
                <a href="<?= $urldomain; ?>/egames" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Promo
                </a>
                <a href="<?= $urldomain; ?>/fishing" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> About
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 pb-4">
            <h4 class="text-center mb-2">
              Provider Games
            </h4>
            <div class="row">
              <div class="col-sm-12 col-12 text-center">
                <?php
                $tableProvider = mysqli_query($conn, "SELECT * FROM `tb_wprovider`");
                while ($providergames = mysqli_fetch_array($tableProvider)) :
                ?>
                  <a href="<?= $urldomain; ?>/slot/<?= $providergames['code']; ?>" class="btn btn-primary btn-sm m-1">
                    <i class="fa fa-tags"></i> <?= $providergames['code']; ?>
                  </a>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 pb-4">
            <h4 class="text-center mb-2">
              Informasi Akun
            </h4>
            <div class="row">
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/dashboard" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Dashboard
                </a>
                <a href="<?= $urldomain; ?>/referrals" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Referrals
                </a>
                <a href="<?= $urldomain; ?>/bank" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Banking
                </a>
                <a href="<?= $urldomain; ?>/history" class="btn btn-primary btn-sm m-1">
                  <i class="fa fa-tags"></i> Riwayat Transaksi
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="bg-custom" style="height: 10px;"></div>

  <!--Start footer-->
  <?php include('../footer.php'); ?>

</body>

</html>