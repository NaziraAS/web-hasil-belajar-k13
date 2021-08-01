<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<div class="card col-md-6 mx-auto mb-4">
				<div class="card-body">
					
					<table class="col-md-7 mx-auto" style="align-content: center;">
						<tr>
							<ul class="mt-5">
								<?php if(!$gbr['gambar1'] == null) : ?>
									<img width="540px" height="360px" src="<?= base_url(); ?>uploaded/<?= $gbr['gambar1']; ?>">
								<?php else: ?>
									<img width="540px" height="360px" src="<?= base_url(); ?>uploaded/nopic/nopic.jpg">
								<?php endif; ?>
							</ul>
							<ul class="mt-3">
								<?php if(!$gbr['gambar2'] == null): ?>
									<img width="540px" height="360px" src="<?= base_url(); ?>uploaded/<?= $gbr['gambar2']; ?>">
								<?php else: ?>
										<img width="540px" height="360px" src="<?= base_url(); ?>uploaded/nopic/nopic.jpg">
								<?php endif; ?>
							</ul>
							<ul class="mt-3">
								<?php if(!$gbr['gambar3'] == null): ?>
									<img width="540px" height="360px" src="<?= base_url(); ?>uploaded/<?= $gbr['gambar3']; ?>">
								<?php else: ?>
									<img width="540px" height="360px" src="<?= base_url(); ?>uploaded/nopic/nopic.jpg">
								<?php endif; ?>
							</ul>
						</tr>
					</table>
					<!-- button -->
					<a href="<?= base_url(); ?>gambar" class="btn btn-primary mt-3">Kembali</a>

				</div>
			</div>
			
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


