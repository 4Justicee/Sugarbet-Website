<span class="mcp-footer-menu-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-12">
        <img data-sizes="auto" data-src="<?= $urldomain; ?>/upload/<?= $s0['image']; ?>?<?= $cache; ?>" class="lazyload topbtandimgdesktop" alt="<?= $app_name; ?>">
        <p><?= $s0['deskripsi']; ?></p>
        <p><?= $descalt; ?></p>
        <p><i class="fas fa-headphones pr-1"></i> Online 24 Jam</p>
        <hr>
      </div>
      <div class="col-lg-3 col-sm-3 col-6">
        <h4 class="pb-2">Halaman</h4>
        <ul class="nav flex-column mb-3" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
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
      <div class="col-lg-3 col-sm-3 col-6">
        <h4 class="pb-2">Area Member</h4>
        <ul class="nav flex-column mb-3">
          <li class="nav-item">
            <a class="nav-link" href="<?= $urldomain; ?>/dashboard"><i class="fa fa-circle-dot"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $urldomain; ?>/bank"><i class="fa fa-circle-dot"></i> Banking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $urldomain; ?>/history"><i class="fa fa-circle-dot"></i> Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $urldomain; ?>/promo"><i class="fa fa-circle-dot"></i> Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $urldomain; ?>/referral"><i class="fa fa-circle-dot"></i> Referral</a>
          </li>
        </ul>
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