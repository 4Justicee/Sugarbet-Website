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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Beranda', '$pengguna')") or die(mysqli_error($conn));
$sql_banner = mysqli_query($conn, "SELECT * FROM `tb_banner` WHERE cuid = 1") or die(mysqli_error($conn));
$ssb = mysqli_fetch_array($sql_banner);
$status = $ssb['status'];
if ($status == true) {
  $cekPopup = mysqli_query($conn, "SELECT * FROM `tb_popup` WHERE ip = '$ip'") or die(mysqli_error($conn));
  $cpp = mysqli_num_rows($cekPopup);
  if ($cpp == 0) {
    $pop = mysqli_query($conn, "INSERT INTO `tb_popup` (`ip`, `date`, `status`) VALUES ('$ip', '$date', 0)") or die(mysqli_error($conn));
    $lihat = $status;
  } else {
    $cp = mysqli_fetch_array($cekPopup);
    $statusnya = $cp['status'];
    if ($statusnya == 0) {
      $lihat = $status;
    } else {
      $lihat = 'false';
    }
  }
} else {
  $lihat = $status;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('seo/meta/all-top-public.php'); ?>
  <?php include('seo/meta/public-index.php'); ?>
  <?php include('seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <h1 class="sr-only"><?= $app_name; ?> - <?= $slogan; ?></h1>

    <!--Start topbar header-->
    <?php include('partials/top-menu.php'); ?>
    <!--End topbar header-->

    <!--Slider-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        $sql_21 = mysqli_query($conn, "SELECT * FROM `tb_slide` ORDER BY sort ASC") or die(mysqli_error($conn));
        $nos = 0;
        while ($s21 = mysqli_fetch_array($sql_21)) :
          $nos++;
          $a = $nos - 1;
        ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?= $a; ?>" <?php if ($nos == 1) {
                                                                                    echo ' class="active"';
                                                                                  } ?>></li>
        <?php endwhile; ?>
      </ol>
      <div class="carousel-inner">
        <?php
        $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_slide` ORDER BY sort ASC") or die(mysqli_error($conn));
        $no = 0;
        while ($s2 = mysqli_fetch_array($sql_2)) :
          $no++;
        ?>
          <div class="carousel-item<?php if ($no == 1) {
                                      echo ' active';
                                    } ?> carouselborder">
            <img class="d-block w-100 carouselborder" src="<?= $domainutama; ?>/upload/slider/<?= $s2['image']; ?>?<?= $cache; ?>" alt="<?= $slogan; ?>">
          </div>
        <?php endwhile; ?>
      </div>
    </div>

    <!--PC-->
    <!--Keluaran Togel-->
    <div class="bg-custom d-none d-sm-block pt-4 pb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-2 pt-4 pb-4"></div>
          <div class="col-md-8 col-sm-8 pt-4 pb-0">
            <h2 class="h3 mb-3 text-center">
              Keluaran Togel Hari Ini
            </h2>
            <div class="row game">
              <?php
              $timeNow = date('H:i:s');
              $sql_togel = mysqli_query($conn, "SELECT * FROM `tb_pasaran` ORDER BY rand() ASC LIMIT 5") or die(mysqli_error($conn));
              while ($st = mysqli_fetch_array($sql_togel)) :
                $pid = $st['cuid'];
                $getResult = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
                $grr = mysqli_num_rows($getResult);
                $grs = mysqli_fetch_array($getResult);
                $closeResult = date('F d, Y H:i:s', strtotime($st['close_result']));
                $aa = $st['close_result'];
                $bb = $st['time_result'];
              ?>
                <div class="col">
                  <div class="card bg-custom togelheader">
                    <div class="card-body p-2 text-center">
                      <?= $st['title']; ?>
                      <div class="h2 blink_me mt-3 mb-3">
                        <?php if ($grr == 0) {
                          echo '0000';
                        } else {
                          echo $grs['result'];
                        } ?>
                      </div>
                    </div>
                    <div class="card-footer p-2 text-center togeltitle">
                      <?php if ($grr == 0) {
                        echo date('d F Y');
                      } else {
                        echo date('d F Y', strtotime($grs['created']));
                      } ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="/togel" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> Market Lainnya
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 pt-4 pb-4"></div>

          <!--Jackpot Play-->
          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <div class="progressive-jackpot">
              <h2 class="text-center">Progressive Jackpot</h2>
              <div class="jackpot-wrapper">
                <img data-sizes="auto" data-src="<?= $urldomain; ?>/assets/images/progressive-jackpot.gif" alt="Progressive Jackpot" class="lazyload">
                <span class="count-jack" id="counter1"></span>
              </div>
            </div>
          </div>

          <!--Game Terakhir Dimainkan-->
          <?php
          if (isset($_SESSION['user'])) :
            $user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '" . $_SESSION['user'] . "'") or die(mysqli_error($conn));
            $u = mysqli_fetch_array($user);
            $users = $u['user'];
            $userid = $u['user'];
            $id_user = $u['cuid'];
            $userID = $u['cuid'];
            $cekTransaksi = mysqli_query($conn, "SELECT cuid, gameid, jenis, userID FROM `tb_transaksi` WHERE jenis = 5 AND userID = '$userID' GROUP BY gameid ORDER BY cuid DESC LIMIT 10") or die(mysqli_error($conn));
            $ctt = mysqli_num_rows($cekTransaksi);
            if ($ctt > 0) :
          ?>
              <div class="col-md-12 col-sm-12 pt-4 pb-4">
                <h3 class="text-center mb-3">
                  Game Terakhir Dimainkan
                </h3>
                <div class="lastgames">
                  <ul class="nav lastgamenav">
                    <?php
                    while ($ct = mysqli_fetch_array($cekTransaksi)) :
                      $gameid = $ct['gameid'];
                      $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamelist` WHERE `gameid` = '$gameid'") or die(mysqli_error($conn));
                      $s3 = mysqli_fetch_array($sql_3);
                      $playUrl = $urldomain . '/gameplay/' . $s3['provider'] . '/?gamecode=' . $s3['gameid'];
                    ?>
                      <li class="nav-item lastgameitem">
                        <a href="<?= $playUrl; ?>">
                          <img data-sizes="auto" style="height: 144px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload lastgameimg" alt="Game Slot <?= $s3['game_name']; ?>">
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                </div>
              </div>
          <?php endif;
          endif; ?>

          <!--RTP Minggu Ini-->
          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="text-center mb-3">
              RTP Minggu Ini
            </h3>
            <div class="row">
              <?php //game pilihan
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_category` = 'slots' AND `game_name` NOT IN (
                'Koi gate',
                'Mahjong Ways',
                'Mahjong Ways 2',
                'Treasures of Aztec',
                'Gates of Olympus',
                'Wild Bandito',
                'Fortune Ox',
                'Golden Ox',
                'Pyramid Bonanza',
                'Bikini Paradise',
                'Power of Thor Megaways',
                'Fury of Odin Megaways       ',
                'Starlight Princess',
                'Starlight Princess 1000',
                'Wild Fireworks',
                'Sweet Bonanza',
                'Sweet Bonanza Xmas',
                'Wisdom of Athena',
                'Wild West Gold',
                'Wild West Gold Megaways',
                'Gravity Bonanza'
                ) ORDER BY RAND() LIMIT 12") or die(mysqli_error($conn));
              while ($s3 = mysqli_fetch_array($sql_3)) :
                if (isset($_SESSION['user'])) {
                  $externalPlayerId = $_SESSION['user'];
                  $playUrl = $urldomain . '/gameplay/' . $s3['game_category'] . '/?gamecode=' . $s3['game_code'] . '&providercode=' . $s3['game_provider'];
                } else {
                  $playUrl = $urldomain . '/login';
                }
                $random = mt_rand($minrtp, $maxrtp);
                if ($random < 65) {
                  $warna = 'bg-danger';
                } else if ($random >= 65 && $random < 70) {
                  $warna = 'bg-warning';
                } else if ($random >= 70) {
                  $warna = 'bg-success';
                }
              ?>
                <div class="col-sm-2 col-4 text-center pt-0 p-2">
                  <a href="<?= $playUrl; ?>">
                    <img data-sizes="auto" style="height: 144px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamertpimg" alt="Slot Max Win <?= $s3['game_name']; ?>">
                    <div class="progress text-center gamertpimgtitle">
                      <div class="progress-bar progress-bar-striped progress-bar-animated <?= $warna; ?>" role="progressbar" aria-valuenow="<?= $random; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $random; ?>%" aria-label="progresbar-<?= $random; ?>"><?= $random; ?>%</div>
                    </div>
                    <p class="mt-2"><?= $s3['game_name']; ?></p>
                    <img src="<?= $urldomain; ?>/assets/images/dailywin.webp" class="shadow dailydropwin" alt="Daily Win <?= $s3['game_name']; ?>">
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot/rtp-slot" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> RTP Slot
                </a>
              </div>
            </div>
          </div>

          <!--PragmaticPlay Terbaik Minggu Ini-->
          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="text-center mb-3">
              PragmaticPlay Terbaik Minggu Ini
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = 'PRAGMATIC' ORDER BY RAND() LIMIT 12") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 144px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="<?= $s3['game_name']; ?>">
                    <p class="mt-2"><?= $s3['game_name']; ?></p>
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot/PRAGMATIC" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> PRAGMATIC
                </a>
              </div>
            </div>
          </div>

          <!--PGSoft Terbaik Minggu Ini-->
          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="text-center mb-3">
              PGSoft Terbaik Minggu Ini
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = 'PGSOFT' ORDER BY RAND() LIMIT 12") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 144px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="<?= $s3['game_name']; ?>">
                    <p class="mt-2"><?= $s3['game_name']; ?></p>
                    <img src="<?= $urldomain; ?>/assets/images/dropwin.webp" class="shadow dailydropwin" alt="Drop Win <?= $s3['game_name']; ?>">
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot/PGSOFT" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> PGSOFT
                </a>
              </div>
            </div>
          </div>

          <!--Casino Live Terpopuler-->
          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="text-center mb-3">
              Casino Live Terpopuler
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_category` = 'casino' ORDER BY RAND() LIMIT 12") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 144px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="Casino <?= $s3['game_name']; ?>">
                    <p class="mt-2"><?= $s3['game_name']; ?></p>
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/casino" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> Casino Lainnya
                </a>
              </div>
            </div>
          </div>

          <!--Riwayat Kemenangan Tertinggi-->
          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="text-center mb-3">
              Riwayat Kemenangan Tertinggi
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_category` = 'slots' AND `game_name` IN (
                'Pyramid Bonanza',
                'Bikini Paradise',
                'Power of Thor Megaways',
                'Starlight Princess',
                'Starlight Princess 1000',
                'Wild Fireworks',
                'Sweet Bonanza',
                'Sweet Bonanza Xmas',
                'Wisdom of Athena',
                'Wild West Gold',
                'Wild West Gold Megaways',
                'Gravity Bonanza'
                ) ORDER BY RAND() LIMIT 6") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 144px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="Sports <?= $s3['game_name']; ?>">
                    <p class="mt-2"><?= $s3['game_name']; ?></p>
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> Slot Lainnya
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--MOBIILE-->
    <div class="bg-custom d-block d-sm-none">
      <div class="container">
        <div class="row">
          <?php
          if (isset($_SESSION['user'])) {
          ?>
            <?php if ($userLevel == 'user') : ?>
              <div class="container">
                <div class="row">
                  <div class="col-12 p-0">
                    <a class="nav-link sidebarmenuinfosaldoidr" href="#" data-toggle="modal" data-target="#modalBalance">
                      <span class="balance">Rp. <?= $sb['balance']; ?></span><span class="float-right">Lihat Saldo</span>
                    </a>
                  </div>
                  <div class="modal fade" id="modalBalance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content" style="background: #101010; border: 1px solid <?= $s0['warnadasar']; ?>;">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Informasi Saldo</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-6 pr-0">
                              <a href="<?= $urldomain; ?>/deposit" class="btn btn-warning text-dark btn-block" style="border-radius:0;">Deposit</a>
                            </div>
                            <div class="col-6 pl-0">
                              <a href="<?= $urldomain; ?>/withdraw" class="btn btn-danger btn-block" style="border-radius:0;">Withdraw</a>
                            </div>
                          </div>
                          <table class="table provBalance m-0">
                            <tbody>
                              <tr>
                                <td class="dropdownoptiontopwallet">
                                  Dompet Utama<br>
                                  <a href="<?= $urldomain; ?>" style="color: <?= $s0['warnadasar']; ?>;">Refresh</a>
                                </td>
                                <td class="text-right dropdownoptiontopwalletinfo">
                                  Rp. <?= $sb['balance']; ?>
                                </td>
                              </tr>
                              <?php
                              $getProvider = mysqli_query($conn, "SELECT * FROM `tb_tripayapi` ORDER BY cuid ASC") or die(mysqli_error($conn));
                              while ($gp = mysqli_fetch_array($getProvider)) :
                                $provider = $gp['provider'];
                                $urlRequest = $gp['urlRequest'];
                                $secureLogin = $gp['api_key'];
                                $secretKey = $gp['secret_key'];
                              ?>
                                <tr>
                                  <td class="dropdownoptiontopinfosaldo">
                                    <?= $gp['provider']; ?>
                                  </td>
                                  <td class="text-right dropdownoptiontopsaldotarik">
                                    <?php
                                    $kabupaten = json_decode($WL->getbalance($users), true);
                                    $kkk = $kabupaten['user_list'];
                                    echo 'Rp. ' . number_format($kkk[0]['balance'], 0, ",", ".");
                                    ?>
                                  </td>
                                </tr>
                              <?php endwhile; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php } else { ?>
            <div class="col-12">
              <div class="row">
                <div class="col-6 pl-2 pr-0">
                  <a href="<?= $urldomain; ?>/login" class="btn btn-success btn-block m-0" style="border-radius: 0;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                    MASUK
                  </a>
                </div>
                <div class="col-6 pl-0 pr-2">
                  <a href="<?= $urldomain; ?>/register" class="btn btn-primary btn-block m-0" style="border-radius: 0;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                    DAFTAR
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

      <div style="padding: 12px;">
        <h2 class="h5 text-center mb-2">Keluaran Togel Hari Ini</h2>
        <table class="table">
          <thead>
            <tr>
              <th class="text-left text-white" style="border-top: 0;">Market</th>
              <th class="text-center text-white" style="border-top: 0;">Tanggal</th>
              <th class="text-center text-white" style="border-top: 0;">Hasil</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $timeNow = date('H:i:s');
            $sql_togel = mysqli_query($conn, "SELECT * FROM `tb_pasaran` ORDER BY rand() ASC LIMIT 5") or die(mysqli_error($conn));
            while ($st = mysqli_fetch_array($sql_togel)) :
              $pid = $st['cuid'];
              $getResult = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
              $grr = mysqli_num_rows($getResult);
              $grs = mysqli_fetch_array($getResult);
              $closeResult = date('F d, Y H:i:s', strtotime($st['close_result']));
              $aa = $st['close_result'];
              $bb = $st['time_result'];
            ?>
              <tr>
                <td class="text-left text-white"><?= $st['title']; ?></td>
                <td class="text-center text-white"><?php if ($grr == 0) {
                                                      echo date('d F Y');
                                                    } else {
                                                      echo date('d-m-Y', strtotime($grs['created']));
                                                    } ?></td>
                <td class="text-center text-white"><span class="blink_me" style="color: <?= $s0['warnadasar']; ?>;"><?php if ($grr == 0) {
                                                                                                                      echo '0000';
                                                                                                                    } else {
                                                                                                                      echo $grs['result'];
                                                                                                                    } ?></span></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
        <div class="col-sm-12 col-12 text-center">
          <a href="<?= $urldomain; ?>/togel" class="btn btn-primary btn-sm">
            <i class="fa fa-info-circle"></i> Market Lainnya
          </a>
        </div>
      </div>

      <div class="progressive-jackpot mt-2">
        <h2>Progressive Jackpot</h2>
        <div class="jackpot-wrapper">
          <img data-sizes="auto" data-src="<?= $urldomain; ?>/assets/images/progressive-jackpot-small.gif" alt="Progressive Jackpot" class="lazyload">
          <span class="count-jack" id="counter1" style="font-size: 7vw;"></span>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <?php
          if (isset($_SESSION['user'])) :
            $user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '" . $_SESSION['user'] . "'") or die(mysqli_error($conn));
            $u = mysqli_fetch_array($user);
            $users = $u['user'];
            $userid = $u['user'];
            $id_user = $u['cuid'];
            $userID = $u['cuid'];
            $cekTransaksi = mysqli_query($conn, "SELECT cuid, gameid, jenis, userID FROM `tb_transaksi` WHERE jenis = 5 AND userID = '$userID' GROUP BY gameid ORDER BY cuid DESC LIMIT 6") or die(mysqli_error($conn));
            $ctt = mysqli_num_rows($cekTransaksi);
            if ($ctt > 0) :
          ?>
              <div class="bg-custom col-md-12 col-sm-12 pt-4">
                <h3 class="h4 text-center mb-3">
                  Game Terakhir Dimainkan
                </h3>
                <div class="lastgameplay">
                  <ul class="nav navlastgameplay">
                    <?php
                    while ($ct = mysqli_fetch_array($cekTransaksi)) :
                      $gameid = $ct['gameid'];
                      $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamelist` WHERE `gameid` = '$gameid'") or die(mysqli_error($conn));
                      $s3 = mysqli_fetch_array($sql_3);
                      $playUrl = $urldomain . '/gameplay/' . $s3['provider'] . '/?gamecode=' . $s3['gameid'];
                    ?>
                      <li class="nav-item navitemlastgameplay">
                        <a href="<?= $playUrl; ?>">
                          <img data-sizes="auto" style="height: 87px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload imgnavitemlastgameplay" alt="<?= $app_name; ?>">
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                </div>
              </div>
          <?php endif;
          endif; ?>

          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="h4 text-center mb-3">
              RTP Minggu Ini
            </h3>
            <div class="row">
              <?php //game pilihan
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_category` = 'slots' AND `game_name` IN (
                'Koi gate',
                'Mahjong Ways',
                'Mahjong Ways 2',
                'Treasures of Aztec',
                'Gates of Olympus',
                'Wild Bandito',
                'Fortune Ox',
                'Golden Ox',
                'Pyramid Bonanza',
                'Bikini Paradise',
                'Power of Thor Megaways',
                'Fury of Odin Megaways       ',
                'Starlight Princess',
                'Starlight Princess 1000',
                'Wild Fireworks',
                'Sweet Bonanza',
                'Sweet Bonanza Xmas',
                'Wisdom of Athena',
                'Wild West Gold',
                'Wild West Gold Megaways',
                'Gravity Bonanza'
                ) ORDER BY RAND() LIMIT 9") or die(mysqli_error($conn));
              while ($s3 = mysqli_fetch_array($sql_3)) :
                if (isset($_SESSION['user'])) {
                  $externalPlayerId = $_SESSION['user'];
                  $playUrl = $urldomain . '/gameplay/' . $s3['game_category'] . '/?gamecode=' . $s3['game_code'] . '&providercode=' . $s3['game_provider'];
                } else {
                  $playUrl = $urldomain . '/login';
                }
                $random = mt_rand($minrtp, $maxrtp);
                if ($random < 65) {
                  $warna = 'bg-danger';
                } else if ($random >= 65 && $random < 70) {
                  $warna = 'bg-warning';
                } else if ($random >= 70) {
                  $warna = 'bg-success';
                }
              ?>
                <div class="col-sm-2 col-4 text-center pt-0 p-2">
                  <a href="<?= $playUrl; ?>">
                    <img data-sizes="auto" style="height: 87px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamertpimg" alt="Game Slot <?= $s3['game_name']; ?>">
                    <div class="progress text-center gamertpimgtitle">
                      <div class="progress-bar progress-bar-striped progress-bar-animated <?= $warna; ?>" role="progressbar" aria-valuenow="<?= $random; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $random; ?>%" aria-label="progresbar-<?= $random; ?>"><?= $random; ?>%</div>
                    </div>
                    <small class="mt-2"><?= $s3['game_name']; ?></small>
                    <img src="<?= $urldomain; ?>/assets/images/dailywin.webp" class="shadow dailydropwin" alt="Daily Win <?= $s3['game_name']; ?>">
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot/rtp-slot" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> RTP Slot
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="h4 text-center mb-3">
              PragmaticPlay Terbaik Minggu Ini
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = 'PRAGMATIC' ORDER BY RAND() LIMIT 9") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 87px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow imgnormalmobilelayout" alt="Situs Slot <?= $app_name; ?>">
                    <small class="mt-2"><?= $s3['game_name']; ?></small>
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot/slot-terbaru" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> PRAGMATIC
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 pt-4 pb-4">
            <h3 class="h4 text-center mb-3">
              PGSoft Terbaik Minggu Ini
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_provider` = 'PGSOFT' ORDER BY RAND() LIMIT 9") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 87px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow imgnormalmobilelayout" alt="Situs Slot <?= $app_name; ?>">
                    <small class="mt-2"><?= $s3['game_name']; ?></small>
                    <img src="<?= $urldomain; ?>/assets/images/dropwin.webp" class="shadow dailydropwin" alt="Drop Win <?= $s3['game_name']; ?>">
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/slot/PGSOFT" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> PGSOFT
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 pt-4 pb-5">
            <h3 class="h4 text-center mb-3">
              Casino Live Terpopuler
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_category` = 'casino' ORDER BY RAND() LIMIT 9") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 87px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow imgnormalmobilelayout" alt="Situs Slot <?= $app_name; ?>">
                    <small class="mt-2"><?= $s3['game_name']; ?></small>
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/casino" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> Casino Lainnya
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 pt-4 pb-5">
            <h3 class="h4 text-center mb-3">
              Riwayat Kemenangan Tertinggi
            </h3>
            <div class="row">
              <?php
              $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_category` = 'slots' AND `game_name` IN (
                'Koi gate',
                'Mahjong Ways',
                'Mahjong Ways 2',
                'Treasures of Aztec',
                'Gates of Olympus',
                'Wild Bandito',
                'Fortune Ox'
                ) ORDER BY RAND() LIMIT 6") or die(mysqli_error($conn));
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
                    <img data-sizes="auto" style="height: 87px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow imgnormalmobilelayout" alt="Situs Sports <?= $app_name; ?>">
                    <small class="mt-2"><?= $s3['game_name']; ?></small>
                  </a>
                </div>
              <?php endwhile; ?>
              <div class="col-sm-12 col-12 text-center">
                <a href="<?= $urldomain; ?>/sports" class="btn btn-primary btn-sm">
                  <i class="fa fa-info-circle"></i> Slot Lainnya
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!--PC & MOBILE-->
    <!--Daftar Provider Terpopuler-->
    <div class="bg-custom pb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h3 class="h5 text-center mb-3 d-block d-sm-none">
              Daftar Provider Terpopuler
            </h3>
            <h3 class="text-center mb-3 d-none d-sm-block">
              Daftar Provider Terpopuler
            </h3>
            <div class="row">
              <div class="col-sm-1 col-3 text-center pt-0 p-2">
                <a href="<?= $urldomain; ?>/slot/PRAGMATIC">
                  <img data-sizes="auto" data-src="<?= $urldomain; ?>/assets/images/provider/pplay.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="Provider Game Pragmatic">
                </a>
              </div>
              <div class="col-sm-1 col-3 text-center pt-0 p-2">
                <a href="<?= $urldomain; ?>/slot/PGSOFT">
                  <img data-sizes="auto" data-src="<?= $urldomain; ?>/assets/images/provider/pg.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="Provider Game Pragmatic">
                </a>
              </div>
              <div class="col-sm-1 col-3 text-center pt-0 p-2">
                <div style="cursor: pointer;">
                  <img data-sizes="auto" data-src="<?= $urldomain; ?>/assets/images/provider/spadegaming.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" data-toggle="modal" data-target="#exampleModalLong" class="lazyload shadow gamenormalimg" alt="Provider Game <?= $app_name; ?>">
                </div>
              </div>
              <div class="col-sm-1 col-3 text-center pt-0 p-2">
                <a href="<?= $urldomain; ?>/slot/CQ9">
                  <img data-sizes="auto" data-src="<?= $urldomain; ?>/assets/images/provider/cq9.webp" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamenormalimg" alt="Provider Game Pragmatic">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Daftar Link Navigasi-->
    <div class="bg-custom pb-4">
      <div class="container">
        <div class="row">
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

    <!-- Modal MT -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" aria-label="Maintenance">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <center style="color: #000; font-weight: bold;">Maintenance System</center>
          </div>
        </div>
      </div>
    </div>

    <!--Modal popup home-->
    <div class="modal fade" id="exampleModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark animated bounceIn" style="background: #1e2124;">
          <div class="modal-body pb-0" style="color: #fff!important;">
            <?php
            $sql_banner = mysqli_query($conn, "SELECT * FROM `tb_banner` WHERE cuid = 1") or die(mysqli_error($conn));
            $ssb = mysqli_fetch_array($sql_banner);
            if ($ssb['image'] != '') {
              echo '
                <img data-sizes="auto" data-src="' . $domainutama . '/upload/banner/' . $ssb['image'] . '" alt="' . $app_name . ' News" class="lazyload img-fluid mb-3" style="display: block; margin: 0 auto;">
              ';
            }
            echo '<div>' . $ssb['content'] . '</div>';
            ?>
          </div>
          <div class="modal-footer pt-0">
            <div class="row" style="width: 100%;">
              <div class="col-8 text-left">
                <div class="form-group form-check m-0 mt-2">
                  <input type="checkbox" name="popup" class="form-check-input" value="1" id="exampleCheck1">
                  <label class="form-check-label text-white mt-1" for="exampleCheck1">Jangan tampilkan</label>
                  <input type="hidden" name="ip" id="ipaddress" value="<?= $ip; ?>">
                </div>
              </div>
              <div class="col-4 text-right">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">
                  Tutup
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="bg-custom" style="height: 10px;"></div>

  <!--Start footer-->
  <?php include('footer.php'); ?>

  <!--Start popup home-->
  <script>
    $(window).on('load', function() {
      $('#exampleModal').modal({
        show: <?= $lihat; ?>,
        backdrop: 'static',
        keyboard: false
      });
    });
    $(document).ready(function() {
      $("#exampleCheck1").change(function() {
        if (this.checked == true) {
          $.ajax({
            url: "<?= $urldomain; ?>/function/popup-home.php",
            method: "POST",
            data: {
              id: 1,
              ipaddress: $('#ipaddress').val()
            },
            success: function(data) {}
          })
        }
      });
    });
  </script>

  <script>
    class Jackpot {
      constructor(selector) {
        this.selector = selector;
        this.loop();
      }

      loop() {
        let jackpots = document.querySelectorAll(this.selector);
        jackpots.forEach((item) => {
          let jackpot = item.querySelector('.jackpot'),
            value = parseInt(jackpot.getAttribute(['data-jackpot'])),
            randomJackpotInt = this.randomInt(150, 650),
            randomIntervalInt = this.randomInt(1000, 2000),
            randomCentsInt = this.randomInt(10, 99);

          this.show(value, jackpot, randomJackpotInt, randomCentsInt);

          let interval = setInterval(() => {
            this.show(value, jackpot, randomJackpotInt, randomCentsInt);

            this.loop();

            clearInterval(interval);
          }, randomIntervalInt);
        })
      }

      show(value, jackpot, randomJackpotInt, randomCentsInt) {
        value += randomJackpotInt;
        let transformed = this.transform(value);

        jackpot.innerHTML = transformed + '.' + randomCentsInt;
        jackpot.setAttribute('data-jackpot', transformed.replace(/\,/g, ''));
      }

      transform(value) {
        return value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
      }
      randomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
      }
    }
    (() => {
      console.clear();
      let jackpot = new Jackpot('.jackpot');
    })()
  </script>

</body>

</html>