<!-- Begin Page Content -->
<div class="container-fluid mr-auto">
	<!-- style="background-image: url(<?= base_url(); ?>assets/img/spikes.png);" -->
	<!-- Main Content -->
	<div class="container ">

		<h5 class="mt-4">Selamat Datang, <?= $this->session->userdata['username']; ?></h5>
		<div class="col-lg mt-2" style="text-align: center; font-family: sans-serif; ">
			<h3><br><b>NILAI RAPORT SMP NEGERI 3 SATU ATAP TALIABU BARAT LIMBO</b></h3>
		</div>
		<div class="container col-4 mb-4">
			<!-- <img class="rounded-circle img-fluid" width="360px" height="360px" src="<?= base_url('/assets/img/'); ?>sma.jpg"> -->
		</div>

	</div>
	<!-- End of Main Content -->
	<div class="container">
		<div class="row mt-2">
			<div class="col-lg">

				<table class="table table-hover table-bordered">
					<thead class="thead-dark">
						<tr style="text-align: center;">
							<th scope="col" rowspan="2" style="vertical-align: middle;">No</th>
							<th scope="col" rowspan="2" style="vertical-align: middle;">Mata Pelajaran</th>
							<th scope="col" colspan="2">Pengetahuan</th>
							<th scope="col" colspan="2">Keterampilan</th>
							<th scope="col" rowspan="2" style="vertical-align: middle;">Sikap</th>
						</tr>
						<tr style="text-align: center;">
							<th scope="col">Nilai</th>
							<th scope="col">Huruf</th>
							<th scope="col">Nilai</th>
							<th scope="col">Huruf</th>
						</tr>
					</thead>
					<tbody class="bg-light">
						<!-- nomor -->
						<?php $no = 1; ?>
						<!-- looping -->
						<?php foreach ($nilai as $n) : ?>
							<tr style="text-align: center;">
								<th scope="row"><?= $no ?></th>
								<td><?= $n['nama_mapel'] ?></td>
								<td><?= $n['nilai_pengetahuan'] ?></td>
								<td><?= $n['konversi_nilai_pengetahuan'] ?></td>
								<td><?= $n['nilai_keterampilan'] ?></td>
								<td><?= $n['konversi_nilai_keterampilan'] ?></td>
								<td><?= $n['nilai_sikap'] ?></td>
							<?php $no++;
						endforeach; ?>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<style>
	.back-image {
		background-image: url('./assets/img/sma.jpg');
		background-repeat: no-repeat;
		background-position: center;
		background-position-y: 20px;
		/* background-blend-mode: overlay; */
	}
</style>