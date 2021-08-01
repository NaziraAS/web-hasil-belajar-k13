<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
  </div>

  <!-- <?= var_dump($jdw); ?> -->
  <!-- <?= var_dump($_POST); ?> -->
  <!-- <?= var_dump($max); ?> -->


  <div class="card col-md-12 mx-auto">

    <form action="" method="post" id="form-filter">

      <div class="form-row mt-3">
        <div class="col">
          <div class="form-group col-md-6">
            <label for="level">Level</label>
            <select name="level" class="form-control" id="level" onchange="filterCetakPegawai()">
              <option>-Pilih-</option>
              <?php foreach ($level as $z) : ?>
                <option value="<?= $z['level']; ?>"><?= $z['level']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col"></div>
      </div>

      <!-- <div class="col-md-12 mt-2">
        <button type="button" class="btn btn-primary btn-sm float-right filterLaporanPegawai">Tampilkan</a></button>
      </div> -->
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
        <!-- show data with data table -->
        <table class="table table-hover table-bordered table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr style="text-align: center;">
              <th scope="col">No</th>
              <th scope="col">NIP</th>
              <th scope="col">Nama Pegawai</th>
              <th scope="col">Nomor HP</th>
              <!-- <th scope="col" style="text-align: right; padding-right: 84px">Aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($pgw as $p) : ?>
              <tr style="text-align: center;">
                <th scope="row"><?= $i ?></th>
                <td><?= $p['nip']; ?></td>
                <td><?= $p['nama_pegawai']; ?></td>
                <td><?= $p['no_hp']; ?></td>
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
          <a href="http://lappegawai" class="btn btn-success float-right href-lappegawai">Cetak</a>
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

    #section-to-print,
    #section-to-print * {
      visibility: visible;
      display: all;
    }

    #section-to-print {
      /*position: absolute;*/
      left: 0;
      top: 0;
      /*display: all;      */
    }

    #accordionSidebar,
    #form-filter {
      display: none;
    }

  }
</style>