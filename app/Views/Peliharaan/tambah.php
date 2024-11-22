<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
      <h3 class="fw-bold mb-3">Petshop</h3>
      <h6 class="op-7 mb-2">Tambah Data Peliharaan</h6>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Tambah Peliharaan</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('Peliharaan/save'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
              <label for="nama">Nama Pelihraan</label>
              <input type="text" class="form-control" id="nama" name="Nama" placeholder="Masukkan Nama Peliharaan" required>
            </div>
            <div class="form-group">
              <label for="Jenis">Jenis</label>
              <input type="text" class="form-control" id="Jenis" name="Jenis" placeholder="Masukkan Jenis" required>
            </div>
            <div class="form-group">
              <label for="Ras">Ras</label>
              <input type="text" class="form-control" id="Ras" name="Ras" placeholder="Masukkan Nomor Ras" required>
            </div>
            <div class="form-group">
              <label for="Usia">Usia</label>
              <input type="Usia" class="form-control" id="Usia" name="Usia" placeholder="Masukkan Usia" required>
            </div>
            <div class="form-group">
              <label for="BeratBadan">Berat Badan</label>
              <input type="BeratBadan" class="form-control" id="BeratBadan" name="BeratBadan" placeholder="Masukkan Berat Badan" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              <button class="btn btn-secondary btn-sm" onclick="history.back()">Kembali</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endsection('content') ?>