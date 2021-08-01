<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>
  <div class="card col-md-12 mx-auto">
    <!-- maincontent -->
    <div class="row mt-3">
      <div class="col-md-12 center">
        <!-- <a href="<?= base_url(); ?>presensi/tambah" class="btn btn-primary">Tambah Data Presensi</a> -->
        <h3 class="text-center"><?= $judul; ?></h3>
        <p class="text-center">Data laporan Data laporan Data laporan Data laporan Data laporan </p>
      </div>
    </div>

    <!-- new table -->
    <div class="row mt-3">
      <div class="col-lg">

        <table class="table table-sm table-hover table-bordered">
          <thead class="thead-dark">
            <tr style="text-align: center;">
              <th scope="col" style="width: 5%">No</th>
              <th scope="col" style="width: 45%">Nama Guru</th>
              <th scope="col" style="width: 45%">Nama Mapel</th>
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
        <hr class="sidebar-divider">
      </div>
    </div>
  </div>
  <div class="col-md-12 center mt-3">
    <a href="<?= base_url(); ?>lapmapel" class="btn btn-secondary btn-sm btn-kembali-cetak">Kembali</a>
  </div>
</div>


</div>
<br>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script type="text/javascript">
  <!--
    window.print();
//-->
</script>


