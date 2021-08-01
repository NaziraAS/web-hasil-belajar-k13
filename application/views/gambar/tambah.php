<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-md-6">

			<!-- form CI -->
			<div class="card">
				<div class="card-header">
					<h3>Tambah Data Gambar</h3>
				</div>
				<div class="card-body">
					
					<?php echo form_open_multipart; ?>
					<!-- <form action="" method="post"> -->
						<!-- nama -->
						<div class="form-group">
							<label for="nama_admin">Nama Gambar</label>
							<input type="file" name="nama_admin" class="form-control" id="nama_admin">
							<small  class="form-text text-danger"><?= form_error('nama_admin'); ?>.</small>
						</div>
						<!-- username -->
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username">
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
					<!-- </form> -->
					<?php echo form_close(); ?>
				</div>
			</div>


			

		</div>
	</div>
</div>