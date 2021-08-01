<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="card col-md-6 mx-auto mb-4">
			<div class="card-header">
				<h3>Ubah Data Gambar 4</h3>
			</div>
			<div class="card-body">
				<?php echo form_open_multipart('gambar/ubahgambar4/'.$gbr4['id_gambar']); ?>
					<div class="mb-3">
						<?php if(!$gbr4['gambar4'] == null): ?>
							<img width="360px" height="180px" src="<?= base_url(); ?>uploaded/<?= $gbr4['gambar4']; ?>">
						<?php else: ?>
							<img width="360px" height="180px" src="<?= base_url(); ?>/uploaded/nopic.jpg">
						<?php endif ?>
					</div>

					<input type="hidden" name="id_gambar" value="<?= $gbr4['id_gambar']; ?>">
						
					<div class="form-group">
						<!-- <label for="gambar4">Gambar</label> -->
						<input type="file" name="gambar4" class="form-control" id="gambar4">
						<small  class="form-text text-danger"><?= form_error('gambar4'); ?>.</small>
					</div>

					<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


