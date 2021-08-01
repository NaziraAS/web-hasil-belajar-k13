<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <!-- <?= var_dump($zdw); ?> -->
  <!-- <?= var_dump($_POST); ?> -->
  <!-- <?= var_dump($dnsem); ?> -->

  <div class="card col-md-12 mx-auto">
    <div class="form-group mt-3">
      <div class="form-row">
        <div class="col-md-2">
          <h6>Nama Siswa </h6>
          <h6>NIS </h6>
          <h6>Semester </h6>
          <h6>Tahun ajaran </h6>
        </div>
        <div class="col">
          <h6><b>: <?= $dnsem[0]['nama_siswa']; ?></b></h6>
          <h6><b>: <?= $dnsem[0]['nis']; ?></b></h6>
          <h6><b>: <?= $dnsem[0]['semester']; ?></b></h6>
          <h6><b>: <?= $dnsem[0]['tahun_ajaran']; ?></b></h6>
        </div>
      </div>
    </div>
    <!-- <form action="" method="post">

      <div class="form-row mt-3">
        <div class="col">
          <div class="form-group col-md-6">
            <label for="id_kelas">Kelas</label>
            <select name="kelas" class="form-control" id="kelas">
              <option>-Pilih-</option>
              <?php foreach($kls as $k): ?>
                <option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group col-md-6">
            <label for="id_kelas">Semester</label>
            <select name="semester" class="form-control" id="semester">
              <option>-Pilih-</option>
              <?php foreach($smt as $s): ?>
                <option value="<?= $s['semester']; ?>"><?= $s['semester']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <div class="form-group col-md-6">
            <label for="id_kelas">Tahun Ajaran</label>
            <select name="tahun_ajaran" class="form-control" id="tahun_ajaran">
              <option>-Pilih-</option>
              <?php foreach($tahun as $t): ?>
                <option value="<?= $t['tahun_ajaran']; ?>"><?= $t['tahun_ajaran']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group col-md-6">
            <label for="id_kelas">Hari</label>
            <select name="hari" class="form-control" id="hari">
              <option>-Pilih-</option>
              <?php foreach($hari as $h): ?>
                <option value="<?= $h['hari']; ?>"><?= $h['hari']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-12 mt-2">
        <button type="button" class="btn btn-primary btn-sm float-right filterJadwal">Tampilkan</a></button>
      </div>
    </form> -->

    <!-- new table -->
    <div class="row mt-2">
      <div class="col-lg">

        <table class="table table-hover table-bordered">
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
            <?php foreach ($dnsem as $z) : ?>
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
      </div>
    </div>
  </div>
  <div class="col-md-12 mt-2 mb-3">
    <a href="<?= base_url(); ?>nilaisem" class="btn btn-secondary btn-sm float-left">Kembali</a>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


