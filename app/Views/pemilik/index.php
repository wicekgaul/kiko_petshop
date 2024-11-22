<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
  <div
    class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">

    <div>
      <h3 class="fw-bold mb-3">Petshop</h3>
      <h6 class="op-7 mb-2">Daftar Data Pemilik</h6>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
      <a href="Pemilik/tambah" class="btn btn-primary btn-round">Tambah Data</a>
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
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th><i class="fas fa-cogs"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key => $value): ?>
                  <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['Nama'] ?></td>
                    <td><?= $value['Alamat'] ?></td>
                    <td><?= $value['Telepon'] ?></td>
                    <td><?= $value['Email'] ?></td>
                    <td>
                      <a href="Pemilik/ubah/<?= $value['Pemilik_id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="Pemilik/delete/<?= $value['Pemilik_id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endsection('content') ?>