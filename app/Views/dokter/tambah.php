<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
      <h3 class="fw-bold mb-3">Petshop</h3>
      <h6 class="op-7 mb-2">Tambah Data Dokter</h6>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Tambah Dokter</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('Dokter/save'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
              <label for="nama">Nama Dokter</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Dokter" required>
            </div>
            <div class="form-group">
              <label for="JenisKelamin">Jenis Kelamin</label>
              <input type="text" class="form-control" id="JenisKelamin" name="JenisKelamin" placeholder="Masukkan jenis Kelamin" required>
            </div>
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group">
              <label for="photo">Foto</label>
              <input type="photo" class="form-control" id="Photo" name="Photo" placeholder="Tambahkan Foto" required>
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