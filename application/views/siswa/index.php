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
      <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
    </div>
  </div>

  <!-- DataTables -->
  <div class="card shadow mb-4 mt-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark" style="text-align: center;">
            <tr>
              <th>No</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <!-- <tfoot style="text-align: center;">
            <tr>
              <th>No</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </tfoot> -->
          <tbody style="text-align: center;">
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($sis as $s) : ?>
              <tr>
                <th scope="row" style="width: 6%"><?= $i ?></th>
                <td style="width: 11%"><?= $s['nis']; ?></td>
                <td style="width: 20%"><?= $s['nama_siswa']; ?></td>
                <td style="width: 12%"><?= $s['jenis_kelamin']; ?></td>
                <td style="width: 11%"><?= $s['nama_kelas']; ?></td>
                <td id="row-alamat"><?= $s['alamat']; ?></td>
                <td style="width: 18%" class="px-0">
                  <a href="" data-toggle="modal" data-target="#detailSiswaModal" class="btn btn-secondary btn-sm tampilModalDetail" data-nis="<?= $s['nis']; ?>" data-nama="<?= $s['nama_siswa']; ?>" data-tgllahir="<?= $s['tgl_lahir']; ?>" data-alamat="<?= $s['alamat']; ?>" data-username="<?= $s['username']; ?>" data-pass="<?= $s['password']; ?>">Detail
                  </a>
                  <a href="<?= base_url(); ?>siswa/ubah/<?= $s['nis'] ?>" class="btn btn-success btn-sm">ubah
                  </a>
                  <a href="<?= base_url(); ?>siswa/hapus/<?= $s['nis'] ?>" class="btn btn-danger btn-sm tombol-hapus-siswa">hapus
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
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="" disabled>
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

<style type="text/css">
  #row-alamat {
    white-space: nowrap;
    overflow: hidden;
    max-width: 90px;
    width: 130px;
    text-overflow: ellipsis;
    padding-left: 10px;
    padding-right: 10px;
  }
</style>