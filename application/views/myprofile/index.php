<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/default1.jpg') ?>" class="card-img" >
      </div>
      
      <div class="col-md-8">
        <div class="card-body">
          <!-- left -->
          <div class="form-group mt-4">
            <h5 class="card-title"><strong>Nama: </strong><?= $user['nm_admin']; ?></h5>
            <p class="card-text"><strong>Username: </strong><?= $user['username']; ?></p>
            <p class="card-text"><strong>Nomor Hp: </strong><?= $user['no_telp']; ?></p>
            <p class="card-text"><strong>Password: </strong><?= $user['password']; ?></p>
          </div>

        </div>
      </div>
      
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


