<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-6 mx-auto">
				<!-- <div class="card-header">
					<h3>Tambah Data Admin</h3>
				</div> -->
				<div class="card-body">
					
					<form action="" method="post">
						<!-- nama -->
						<div class="form-group">
							<label for="nama_admin">Nama Admin</label>
							<input type="text" name="nama_admin" class="form-control" id="nama_admin" value="<?= set_value('nama_admin'); ?>">
							<small  class="form-text text-danger"><?= form_error('nama_admin'); ?>.</small>
						</div>
						
						<!-- noTelp -->
						<div class="form-group">
							<label for="no_telp">Nomor Hp</label>
							<input type="number" name="no_telp" class="form-control" id="no_telp" value="<?= set_value('no_telp'); ?>">
							<small  class="form-text text-danger"><?= form_error('no_telp'); ?>.</small>
						</div>

						<!-- username -->
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" value="<?= set_value('username'); ?>">
							<small  class="form-text text-danger"><?= form_error('username'); ?>.</small>
						</div>
						
						<!-- pass -->
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="password">
							<small  class="form-text text-danger"><?= form_error('password'); ?>.</small>
						</div>
						<!-- cpass -->
						<div class="form-group">
							<label for="cpassword">Confirm Password</label>
							<input type="password" name="cpassword" class="form-control" id="cpassword">
							<small  class="form-text text-danger"><?= form_error('cpassword'); ?>.</small>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


