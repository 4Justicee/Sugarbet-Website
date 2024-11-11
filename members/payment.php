<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-pembayaran.php'); ?>
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

    <div class="dashboard pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12 d-none d-sm-block">
            <div class="card shadow-sm">
              <div class="card-header text-white text-center pb-1" style="background: #151819;">
                <h4><?= $u['user']; ?></h4>
                <p>Terakhir Masuk: <?= date('d M Y H:i:s', strtotime($u['last_login'])); ?></p>
              </div>
              <div class="card-body">
                <h5 class="text-center">PUSAT AKUN</h5>
                <hr style="background: <?= $s0['warnadasar']; ?>; border: 1px solid <?= $s0['warnadasar']; ?>; margin-top: 25px;">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/dashboard"><i class="fa fa-user" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Akun Saya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/bank"><i class="fa fa-bank" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history"><i class="fa fa-calendar" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Transaksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/referrals"><i class="fa fa-users" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Referral</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/logout"><i class="fa fa-power-off" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Keluar</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-sm-12">
            <div class="card">
              <div class="card-header p-0">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/bank"><i class="fa fa-user" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/deposit"><i class="fa fa-wallet" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Deposit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/withdraw"><i class="fa fa-money-bill-wave" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Withdraw</a>
                  </li>
                </ul>
              </div>
              <div class="card-body p-2">
                <?php
                //Proses rate mata uang
                $trxID = $_GET['trxID'];
                $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE kd_transaksi = '$trxID'") or die(mysqli_error($conn));
                $s2 = mysqli_fetch_array($sql_2);
                $s2_cek = mysqli_num_rows($sql_2);
                $idtransaksi = $s2['kd_transaksi'];
                $datetransaksi = $s2['date'];
                $totaltransaksi = $s2['total'];
                $metode = $s2['metode'];
                $iniuser = $s2['userID'];
                $setatus = $s2['status'];
                $catatan = $s2['note'];
                //get bank admin
                $getBank = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE cuid = '$metode'") or die(mysqli_error($conn));
                $gb = mysqli_fetch_array($getBank);
                $cuidnya = $gb['cuid'];
                $metodenya = $gb['akun'];
                $pemiliknya = $gb['pemilik'];
                $tujuannya = $gb['no_rek'];
                $gambarnya = $gb['image'];
                //get bank user
                $getUser = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = '$iniuser'") or die(mysqli_error($conn));
                $guser = mysqli_fetch_array($getUser);
                $cuiduser = $guser['cuid'];
                $metodeuser = $guser['akun'];
                $pemilikuser = $guser['pemilik'];
                $tujuanuser = $guser['no_rek'];
                $gambaruser = $guser['image'];
                if (stripos($metodenya, ('CRYPTO')) !== FALSE) {
                  if (stripos($metodenya, ('BTC')) !== FALSE or stripos($metodenya, ('BITCOIN')) !== FALSE) {
                    $currency = 'BTC';
                    $totbar = $totaltransaksi / $ratebitcoin;
                    $totbarfix = number_format($totbar, 8, ",", ".");
                    $namapengirim = 'Blockchain BTC';
                    $nomorpengirim = 'Address Pengirim';
                    $namapenerima = 'Blockchain BTC';
                  } else if (stripos($metodenya, ('ETH')) !== FALSE or stripos($metodenya, ('ETHEREUM')) !== FALSE) {
                    $currency = 'ETH';
                    $totbar = $totaltransaksi / $rateethereum;
                    $totbarfix = number_format($totbar, 8, ",", ".");
                    $namapengirim = 'Blockchain ETH';
                    $nomorpengirim = 'Address Pengirim';
                    $namapenerima = 'Blockchain ETH';
                  } else if (stripos($metodenya, ('USDT')) !== FALSE or stripos($metodenya, ('TRC20')) !== FALSE) {
                    $currency = 'USDT TRC20';
                    $totbar = $totaltransaksi / $rateusdt;
                    $totbarfix = number_format($totbar, 8, ",", ".");
                    $namapengirim = 'Blockchain USDT';
                    $nomorpengirim = 'Address Pengirim';
                    $namapenerima = 'Blockchain USDT';
                  }
                } else if (stripos($metodenya, ('PAYPAL')) !== FALSE) {
                  $currency = 'USD';
                  $totbar = $totaltransaksi / $rateusd;
                  $totbarfix = number_format($totbar, 2, ",", ".");
                  $namapengirim = $pemilikuser;
                  $nomorpengirim = 'Email Paypal Pengirim';
                  $namapenerima = $pemiliknya;
                } else if (stripos($metodenya, ('PULSA')) !== FALSE) {
                  if (stripos($metodenya, ('TSEL')) !== FALSE or stripos($metodenya, ('TELKOMSEL')) !== FALSE) {
                    $currency = 'PULSA';
                    $totbar = $totaltransaksi / $ratepulsa;
                    $totrate = ceil($totbar / 1000) * 1000;
                    $totbarfix = number_format($totrate, 0, ",", ".");
                    $namapengirim = 'Operator TELKOMSEL';
                    $nomorpengirim = 'Nomor Pengirim';
                    $namapenerima = 'Operator TELKOMSEL';
                  } else if (stripos($metodenya, ('ISAT')) !== FALSE or stripos($metodenya, ('INDOSAT')) !== FALSE) {
                    $currency = 'PULSA';
                    $totbar = $totaltransaksi / $ratepulsa;
                    $totrate = ceil($totbar / 1000) * 1000;
                    $totbarfix = number_format($totrate, 0, ",", ".");
                    $namapengirim = 'Operator INDOSAT';
                    $nomorpengirim = 'Nomor Pengirim';
                    $namapenerima = 'Operator INDOSAT';
                  } else if (stripos($metodenya, ('AXIS')) !== FALSE or stripos($metodenya, ('AXIS')) !== FALSE) {
                    $currency = 'PULSA';
                    $totbar = $totaltransaksi / $ratepulsa;
                    $totrate = ceil($totbar / 1000) * 1000;
                    $totbarfix = number_format($totrate, 0, ",", ".");
                    $namapengirim = 'Operator AXIS';
                    $nomorpengirim = 'Nomor Pengirim';
                    $namapenerima = 'Operator AXIS';
                  } else if (stripos($metodenya, ('XL')) !== FALSE or stripos($metodenya, ('XL AXIATA')) !== FALSE) {
                    $currency = 'PULSA';
                    $totbar = $totaltransaksi / $ratepulsa;
                    $totrate = ceil($totbar / 1000) * 1000;
                    $totbarfix = number_format($totrate, 0, ",", ".");
                    $namapengirim = 'Operator XL AXIATA';
                    $nomorpengirim = 'Nomor Pengirim';
                    $namapenerima = 'Operator XL AXIATA';
                  }
                } else if (stripos($metodenya, ('QRIS')) !== FALSE) {
                  $currency = 'IDR';
                  $totbar = $totaltransaksi / $rateidr;
                  $totbarfix = number_format($totbar, 0, ",", ".");
                  $namapengirim = $pemilikuser;
                  $nomorpengirim = 'Nomor / QR Pengirim';
                  $namapenerima = $pemiliknya;
                } else if (stripos($metodenya, ('EMONEY')) !== FALSE) {
                  $currency = 'IDR';
                  $totbar = $totaltransaksi / $rateidr;
                  $totbarfix = number_format($totbar, 0, ",", ".");
                  $namapengirim = $pemilikuser;
                  $nomorpengirim = 'Nomor Pengirim';
                  $namapenerima = $pemiliknya;
                } else if (stripos($metodenya, ('BANK')) !== FALSE) {
                  $currency = 'IDR';
                  $totbar = $totaltransaksi / $rateidr;
                  $totbarfix = number_format($totbar, 0, ",", ".");
                  $namapengirim = $pemilikuser;
                  $nomorpengirim = 'Rekening Pengirim';
                  $namapenerima = $pemiliknya;
                } else {
                  $currency = 'IDR';
                  $totbar = $totaltransaksi / $rateidr;
                  $totbarfix = number_format($totbar, 0, ",", ".");
                  $namapengirim = $pemilikuser;
                  $nomorpengirim = 'Rekening Pengirim';
                  $namapenerima = $pemiliknya;
                }
                if ($setatus == 0) {
                  $colorstatus = '0d8bf2';
                  $textstatus1 = 'Menunggu';
                  $textstatus2 = '
                      <span class="badge-dot text-warning">
                        <i class="bg-warning"></i> Menunggu
                      </span>
                    ';
                } else if ($setatus == 1) {
                  $colorstatus = '04b962';
                  $textstatus1 = 'Berhasil';
                  $textstatus2 = '
                      <span class="badge-dot text-success">
                        <i class="bg-success"></i> Berhasil
                      </span>
                    ';
                } else if ($setatus == 2) {
                  $colorstatus = 'f43643';
                  $textstatus1 = 'Ditolak';
                  $textstatus2 = '
                      <span class="badge-dot text-danger">
                        <i class="bg-danger"></i> Ditolak
                      </span>
                    ';
                } else {
                  $colorstatus = '14b6ff';
                  $textstatus1 = 'Tanpa Keterangan';
                  $textstatus2 = '
                      <span class="badge-dot text-info">
                        <i class="bg-info"></i> Tanpa Keterangan
                      </span>
                    ';
                }
                //Info metode pengirim pembayaran
                if ($metodenya == $metodeuser) {
                  $notestatusdepo = '<small>Perhatian! Metode deposit di akun Anda <b class="text-success">sama</b> dengan metode tujuan (dari ' . $metodeuser . ' ke ' . $metodenya . '). Konfirmasi manual ke <a href="' . $urldomain . '/contact" target="_blank" class="text-success">admin</a> atau <a href="' . $urldomain . '" class="text-success">live chat</a> (opsional).</small>';
                } else {
                  $notestatusdepo = '<small>Perhatian! Metode deposit di akun Anda <b class="text-danger">tidak sama</b> dengan metode tujuan (dari ' . $metodeuser . ' ke ' . $metodenya . '). Wajib konfirmasi manual ke <a href="' . $urldomain . '/contact" target="_blank" class="text-success">admin</a> atau <a href="' . $urldomain . '" class="text-success">live chat</a>.</small>';
                }
                ?>
                <?php if ($s2_cek > 0) { ?>
                  <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 10px;">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="pb-4">
                          <?= $notestatusdepo; ?>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="pb-4">
                          No. Transaksi<br>
                          <h5 class="mt-2"><?= $idtransaksi; ?><i class="fa fa-clone pl-2 clip" onclick="copy_trxaku()" data-clipboard-text="<?= $idtransaksi; ?>"></i></h5>
                        </div>
                        <div class="pb-4">
                          Waktu Transaksi<br>
                          <h5 class="mt-2"><?= date('d-m-Y H:i:s', strtotime($datetransaksi)) ?></h5>
                        </div>
                        <div class="pb-4">
                          Batas Pembayaran<br>
                          <h5 class="mt-2"><?= date('d-m-Y H:i:s', strtotime($datetransaksi . ' +1 day')) ?></h5>
                        </div>
                        <?php if ($setatus == 0) : ?>
                          <div class="pb-4">
                            Metode Pengirim<br>
                            <h5 class="mt-2"><?= $metodeuser; ?></h5>
                          </div>
                          <div class="pb-4">
                            Nama Pengirim<br>
                            <h5 class="mt-2"><?= $namapengirim; ?></h5>
                          </div>
                          <div class="pb-4">
                            <?= $nomorpengirim; ?><br>
                            <h5 class="mt-2"><?= $tujuanuser; ?></h5>
                          </div>
                        <?php endif; ?>
                      </div>
                      <div class="col-sm-6">
                        <div class="pb-4">
                          <img src="<?= $urldomain; ?>/upload/bank/<?= $gambarnya; ?>" style="padding: -2px;background: #f1f1ff;max-width: 170px;position: absolute;right: 5px; top:152px;" alt="Payment Logo">
                          Metode Pembayaran
                          <h5 class="mt-2"><?= $metodenya; ?></h5>
                        </div>
                        <div class="pb-4">
                          Nominal Transfer (<?= $currency; ?>)<br>
                          <small>Jika bukan rupiah, saldo yang didapatkan mengikuti rate kami <a class="text-primary" href="#rate">dibawah</a>.</small><br>
                          <h5 class="mt-2"><?= $totbarfix; ?><i class="fa fa-clone pl-2 clip" onclick="copy_jumlahku()" data-clipboard-text="<?= $totbarfix; ?>"></i></h5>
                        </div>
                        <?php if ($setatus == 0) : ?>
                          <div class="pb-4">
                            <?php if (stripos($metodenya, ('CRYPTO')) !== FALSE) { ?>
                              Address Tujuan<br>
                              <h5 class="mt-2" style="line-height:1.5">
                                <?= $tujuannya; ?><i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?= $tujuannya; ?>"></i>
                              </h5>
                              <p><?= $namapenerima; ?></p>
                            <?php } else if (stripos($metodenya, ('PAYPAL')) !== FALSE) { ?>
                              Email Paypal Tujuan<br>
                              <h5 class="mt-2" style="line-height:1.5">
                                <?= $tujuannya; ?><i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?= $tujuannya; ?>"></i>
                              </h5>
                              <p>A/n <?= $namapenerima; ?></p>
                            <?php } else if (stripos($metodenya, ('PULSA')) !== FALSE) { ?>
                              No. Tujuan<br>
                              <h5 class="mt-2" style="line-height:1.5">
                                <?= $tujuannya; ?><i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?= $tujuannya; ?>"></i>
                              </h5>
                              <p><?= $namapenerima; ?></p>
                              <small>Pulsa di transfer dari nomor yang terdaftar pada akun, sesuai masing-masing operator (ex: dial UMB *858# jika TSEL).</small>
                            <?php } else if (stripos($metodenya, ('QRIS')) !== FALSE) { ?>
                              QRIS Tujuan<br>
                              <h5 class="mt-2" style="line-height:1.5">
                                <a href="<?= $tujuannya; ?>" target="_blank" class="text-primary">Download QR Code <i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?= $tujuannya; ?>"></i></a>
                              </h5>
                              Scan QR Code<br>
                              <p>
                                <a href="<?= $tujuannya; ?>" target="_blank">
                                  <img src="<?= $tujuannya; ?>" style="padding: 5px;background: #f1f1ff;max-width: 200px;height: auto;" alt="QR Code">
                                </a>
                              </p>
                              <p>A/n <?= $namapenerima; ?></p>
                              <small>Pembayaran dapat dilakukan dengan scan kode QR di aplikasi yang mendukung.</small>
                            <?php } else if (stripos($metodenya, ('EMONEY')) !== FALSE) { ?>
                              Tujuan Transfer<br>
                              <h5 class="mt-2" style="line-height:1.5">
                                <?= $tujuannya; ?><i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?= $tujuannya; ?>"></i>
                              </h5>
                              <p>A/n <?= $namapenerima; ?></p>
                            <?php } else if (stripos($metodenya, ('BANK')) !== FALSE) { ?>
                              Tujuan Transfer<br>
                              <h5 class="mt-2" style="line-height:1.5">
                                <?= $tujuannya; ?><i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?= $tujuannya; ?>"></i>
                              </h5>
                              <p>A/n <?= $namapenerima; ?></p>
                            <?php } else { ?>
                              Tujuan Transfer<br>
                              <h5 class="mt-2" style="line-height:1.5">
                                <?= $tujuannya; ?><i class="fa fa-clone pl-2 clip" onclick="copy_virtualku()" data-clipboard-text="<?= $tujuannya; ?>"></i>
                              </h5>
                              <p>A/n <?= $namapenerima; ?></p>
                            <?php } ?>
                          </div>
                        <?php endif; ?>
                        <div class="pb-4">
                          Status
                          <h5 class="mt-2">
                            <?= $textstatus2; ?>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="upload" class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 10px;">
                    <?php if ($setatus == 0) : ?>
                      Catatan :
                      <li>Pembayaran <?= $currency; ?> sesuai nominal transfer diatas.</li>
                      <li>Proses konfirmasi otomatis 1-2 menit.</li>
                      <li>Saldo yang masuk di akun adalah rupiah.</li>
                    <?php endif; ?>
                    <?php
                    if (!empty($_GET['notif'])) {
                      if ($_GET['notif'] == 1) {
                        echo '
                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <div class="alert-icon">
                                <i class="fa fa-exclamation-triangle"></i>
                              </div>
                              <div class="alert-message">
                                <span>Hanya file jpg, jpeg, bmp, x-png, png, webp atau gif yang diterima.</span>
                              </div>
                            </div>
                          ';
                      }
                      if ($_GET['notif'] == 2) {
                        echo '
                            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <div class="alert-icon">
                                <i class="fa fa-exclamation-triangle"></i>
                              </div>
                              <div class="alert-message">
                                <span>Upload ulang bukti pembayaran deposit.</span>
                              </div>
                            </div>
                          ';
                      }
                      if ($_GET['notif'] == 3) {
                        echo '
                          <div class="alert alert-success alert-dismissible mb-2" role="alert">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <div class="alert-icon">
                          <i class="fa fa-exclamation-triangle"></i>
                          </div>
                          <div class="alert-message">
                          <span>Deposit pending! Tunggu 1-5 menit proses konfirmasi.</span>
                          </div>
                          </div>
                          ';
                      }
                      if ($_GET['notif'] == 4) {
                        echo '
                          <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <div class="alert-icon">
                          <i class="fa fa-exclamation-triangle"></i>
                          </div>
                          <div class="alert-message">
                          <span>Max Image Size 2MB!</span>
                          </div>
                          </div>
                          ';
                      }
                    }
                    ?>
                    <form role="form" action="<?= $urldomain; ?>/function/konfirmasi.php" method="POST" enctype="multipart/form-data">
                      <div class="mt-2 mb-3 text-white" style="background: #000; color: #F1F1FF; padding: 10px;">
                        <p id="rate">Saldo yang Didapatkan (IDR)</p>
                        <input type="text" name="nominal" class="form-control" value="Rp. <?= number_format($totaltransaksi, 0, ",", "."); ?>" readonly>
                        <input type="hidden" name="trxID" class="form-control" value="<?= $idtransaksi; ?>">
                      </div>
                      <div class="mt-2 mb-3 text-white" style="background: #000; color: #F1F1FF; padding: 10px;">
                        <?php if ($buktitf == '1') : ?>
                          <p>Bukti Pembayaran (opsional)</p>
                          <?php if ($catatan == '') {
                            echo "Tanpa Bukti & Catatan";
                          } else if ($catatan != 'no-photo.webp') { ?>
                            <p><small>Status: pembayaran diproses</small></p>
                          <?php } else { ?>
                            <p><small>Status: belum ada yang diupload</small></p>
                          <?php } ?>
                        <?php endif; ?>
                        <?php if ($setatus == 0) : ?>
                          <?php if ($catatan == 'no-photo.webp' or $catatan == 'no-photo.jpg') : ?>
                            <?php if ($buktitf == '1') : ?>
                              <input type="file" name="image" class="form-control p-1" style="display: block;" value="">
                              <small>File jpg, jpeg, bmp, x-png, png, webp, gif</small><br>
                            <?php endif; ?>
                          <?php endif; ?>
                        <?php endif; ?>
                        <div class="mt-2 text-center">
                          <?php if ($buktitf == '1') : ?>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin konfirmasi deposit?');">Konfirmasi</button>
                          <?php endif; ?>
                          <button type="submit" name="cancel" value="cancel" class="btn btn-danger" onclick="return confirm('Anda yakin ingin membatalkan deposit?');">Batalkan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                <?php } else { ?>
                  <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 10px;">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="pb-4">
                          Mohon maaf transaksi tidak ditemukan.
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
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

  <script src="<?= $urldomain; ?>/assets/js/clipboard.min.js?<?= $cache; ?>"></script>
  <script>
    var clipboard = new ClipboardJS('.clip');

    function copy_trxaku() {
      alert("Berhasil di Salin");
    }

    function copy_jumlahku() {
      alert("Berhasil di Salin");
    }

    function copy_virtualku() {
      alert("Berhasil di Salin");
    }
  </script>

</body>

</html>