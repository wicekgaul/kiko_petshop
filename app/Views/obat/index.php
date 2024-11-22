<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
  <div
    class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">

    <div>
      <h3 class="fw-bold mb-3">Petshop</h3>
      <h6 class="op-7 mb-2">Daftar Obat</h6>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
      <a href="Obat/tambah" class="btn btn-primary btn-round">Tambah Obat</a>
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
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Satuan</th>
                  <th>Keterangan</th>
                  <th><i class="fas fa-cogs"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key => $value): ?>
                  <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['Kode'] ?></td>
                    <td><?= $value['Nama'] ?></td>
                    <td><?= $value['Satuan'] ?></td>
                    <td><?= $value['Keterangan'] ?></td>
                    <td>
                      <a href="Obat/ubah/<?= $value['Obat_id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="Obat/delete/<?= $value['Obat_id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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