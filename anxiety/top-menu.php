<!-- Search -->
<div class="navbar-nav align-items-center">
  <div class="nav-item navbar-search-wrapper mb-0">
    <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
      <i class="ti ti-search ti-md me-2"></i>
      <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
    </a>
  </div>
</div>
<!-- /Search -->

<ul class="navbar-nav flex-row align-items-center ms-auto">
  <!-- Style Switcher -->
  <li class="nav-item me-2 me-xl-0">
    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
      <i class="ti ti-md"></i>
    </a>
  </li>
  <!--/ Style Switcher -->

  <!-- User -->
  <li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
      <div class="avatar avatar-online">
        <img src="<?= $domainutama; ?>/upload/avatar/<?= $u['image']; ?>" alt class="h-auto rounded-circle" />
      </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li>
        <a class="dropdown-item" href="#">
          <div class="d-flex">
            <div class="flex-shrink-0 me-3">
              <div class="avatar avatar-online">
                <img src="<?= $domainutama; ?>/upload/avatar/<?= $u['image']; ?>" alt class="h-auto rounded-circle" />
              </div>
            </div>
            <div class="flex-grow-1">
              <span class="fw-semibold d-block"><?= $u['full_name']; ?></span>
              <small class="text-muted"><?= $u['email']; ?></small>
            </div>
          </div>
        </a>
      </li>
      <li>
        <div class="dropdown-divider"></div>
      </li>
      <li>
        <a class="dropdown-item" href="<?= $urladmin; ?>/e_user/">
          <i class="ti ti-user-check me-2 ti-sm"></i>
          <span class="align-middle">My Profile</span>
        </a>
      </li>
      <?php if ($u['level'] == 'superadmin') : ?>
        <li>
          <a class="dropdown-item" href="<?= $urladmin; ?>/setting/">
            <i class="ti ti-settings me-2 ti-sm"></i>
            <span class="align-middle">Settings</span>
          </a>
        </li>
      <?php endif; ?>
      <li>
        <div class="dropdown-divider"></div>
      </li>
      <li>
        <a class="dropdown-item" href="<?= $urladmin; ?>/logout/">
          <i class="ti ti-logout me-2 ti-sm"></i>
          <span class="align-middle">Log Out</span>
        </a>
      </li>
    </ul>
  </li>
  <!--/ User -->
</ul>
<div style="position: fixed; right: 45px; top: 10%;" id="getNotif"></div>