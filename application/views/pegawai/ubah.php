<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- <?= var_dump($pgw); ?> -->
	<!-- <?= var_dump($lvl); ?>  -->
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
						<!-- nip -->
						<input type="hidden" name="id_pegawai" value="<?= $pgw['id_pegawai']; ?>">
						<div class="form-group">
							<label for="nip">NIP</label>
							<input type="text" name="nip" class="form-control" id="nip" value="<?= $pgw['nip']; ?>" maxlength="18">
							<small  class="form-text text-danger"><?= form_error('nip'); ?>.</small>
						</div>

						<!-- nama -->
						<div class="form-group">
							<label for="nama_pegawai">Nama Pegawai</label>
							<input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="<?= $pgw['nama_pegawai']; ?>">
							<small  class="form-text text-danger"><?= form_error('nama_pegawai'); ?>.</small>
						</div>

						<!-- noTelp -->
						<div class="form-group">
							<label for="no_hp">Nomor Hp</label>
							<input type="number" name="no_hp" class="form-control" id="no_hp" value="<?= $pgw['no_hp']; ?>">
							<small  class="form-text text-danger"><?= form_error('no_hp'); ?>.</small>
						</div>

						<!-- level -->
						<div class="form-group">
							<label for="level">Level</label>
							<select name="level" class="form-control" id="level">
								<?php foreach ($lvl as $l) : ?>
									<?php if($l['level'] == $pgw['level']) : ?>
										<option value="<?= $l['level']; ?>" selected><?= $l['level']; ?></option>
									<?php else : ?>
										<option value="<?= $l['level']; ?>"><?= $l['level']; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
							<small  class="form-text text-danger"><?= form_error('level'); ?>.</small>
						</div>

						<!-- username -->
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" value="<?= $pgw['username']; ?>">
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
							<label for="cpassword">Ulangi Password</label>
							<input type="password" name="cpassword" class="form-control" id="cpassword" value="<?= $pgw['password']; ?>">
							<small  class="form-text text-danger"><?= form_error('cpassword'); ?>.</small>
						</div>
						<button type="submit" name="ubah" class="btn btn-primary float-right">Simpan Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


