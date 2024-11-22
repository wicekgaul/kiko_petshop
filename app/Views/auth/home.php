<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>
<div class="page-inner">
  <!-- Header -->
  <div
    class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">

    <div>
      <h3 class="fw-bold mb-3 text-primary">Petshop</h3>
      <h6 class="op-7 text-muted">Dashboard</h6>
    </div>
    <div class="ms-auto">
      <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</button>
    </div>
  </div>

  <!-- Dashboard Cards -->
  <div class="row">
    <div class="col-md-3">
      <div class="card text-white bg-primary mb-3">
        <div class="card-body">
          <h5 class="card-title">Total Peliharaan</h5>
          <p class="card-text fs-2 fw-bold">150</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <span><i class="fas fa-paw"></i> Peliharaan</span>
          <a href="#" class="text-white">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h5 class="card-title">Hewan Terdaftar</h5>
          <p class="card-text fs-2 fw-bold">85</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <span><i class="fas fa-dog"></i> Registrasi</span>
          <a href="#" class="text-white">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-warning mb-3">
        <div class="card-body">
          <h5 class="card-title">Transaksi Hari Ini</h5>
          <p class="card-text fs-2 fw-bold">20</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <span><i class="fas fa-shopping-cart"></i> Transaksi</span>
          <a href="#" class="text-white">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-danger mb-3">
        <div class="card-body">
          <h5 class="card-title">Pelanggan Aktif</h5>
          <p class="card-text fs-2 fw-bold">120</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <span><i class="fas fa-users"></i> Pelanggan</span>
          <a href="#" class="text-white">Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Table Section -->
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-primary">Daftar Data Peliharaan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Peliharaan</th>
                  <th>Jenis</th>
                  <th>Usia</th>
                  <th>Pemilik</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Lucky</td>
                  <td>Anjing</td>
                  <td>2 Tahun</td>
                  <td>John Doe</td>
                  <td>
                    <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Whiskers</td>
                  <td>Kucing</td>
                  <td>1 Tahun</td>
                  <td>Jane Smith</td>
                  <td>
                    <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endsection('content') ?>