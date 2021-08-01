<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-5 mx-auto mb-4">
				<div class="card-header mt-2">
					<h4>Ubah Data Gambar <?= $gbr['nama_coffee_shop']; ?></h4>
					<!-- <?= var_dump($gbr); ?> -->
				</div>
				<div class="card-body mx-auto">
					
					<form action="" method="post">
						<!-- hidden id_gambar -->

						<input type="hidden" name="id_gambar" value="<?= $gbr['id_gambar']; ?>">
						<!-- nama -->
						<table class="col-md-4">
							<tr>
								<td>
									<?php if(!$gbr['gambar1'] == null): ?>
									<img width="360px" height="220px" src="<?= base_url(); ?>uploaded/<?= $gbr['gambar1']; ?>">
									<?php else: ?>
										<img width="360px" height="220px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
									<?php endif ?>
								</td>
								<td align="float-right">
									<a href="<?= base_url(); ?>gambar/ubahgambar1/<?=$gbr['id_gambar'] ?>" class="btn btn-success float-right ml-3">ubah
								</td>
							</tr>
							<tr>
								<td>
									<?php if(!$gbr['gambar2'] == null): ?>
									<img width="360px" height="220px" src="<?= base_url(); ?>uploaded/<?= $gbr['gambar2']; ?>">
									<?php else: ?>
										<img width="360px" height="220px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
									<?php endif ?>
								</td>
								<td>
									<a href="<?= base_url(); ?>gambar/ubahgambar2/<?=$gbr['id_gambar'] ?>" class="btn btn-success float-right ml-2">ubah
								</td>
							</tr>
							<tr>
								<td>
									<?php if(!$gbr['gambar3'] == null): ?>
									<img width="360px" height="220px" src="<?= base_url(); ?>uploaded/<?= $gbr['gambar3']; ?>">
									<?php else: ?>
										<img width="360px" height="220px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
									<?php endif ?>
								</td>
								<td>
									<a href="<?= base_url(); ?>gambar/ubahgambar3/<?=$gbr['id_gambar'] ?>" class="btn btn-success float-right ml-2">ubah
								</td>
							</tr>
							<tr>
								<td>
									<?php if(!$gbr['gambar4'] == null): ?>
									<img width="360px" height="220px" src="<?= base_url(); ?>uploaded/<?= $gbr['gambar4']; ?>">
									<?php else: ?>
										<img width="360px" height="220px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
									<?php endif ?>
								</td>
								<td>
									<a href="<?= base_url(); ?>gambar/ubahgambar4/<?=$gbr['id_gambar'] ?>" class="btn btn-success float-right ml-2">ubah
								</td>
							</tr>
						</table>
						
						<a href="<?= base_url(); ?>gambar/" class="btn btn-secondary mt-3">Kembali</a>
					</form>
				</div>
			</div>


			

		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


