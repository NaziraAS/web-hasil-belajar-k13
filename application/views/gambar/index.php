<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
	</div>

	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->


	<!-- Update Admin Data -->
	<!-- tombol tambah -->
	<!-- <div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>admin/tambah" class="btn btn-primary">Tambah Data Admin</a>
		</div>
	</div> -->

	<!-- new table -->
	<div class="row mt-3">
		<div class="col-lg">

			<table class="table table-hover">
				<thead class="thead-dark">
					<tr style="text-align: center; ;">
						<th scope="col">No</th>
						<!-- <th scope="col">Id Gambar</th> -->
						<th scope="col">Gambar 1</th>
						<th scope="col">Gambar 2</th>
						<th scope="col">Gambar 3</th>
						<th scope="col">Gambar 4</th>
						<th scope="col">Coffee Shop</th>
						
						<!-- <th scope="col">Digunakan</th> -->
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<!-- nomor -->
					<?php $i = 1; ?>
					<!-- looping -->
					<?php foreach ($gbr as $g) : ?>
						<tr style="text-align: center;" >
							<th scope="row"><?= $i ?></th>
							<!-- <td><?= $g['id_gambar']; ?></td>  -->
							<td>
								<!-- <div class="col-md-4"> -->
									<?php if(!$g['gambar1'] == null): ?>
										<img width="140px" height="100px" src="<?= base_url(); ?>uploaded/<?= $g['gambar1']; ?>">
										<?php else: ?>
											<img width="140px" height="100px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
										<?php endif ?>
									<!-- </div> -->
								</td>
								<td>
									<!-- <div class="col-md-4"> -->
										<?php if(!$g['gambar2'] == null): ?>
											<img width="140px" height="100px" src="<?= base_url(); ?>uploaded/<?= $g['gambar2']; ?>">
											<?php else: ?>
												<img width="140px" height="100px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
											<?php endif ?>
										<!-- </div> -->
									</td>
									<td>
										<!-- <div class="col-md-4"> -->
											<?php if(!$g['gambar3'] == null): ?>
												<img width="140px" height="100px" src="<?= base_url(); ?>uploaded/<?= $g['gambar3']; ?>">
												<?php else: ?>
													<img width="140px" height="100px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
												<?php endif ?>
											<!-- </div> -->
										</td>
									<td>
										<!-- <div class="col-md-4"> -->
											<?php if(!$g['gambar4'] == null): ?>
												<img width="140px" height="100px" src="<?= base_url(); ?>uploaded/<?= $g['gambar4']; ?>">
												<?php else: ?>
													<img width="140px" height="100px" src="<?= base_url(); ?>/uploaded/nopic/nopic.jpg">
												<?php endif ?>
											<!-- </div> -->
										</td>
										<td><?= $g['nama_coffee_shop']; ?></td>
										
										<td>
											<!-- <a href="<?= base_url(); ?>gambar/hapus/<?=$g['id_gambar'] ?>" class="btn btn-danger float-right ml-2 tombol-hapus">hapus -->
											<!-- </a> -->
											<a href="<?= base_url(); ?>gambar/detail/<?=$g['id_gambar'] ?>" class="btn btn-secondary ml-2">detail
											</a>
											<a href="<?= base_url(); ?>gambar/ubah/<?=$g['id_gambar'] ?>" class="btn btn-success ml-2">ubah
											</a>
										</td>
									</tr>
									<?php $i++; ?>
								<?php endforeach; ?>

							</tbody>
			</table>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


