<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->


  <!-- Update Admin Data -->
  <!-- tombol tambah -->
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>mapel/tambah" class="btn btn-primary">Tambah Data Mapel</a>
    </div>
  </div>

  <!-- DataTables -->
  <div class="card shadow mb-4 mt-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark" style="text-align: center;">
            <tr>
              <th>No</th>
              <th>Kode Mapel</th>
              <th>Nama Mapel</th>
              <th>Nama Guru</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <!-- <tfoot style="text-align: center;">
            <tr>
              <th>No</th>
              <th>Kode Mapel</th>
              <th>Nama Mapel</th>
              <th>Nama Guru</th>
              <th>Aksi</th>
            </tr>
          </tfoot> -->
          <tbody style="text-align: center;">
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($map as $m) : ?>
              <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $m['id_mapel']; ?></td>
                <td><?= $m['nama_mapel']; ?></td>
                <td><?= $m['nama_pegawai']; ?></td>
                <td class="px-0" style="text-align: center;">
                  <!-- <a href="" data-toggle="modal" data-target="#detailSiswaModal" class="btn btn-secondary btn-sm tampilModalDetail" data-nis="<?= $m['id_mapel']; ?>">Detail
                  </a> -->
                  <a href="<?= base_url(); ?>mapel/ubah/<?= $m['id_mapel'] ?>" class="btn btn-success btn-sm">ubah
                  </a>
                  <a href="<?= base_url(); ?>mapel/hapus/<?= $m['id_mapel'] ?>" class="btn btn-danger btn-sm tombol-hapus">hapus
                  </a>
                  <!-- <a href="<?= base_url(); ?>admin/detail/<?= $p['id_pegawai'] ?>" class="btn btn-secondary float-right ml-2">detail
                </a> -->
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

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout ?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Yakin Logout dari session ini ?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Siswa Modal-->
<div class="modal fade" id="detailSiswaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="detailSiswaModalLabel"><b>Nama Siswa</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="">
        <div class="modal-body">
          <div class="form-group">
            <label>Tanggal lahir</label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="" disabled>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" id="username" value="" disabled>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" id="password" value="" disabled>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Ok</button> -->
        </div>
      </form>
    </div>
  </div>
</div>