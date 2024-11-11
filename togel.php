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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Togel', '$pengguna')") or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('seo/meta/all-top-public.php'); ?>
  <?php include('seo/meta/public-togel.php'); ?>
  <?php include('seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('partials/header-main.php'); ?>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <h1 class="sr-only">Togel <?= $app_name; ?></h1>

    <!--Start topbar header-->
    <?php include('partials/top-menu.php'); ?>
    <!--End topbar header-->

    <div class="bg-custom pb-5">
      <div class="container">
        <div class="row">
          <?php
          $timeNow = date('H:i:s');
          $sql_togel = mysqli_query($conn, "SELECT * FROM `tb_pasaran` ORDER BY title ASC") or die(mysqli_error($conn));
          while ($st = mysqli_fetch_array($sql_togel)) :
            $pid = $st['cuid'];
            $getResult = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
            $grr = mysqli_num_rows($getResult);
            $grs = mysqli_fetch_array($getResult);
            $closeResult = date('F d, Y H:i:s', strtotime($st['close_result']));
            $aa = $st['close_result'];
            $bb = $st['time_result'];
          ?>
            <div class="col-sm-3 mb-3 py-3 bg-dark rounded">
              <h4 class="mb-3">
                <small><?= $st['title']; ?> <small class="float-right text-white"><?= date('d F Y', strtotime($grs['created'])); ?></small></small>
              </h4>
              <div class="card p-0 mb-1" style="background: none;">
                <div class="card-body p-0 text-center">
                  <?php if ($grr == 0) { ?>
                    <table style="width: 100%;">
                      <tr>
                        <td class="bg-primary text-white rounded" style="font-size: 18px; border-right:1px dotted #F1F1FF;">0</td>
                        <td class="bg-primary text-white rounded" style="font-size: 18px; border-right:1px dotted #F1F1FF;">0</td>
                        <td class="bg-primary text-white rounded" style="font-size: 18px; border-right:1px dotted #F1F1FF;">0</td>
                        <td class="bg-primary text-white rounded" style="font-size: 18px;">0</td>
                      </tr>
                    </table>
                    <p class="mt-2 mb-0 text-white">Periode 0</p>
                  <?php
                  } else {
                    $getResults = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
                    $grrs = mysqli_num_rows($getResults);
                    $gr = mysqli_fetch_array($getResults);
                    $hasil = $gr['result'];
                    $angka1 = substr($hasil, 0, 1);
                    $angka2 = substr($hasil, 1, 1);
                    $angka3 = substr($hasil, 2, 1);
                    $angka4 = substr($hasil, 3, 1);
                  ?>
                    <table style="width: 100%;">
                      <tr>
                        <td class="bg-primary text-white rounded" style="font-size: 18px; border-right:1px dotted #F1F1FF;"><?= $angka1; ?></td>
                        <td class="bg-primary text-white rounded" style="font-size: 18px; border-right:1px dotted #F1F1FF;"><?= $angka2; ?></td>
                        <td class="bg-primary text-white rounded" style="font-size: 18px; border-right:1px dotted #F1F1FF;"><?= $angka3; ?></td>
                        <td class="bg-primary text-white rounded" style="font-size: 18px;"><?= $angka4; ?></td>
                      </tr>
                    </table>
                    <p class="mt-2 mb-0 text-white">Periode <?= $gr['no']; ?></p>
                  <?php } ?>
                </div>
              </div>
              <?php //Jika Login
              if (isset($_SESSION['user'])) {
                if ($timeNow > $aa && $timeNow < $bb) {
                  echo '<a href="#" class="btn btn-danger btn-sm btn-block">Bet Ditutup</a>';
                } else { ?>
                  <a href="<?= $urldomain; ?>/taruhan?pid=<?= $pid; ?>" class="btn btn-success btn-sm btn-block">Pasang</a>
              <?php }
              } ?>
              <?php //Tanpa Login
              if (!isset($_SESSION['user'])) {
                if ($timeNow > $aa && $timeNow < $bb) {
                  echo '<a href="#" class="btn btn-danger btn-sm btn-block">Bet Ditutup</a>';
                } else { ?>
                  <a href="<?= $urldomain; ?>/login" class="btn btn-success btn-sm btn-block">Pasang</a>
              <?php }
              } ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-custom" style="height: 10px;"></div>

  <!--Start footer-->
  <?php include('footer.php'); ?>
</body>

</html>