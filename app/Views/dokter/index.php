<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
  <div
    class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">

    <div>
      <h3 class="fw-bold mb-3">Petshop</h3>
      <h6 class="op-7 mb-2">Daftar Data Dokter</h6>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
      <a href="Dokter/tambah" class="btn btn-primary btn-round">Tambah Dokter</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?= $judul; ?></h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table
              id="basic-datatables"
              class="display table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Telepon</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Foto</th>
                  <th><i class="fas fa-cogs"></i></th>
                </tr>
              </thead>
              <p>
                <?php foreach ($data as $key => $value): ?>
                  <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['Nama'] ?></td>
                    <td><?= $value['JenisKelamin'] ?></td>
                    <td><?= $value['Alamat'] ?></td>
                    <td><?= $value['Telepon'] ?></td>
                    <td><?= $value['Email'] ?></td>
                    <td><?= $value['Photo'] ?></td>
                    <td>
                      <a href="Dokter/ubah/<?= $value['Dokter_id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="Dokter/delete/<?= $value['Dokter_id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </p>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endsection('content') ?>