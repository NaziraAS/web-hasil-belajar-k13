<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-9">

			<!-- <?= var_dump($_POST);
			var_dump($_FILES); 
			?> -->

			<!-- form CI -->
			<div class="card col-md-7 mx-auto mb-4">
				<!-- <div class="card-header">
					<h3>Tambah Data Coffeeshop</h3>
				</div> -->
				<div class="card-body">
					
					<!-- <?php echo form_open_multipart('coffeeshop/tambah'); ?> -->
					<form action="" method="post">
						<input type="hidden" name="id_coffee_shop" value="<?= $coff['id_coffee_shop']; ?>">
						<!-- nama -->
						<div class="form-group">
							<label for="nama_coffeeshop">Nama Coffeeshop</label>
							<input type="text" name="nama_coffeeshop" class="form-control col-md-7" id="nama_coffeeshop" value="<?= $coff['nama_coffee_shop']; ?>">
							<small  class="form-text text-danger"><?= form_error('nama_coffeeshop'); ?>.</small>
						</div>
						
						<!-- alamat -->
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" class="form-control" id="alamat" value="<?= $coff['alamat']; ?>">
							<small  class="form-text text-danger"><?= form_error('alamat'); ?>.</small>
						</div>

						<!-- jambuka -->
						<div class="form-group">
							<label for="jam_buka">Jam Buka</label>
							<input type="time" name="jam_buka" class="form-control" id="jam_buka" value="<?= $coff['jam_buka']; ?>"></input>
							<small  class="form-text text-danger"><?= form_error('jam_buka'); ?>.</small>
						</div>
						<!-- jamtutup -->
						<div class="form-group">
							<label for="jam_tutup">Jam Tutup</label>
							<input type="time" name="jam_tutup" class="form-control" id="jam_tutup" value="<?= $coff['jam_tutup']; ?>"></input>
							<small  class="form-text text-danger"><?= form_error('jam_tutup'); ?>.</small>
						</div>
						<!-- fas -->
						<div class="form-group">
							<label for="fasilitas">Fasilitas</label>
							<textarea rows="9" type="fasilitas" name="fasilitas" class="form-control" id="fasilitas"><?= $coff['fasilitas']; ?></textarea>
							<small  class="form-text text-danger"><?= form_error('fasilitas'); ?>.</small>
						</div>

						<!-- min -->
						<div class="form-group">
							<label for="harga_menu_min">Harga menu minimal</label>
							<input type="text" name="harga_menu_min" class="form-control col-md-7" id="harga_menu_min" value="<?= $coff['harga_menu_min']; ?>">
							<small  class="form-text text-danger"><?= form_error('harga_menu_min'); ?>.</small>
						</div>

						<!-- max -->
						<div class="form-group">
							<label for="harga_menu_max">Harga menu maksimal</label>
							<input type="text" name="harga_menu_max" class="form-control col-md-7" id="harga_menu_max" value="<?= $coff['harga_menu_max']; ?>">
							<small  class="form-text text-danger"><?= form_error('harga_menu_max'); ?>.</small>
						</div>

						<!-- lat -->
						<div class="form-group">
							<label for="lattitude">Lattitude</label>
							<input type="text" name="lattitude" class="form-control col-md-7" id="lattitude" value="<?= $coff['lattitude']; ?>">
							<small  class="form-text text-danger"><?= form_error('lattitude'); ?>.</small>
						</div>
						<!-- long -->
						<div class="form-group">
							<label for="longitude">Longitude</label>
							<input type="text" name="longitude" class="form-control col-md-7" id="longitude" value="<?= $coff['longitude']; ?>">
							<small  class="form-text text-danger"><?= form_error('longitude'); ?>.</small>
						</div>

						<!-- gambar1 -->
						<!-- <div class="form-group">
							<label for="gambar1">Gambar 1</label>
							<input type="file" name="gambar1" class="form-control col-md-7" id="gambar1">
							<small  class="form-text text-danger"><?= form_error('gambar1'); ?>.</small>
						</div> -->


						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
					<!-- <?php echo form_close(); ?> -->
				</div>
			</div>




		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


