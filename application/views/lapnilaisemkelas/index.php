<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <!-- <?= var_dump($nsem); ?> -->
  <!-- <?= var_dump($_POST); ?> -->
  <!-- <?= var_dump($id_kelas); ?> -->


  <div class="card col-md-12 mx-auto">

    <form action="" method="post" id="form-filter">

      <div class="form-row mt-2">
        <div class="col">
          <div class="form-group col-md-12">
            <label for="nama_kelas">Kelas</label>
            <select name="nama_kelas" class="form-control lapnilaisemNamaKelas" id="nama_kelas" onchange="filterCetakLapnnilaisemKelas()">
              <option>-Pilih-</option>
              <?php foreach($kls as $z): ?>
                <option value="<?= $z['id_kelas']; ?>"><?= $z['nama_kelas']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        
        <div class="col">
          <div class="form-group col-md-12">
            <label for="semester">Semester</label>
            <select name="semester" class="form-control" id="semester" onchange="filterCetakLapnnilaisemKelas()">
              <option>-Pilih-</option>
              <?php foreach($smt as $z): ?>
                <option value="<?= $z['semester']; ?>"><?= $z['semester']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>

      <div class="form-row mt-1">
        <div class="col">
          <div class="form-group col-md-12">
            <label for="nama_mapel">Mata Pelajaran</label>
            <select name="nama_mapel" class="form-control" id="nama_mapel" onchange="filterCetakLapnnilaisemKelas()">
              <option>-Pilih-</option>
              <?php foreach($map as $z): ?>
                <option value="<?= $z['id_mapel']; ?>"><?= $z['id_mapel']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      
        <div class="col">
          <div class="form-group col-md-12">
            <label for="tahun_ajaran">Tahun Ajaran</label>
            <select name="tahun_ajaran" class="form-control" id="tahun_ajaran" onchange="filterCetakLapnnilaisemKelas()">
              <option>-Pilih-</option>
              <?php foreach($tahun as $z): ?>
                <option value="<?= $z['tahun_ajaran']; ?>"><?= $z['tahun_ajaran']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      
      <div class="col-md-12 mt-2">
        <button type="button" class="btn btn-primary btn-sm float-right filterLaporanLapnilaisemkelas">Tampilkan</a></button>
      </div>
    </form>


    <!-- maincontent -->
    <div class="row mt-3" id="section-to-print">
      <div class="col-md-12 center print-header" style="display: none;">
        <h3 class="text-center"><?= $judul; ?></h3>
        <p class="text-center">Data laporan Data laporan Data laporan Data laporan Data laporan </p>
      </div>
    </div>

    <!-- new table -->
    <div class="row mt-3">
      <div class="col-lg" id="section-to-print">

        <table class="table table-hover table-bordered table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr style="text-align: center;">
              <th scope="col" rowspan="2" style="vertical-align: middle; width: 5%">No</th>
              <th scope="col" rowspan="2" style="vertical-align: middle; width: 10%">NIS</th>
              <th scope="col" rowspan="2" style="vertical-align: middle;">Nama Siswa</th>
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
                <td><?= $z['nis']; ?></td>
                <td><?= $z['nama_siswa']; ?></td>
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
      </div>
    </div>
    <div class="row mt-3 mb-3">
      <div class="col-md-12">
        <form action="" method="post">
          <!-- <input type="" name="store-filterLappegawai" class="store-filterLappegawai"> -->
          <a href="http://lapnilaisemkelas" class="btn btn-success float-right href-lapnilaisemkelas">Cetak</a>
        </form>
      </div>
    </div>
  </div>
  

</div>
<br>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<style type="text/css">
  @media print {
    body * {
      visibility: hidden;
      /*display: all;*/
    }
    #section-to-print, #section-to-print * {
      visibility: visible;
      display: all;
    }
    #section-to-print {
      /*position: absolute;*/
      left: 0;
      top: 0;
      /*display: all;      */
    }

    #accordionSidebar, #form-filter{
      display: none;
    }
    
  }
</style>


