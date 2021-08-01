<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->

	<!-- <?= var_dump($kls); ?> -->
	<!-- <?= var_dump($_POST); ?> -->

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
										<option value="">-Pilih-</option>
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
										<option value="">-Pilih-</option>
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
										<option value="">-Pilih-</option>
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
									<select type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran">
										<option value="">-Pilih-</option>
										<?php foreach($tahun as $t): ?>
											<option value="<?= $t['tahun_ajaran']; ?>"><?= $t['tahun_ajaran']; ?></option>
										<?php endforeach; ?>
									</select>
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
									<!-- nilai_tugas1_p -->
									<div class="form-group form-inline">
										<label for="nilai_tugas1_p" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 1</label>
										<input type="number" name="nilai_tugas1_p" class="form-control col-4 ml-5" id="nilai_tugas1_p" value="<?= set_value('nilai_tugas1_p'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_tugas1_p'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_tugas1_k -->
									<div class="form-group form-inline">
										<label for="nilai_tugas1_k" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 1</label>
										<input type="number" name="nilai_tugas1_k" class="form-control col-4 ml-5" id="nilai_tugas1_k" value="<?= set_value('nilai_tugas1_k'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_tugas1_k'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nilai_tugas2_p -->
									<div class="form-group form-inline">
										<label for="nilai_tugas2_p" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 2</label>
										<input type="number" name="nilai_tugas2_p" class="form-control col-4 ml-5" id="nilai_tugas2_p" value="<?= set_value('nilai_tugas2_p'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_tugas2_p'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_tugas2_k -->
									<div class="form-group form-inline">
										<label for="nilai_tugas2_k" class="col-5" style="padding-left: 0px; justify-content: left;">Nilai Tugas 2</label>
										<input type="number" name="nilai_tugas2_k" class="form-control col-4 ml-5" id="nilai_tugas2_k" value="<?= set_value('nilai_tugas2_k'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_tugas2_k'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nilai_ulanganH1_p -->
									<div class="form-group form-inline">
										<label for="nilai_ulanganH1_p">Nilai Ulangan Harian 1</label>
										<input type="number" name="nilai_ulanganH1_p" class="form-control col-4 ml-3" id="nilai_ulanganH1_p" value="<?= set_value('nilai_ulanganH1_p'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_ulanganH1_p'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_ulanganH1_k -->
									<div class="form-group form-inline">
										<label for="nilai_ulanganH1_k">Nilai Ulangan Harian 1</label>
										<input type="number" name="nilai_ulanganH1_k" class="form-control col-4 ml-3" id="nilai_ulanganH1_k" value="<?= set_value('nilai_ulanganH1_k'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_ulanganH1_k'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col">
									<!-- nilai_ulanganH2_p -->
									<div class="form-group form-inline">
										<label for="nilai_ulanganH2_p">Nilai Ulangan Harian 2</label>
										<input type="number" name="nilai_ulanganH2_p" class="form-control col-4 ml-3" id="nilai_ulanganH2_p" value="<?= set_value('nilai_ulanganH2_p'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_ulanganH2_p'); ?>.</small>
									</div>
								</div>
								<div class="col-2"></div>
								<div class="col">
									<!-- nilai_ulanganH2_k -->
									<div class="form-group form-inline">
										<label for="nilai_ulanganH2_k">Nilai Ulangan Harian 2</label>
										<input type="number" name="nilai_ulanganH2_k" class="form-control col-4 ml-3" id="nilai_ulanganH2_k" value="<?= set_value('nilai_ulanganH2_k'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_ulanganH2_k'); ?>.</small>
									</div>
								</div>
							</div>

							<div class="form-row mt-3">
								<div class="col">
									<!-- nilai_UTS -->
									<div class="form-group form-inline">
										<label for="nilai_UTS">Nilai UTS</label>
										<input type="number" name="nilai_UTS" class="form-control col-4 ml-3" id="nilai_UTS" value="<?= set_value('nilai_UTS'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_UTS'); ?>.</small>
									</div>
								</div>
								<div class="col">
									<!-- nilai_UAS -->
									<div class="form-group form-inline">
										<label for="nilai_UAS">Nilai UAS</label>
										<input type="number" name="nilai_UAS" class="form-control col-4 ml-3" id="nilai_UAS" value="<?= set_value('nilai_UAS'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_UAS'); ?>.</small>
									</div>
								</div>
								<div class="col">
									<!-- nilai_sikap -->
									<div class="form-group form-inline">
										<label for="nilai_sikap">Nilai Sikap</label>
										<input type="text" name="nilai_sikap" class="form-control col-4 ml-3" id="nilai_sikap" value="<?= set_value('nilai_sikap'); ?>">
										<small  class="form-text text-danger"><?= form_error('nilai_sikap'); ?>.</small>
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


