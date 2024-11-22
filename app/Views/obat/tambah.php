<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
      <h3 class="fw-bold mb-3">Petshop</h3>
      <h6 class="op-7 mb-2">Tambah Data Obat</h6>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Tambah Obat</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('Obat/save'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
              <label for="kode">Kode Obat</label>
              <input type="text" class="form-control" id="kode" name="Kode" placeholder="Masukkan kode Obat" required>
            </div>
            <div class="form-group">
              <label for="nama">Nama Obat</label>
              <input type="text" class="form-control" id="nama" name="Nama" placeholder="Masukkan Nama Obat" required>
            </div>
            <div class="form-group">
              <label for="satuan">Satuan</label>
              <input type="text" class="form-control" id="satuan" name="Satuan" placeholder="Masukkan Nomor Satuan" required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" id="keterangan" name="Keterangan" placeholder="Masukkan Keterangan" required>
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