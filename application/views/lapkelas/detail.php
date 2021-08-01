<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-6 mx-auto">
				<div class="card-header mt-2">
					<h3><?= $adm['nama_admin']; ?></h3>
				</div>
				<div class="card-body">
					
					<!-- <h5 class="card-title mb-2"><?= $adm['nama_admin']; ?></h5> -->
					<p class="card-text text-muted"><strong>Nomor Hp: </strong><?= $adm['no_telp']; ?></p>
					<p class="card-text text-muted"><strong>Username: </strong><?= $adm['username']; ?></p>
					<p class="card-text text-muted"><strong>Password: </strong>*******</p>
					<a href="<?= base_url(); ?>admin" class="btn btn-primary mb-2">Kembali</a>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


