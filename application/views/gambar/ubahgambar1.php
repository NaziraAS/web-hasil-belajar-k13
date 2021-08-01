<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="card col-md-6 mx-auto mb-4">
			<div class="card-header">
				<h3>Ubah Data Gambar 1</h3>
			</div>
			<div class="card-body">
				<?php echo form_open_multipart('gambar/ubahgambar1/'.$gbr1['id_gambar']); ?>
					<div class="mb-3">
						<?php if(!$gbr1['gambar1'] == null): ?>
							<img width="360px" height="180px" src="<?= base_url(); ?>uploaded/<?= $gbr1['gambar1']; ?>">
						<?php else: ?>
							<img width="360px" height="180px" src="<?= base_url(); ?>/uploaded/nopic.jpg">
						<?php endif ?>
					</div>

					<input type="hidden" name="id_gambar" value="<?= $gbr1['id_gambar']; ?>">
						
					<div class="form-group">
						<!-- <label for="gambar1">Gambar</label> -->
						<input type="file" name="gambar1" class="form-control" id="gambar1">
						<small  class="form-text text-danger"><?= form_error('gambar1'); ?>.</small>
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


