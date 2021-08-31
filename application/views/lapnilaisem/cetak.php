<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>
  <div class="card col-md-12 mx-auto">

    <!-- <?= var_dump($nis); ?> -->
    <!-- <?= var_dump($nama_siswa); ?>
    <?= var_dump($nama_kelas); ?> -->
    <!-- maincontent -->
    <div class="row mt-3">
      <div class="col-md-12 center">
        <!-- <a href="<?= base_url(); ?>presensi/tambah" class="btn btn-primary">Tambah Data Presensi</a> -->
        <h3 class="text-center"><?= $judul; ?></h3>
        <p class="text-center">Data Laporan Data Laporan Data Laporan Data Laporan Data Laporan Data Laporan </p>
        <div class="form-group mt-3">
          <div class="form-row">
            <div class="col-md-2">
              <h6>NIS </h6>
              <h6>Nama Siswa </h6>
              <h6>Kelas </h6>
              <h6>Semester </h6>
              <h6>Tahun ajaran </h6>
            </div>
            <div class="col">
              <h6><b>: <?= $nis ?> </b></h6>
              <h6><b>: <?= $nama_siswa['nama_siswa'] ?></b></h6>
              <h6><b>: <?= $nama_kelas['nama_kelas'] ?></b></h6>
              <h6><b>: <?= $semester ?></b></h6>
              <h6><b>: <?= $tahun_ajaran ?></b></h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- new table -->
    <div class="row mt-3">
      <div class="col-lg">

        <table class="table table-sm table-hover table-bordered tableFiltered">
          <thead class="thead-dark">
            <tr style="text-align: center;">
              <th scope="col" rowspan="2" style="vertical-align: middle;">No</th>
              <th scope="col" rowspan="2" style="vertical-align: middle;">Mata Pelajaran</th>
              <th scope="col" colspan="2">Pengetahuan</th>
              <th scope="col" colspan="2">Keterampilan</th>
              <th scope="col" rowspan="2" style="vertical-align: middle;">Sikap</th>
            </tr>
            <tr style="text-align: center;">
              <th scope="col">Nilai</th>
              <th scope="col">Huruf</th>
              <th scope="col">Nilai</th>
              <th scope="col">Huruf</th>
            </tr>
          </thead>
          <tbody>
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($nsem as $z) : ?>
              <tr style="text-align: center;">
                <th scope="row"><?= $i ?></th>
                <td><?= $z['nama_mapel']; ?></td>
                <td><?= $z['nilai_pengetahuan']; ?></td>
                <td><?= $z['konversi_nilai_pengetahuan']; ?></td>
                <td><?= $z['nilai_keterampilan']; ?></td>
                <td><?= $z['konversi_nilai_keterampilan']; ?></td>
                <td><?= $z['nilai_sikap']; ?></td>
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
    <a href="<?= base_url(); ?>lapnilaisem" class="btn btn-secondary btn-sm btn-kembali-cetak">Kembali</a>
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