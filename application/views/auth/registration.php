<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
            </div>

            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" placeholder="Nama Lengkap" value="<?= set_value('nama_admin'); ?>">
                <!-- set pesan error -->
                <?= form_error('nama_admin', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="Nomor Handphone" value="<?= set_value('telp'); ?>">
                <!-- set pesan error -->
                <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                <!-- set pesan error -->
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                  <!-- set pesan error -->
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-user btn-block">
                Daftar
              </button>

            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Lupa password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Silakan login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>