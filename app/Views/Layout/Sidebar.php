<style>
  .sidebar {
    background: linear-gradient(145deg, blue, #f5f5f5);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    color: #fff;
    width: 250px;
    min-height: 100vh;
  }

  .sidebar-logo {
    text-align: center;
    padding: 20px 0;
  }

  .sidebar-logo a {
    color: #fff;
    font-weight: bold;
    font-size: 1.5rem;
    text-decoration: none;
  }

  .nav-toggle button {
    background: transparent;
    border: none;
    color: #fff;
    font-size: 1.2rem;
  }

  .sidebar-wrapper {
    padding-top: 20px;
  }

  .nav-item a {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
  }

  .nav-item a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateX(10px);
  }

  .nav-item a i {
    margin-right: 10px;
    font-size: 1.2rem;
  }

  .nav-section h4 {
    font-size: 1rem;
    text-transform: uppercase;
    margin: 15px 20px 5px;
    color: rgba(255, 255, 255, 0.8);
  }

  .collapse {
    margin-left: 20px;
  }

  .sidebar-mini-icon {
    display: none;
    /* Optional if not using */
  }

  @media (max-width: 768px) {
    .sidebar {
      width: 70px;
      overflow: hidden;
    }

    .nav-item a {
      justify-content: center;
      padding: 10px 0;
    }

    .nav-item a p {
      display: none;
    }

    .nav-item a i {
      margin: 0;
    }

    .nav-section h4 {
      display: none;
    }
  }
</style>

<div class="sidebar">
  <div class="sidebar-logo">
    <a href="index.html">Petshop</a>
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <ul class="nav nav-secondary">
      <li class="nav-item">
        <a href="/">
          <i class="fas fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-section">
        <h4>Table Masters</h4>
      </li>
      <li class="nav-item">
        <a href="/Pemilik">
          <i class="fas fa-users"></i>
          <p>Pemilik</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/Peliharaan">
          <i class="fas fa-paw"></i>
          <p>Peliharaan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/Dokter">
          <i class="fas fa-user-md"></i>
          <p>Dokter</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/obat">
          <i class="fas fa-pills"></i>
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