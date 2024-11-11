<span class="mcp-top-header">
  <div class="sr-only">
    <h2>Casino dan Slot <?= $companyname; ?></h2>
    <h2><?= $slogan; ?></h2>
    <h3>Situs Slot Gacor <?= $app_name; ?></h3>
    <h3>Live Casino Pragmatic Play</h3>
    <h4>Pragmatic Play <?= $app_name; ?></h4>
    <h4>Situs Togel Terpercaya <?= date('Y'); ?></h4>
    <h5>Slot Resmi Pragmatic Gratis Tanpa Deposit</h5>
  </div>

  <header class="d-block d-sm-none">
    <div class="container d-block d-sm-none pt-2">
      <div class="row">
        <div class="col-9">
          <a class="navbar-brand" href="<?= $urldomain; ?>">
            <img src="<?= $urldomain; ?>/upload/<?= $s0['image']; ?>?<?= $cache; ?>" alt="<?= $app_name; ?>" class="topbrandimgmobile">
          </a>
        </div>
        <div class="col-3">
          <button class="btn float-right pt-2 d-block d-sm-none" type="button" href="javascript:void();" onclick="openNav();" style="padding: 5px;">
            <i class="fa fa-bars" style="font-size: 22px; color: #F1F1FF!important;"></i>
          </button>
        </div>
      </div>
    </div>
  </header>

  <header class="d-none d-sm-block">
    <div class="container pt-1 pb-1">
      <div class="row">
        <div class="col-sm-3" style="align-self: center;">
          <a class="navbar-brand" href="<?= $urldomain; ?>">
            <img src="<?= $urldomain; ?>/upload/<?= $s0['image']; ?>?<?= $cache; ?>" class="img-fluid topbtandimgdesktop" alt="<?= $app_name; ?>">
          </a>
        </div>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-12 pt-1 pb-1">
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 p-0">
                      <marquee>
                        <?= $s0['news']; ?>
                      </marquee>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 pb-2 text-right">
              <?php
              if (isset($_SESSION['user'])) {
                $user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '" . $_SESSION['user'] . "'") or die(mysqli_error($conn));
                $u = mysqli_fetch_array($user);
                $users = $u['user'];
                $userid = $u['user'];
                $id_user = $u['cuid'];
                $userID = $u['cuid'];
                $userLevel = $u['level'];
                $token_id = isset($u['token_id']) ? $u['token_id'] : false;
                $level = isset($u['level']) ? $u['level'] : false;
                $sql_balance = json_decode($WL->getbalance($users), true);
                $sb = $sql_balance['user_list'];
              ?>
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-6">
                        <div class="row">
                          <div class="<?php if ($userLevel == 'user') {
                                        echo 'col-6';
                                      } else {
                                        echo 'col-12';
                                      } ?>">
                            <div class="dropdown">
                              <a class="btn btn-sm dropdown-toggle dropdownoptiontop" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-circle"></i> <?= $u['user']; ?>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right pl-1 pr-1 mt-2 dropdownoptiontopmenu">
                                <a class="dropdown-item text-white" href="<?= $urldomain; ?>/dashboard"><i class="fa fa-user dropdownoptiontopitem"></i> Akun Saya</a>
                                <a class="dropdown-item text-white" href="<?= $urldomain; ?>/bank"><i class="fa fa-bank dropdownoptiontopitem"></i> Banking</a>
                                <a class="dropdown-item text-white" href="<?= $urldomain; ?>/history"><i class="fa fa-calendar dropdownoptiontopitem"></i> Transaksi</a>
                                <a class="dropdown-item text-white" href="<?= $urldomain; ?>/referrals"><i class="fa fa-users dropdownoptiontopitem"></i> Referral</a>
                                <a class="dropdown-item text-white" href="<?= $urldomain; ?>/logout"><i class="fa fa-power-off dropdownoptiontopitem"></i> Keluar</a>
                              </div>
                            </div>
                          </div>
                          <?php if ($userLevel == 'user') : ?>
                            <div class="col-6">
                              <div class="dropdown">
                                <a class="btn btn-sm dropdown-toggle balance dropdownoptiontopbalance" data-toggle="dropdown" aria-expanded="false">
                                  Rp. <?= $sb[0]['balance']; ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right pl-1 pr-1 mt-2 dropdownoptiontopsaldo">
                                  <div class="modal-header">
                                    <h5 class="modal-title dropdownoptiontopwallet"><b>Informasi Saldo</b></h5>
                                  </div>
                                  <table class="table provBalance m-0">
                                    <tbody>
                                      <tr>
                                        <td class="dropdownoptiontopwallet">
                                          Dompet Utama
                                        </td>
                                        <td class="text-right dropdownoptiontopwalletinfo">
                                          Rp. <?= $sb[0]['balance']; ?>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="col-6">
                        <a href="<?= $urldomain; ?>/logout" class="btn btn-danger float-right btn-sm mr-1 mb-1" style="color: #F1F1FF; float:right;" alt="Keluar" aria-label="Keluar">
                          <i class="fa fa-power-off"></i>
                        </a>
                        <a href="javascript:void();" onclick="openNav();" class="btn btn-gradient-yoda float-right btn-sm mr-1 mb-1" style="color: #F1F1FF; float:right;" alt="Menu" aria-label="Menu">
                          <i class="fa fa-bars"></i>
                        </a>
                        <a href="<?= $urldomain; ?>/search" class="btn btn-gradient-violet float-right btn-sm mr-1 mb-1" alt="Cari" aria-label="Cari">
                          <i class="fa fa-search"></i>
                        </a>
                        <a href="<?= $urldomain; ?>/contact" class="btn btn-info float-right btn-sm mr-1 mb-1" style="color: #F1F1FF; float:right;" alt="Bantuan" aria-label="Bantuan">
                          <i class="fa fa-info-circle"></i>
                        </a>
                        <a href="<?= $urldomain; ?>/withdraw" class="btn btn-primary float-right btn-sm mr-1 mb-1" style="color: #F1F1FF; float:right;" aria-label="Withdraw">
                          <i class="fa fa-money-bill-wave"></i> Withdraw
                        </a>
                        <a href="<?= $urldomain; ?>/deposit" class="btn btn-success float-right btn-sm mr-1 mb-1" style="color: #F1F1FF; float:right;" aria-label="Deposit">
                          <i class="fa fa-wallet"></i> Deposit
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } else { ?>
                <form class="row text-right" action="<?= $urldomain; ?>/function/login-proses.php" method="POST">
                  <div class="col-12 mb-1 text-right">
                    <div class="row">
                      <div class="col-12">
                        <a href="javascript:void();" onclick="openNav();" class="btn btn-gradient-yoda btn-sm float-right text-white ml-1" style="color: #F1F1FF; float:right;" alt="Menu" aria-label="Menu">
                          <i class="fa fa-bars"></i>
                        </a>
                        <a href="<?= $urldomain; ?>/search" class="btn btn-gradient-violet btn-sm float-right text-white ml-1" style="color: #F1F1FF;" alt="Cari" aria-label="Cari">
                          <i class="fa fa-search"></i>
                        </a>
                        <a href="<?= $urldomain; ?>/contact" class="btn btn-info btn-sm float-right text-white ml-1" style="color: #F1F1FF;" alt="Bantuan" aria-label="Bantuan">
                          <i class="fa fa-info-circle"></i>
                        </a>
                        <a href="<?= $urldomain; ?>/register" class="btn btn-primary btn-sm float-right text-white ml-1" style="color: #F1F1FF;" aria-label="Daftar">
                          <i class="fa fa-user"></i> Daftar
                        </a>
                        <button type="submit" class="btn btn-success btn-sm float-right text-white ml-1" aria-label="Masuk"><i class="fa fa-lock"></i>
                          Masuk
                        </button>
                        <div class="form-group float-right pb-0 mb-0 ml-1">
                          <input type="password" name="pass" class="form-control" style="font-size: 12px;border: 1px solid #eee;" placeholder="Password" required>
                        </div>
                        <div class="form-group float-right pb-0 mb-0 ml-1">
                          <input type="text" name="user" class="form-control" style="font-size: 12px;border: 1px solid #eee;" placeholder="Username" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="site-header pt-2">
    <div class="container">
      <div class="d-none d-sm-block">
        <nav class="navbar navbar-expand-lg" style="background: none!important; margin-top: -15px;">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-center" style="width: 100%;" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
              <li class="nav-item dropdown" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/slot" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_slot.webp" alt="Slot <?= $app_name; ?>" class="gamelistmenudesktop">SLOT</a>
              </li>
              <li class="nav-item dropdown" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/casino" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_casino.webp" alt="Casino <?= $app_name; ?>" class="gamelistmenudesktop">CASINO</a>
              </li>
              <li class="nav-item" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/togel" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_lottery.webp" alt="Togel <?= $app_name; ?>" class="gamelistmenudesktop">TOGEL</a>
              </li>
              <li class="nav-item" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/sports" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_sports.webp" alt="Sports <?= $app_name; ?>" class="gamelistmenudesktop">SPORTS</a>
              </li>
              <li class="nav-item dropdown" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/egames" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_games.webp" alt="E Games <?= $app_name; ?>" class="gamelistmenudesktop">EGAMES</a>
              </li>
              <li class="nav-item dropdown" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/fishing" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_tembak_ikan.webp" alt="Fishing <?= $app_name; ?>" class="gamelistmenudesktop">FISHING</a>
              </li>
              <li class="nav-item" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/promo" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_promo.webp" alt="Promo <?= $app_name; ?>" class="gamelistmenudesktop">PROMO</a>
              </li>
              <li class="nav-item" style="width: 10%;" itemprop="name">
                <a class="nav-link text-center" href="<?= $urldomain; ?>/referral" itemprop="url"><img src="<?= $urldomain; ?>/upload/icon_refferal.webp" alt="Referral <?= $app_name; ?>" class="gamelistmenudesktop">REFERRAL</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="d-block d-sm-none">
        <div class="main-content">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/slot" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_slot.webp" alt="Slot" class="gamelistmenumobile">SLOT</a>
            </div>
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/casino" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_casino.webp" alt="Casino" class="gamelistmenumobile">CASINO</a>
            </div>
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/togel" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_lottery.webp" alt="Togel" class="gamelistmenumobile">TOGEL</a>
            </div>
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/sports" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_sports.webp" alt="Sports" class="gamelistmenumobile">SPORTS</a>
            </div>
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/egames" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_games.webp" alt="E Games" class="gamelistmenumobile">EGAMES</a>
            </div>
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/fishing" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_tembak_ikan.webp" alt="Fishing" class="gamelistmenumobile">FISHING</a>
            </div>
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/promo" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_promo.webp" alt="Promo" class="gamelistmenumobile">PROMO</a>
            </div>
            <div class="item">
              <a class="nav-link text-center" href="<?= $urldomain; ?>/referral" style="font-size: 10px;"><img src="<?= $urldomain; ?>/upload/icon_refferal.webp" alt="Referral" class="gamelistmenumobile">REFERRAL</a>
            </div>
          </div>
          <div class="owl-theme">
            <div class="owl-controls">
              <div class="custom-nav owl-nav"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="d-block d-sm-none pt-2 pb-0 notificationtext">
    <div class="container">
      <div class="row">
        <div class="col-1"><i class="fas fa-bullhorn"></i></div>
        <div class="col-11">
          <marquee class="notificationmarquee">
            <?= $s0['news']; ?>
          </marquee>
        </div>
      </div>
    </div>
  </div>

  <div id="mySidenav" class="sidenav">
    <div class="bg-custom px-3 pt-3 pb-3">
      <div class="row">
        <div class="col-9">
          <?php
          if (isset($_SESSION['user'])) {
            $user = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '" . $_SESSION['user'] . "'") or die(mysqli_error($conn));
            $u = mysqli_fetch_array($user);
            $users = $u['user'];
            $id_user = $u['cuid'];
            $userID = $u['cuid'];
            $token_id = isset($u['token_id']) ? $u['token_id'] : false;
            $level = isset($u['level']) ? $u['level'] : false;

            $sql_balance = json_decode($WL->getbalance($users), true);
            $sb = $sql_balance['user_list'];
          ?>
            <div class="row">
              <div class="col-4 mt-2">
                <div class="sidebarmenuinfo">
                  <i class="fa fa-user fa-2x"></i>
                </div>
              </div>
              <div class="col-8">
                <p class="mt-1 mb-1 sidebarmenutitle"><b><?= $u['full_name']; ?></b></p>
                <small>Terakhir Masuk:<br><?= date('d M Y H:i:s', strtotime($u['last_login'])); ?></small>
              </div>
            </div>
          <?php } else { ?>
            <div class="row">
              <div class="col-4">
                <div class="sidebarmenuinfo">
                  <i class="fa fa-user fa-2x"></i>
                </div>
              </div>
              <div class="col-8">
                <p class="mt-1 mb-1 sidebarmenutitle"><b>Guest</b></p>
                <small><?= date('d M Y H:i:s'); ?></small>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-3 text-center pl-4">
          <a href="javascript:void(0)" class="closebtn" style="margin-top: 10px;" onclick="closeNav()" aria-label="Tutup Navigasi"><i class="fa fa-close fa-2x"></i></a>
        </div>
      </div>
    </div>

    <div class="bg-custom sidebarmenuinfosaldo">
      <?php if (isset($_SESSION['user'])) { ?>
        <div class="row">
          <?php if ($userLevel == 'user') : ?>
            <div class="col-12">
              <a class="nav-link sidebarmenuinfosaldoidr" href="#" data-toggle="modal" data-target="#modalBalance">
                <span>Rp. <?= $sb[0]['balance']; ?></span><span style="float:right;"><i class="fa fa-refresh"></i> </span>
              </a>
            </div>
          <?php endif; ?>
          <div class="col-6 pr-0">
            <a class="btn btn-success btn-block" href="<?= $urldomain; ?>/deposit" style="border-radius:0;"><i class="fa fa-wallet"></i> DEPOSIT</a>
          </div>
          <div class="col-6 pl-0">
            <a class="btn btn-primary btn-block" href="<?= $urldomain; ?>/withdraw" style="border-radius:0;"><i class="fa fa-money-bill-wave"></i> WITHDRAW</a>
          </div>
        </div>
        <?php if ($userLevel == 'user') : ?>
          <div class="modal fade" id="modalBalance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content dropdownoptiontopsaldo">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Informasi Saldo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table provBalance m-0">
                    <tbody>
                      <tr>
                        <td class="dropdownoptiontopwallet">
                          Dompet Utama
                        </td>
                        <td class="text-right dropdownoptiontopwalletinfo">
                          Rp. <?= $sb[0]['balance']; ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php } else { ?>
        <div class="row">
          <div class="col-6 pr-0">
            <a class="btn btn-success btn-block" href="<?= $urldomain; ?>/login" style="border-radius:0;"><i class="fa fa-lock"></i> MASUK</a>
          </div>
          <div class="col-6 pl-0">
            <a class="btn btn-primary btn-block" href="<?= $urldomain; ?>/register" style="border-radius:0;"><i class="fa fa-user"></i> DAFTAR</a>
          </div>
        </div>
      <?php } ?>
    </div>

    <div class="side_navigation">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="<?= $urldomain; ?>" class="nav-link">
            <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Beranda
          </a>
        </li>
        <?php
        if (isset($_SESSION['user'])) {
        ?>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/dashboard" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Akun Saya
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/bank" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Banking
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/history" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Transaksi
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/referrals" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Referral
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/promo" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Promo
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/search" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Pencarian
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/contact" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Hubungi Kami
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/logout" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Keluar
            </a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/referral" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Referral
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/promo" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Promo
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/search" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Pencarian
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $urldomain; ?>/contact" class="nav-link">
              <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> Hubungi Kami
            </a>
          </li>
          <?php
          $sql_page = mysqli_query($conn, "SELECT * FROM `tb_page` ORDER BY cuid ASC LIMIT 4") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_page)) :
          ?>
            <li class="nav-item">
              <a href="<?= $urldomain; ?>/page/<?= $sp['slug']; ?>" class="nav-link">
                <i class="fa fa-circle-dot sidebarmenuoptionlist"></i> <?= $sp['nama_page']; ?>
              </a>
            </li>
          <?php endwhile; ?>

        <?php } ?>
      </ul>
    </div>
  </div>

  <!-- Start Session -->
  <?php
  if ($s0['onoff'] == 1) {
    header('location:' . $urldomain . '/maintenance-web');
  }
  ?>
  <!-- End Session -->
</span>