<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <!-- <?= var_dump($jdw); ?> -->
  <!-- <?= var_dump($_POST); ?> -->
  <!-- <?= var_dump($max); ?> -->


  <div class="card col-md-12 mx-auto">

    <form action="" method="post">

      <div class="form-row mt-3">
        <div class="col">
          <div class="form-group col-md-6">
            <label for="nama_kelas">Kelas</label>
            <select name="nama_kelas" class="form-control" id="nama_kelas" onchange="filterCetakSiswa()">
              <option>-Pilih-</option>
              <?php foreach ($kelas as $z) : ?>
                <option value="<?= $z['nama_kelas']; ?>"><?= $z['nama_kelas']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col"></div>
      </div>

      <div class="col-md-12 mt-2">
        <button type="button" class="btn btn-primary btn-sm float-right filterLaporanSiswa">Tampilkan</a></button>
      </div>
    </form>


    <!-- maincontent -->
    <div class="row mt-3">
      <div class="col-md-6">
      </div>
    </div>

    <!-- new table -->
    <div class="row mt-3">
      <div class="col-lg">

        <table class="table table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
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
                <td id="row-alamat"><?= $z['alamat']; ?></td>
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
        <!-- <input type="" name="store-filterLapsiswa" class="store-filterLapsiswa"> -->
        <a href="<?= base_url('Lapsiswa/cetak') ?>" class="btn btn-success float-right href-lapsiswa">Cetak</a>
      </div>
    </div>
  </div>


</div>
<br>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

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