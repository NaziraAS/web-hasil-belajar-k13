<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- <?= var_dump($cfe); ?>  -->
			
			<div class="card col-md-8 mx-auto mb-4">
				<div class="card-header mt-2">
					<h3>Coffeeshop <?= $cfe['nama_coffee_shop']; ?></h3>
				</div>
				<div class="card-body">
					<!-- <h5 class="card-title mb-2"><?= $cfe['nama_coffee_shop']; ?></h5> -->
					<table class="col-md-12">
						<tr>
							<td><b>Alamat</b></td>
							<td><?= $cfe['alamat']; ?></td>
						</tr>
						<tr>
							<td><b>Jam Buka</b></td>
							<td><?= $cfe['jam_buka']; ?></td>
						</tr>
						<tr>
							<td><b>Jam Tutup</b></td>
							<td><?= $cfe['jam_tutup']; ?></td>
						</tr>
						<tr>
							<td><b>Fasilitas</b></td>
							<td><?= $cfe['fasilitas']; ?></td>
						</tr>
						<tr>
							<td><b>Harga menu min</b></td>
							<td>Rp. <?= $cfe['harga_menu_min']; ?> ,-</td>
						</tr>
						<tr>
							<td><b>Harga menu max</b></td>
							<td>Rp. <?= $cfe['harga_menu_max']; ?> ,-</td>
						</tr>
						<tr>
							<td><b>Lattitude</b></td>
							<td><?= $cfe['lattitude']; ?></td>
						</tr>
						<tr>
							<td><b>Longitude</b></td>
							<td><?= $cfe['longitude']; ?></td>
						</tr>
					</table>

					<table class="justify-content-center">
						<tr>
							<ul class="mt-3">
								<img width="680px" height="420px" src="<?= base_url(); ?>uploaded/<?= $cfe['gambar1']; ?>" alt="gambar1 tidak tersedia..">
							</ul>
							<ul class="mt-3">
								<img width="680px" height="420px" src="<?= base_url(); ?>uploaded/<?= $cfe['gambar2']; ?>" alt="gambar2 tidak tersedia..">
							</ul>
							<ul class="mt-3">
								<img width="680px" height="420px" src="<?= base_url(); ?>uploaded/<?= $cfe['gambar3']; ?>" alt="gambar3 tidak tersedia..">
							</ul>
						</tr>
					</table>


					<!-- button -->
					<a href="<?= base_url(); ?>coffeeshop" class="btn btn-primary mt-3 mb-2">Kembali</a>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


