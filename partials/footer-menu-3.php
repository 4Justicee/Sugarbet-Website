<span class="mcp-footer-menu-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8">
        <img data-sizes="auto" data-src="<?= $urldomain; ?>/upload/<?= $s0['image']; ?>" alt="<?= $app_name; ?>" class="lazyload" alt="<?= $app_name; ?>" style="width: auto; height: 40px; margin-bottom: 15px;">
        <p class="d-block d-sm-none">
          <?= $s0['deskripsi']; ?>
        </p>
        <p class="d-none d-sm-block">
          <?= $descalt; ?> <?= $s0['deskripsi']; ?>
        </p>
        <hr>
        <p>
          <i class="fab fa-whatsapp pr-1"></i> <?= $wautama; ?><br><i class="fas fa-envelope pr-1"></i> <?= $emailutama; ?><br><i class="fas fa-headphones pr-1"></i> Online 24 Jam
        </p>
        <hr>
        <ul class="nav mb-3">
          <li class="nav-item" itemprop="name">
            <a class="nav-link" href="<?= $urldomain; ?>/contact" itemprop="url"><i class="fa fa-circle-dot"></i> Hubungi Kami</a>
          </li>
          <?php
          $sql_page = mysqli_query($conn, "SELECT * FROM `tb_page` ORDER BY cuid ASC LIMIT 4") or die(mysqli_error($conn));
          while ($sp = mysqli_fetch_array($sql_page)) :
          ?>
            <li class="nav-item" itemprop="name">
              <a class="nav-link" href="<?= $urldomain; ?>/page/<?= $sp['slug']; ?>" itemprop="url"><i class="fa fa-circle-dot"></i> <?= $sp['nama_page']; ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="col-lg-4 col-sm-4 col-12">
        <h4 class="pb-2">Games Terfavorit</h4>
        <div class="row">
          <?php //game pilihan
          $sql_3 = mysqli_query($conn, "SELECT * FROM `tb_gamenew` WHERE `game_category` = 'slots' AND `game_name` IN (
            'Wild Bandito',
            'Wild Fireworks',
            'Koi gate',
            'Starlight Princess',
            'Starlight Princess 1000',
            'Mahjong Ways',
            'Sweet Bonanza',
            'Sweet Bonanza Xmas',
            'Mahjong Ways 2',
            'Wild West Gold',
            'Wild West Gold Megaways',
            'Bikini Paradise',
            'Treasures of Aztec',
            'Gates of Olympus',
            'Fury of Odin Megaways       '
            ) ORDER BY RAND() LIMIT 12") or die(mysqli_error($conn));
          while ($s3 = mysqli_fetch_array($sql_3)) :
            if (isset($_SESSION['user'])) {
              $externalPlayerId = $_SESSION['user'];
              $playUrl = $urldomain . '/gameplay/' . $s3['game_category'] . '/?gamecode=' . $s3['game_code'] . '&providercode=' . $s3['game_provider'];
            } else {
              $playUrl = $urldomain . '/login';
            }
          ?>
            <div class="col-3 mb-2">
              <a href="<?= $playUrl; ?>">
                <img data-sizes="auto" style="height: 55.61px;" data-src="<?= $urldomain; ?>/upload/game_pic/<?= $s3['game_provider']; ?>/<?= $s3['game_code']; ?>.png" src="<?= $urldomain; ?>/assets/images/loading.gif" class="lazyload shadow gamertpimg" alt="Slot Terfavorit <?= $s3['game_provider']; ?>">
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-lg-12 col-sm-12 col-12">
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <ul class="nav" style="justify-content: center;">
              <li class="nav-item">
                <a class="nav-link" href="<?= $urldomain; ?>/dashboard">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= $urldomain; ?>/bank">Banking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= $urldomain; ?>/promo">Promo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= $urldomain; ?>/referral">Referral</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="background: none;position: fixed;bottom: 200px;right: 18px;z-index: 9999;width: 45px;font-size: 38px;line-height: 40px;text-align: center;cursor: pointer;">
    <div id="showcallcenter" style="display: none;">
      <?php
      $sql_chat = mysqli_query($conn, "SELECT * FROM `tb_livechat` WHERE cuid = 1") or die(mysqli_error($conn));
      $sc = mysqli_fetch_array($sql_chat);
      ?>
      <?php if ($sc['lc_mobile'] != '#' and $sc['lc_mobile'] !== '') : ?>
        <a href="<?= $sc['lc_mobile']; ?>" target="_blank">
          <div class="mb-2" style="width: 45px;height: 45px;border-radius: 50%;line-height: 40px;background-color: <?= $s0['warnahover']; ?>;">
            <i class="fa fa-comment" style="font-size: 30px !important;"></i>
          </div>
        </a>
      <?php endif; ?>
      <a href="https://wa.me/<?= $wautama; ?>" target="_blank">
        <div class="mb-2" style="width: 45px;height: 45px;border-radius: 50%;line-height: 40px;background-color: #59CE72;">
          <i class="fab fa-whatsapp" style="font-size: 32px !important;"></i>
        </div>
      </a>
    </div>
    <a id="callcenter" onclick="myFunctiona()">
      <div class="mb-2" style="border-radius: 50%;background-color: #333333;">
        <img alt="<?= $app_name; ?>" data-sizes="auto" data-src="<?= $urldomain; ?>/upload/callcenter.webp" class="lazyload" style="width: 100%; height: auto; display: block; margin: 0 auto;">
      </div>
    </a>
  </div>
  <script>
    function myFunctiona() {
      var x = document.getElementById("showcallcenter");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
</span>