<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
      <h3 class="fw-bold mb-3">Petshop</h3>
      <h6 class="op-7 mb-2">Ubah Data Dokter</h6>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Ubah Dokter</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('Dokter/update'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
              <label for="nama">Nama Dokter</label>
              <input type="text" class="form-control" id="nama" name="Nama" value="<?= $item['Nama'] ?>" placeholder="Masukkan nama dokter" required>
              <input type="hidden" class="form-control" id="Dokter_id" name="Dokter_id" value="<?= $item['Dokter_id'] ?>">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="Alamat" value="<?= $item['Alamat'] ?>" placeholder="Masukkan alamat" required>
            </div>
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="text" class="form-control" id="telepon" name="Telepon" value="<?= $item['Telepon'] ?>" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="Email" value="<?= $item['Email'] ?>" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-warning btn-sm">Update</button>
              <button class="btn btn-secondary btn-sm" onclick="history.back()">Kembali</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endsection('content') ?>