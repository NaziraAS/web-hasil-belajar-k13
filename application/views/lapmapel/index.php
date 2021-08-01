<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <!-- <?= var_dump($jdw); ?> -->
  <!-- <?= var_dump($_POST); ?> -->
  <!-- <?= var_dump($max); ?> -->


  <div class="card col-md-12 mx-auto">
    <!-- maincontent -->
    <div class="row mt-3">
      <div class="col-md-6">
        <!-- <a href="<?= base_url(); ?>presensi/tambah" class="btn btn-primary">Tambah Data Presensi</a> -->
      </div>
    </div>

    <!-- new table -->
    <div class="row mt-3">
      <div class="col-lg">

        <table class="table table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr style="text-align: center;">
              <th scope="col">No</th>
              <th scope="col">Nama Guru</th>
              <th scope="col">Nama Mapel</th>
              <!-- <th scope="col" style="text-align: right; padding-right: 84px">Aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($map as $z) : ?>
              <tr style="text-align: center;">
                <th scope="row"><?= $i ?></th>
                <td><?= $z['nama_pegawai']; ?></td>
                <td><?= $z['nama_mapel']; ?></td>
                <!-- <td class="px-0">
                  <a href="<?= base_url(); ?>presensi/hapus/<?=$p['id_presensi'] ?>" class="btn btn-danger float-right ml-2 tombol-hapus">hapus
                  </a>
                  <a href="<?= base_url(); ?>presensi/ubah/<?=$p['id_presensi'] ?>" class="btn btn-success float-right ml-2">ubah
                  </a>

                </td> -->
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>

          </tbody>
        </table>
        <hr class="sidebar-divider">
      </div>
    </div>
      <div class="row mt-3 mb-3">
        <div class="col-md-12">
          <a href="<?= base_url(); ?>lapmapel/cetak" class="btn btn-success hidden-print float-right">
            <span class="fas fa-print" aria-hidden="true"></span> Cetak
          </a>
        </div>
      </div>
    </div>
  

  </div>
  <br>

  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


