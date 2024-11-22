<div class="sidebar" data-background-color="blue">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="grey">
      <a href="index.html" class="logo">
        <!-- <img
                src="<?= base_url() ?>img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              /> -->
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item">
          <a
            href="/">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>

        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item">
          <a
            href="/Pemilik">
            <i class="fas fa-home"></i>
            <p>Pemilik</p>
          </a>
        </li>
        <li class="nav-item">
          <a
            href="/Peliharaan">
            <i class="fas fa-home"></i>
            <p>Peliharaan</p>
          </a>
        </li>
        <li class="nav-item">
          <a
            href="/Dokter">
            <i class="fas fa-home"></i>
            <p>Dokter</p>
          </a>
        </li>
        <li class="nav-item">
          <a
            href="/obat">
            <i class="fas fa-home"></i>
            <p>Obat</p>
          </a>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Base</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="base">
            <ul class="nav nav-collapse">
              <li>
                <a href="components/avatars.html">
                  <span class="sub-item">Avatars</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>