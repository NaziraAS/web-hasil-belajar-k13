<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<!-- <?= var_dump($kls) ?> -->
	<!-- <?= var_dump($_POST); ?> -->

	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-6 mx-auto">
				<!-- <div class="card-header">
					<h3>Tambah Data Admin</h3>
				</div> -->
				<div class="card-body">

					<form action="" method="post">
						<!-- nis -->
						<div class="form-group">
							<label for="nis">NIS</label>
							<input type="text" name="nis" class="form-control" id="nis" value="<?= set_value('nis'); ?>">
							<small class="form-text text-danger"><?= form_error('nis'); ?>.</small>
						</div>

						<!-- nama -->
						<div class="form-group">
							<label for="nama_siswa">Nama Siswa</label>
							<input type="text" name="nama_siswa" class="form-control" id="nama_siswa" value="<?= set_value('nama_siswa'); ?>">
							<small class="form-text text-danger"><?= form_error('nama_siswa'); ?>.</small>
						</div>

						<!-- jk -->
						<div class="form-group col-12" style="padding: 0px">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<div class="container float-left" style="padding: 0px">
								<label class="radio-inline col-md-6 float-left" style="padding: 0px">
									<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
								</label>
								<label class="radio-inline col-md-6">
									<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
								</label>
							</div>
						</div>
						<br><br>

						<!-- tgl_lahir -->
						<div class="form-group">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" min="2005-01-01" value="<?= set_value('tgl_lahir'); ?>">
							<small class="form-text text-danger"><?= form_error('tgl_lahir'); ?>.</small>
						</div>



						<!-- nama_kelas -->
						<div class="form-group">
							<label for="nama_kelas">Kelas</label>
							<select name="nama_kelas" class="form-control" id="nama_kelas">
								<?php foreach ($kls as $k) : ?>
									<option><?= $k['nama_kelas']; ?></option>
								<?php endforeach; ?>
							</select>
							<small class="form-text text-danger"><?= form_error('nama_kelas'); ?>.</small>
						</div>

						<!-- alamat -->
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea rows="6" type="alamat" name="alamat" class="form-control" id="alamat"></textarea>
							<small class="form-text text-danger"><?= form_error('alamat'); ?>.</small>
						</div>

						<!-- username -->
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" value="<?= set_value('username'); ?>">
							<small class="form-text text-danger"><?= form_error('username'); ?>.</small>
						</div>

						<!-- pass -->
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="password">
							<small class="form-text text-danger"><?= form_error('password'); ?>.</small>
						</div>

						<!-- cpass -->
						<div class="form-group">
							<label for="cpassword">Ulangi Password</label>
							<input type="password" name="cpassword" class="form-control" id="cpassword">
							<small class="form-text text-danger"><?= form_error('cpassword'); ?>.</small>
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