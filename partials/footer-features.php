<span class="mcp-footer-features">
  <div class="row">
    <div class="col-lg-6 col-sm-6 pt-4">
      <div class="card-title">
        <div class="row">
          <div class="col-1 text-right pr-0 d-none d-sm-block"><i class="fa fa-dice fa-2x"></i></div>
          <div class="col-11">
            <h4>Produk</h4>
            <small style="font-size: 14px;">Keunggulan Produk</small>
          </div>
        </div>
      </div>
      <div>
        <h5 style="color: <?= $s0['warnadasar']; ?>; font-size: 17px;">SLOTS BETTING</h5>
        <p style="font-size: 14px;">Slot pro multi server memudahkan player mendapatkan scatter max win dan daily jackpot. Situs slot gacor <?= $app_name; ?> memiliki winrate tertinggi dan tercepat yang terintegrasi dengan pragmatic play.</p>
      </div>
      <div>
        <h5 style="color: <?= $s0['warnadasar']; ?>; font-size: 17px;">LIVE CASINO BETTING</h5>
        <p style="font-size: 14px;">Live casino dengan performa multi server membantu pemain mendapatkan pengalaman terbaik, dengan pilihan variasi game casino terlengkap saat ini, <?= $app_name; ?> selalu memberi yang terbaik.</p>
      </div>
      <div>
        <h5 style="color: <?= $s0['warnadasar']; ?>; font-size: 17px;">SPORTS BETTING</h5>
        <p style="font-size: 14px;">Sportsbook platform menawarkan banyak games, odds lebih tinggi, dan pilihan yang beragam. <?= $app_name; ?> adalah situs yang tepat bagi pemula maupun profesional. Maksimalkan kemenangan!</p>
      </div>
      <div>
        <h5 style="color: <?= $s0['warnadasar']; ?>; font-size: 17px;">TOGEL BETTING</h5>
        <p style="font-size: 14px;">Situs togel terpercaya dari perusahaan terbaik dunia, menawarkan hadiah kemenangan besar dan cepat cair. Dengan kualitas yang tinggi, <?= $app_name; ?> juga menerapkan potongan biaya yang rendah.</p>
      </div>
    </div>
    <div class="col-lg-6 col-sm-6 pt-4">
      <div class="card-title">
        <div class="row">
          <div class="col-1 text-right pr-0 d-none d-sm-block"><i class="fa fa-headset fa-2x"></i></div>
          <div class="col-11">
            <h4>Layanan</h4>
            <small style="font-size: 14px;">Keunggulan Layanan</small>
          </div>
        </div>
      </div>
      <div>
        <table style="width: 100%;">
          <tr>
            <td class="pt-2 pb-2" style="width: 90%;">
              <h5 style="color: <?= $s0['warnadasar']; ?>; font-size: 17px;">DEPOSIT</h5>
              <p style="font-size: 14px;">Rata Rata Waktu</p>
              <div class="progress" style="background-color: #F1F1FF; width: 100%;">
                <div class="progress-bar" role="progressbar" style="background: <?= $s0['warnadasar']; ?>; width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" aria-label="progresbar-<?= $random; ?>"></div>
              </div>
            </td>
            <td class="pt-2 pb-2 text-right" style="width: 10%; vertical-align: bottom; font-size: 44px;">
              1<span style="font-size: 18px;">Min</span>
            </td>
          </tr>
          <tr>
            <td class="pt-2 pb-2" style="width: 90%;">
              <h5 style="color: <?= $s0['warnadasar']; ?>; font-size: 17px;">WITHDRAW</h5>
              <p style="font-size: 14px;">Rata Rata Waktu</p>
              <div class="progress" style="background-color: #F1F1FF; width: 100%;">
                <div class="progress-bar" role="progressbar" style="background: <?= $s0['warnadasar']; ?>; width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="progresbar-<?= $random; ?>"></div>
              </div>
            </td>
            <td class="pt-2 pb-2 text-right" style="width: 10%; vertical-align: bottom; font-size: 44px;">
              2<span style="font-size: 18px;">Min</span>
            </td>
          </tr>
        </table>
        <p class="extra-small-font">* Selama bank maintenance dan bank offline, deposit dan penarikan tidak dapat diproses sementara.</p>
        <div class="row">
          <?php
          $sql_bankAdmin = mysqli_query($conn, "SELECT * FROM `tb_bank` WHERE userID = 1 ORDER BY status DESC LIMIT 24") or die(mysqli_error($conn));
          while ($sba = mysqli_fetch_array($sql_bankAdmin)) :
            if ($sba['status'] == 0) {
              $aa = 'style="border : 2px solid #f43643;"';
            } else {
              $aa = 'style="border : 2px solid #04b962;"';
            }
          ?>
            <div class="col-sm-2 col-3 p-1">
              <btn class="btn btn-outline-light btn-block rounded-lg pt-1 pb-1" <?= $aa; ?>>
                <img data-sizes="auto" data-src="<?= $domainutama; ?>/upload/bank/<?= $sba['image']; ?>" class="lazyload img-fluid" alt="payment" style="display: block; margin: 0 auto; max-height: 30px; filter: brightness(0) invert(1);">
              </btn>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</span>