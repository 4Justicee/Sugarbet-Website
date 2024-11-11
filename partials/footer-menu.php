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