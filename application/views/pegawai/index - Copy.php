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
      <a href="<?= base_url(); ?>pegawai/tambah" class="btn btn-primary">Tambah Data Pegawai</a>
    </div>
  </div>

  <!-- new table -->
  <div class="row mt-3">
    <div class="col-lg">

      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Admin</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">No Hp</th>
            <th scope="col">Level</th>
            <th scope="col" style="text-align: right; padding-right: 64px">Aksi</th>
          </tr>
        </thead>
        <tbody>
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
                <td><?= $p['password']; ?></td>
              <?php else: ?>
                <td>*****</td>
              <?php endif ?>
              <td><?= $p['no_hp']; ?></td>
              <td><?= $p['level']; ?></td>
              <td class="px-0">
                <a href="<?= base_url(); ?>admin/hapus/<?=$p['id_pegawai'] ?>" class="btn btn-danger float-right ml-2 tombol-hapus">hapus
                </a>
                <a href="<?= base_url(); ?>admin/ubah/<?=$p['id_pegawai'] ?>" class="btn btn-success float-right ml-2">ubah
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


