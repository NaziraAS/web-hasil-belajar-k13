<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->

	<!-- <?= var_dump($map); ?> -->
	<!-- <?= var_dump($guru); ?> -->

	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-9 mx-auto">
				<!-- <div class="card-header">
					<h3>Tambah Data Admin</h3>
				</div> -->
				<div class="card-body">
					<form action="" method="post">

						<div class="form-row">
							<div class="col">
								<!-- kelas -->
								<div class="form-group">
									<label for="nama_kelas">Kelas</label>
									<select type="text" name="nama_kelas" class="form-control inputKelasNilaiEks" id="nama_kelas">
										<option>-Pilih-</option>
										<?php foreach($kls as $k): ?>
											<option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
										<?php endforeach; ?>
									</select>
									<small  class="form-text text-danger"><?= form_error('nama_kelas'); ?>.</small>
								</div>
							</div>

							<div class="col-2"></div>

							<div class="col">
								<!-- nama_mapel -->
								<div class="form-group">
									<label for="nama_mapel">Nama Mata Pelajaran</label>
									<select type="text" name="nama_mapel" class="form-control" id="nama_mapel">
										<?php foreach($map as $z): ?>
											<option value="<?= $z['nama_mapel']; ?>"><?= $z['nama_mapel']; ?></option>
										<?php endforeach; ?>
									</select>
									<small  class="form-text text-danger"><?= form_error('nama_mapel'); ?>.</small>
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col">
								<!-- nis -->
								<div class="form-group">
									<label for="nis">NIS</label>
									<select type="text" name="nis" class="form-control" id="nis" onchange="showNamaSiswa()">
										<option>-Pilih-</option>
										<?php foreach($nis as $n): ?>
											<option value="<?= $n['nis']; ?>"><?= $n['nis']; ?></option>
										<?php endforeach; ?>
									</select>
									<small  class="form-text text-danger"><?= form_error('nis'); ?>.</small>
								</div>
							</div>

							<div class="col-2"></div>

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
											<option value="<?= $s['semester']; ?>"><?= $s['semester']; ?></option>
										<?php endforeach; ?>
									</select>
									<small  class="form-text text-danger"><?= form_error('semester'); ?>.</small>
								</div>
							</div>

							<div class="col-2"></div>

							<div class="col">
								<!-- tahun_ajaran -->
								<div class="form-group">
									<label for="tahun_ajaran">Tahun Ajaran</label>
									<input type="date" name="tahun_ajaran" class="form-control" id="tahun_ajaran" value="<?= set_value('tahun_ajaran'); ?>">
									<small  class="form-text text-danger"><?= form_error('tahun_ajaran'); ?>.</small>
								</div>
							</div>
						</div>

						<hr class="sidebar-divider">

						<div class="form-row mt-2">
							<div class="col">
								<h5>Nilai Pengetahuan</h5>
							</div>
							<div class="col-2"></div>
							<div class="col">
								<h5>Nilai Keterampilan</h5>
							</div>
						</div>
						<div class="card-body" style="padding-right: 2px; padding-left: 2px; background-color: #f8f9fc;">
							<div class="form-row">
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 1</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-5" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 1</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-5" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 2</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-5" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 2</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-5" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul">Nilai Ulangan Harian 1</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-3" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul">Nilai Ulangan Harian 1</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-3" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul">Nilai Ulangan Harian 2</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-3" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul">Nilai Ulangan Harian 2</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-3" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row mt-3">
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul">Nilai UTS</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-3" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul">Nilai UAS</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-3" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
								<div class="col">
									<!-- nilai_akhir_ekskul -->
									<div class="form-group form-inline">
										<label for="nilai_akhir_ekskul">Nilai Sikap</label>
										<input type="number" name="nilai_akhir_ekskul" class="form-control col-4 ml-3" id="nilai_akhir_ekskul" value="<?= set_value('nilai_akhir_ekskul'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_akhir_ekskul'); ?>.</small>
									</div>
								</div>
							</div>

							
						</div>

						<button type="submit" name="tambah" class="btn btn-primary float-right mt-3">Tambah Data</button>
					</form>
					<a href="<?= base_url(); ?>nilaisem" class="btn btn-secondary mt-3">Kembali</a>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


