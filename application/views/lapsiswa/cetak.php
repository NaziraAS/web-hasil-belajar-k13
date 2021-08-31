<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>
  <div class="card col-md-12 mx-auto">

    <!-- <?= var_dump($pgw); ?> -->
    <!-- maincontent -->
    <div class="row mt-3">
      <div class="col-md-12 center">
        <!-- <a href="<?= base_url(); ?>presensi/tambah" class="btn btn-primary">Tambah Data Presensi</a> -->
        <h3 class="text-center"><?= $judul; ?></h3>
        <p class="text-center">Data laporan</p>
      </div>
    </div>

    <!-- new table -->
    <div class="row mt-3">
      <div class="col-lg">

        <table class="table table-sm table-hover table-bordered tableFiltered">
          <thead class="thead-dark">
            <tr style="text-align: center;">
              <th scope="col">No</th>
              <th scope="col">NIS</th>
              <th scope="col">Nama Siswa</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Alamat</th>
              <!-- <th scope="col" style="text-align: right; padding-right: 84px">Aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($sis as $z) : ?>
              <tr style="text-align: center;">
                <th scope="row"><?= $i ?></th>
                <td><?= $z['nis']; ?></td>
                <td><?= $z['nama_siswa']; ?></td>
                <td><?= $z['jenis_kelamin']; ?></td>
                <td><?= date("d-F-Y", strtotime($z['tgl_lahir'])); ?></td>
                <td><?= $z['alamat']; ?></td>
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
    <a href="<?= base_url(); ?>lapsiswa" class="btn btn-secondary btn-sm btn-kembali-cetak">Kembali</a>
  </div>
</div>


</div>
<br>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<style type="text/css">
  @media print {
    .btn-kembali-cetak {
      visibility: hidden;
    }
  }
</style>
<script type="text/javascript">
  // print
  window.print();
</script>