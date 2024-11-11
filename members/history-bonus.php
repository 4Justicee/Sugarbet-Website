<?php //MEMBER PAGES
include('../session.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <?php include('../seo/meta/all-top-member.php'); ?>
  <?php include('../seo/meta/member-bonus.php'); ?>
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
                    <a class="nav-link active" href="<?= $urldomain; ?>/history"><i class="fa fa-calendar" style="width: 35px; color: <?= $s0['warnadasar']; ?>; font-size: 20px;"></i> Transaksi</a>
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
                    <a class="nav-link" href="<?= $urldomain; ?>/history"><i class="fa fa-bank" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Banking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?= $urldomain; ?>/history-bonus"><i class="fa fa-gift" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Bonus</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history-slot"><i class="fa fa-gamepad" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Gameplay</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history-togel"><i class="fa fa-gamepad" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Togel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= $urldomain; ?>/history-betting"><i class="fa fa-gamepad" style="width: 20px; color: <?= $s0['warnadasar']; ?>;"></i> Taruhan</a>
                  </li>
                </ul>
              </div>
              <?php if ($userLevel == 'user') { ?>
                <div class="card-body py-3 px-3">
                  <div class="mt-3 mb-3 bg-primary" style="padding: 20px 10px;">
                    <h5 class="text-white mb-0">Riwayat Bonus</h5>
                    <small>1 bulan terakhir</small>
                  </div>

                  <?php
                  $sql_2 = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$userID' AND level NOT IN ('superadmin','admin')") or die(mysqli_error($conn));
                  $s2 = mysqli_fetch_array($sql_2);
                  $IDuser = $s2['cuid'];
                  ?>

                  <ul class="list-group list-group-flush">
                    <?php
                    $batas = 10;
                    $page = isset($_GET['page']) ? $_GET['page'] : "";
                    if (empty($page)) {
                      $posisi = 0;
                      $page = 1;
                    } else {
                      $posisi = ($page - 1) * $batas;
                    }
                    $sql_transaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$IDuser' AND jenis IN(3,4,7,8) ORDER BY cuid DESC LIMIT 10") or die(mysqli_error($conn));
                    while ($st = mysqli_fetch_array($sql_transaksi)) :
                    ?>
                      <li class="list-group-item mb-2">
                        <div class="row align-items-center" style="padding-top: 15px;">
                          <div class="col-auto pr-0">
                            <?php
                            if ($st['jenis'] == 3 || $st['jenis'] == 4) {
                              echo '
                            <div class="mb-2 bg-success text-center" style="margin: 0 auto; width: 50px; height: 50px; margin: 0 auto; font-size: 32px; line-height: 50px; color: #F1F1FF; border-top-left-radius: 15px; border-bottom-right-radius: 15px;"><span class="fa fa-calendar"></span></div>
                            ';
                            } elseif ($st['jenis'] == 7 || $st['jenis'] == 8) {
                              echo '
                            <div class="mb-2 bg-primary text-center" style="margin: 0 auto; width: 50px; height: 50px; margin: 0 auto; font-size: 32px; line-height: 50px; color: #F1F1FF; border-top-left-radius: 15px; border-bottom-right-radius: 15px;"><span class="fa fa-calendar"></span></div>
                            ';
                            }
                            ?>
                          </div>
                          <div class="col align-self-center pr-0">
                            <h6 class="mb-1 text-dark" style="line-height: 16px;">
                              <?php
                              if ($st['jenis'] == 3) {
                                echo 'Bonus Referral (+)';
                                if ($st['status'] == 0) {
                                  echo ' Pending';
                                } else if ($st['status'] == 1) {
                                  echo ' Success';
                                } else if ($st['status'] == 2) {
                                  echo ' Failed';
                                }
                              } elseif ($st['jenis'] == 4) {
                                echo 'Bonus Rolling (+)';
                                if ($st['status'] == 0) {
                                  echo ' Pending';
                                } else if ($st['status'] == 1) {
                                  echo ' Success';
                                } else if ($st['status'] == 2) {
                                  echo ' Failed';
                                }
                              } elseif ($st['jenis'] == 7) {
                                echo 'Bonus Cashback (+)';
                                if ($st['status'] == 0) {
                                  echo ' Pending';
                                } else if ($st['status'] == 1) {
                                  echo ' Success';
                                } else if ($st['status'] == 2) {
                                  echo ' Failed';
                                }
                              } elseif ($st['jenis'] == 8) {
                                echo 'Bonus New Member (+)';
                                if ($st['status'] == 0) {
                                  echo ' Pending';
                                } else if ($st['status'] == 1) {
                                  echo ' Success';
                                } else if ($st['status'] == 2) {
                                  echo ' Failed';
                                }
                              }
                              ?>
                            </h6>
                            <p style="font-size: 10px;"><?= $st['date']; ?></p>
                          </div>
                          <div class="col-auto text-right">
                            <h6 class="text-dark">
                              <?= number_format($st['total'], 0, ",", "."); ?>
                            </h6>
                            <?php
                            if ($st['jenis'] == 3 || $st['jenis'] == 4 || $st['jenis'] == 7 || $st['jenis'] == 8) {
                              if ($st['status'] == 0) {
                                echo '
                              <a href="#" class="primary badge-primary p-2">Bayar</a>
                              ';
                              } else if ($st['status'] == 1) {
                                echo '
                              <a href="#" class="badge badge-success p-2">Berhasil</a>
                              ';
                              } else if ($st['status'] == 2) {
                                echo '
                              <a href="#" class="badge badge-danger p-2">Ditolak</a>
                              ';
                              }
                            } else {
                              if ($st['status'] == 0) {
                                echo '
                              <a href="#" class="badge badge-primary p-2">Menunggu</a>
                              ';
                              } else if ($st['status'] == 1) {
                                echo '
                              <a href="#" class="badge badge-success p-2">Berhasil</a>
                              ';
                              } else if ($st['status'] == 2) {
                                echo '
                              <a href="#" class="badge badge-danger p-2">Ditolak</a>
                              ';
                              }
                            }
                            ?>
                          </div>
                        </div>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                  <?php
                  $startDay = date('Y-m-d H:i:s');
                  $startWeek = date('Y-m-d H:i:s', strtotime('-7 day'));
                  $startMonth = date('Y-m-d H:i:s', strtotime('-30 day'));

                  $apanya = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$IDuser' AND jenis IN(3,4,7,8) AND (`date` BETWEEN '$startMonth' AND '$startDay') ORDER BY cuid DESC") or die(mysqli_error($conn));
                  $jml_data = mysqli_num_rows($apanya);
                  if ($jml_data > $batas) :
                  ?>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-end">
                        <?php
                        $JmlHalaman = ceil($jml_data / $batas);
                        $jumlah_number = 5;
                        $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1;
                        $end_number = ($page < ($JmlHalaman - $jumlah_number)) ? $page + $jumlah_number : $JmlHalaman;
                        for ($i = $start_number; $i <= $end_number; $i++) :
                          $link_active = ($page == $i) ? ' active' : '';
                        ?>
                          <li class="page-item<?= $link_active; ?>"><a class="page-link" href="<?= $urldomain; ?>/history-bonus?page=<?= $i; ?>"><?= $i; ?></a></li>
                        <?php endfor; ?>
                      </ul>
                    </nav>
                  <?php endif; ?>
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

  <script>
    $(document).ready(function() {
      //Default data table
      $('.default-datatable').DataTable();
    });
  </script>
</body>

</html>