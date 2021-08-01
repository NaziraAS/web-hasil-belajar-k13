<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
	</div>

	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->


	<!-- Update Admin Data -->
	<!-- tombol tambah -->
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>coffeeshop/tambah" class="btn btn-primary">Tambah Data Coffeeshop</a>
		</div>
	</div>

	<!-- new table -->
	<div class="row mt-3">
		<div class="col-lg">

			<table class="table table-hover">
				<thead class="thead-dark">
					<tr style="text-align: left;">
						<th scope="col">No</th>
						<th scope="col">Nama Coffeeshop</th>
						<th scope="col">Alamat</th>
						<th scope="col">Jam Buka</th>
						<th scope="col">Jam Tutup</th>
						<th scope="col">Gambar</th>
						<th scope="col" style="padding-left: 150px;">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<!-- nomor -->
					<?php $i = 1; ?>
					<!-- looping -->
					<?php foreach ($cfe as $c) : ?>
						<tr style="text-align: left;">
							<th scope="row"><?= $i ?></th>
							<td><?= $c['nama_coffee_shop']; ?></td>
							<td><?= $c['alamat']; ?></td>
							<td><?= $c['jam_buka']; ?></td>
							<td><?= $c['jam_tutup']; ?></td>
							<td>
								<div class="col-mx-auto">
									<img width="140px" height="100px" src="<?= base_url(); ?>uploaded/<?= $c['gambar1']; ?>" alt="image">
								</div>
							</td>
							<td class="px-0">
								<a href="<?= base_url(); ?>coffeeshop/hapus/<?=$c['id_coffee_shop'] ?>" class="btn btn-danger float-right ml-2 tombol-hapus">hapus
								</a>
								<a href="<?= base_url(); ?>coffeeshop/ubah/<?=$c['id_coffee_shop'] ?>" class="btn btn-success float-right ml-2">ubah
								</a>
								<a href="<?= base_url(); ?>coffeeshop/detail/<?=$c['id_coffee_shop'] ?>" class="btn btn-secondary float-right ml-2">detail
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


