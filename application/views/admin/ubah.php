<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-6 mx-auto">
				<!-- <div class="card-header mt-2">
					<h3>Ubah Data Admin</h3>
				</div> -->
				<div class="card-body">
					
					<form action="" method="post">
						<!-- hidden id_admin -->
						<input type="hidden" name="id_admin" value="<?= $adm['id_admin']; ?>">
						
						<!-- nama -->
						<div class="form-group">
							<label for="nama_admin">Nama Admin</label>
							<input type="text" name="nama_admin" class="form-control" id="nama_admin" value="<?= $adm['nama_admin']; ?>">
							<small  class="form-text text-danger"><?= form_error('nama_admin'); ?>.</small>
						</div>
						
						<!-- noTelp -->
						<div class="form-group">
							<label for="no_telp">Nomor Hp</label>
							<input type="text" name="no_telp" class="form-control" id="no_telp" value="<?= $adm['no_telp']; ?>">
							<small  class="form-text text-danger"><?= form_error('no_telp'); ?>.</small>
						</div>

						<!-- username -->
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" value="<?= $adm['username']; ?>">
							<small  class="form-text text-danger"><?= form_error('username'); ?>.</small>
						</div>

						<!-- pass -->
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="password" value="<?= $adm['password']; ?>">
							<small  class="form-text text-danger"><?= form_error('password'); ?>.</small>
						</div>

						<!-- cpass -->
						<div class="form-group">
							<label for="cpassword">Confirm Password</label>
							<input type="password" name="cpassword" class="form-control" id="cpassword" >
							<small  class="form-text text-danger"><?= form_error('cpassword'); ?>.</small>
						</div>
						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


