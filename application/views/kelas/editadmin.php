

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg ">
              <!-- <div class="col-lg-6"> -->
                <div class="p-5 text-center">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Nama admin</h1>
                  </div>

                  <?=  $this->session->flashdata('message'); ?>

                  <form class="user" method="post" action="<?= base_url('auth'); ?>">
                  	<!-- nama admin -->
                    <div class="form-group">
                      <input type="text" readonly class="form-control form-control-user" id="username" name="username" placeholder="Masukkan username" value="<?= set_value('username'); ?> ">
                      <!-- set pesan error -->
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <!-- no hp -->
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Masukkan Nomor hp" value="<?= set_value('no_hp'); ?> ">
                      <!-- set pesan error -->
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <!-- username -->
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan username" value="<?= set_value('username'); ?> ">
                      <!-- set pesan error -->
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <!-- password -->
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <!-- set pesan error -->
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-user">
                      Simpan
                    </button>
                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  
