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
$stat = mysqli_query($conn, "INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Contact', '$pengguna')") or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-public.php'); ?>
  <?php include('../seo/meta/public-contact.php'); ?>
  <?php include('../seo/meta/all-bottom.php'); ?>

  <!--Partial header main-->
  <?php include('../partials/header-main.php'); ?>

  <link href="<?= $urldomain; ?>/assets/css/custom.css?<?= $cache; ?>" rel="stylesheet">
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
              <h1 class="h2">Hubungi Kami</h1>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="pb-5">
              <div class="section bg-white text-dark rounded-lg">
                <div class="card-body">
                  <p>
                    Apakah Anda sedang mencari web terhits, terpopuler? Provider game slot online <strong><?= str_replace('https://', '', $urldomain); ?></strong> adalah salah satu solusinya. Dengan sesi online lengkap situs slot <strong><?= str_replace('https://', '', $urldomain); ?></strong>. Kalian serta pemain provider game online <strong><?= str_replace('https://', '', $urldomain); ?></strong> tidak perlu khawatir tentang apapun. Sebagai database online terbesar kami, situs slot gacor <strong><?= str_replace('https://', '', $urldomain); ?></strong> menawarkan berbagai layanan mulai dari deposit hingga hanya modal Rp 20.000. Saat kalian bertaruh atau berpartisipasi dalam slot online di situs slot online <strong><?= str_replace('https://', '', $urldomain); ?></strong> , Anda mendapatkan uang di <strong><?= str_replace('https://', '', $urldomain); ?></strong> sudah dikenal sebagai slot pembayaran terbesar di Indonesia. Bahkan jika Anda terdaftar sebagai pemain atau petaruh, kami memiliki situs slot online <strong><?= str_replace('https://', '', $urldomain); ?></strong> dengan banyak peluang untuk memenangkan hadiah.<br><br>
                    Dengan situs slot <?= $urldomain; ?>, Anda tidak akan kecewa karena <strong><?= str_replace('https://', '', $urldomain); ?></strong> slot atau permainan judi online, karena ada banyak slot yang dapat ditawarkan situs slot online <strong><?= str_replace('https://', '', $urldomain); ?></strong>. Anda sempurna, pemain atau peserta situs slot gacor <strong><?= str_replace('https://', '', $urldomain); ?></strong> online hanya membutuhkan deposit minimum dan Anda dapat memainkan slot <strong><?= str_replace('https://', '', $urldomain); ?></strong> gacor dari penyedia slot teratas seperti Pragmatic Play, Playstar dan Habanero. dan Toptrend Gaming. Situs slot baru <strong><?= str_replace('https://', '', $urldomain); ?></strong> Lengkap menawarkan berbagai macam permainan casino mulai dari slot, casino online, mancing, tinju, togel/togel, sepak bola/permainan taruhan online. Anda tidak perlu khawatir tentang keamanan situs slot gacor <strong><?= str_replace('https://', '', $urldomain); ?></strong>. <strong><?= str_replace('https://', '', $urldomain); ?></strong>, portal slot online yang sempurna, telah disahkan oleh tantangan slot online.
                  </p>
                  <h2 class="h3">Hubungi <?= $app_name; ?></h2>
                  <p>Hubungi kami melalui whatsapp, email dukungan, halaman tiket, atau melalui kontak dibawah ini:</p>
                  <div class="row">
                    <div class="col-sm-3">
                      <p><i class="fab fa-whatsapp pr-1"></i> <?= $wautama; ?></p>
                      <p><i class="fas fa-envelope pr-1"></i> <?= $emailutama; ?></p>
                      <p><i class="fas fa-headphones pr-1"></i> Online 24 Jam</p>
                    </div>
                    <div class="col-sm-3">
                      <p>
                      <h2 class="h5 text-dark">Ikuti kami di Media Sosial</h2>
                      </p>
                      <?php if ($s1a['facebook'] != '#' and $s1a['facebook'] !== '') : ?>
                        <a href="<?= $s1a['facebook']; ?>" target="_blank">
                          <div class="text-center mb-2 mr-2 fbku">
                            <i class="fab fa-facebook mt-1" style="font-size: 32px"></i>
                          </div>
                        </a>
                      <?php endif; ?>
                      <?php if ($s1a['twitter'] != '#' and $s1a['twitter'] !== '') : ?>
                        <a href="<?= $s1a['twitter']; ?>" target="_blank">
                          <div class="text-center mb-2 mr-2 twku">
                            <i class="fab fa-twitter mt-1" style="font-size: 32px"></i>
                          </div>
                        </a>
                      <?php endif; ?>
                      <?php if ($s1a['instagram'] != '#' and $s1a['instagram'] !== '') : ?>
                        <a href="<?= $s1a['instagram']; ?>" target="_blank">
                          <div class="text-center mb-2 mr-2 igku">
                            <i class="fab fa-instagram mt-1" style="font-size: 32px;"></i>
                          </div>
                        </a>
                      <?php endif; ?>
                      <?php if ($s1a['linkedin'] != '#' and $s1a['linkedin'] !== '') : ?>
                        <a href="<?= $s1a['linkedin']; ?>" target="_blank">
                          <div class="text-center mb-2 mr-2 linkedku">
                            <i class="fab fa-linkedin mt-1" style="font-size: 32px"></i>
                          </div>
                        </a>
                      <?php endif; ?>
                      <?php if ($s1a['youtube'] != '#' and $s1a['youtube'] !== '') : ?>
                        <a href="<?= $s1a['youtube']; ?>" target="_blank">
                          <div class="text-center mb-2 mr-2 youtubeku">
                            <i class="fab fa-youtube mt-1" style="font-size: 32px"></i>
                          </div>
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
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