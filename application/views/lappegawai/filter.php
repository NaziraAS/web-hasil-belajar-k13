<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <?= var_dump($jdw); ?>
  <div class="card col-md-12 mx-auto">
    <div class="form-group form-inline col-md-12 mx-auto mt-3">
      <div class="form-group col-md-6">
        <label for="id_kelas">Kelas</label>
        <select name="kelas" class="form-control ml-5" id="kelas">
          <?php foreach($kls as $k): ?>
            <option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="id_kelas">Semester</label>
        <select name="semester" class="form-control ml-3" id="semester">
          <?php foreach($smt as $s): ?>
            <option value="<?= $s['semester']; ?>"><?= $s['semester']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="form-group form-inline col-md-12">

      <div class="form-group col-md-6">
        <label for="id_kelas">Tahun Ajaran</label>
        <select name="tahun_ajaran" class="form-control ml-3" id="tahun_ajaran">
          <?php foreach($tahun as $t): ?>
            <option value="<?= $t['tahun_ajaran']; ?>"><?= date("Y", strtotime($t['tahun_ajaran'])); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="id_kelas">Hari</label>
        <select name="hari" class="form-control ml-3" id="hari">
          <?php foreach($hari as $h): ?>
            <option value="<?= $h['hari']; ?>"><?= $h['hari']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-md-12 mt-2">
        <a href="<?= base_url(); ?>jadwal/filter" class="btn btn-primary btn-sm float-right">Tampilkan</a>
      </div>

    </div>
  </div>


  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>jadwal/tambah" class="btn btn-primary">Tambah Data Jadwal</a>
    </div>
  </div>

  <!-- new table -->
  <div class="row mt-3">
    <div class="col-lg">

      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Jam</th>
            <th scope="col" style="text-align: right; padding-right: 84px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- nomor -->
          <?php $i = 1; ?>
          <!-- looping -->
          <?php foreach ($jdw as $j) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $j['nama_mapel']; ?></td>
              <td><?= $j['nama_pegawai']; ?></td>
              <td><?= date("h:i", strtotime($j['jam'])); ?></td>
              <td class="px-0">
                <a href="<?= base_url(); ?>kelas/hapus/<?=$j['id_detail_jadwal'] ?>" class="btn btn-danger float-right ml-2 tombol-hapus">hapus
                </a>
                <a href="<?= base_url(); ?>kelas/ubah/<?=$j['id_detail_jadwal'] ?>" class="btn btn-success float-right ml-2">ubah
                </a>

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


