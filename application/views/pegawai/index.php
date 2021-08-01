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
      <a href="<?= base_url(); ?>pegawai/tambah" 
        <?php if($this->session->userdata['level'] != 'Admin' ): ?>
          class="btn btn-primary tombol-tambah"
        <?php else: ?>
          class="btn btn-primary"
        <?php endif; ?>
        >Tambah Data Pegawai</a>
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
              <th>NIP</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Password</th>
              <th>No Hp</th>
              <th>Level</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot style="text-align: center;">
            <tr>
              <th>No</th>
              <th>NIP</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Password</th>
              <th>No Hp</th>
              <th>Level</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody style="text-align: center;">
            <!-- nomor -->
          <?php $i = 1; ?>
          <!-- looping -->
          <?php foreach ($pgw as $p) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $p['nip']; ?></td>
              <td><?= $p['nama_pegawai']; ?></td>
              <td><?= $p['username']; ?></td>
              <?php if($this->session->userdata['level'] == 'Admin') : ?>
                <td class="hidetext"><?= $p['password']; ?></td>
              <?php else: ?>
                <td>*****</td>
              <?php endif ?>
              <td><?= $p['no_hp']; ?></td>
              <td><?= $p['level']; ?></td>
              <td class="px-0">
                <a href="<?= base_url(); ?>pegawai/hapus/<?=$p['id_pegawai'] ?>" class="btn btn-danger tombol-hapus-pegawai btn-sm">hapus
                </a>
                <a href="<?= base_url(); ?>pegawai/ubah/<?=$p['id_pegawai'] ?>" class="btn btn-success btn-sm">ubah
                </a>
                <!-- <a href="<?= base_url(); ?>admin/detail/<?=$p['id_pegawai'] ?>" class="btn btn-secondary float-right ml-2">detail
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


