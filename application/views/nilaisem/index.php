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
            <label for="id_kelas">Kelas</label>
            <select name="kelas" class="form-control" id="kelas">
              <option>-Pilih-</option>
              <?php foreach ($kls as $k) : ?>
                <option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group col-md-6">
            <label for="semester">Semester</label>
            <select name="semester" class="form-control" id="semester">
              <option>-Pilih-</option>
              <?php foreach ($smt as $s) : ?>
                <option value="<?= $s['semester']; ?>"><?= $s['semester']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-6">
          <div class="form-group col-md-6">
            <label for="tahun_ajaran">Tahun Ajaran</label>
            <select name="tahun_ajaran" class="form-control" id="tahun_ajaran">
              <option>-Pilih-</option>
              <?php foreach ($tahun as $t) : ?>
                <option value="<?= $t['tahun_ajaran']; ?>"><?= $t['tahun_ajaran']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-2">
        <button type="button" class="btn btn-primary btn-sm float-right filterNilaiSemester" data-level="<?= $this->session->userdata('level'); ?>">Tampilkan</a></button>
      </div>
    </form>


    <!-- maincontent -->
    <div class="row mt-3">
      <div class="col-md-6">
        <a href="<?= base_url(); ?>nilaisem/tambah" <?php if ($this->session->userdata['level'] != 'Guru Mapel') : ?> class="btn btn-primary btn-warningTambah" <?php else : ?> class="btn btn-primary" <?php endif; ?>>Tambah Data Nilai Semester</a>
      </div>
    </div>

    <!-- new table -->
    <div class="row mt-3">
      <div class="col-lg">

        <table class="table table-sm table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr style="text-align: center;">
              <th scope="col">No</th>
              <th scope="col">NIS</th>
              <th scope="col">Nama Siswa</th>
              <th scope="col" style="text-align: right; padding-right: 84px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- nomor -->
            <?php $i = 1; ?>
            <!-- looping -->
            <?php foreach ($nsem as $ns) : ?>
              <tr style="text-align: center;">
                <th scope="row"><?= $i ?></th>
                <td><?= $ns['nis']; ?></td>
                <td><?= $ns['nama_siswa']; ?></td>
                <td class="px-0">
                  <a href="<?= base_url(); ?>nilaisem/hapus/<?= $ns['nis'] ?>" <?php if ($this->session->userdata['level'] != 'Guru Mapel') : ?> class="btn btn-sm btn-danger float-right btn-sm ml-2 tombol-hapus btn-warningHapus" <?php else : ?> class="btn btn-sm btn-danger float-right btn-sm ml-2 tombol-hapus" <?php endif; ?>>hapus
                  </a>
                  <a href="<?= base_url(); ?>nilaisem/ubah/<?= $ns['nis'] ?>" <?php if ($this->session->userdata['level'] != 'Guru Mapel') : ?> class="btn btn-sm btn-success float-right btn-sm ml-2 btn-warningUbah" <?php else : ?> class="btn btn-sm btn-success float-right btn-sm ml-2" <?php endif; ?>>ubah
                  </a>
                  <a href="<?= base_url(); ?>nilaisem/detail/<?= $ns['nis'] ?>" class="btn btn-secondary float-right btn-sm ml-2">detail
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

<!-- Nilaisem Modal-->
<div class="modal fade" id="detailNilaisemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="detailNilaisemModalLabel"><b>Nama Siswa</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="">
        <div class="modal-body">
          <div class="form-group">
            <label>Tanggal lahir</label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="" disabled>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" id="username" value="" disabled>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" id="password" value="" disabled>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Ok</button> -->
        </div>
      </form>
    </div>
  </div>
</div>
</div>