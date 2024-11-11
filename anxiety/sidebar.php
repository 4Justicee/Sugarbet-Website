<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item active">
      <a href="<?= $urladmin; ?>/dashboard/" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="<?= $urldomain; ?>/" class="menu-link" target="_blank">
        <i class="menu-icon tf-icons ti ti-globe"></i>
        <div data-i18n="Lihat Web">Lihat Web</div>
      </a>
    </li>

    <!-- Information -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Informasi</span>
    </li>
    <li class="menu-item">
      <a href="<?= $urladmin; ?>/promo/" class="menu-link">
        <i class="menu-icon tf-icons ti ti-badge"></i>
        <div data-i18n="Promosi & Event">Promosi & Event</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="<?= $urladmin; ?>/page/" class="menu-link">
        <i class="menu-icon tf-icons ti ti-bookmark"></i>
        <div data-i18n="Halaman Statis">Halaman Statis</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="<?= $urladmin; ?>/room/" class="menu-link">
        <i class="menu-icon tf-icons ti ti-heart"></i>
        <div data-i18n="Room Games">Room Games</div>
      </a>
    </li>

    <!-- Togel -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Togel</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-list"></i>
        <div data-i18n="Togel">Togel</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/pasaran/" class="menu-link">
            <div data-i18n="Market">Market</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/game/" class="menu-link">
            <div data-i18n="Games">Games</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="<?= $urladmin; ?>/result/" class="menu-link">
        <i class="menu-icon tf-icons ti ti-calendar"></i>
        <div data-i18n="Result">Result</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="<?= $urladmin; ?>/betting/" class="menu-link">
        <i class="menu-icon tf-icons ti ti-currency-dollar"></i>
        <div data-i18n="Taruhan">Taruhan</div>
      </a>
    </li>

    <!-- Transaction -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Transaksi</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-currency-dollar"></i>
        <div data-i18n="Deposit">Deposit</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/request_depo/" class="menu-link">
            <div data-i18n="Permintaan Deposit">Permintaan Deposit</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/topup/" class="menu-link">
            <div data-i18n="Daftar Deposit">Daftar Deposit</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-currency-dollar"></i>
        <div data-i18n="Withdraw">Withdraw</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/request_wd/" class="menu-link">
            <div data-i18n="Permintaan Withdraw">Permintaan Withdraw</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/withdraw/" class="menu-link">
            <div data-i18n="Daftar Withdraw">Daftar Withdraw</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-calendar"></i>
        <div data-i18n="Riwayat">Riwayat</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_topup/" class="menu-link">
            <div data-i18n="Deposit">Deposit</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_withdraw/" class="menu-link">
            <div data-i18n="Withdraw">Withdraw</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_referral/" class="menu-link">
            <div data-i18n="Bonus Referral">Bonus Referral</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_rolling/" class="menu-link">
            <div data-i18n="Bonus Rolling">Bonus Rolling</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_cashback/" class="menu-link">
            <div data-i18n="Bonus Cashback">Bonus Cashback</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_new_member/" class="menu-link">
            <div data-i18n="Bonus New Member">Bonus New Member</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_transfer/" class="menu-link">
            <div data-i18n="Transfer to Game">Transfer to Game</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_transfer_from/" class="menu-link">
            <div data-i18n="Transfer from Game">Transfer from Game</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_taruhan_togel/" class="menu-link">
            <div data-i18n="Togel Betting">Togel Betting</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_togel_winner/" class="menu-link">
            <div data-i18n="Togel Winner">Togel Winner</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/riwayat_taruhan/" class="menu-link">
            <div data-i18n="Turnover Member">Turnover Member</div>
          </a>
        </li>
        <?php if ($u['level'] == 'superadmin') : ?>
          <li class="menu-item">
            <a href="<?= $urladmin; ?>/payment/" class="menu-link">
              <div data-i18n="Transaksi Keuangan">Transaksi Keuangan</div>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </li>
    <?php if ($u['level'] == 'superadmin') : ?>
      <li class="menu-item">
        <a href="<?= $urladmin; ?>/balance/" class="menu-link">
          <i class="menu-icon tf-icons ti ti-wallet"></i>
          <div data-i18n="Saldo Member">Saldo Member</div>
        </a>
      </li>
    <?php endif; ?>
    <!-- SYSTEM -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Sistem</span>
    </li>
    <?php if ($u['level'] == 'superadmin') : ?>
      <li class="menu-item">
        <a href="<?= $urladmin; ?>/bank/" class="menu-link">
          <i class="menu-icon tf-icons ti ti-star"></i>
          <div data-i18n="Banking">Banking</div>
        </a>
      </li>
    <?php endif; ?>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Member">Member</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/member/" class="menu-link">
            <div data-i18n="User">User</div>
          </a>
        </li>
        <?php if ($u['level'] == 'superadmin') : ?>
          <li class="menu-item">
            <a href="<?= $urladmin; ?>/user/" class="menu-link">
              <div data-i18n="Administrator">Administrator</div>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Settings">Pengaturan</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/maintenance/" class="menu-link">
            <div data-i18n="Maintenance">Maintenance</div>
          </a>
        </li>
        <?php if ($u['level'] == 'superadmin') : ?>
          <li class="menu-item">
            <a href="<?= $urladmin; ?>/setting/" class="menu-link">
              <div data-i18n="Main Settings">Main Settings</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="<?= $urladmin; ?>/rate/" class="menu-link">
              <div data-i18n="Rate Mata Uang">Rate Mata Uang</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="<?= $urladmin; ?>/template/" class="menu-link">
              <div data-i18n="Template Web">Template Web</div>
            </a>
          </li>
        <?php endif; ?>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/banner/" class="menu-link">
            <div data-i18n="Pop Up Home">Pop Up Home</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/slide/" class="menu-link">
            <div data-i18n="Banner Slider">Banner Slider</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/social/" class="menu-link">
            <div data-i18n="Sosial Media">Sosial Media</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= $urladmin; ?>/livechat/" class="menu-link">
            <div data-i18n="Live Chat">Live Chat</div>
          </a>
        </li>
      </ul>
    </li>

  </ul>
</aside>