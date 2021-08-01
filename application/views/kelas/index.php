<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>kelas/tambah" class="btn btn-primary">Tambah Data Kelas</a>
    </div>
  </div>

  
  <!-- new table -->
  <div class="card shadow mb-4 mt-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-bordered data-table table-sm" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
          <thead class="thead-dark">
            <tr>
              <th scope="col" style="width: 7%">No</th>
              <th scope="col">Kode Kelas</th>
              <th scope="col">Nama Kelas</th>
              <th scope="col" style="width: 20%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($kls as $k) : ?>
              <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $k['id_kelas']; ?></td>
                <td><?= $k['nama_kelas']; ?></td>
                <td class="px-0">
                  <a href="<?= base_url(); ?>kelas/ubah/<?=$k['id_kelas'] ?>" class="btn btn-success btn-sm ml-2">ubah
                  </a>
                  <a href="<?= base_url(); ?>kelas/hapus/<?=$k['id_kelas'] ?>" class="btn btn-danger btn-sm ml-2 tombol-hapus-kelas">hapus
                  </a>

                </td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


