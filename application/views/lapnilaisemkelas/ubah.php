<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- <?= var_dump($nilaieks); ?> -->

			<!-- form CI -->
			<div class="card col-md-6 mx-auto">
				<!-- <div class="card-header mt-2">
					<h3>Ubah Data Admin</h3>
				</div> -->
				<div class="card-body">
					<form action="" method="post">

						<form action="" method="post">

							<div class="form-row">
								<div class="col">
									<!-- kelas -->
									<div class="form-group">
										<input type="hidden" name="id_nilai_ekskul" value="<?= $nilaieks['id_nilai_ekskul']; ?>">
										<label for="nama_kelas">Kelas</label>
										<select type="text" name="nama_kelas" class="form-control inputKelasNilaiEks" id="nama_kelas" disabled>
											<option>-Pilih-</option>
											<?php foreach($kls as $k): ?>
												<?php if($k['nama_kelas'] == $nilaieks['nama_kelas']): ?>
													<option value="<?= $k['nama_kelas']; ?>" selected><?= $k['nama_kelas']; ?></option>
												<?php else: ?>
													<option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>
										</select>
										<small  class="form-text text-danger"><?= form_error('nama_kelas'); ?>.</small>
									</div>
								</div>

								<div class="col">
									<!-- nama_ekskul -->
									<div class="form-group">
										<label for="nama_ekskul">Nama Ekstrakulikuler</label>
										<select type="text" name="nama_ekskul" class="form-control" id="nama_ekskul">
											<?php foreach($eks as $e): ?>
												<?php if($e['nama_ekskul'] == $nilaieks['nama_ekskul']): ?>
													<option value="<?= $e['nama_ekskul']; ?>" selected><?= $e['nama_ekskul']; ?></option>
												<?php else: ?>
													<option value="<?= $e['nama_ekskul']; ?>"><?= $e['nama_ekskul']; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>
										</select>
										<small  class="form-text text-danger"><?= form_error('nama_ekskul'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nis -->
									<div class="form-group">
										<label for="nis">NIS</label>
										<select type="text" name="nis" class="form-control" id="nis" onchange="showNamaSiswa()" disabled>
											<option>-Pilih-</option>
											<?php foreach($nis as $n): ?>
												<option value="<?= $n['nis']; ?>"><?= $n['nis']; ?></option>
											<?php endforeach; ?>
										</select>
										<small  class="form-text text-danger"><?= form_error('nis'); ?>.</small>
									</div>
								</div>

								<div class="col">
									<!-- nama_siswa -->
									<div class="form-group">
										<label for="nama_siswa">Nama Siswa</label>
										<input type="text" name="nama_siswa" class="form-control namasiswaNilaieks" id="nama_siswa" value="<?= set_value('nama_siswa'); ?>" readonly>
										<small  class="form-text text-danger"><?= form_error('nama_siswa'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- semester -->
									<div class="form-group">
										<label for="semester">Semester</label>
										<select type="text" name="semester" class="form-control" id="semester">
											<?php foreach($smt as $s): ?>
												<?php if($s['semester'] == $nilaieks['semester']): ?>
													<option value="<?= $s['semester']; ?>" selected><?= $s['semester']; ?></option>
												<?php else: ?>
													<option value="<?= $s['semester']; ?>"><?= $s['semester']; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>
										</select>
										<small  class="form-text text-danger"><?= form_error('semester'); ?>.</small>
									</div>
								</div>

								<div class="col">
									<!-- tahun_ajaran -->
									<div class="form-group">
										<label for="tahun_ajaran">Tahun Ajaran</label>
										<input type="date" name="tahun_ajaran" class="form-control" id="tahun_ajaran" value="<?= $nilaieks['tahun_ajaran']; ?>">
										<small  class="form-text text-danger"><?= form_error('tahun_ajaran'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group">
										<label for="nilai_akhir_ekskul">Nilai</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4" id="nilai_akhir_ekskul" value="<?= $nilaieks['nilai_akhir_ekskul']; ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
								<div class="col-6">
									<!-- nilai_tugas -->
									<div class="form-group">
										<label for="tahun_ajaran">Deskripsi</label>
										<textarea class="form-control" rows="4" name="deskripsi_nilai" id="deskripsi_nilai"><?= $nilaieks['deskripsi_nilai'] ?></textarea>
										<small  class="form-text text-danger"><?= form_error('deskripsi_nilai'); ?>.</small>
									</div>
								</div>
							</div>

							<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
						</form>
						<a href="<?= base_url(); ?>nilaieks" class="btn btn-secondary">Kembali</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


