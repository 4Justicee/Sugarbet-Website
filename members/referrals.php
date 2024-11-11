<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-referral.php'); ?>
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
                    <a class="nav-link" href="<?= $urldomain; ?>/bank"><i class="fa fa-bank" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history"><i class="fa fa-calendar" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Transaksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/referrals"><i class="fa fa-users" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Referral</a>
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
                    <a class="nav-link active" href="<?= $urldomain; ?>/referrals"><i class="fa fa-users" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Referral</a>
                  </li>
                </ul>
              </div>
              <?php if ($userLevel == 'user') { ?>
                <div class="card-body py-3 px-3">
                  <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                    <h5 class="text-white mb-0">Program Afiliasi</h5>
                  </div>
                  <div class="text-white p-3" style="background: #151819;">
                    <div class="row">
                      <div class="col-sm-4">
                        <img data-sizes="auto" data-src="<?= $urldomain; ?>/upload/refer.webp" class="lazyload img-fluid" alt="refer" style="display: block; margin: 0 auto;">
                      </div>
                      <div class="col-sm-8">
                        <p style="font-size: 18px;">Bagikan link referensi ke teman-teman untuk mendapatkan bonus hadiah dan komisi afiliasi.</p>
                        <div class="input-group">
                          <input type="text" class="form-control" value="<?= $urldomain; ?>/register?ref=<?= $u['user']; ?>" aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary clip" onclick="copy_affiliate()" data-clipboard-text="<?= $urldomain; ?>/register?ref=<?= $u['user']; ?>" style="border: 0!important;" id="button-addon2">
                              <i class="fa fa-copy"></i> Salin
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="text-white mt-3 mb-3 p-2 pt-4 pb-2" style="background: #151819;">
                    <div class="row">
                      <div class="col-6 text-center">
                        <h5>Total Referral</h5>
                        <p class="text-white"><?= $u['reff']; ?></p>
                      </div>
                      <div class="col-6 text-center">
                        <h5>Total Penghasilan</h5>
                        <p class="text-white">
                          <?php
                          $hitungKomisi = mysqli_query($conn, "SELECT SUM(total) as komisi FROM `tb_transaksi` WHERE userID = '$userID' AND jenis = 3 AND status = 1") or die(mysqli_error($conn));
                          $hk = mysqli_fetch_array($hitungKomisi);
                          $komisi = $hk['komisi'] / 1000;
                          echo 'Rp. ' . round($hk['komisi'], 0);
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-bordered default-datatable">
                      <thead>
                        <tr class="bg-light text-white">
                          <th class="text-center">#</th>
                          <th class="text-center">Username</th>
                          <th class="text-center">Bergabung</th>
                          <th class="text-center">Komisi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql_refferal = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE uplineID = '$userID' AND cuid != '$userID' ORDER BY cuid DESC") or die(mysqli_error($conn));
                        $no = 0;
                        while ($sr = mysqli_fetch_array($sql_refferal)) :
                          $no++;
                          $reffID = $sr['cuid'];
                          $uplineID = $sr['uplineID'];
                          $hitungKomisi1 = mysqli_query($conn, "SELECT SUM(total) as komisi FROM `tb_transaksi` WHERE userID = '$userID' AND jenis = 3 AND status = 1 AND pay_from = '$reffID'") or die(mysqli_error($conn));
                          $hk1 = mysqli_fetch_array($hitungKomisi1);
                          $komisi1 = $hk1['komisi'] / 1000;
                        ?>
                          <tr>
                            <td class="text-center text-white"><?= $no; ?></td>
                            <td class="text-center text-white"><?= $sr['user']; ?></td>
                            <td class="text-center text-white"><?= $sr['join_date']; ?></td>
                            <td class="text-center text-white">
                              Rp. <?= round($hk1['komisi'], 0); ?>
                            </td>
                          </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              <?php } else { ?>
                <div class="card-body py-3 px-3">
                  <div class="mt-2 mb-3 text-white" style="background: #151819; color: #F1F1FF; padding: 20px 10px;">
                    Anda login sebagai Admin / Super Admin. Fitur ini hanya untuk User / Player.
                  </div>
                </div>
              <?php } ?>
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

    function copy_affiliate() {
      alert("Link Referral Berhasil di Copy");
    }
  </script>

</body>

</html>