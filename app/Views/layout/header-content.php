<!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
    <li class="dropdown pc-h-item header-user-profile">
    <a
      class="pc-head-link dropdown-toggle arrow-none me-0"
      data-bs-toggle="dropdown"
      href="#"
      role="button"
      aria-haspopup="false"
      data-bs-auto-close="outside"
      aria-expanded="false"
    >
      <span><?= session()->get('username') ?></span>
    </a>

    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
      <div class="dropdown-header">
        <div class="d-flex mb-1">

          <div class="flex-grow-1 ms-3">
            <h6 class="mb-1"><?= session()->get('username') ?></h6>
          </div>

          <a href="<?= base_url('/logout') ?>" class="pc-head-link bg-transparent">
            <i class="ti ti-power text-danger"></i>
          </a>

        </div>
      </div>
        <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="drp-t1"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-1"
              type="button"
              role="tab"
              aria-controls="drp-tab-1"
              aria-selected="true"
              ><i class="ti ti-user"></i> Profile</button
            >
          </li>
        </ul>
        <div class="tab-content" id="mysrpTabContent">
          <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
            <a href="<?= base_url('profile') ?>" class="dropdown-item">
              <i class="ti ti-edit-circle"></i>
              <span>Update Profile</span>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
