<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<!-- <?= var_dump($kls) ?>
	<?=var_dump($sis) ?> -->

	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-6 mx-auto">
				<!-- <div class="card-header">
					<h3>Tambah Data Admin</h3>
				</div> -->
				<div class="card-body">
					
					<form action="" method="post">
						<!-- id_mapel -->
						<input type="hidden" name="tmp_id_mapel" value="<?= $map['id_mapel']; ?>">
						<div class="form-group">
							<label for="id_mapel">Kode Mata Pelajaran</label>
							<input type="text" name="id_mapel" maxlength="10" class="form-control" id="id_mapel" value="<?= $map['id_mapel']; ?>">
							<small  class="form-text text-danger"><?= form_error('id_mapel'); ?>.</small>
						</div>

						<!-- nama_mapel -->
						<div class="form-group">
							<label for="nama_mapel">Nama Mata Pelajaran</label>
							<input type="text" name="nama_mapel" class="form-control" id="nama_mapel" value="<?= $map['nama_mapel']; ?>">
							<small  class="form-text text-danger"><?= form_error('nama_mapel'); ?>.</small>
						</div>

						<!-- nama_pegawai -->
						<div class="form-group">
							<label for="nama_pegawai">Nama Guru</label>
							<select name="nama_pegawai" class="form-control" id="nama_pegawai">
								<?php foreach ($guru as $g) : ?>
									<?php if($g['nama_pegawai'] == $map['nama_pegawai']): ?>
										<option value="<?= $g['nama_pegawai']; ?>" selected><?= $g['nama_pegawai']; ?></option>
									<?php else: ?>
										<option value="<?= $g['nama_pegawai']; ?>"><?= $g['nama_pegawai']; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
							<small  class="form-text text-danger"><?= form_error('nama_pegawai'); ?>.</small>
						</div>

						<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


