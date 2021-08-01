<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-7">

      <div class="card o-hidden border-0 shadow-lg my-3" style="background-image: url(<?= base_url(); ?>assets/img/spikes.png);">

        <div class="mt-4 text-center">
          <img class="rounded-circle" width="180px" height="180px" src="<?= base_url(); ?>assets/img/logo.png">
        </div>
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg ">
              <!-- <div class="col-lg-6"> -->
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4"><b>SMA N 1 LASEM REMBANG</b><br>| Login |</h1>
                </div>

                <?= $this->session->flashdata('message'); ?>

                <form class="user" method="post" action="<?= base_url('Authentication'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                    <!-- set pesan error -->
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <!-- set pesan error -->
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                  <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                </form>
                <!-- <hr> -->
                <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa password?</a>
                  </div> -->
                <!-- <div class="text-center">
                    <a class="small" href="<?= base_url('auth/registration'); ?>">Daftar akun admin!</a>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>