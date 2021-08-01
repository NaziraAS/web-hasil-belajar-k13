const base_url = 'http://localhost/sman1_lasem/';

$(function() {


	$('.tampilModalDetail').on('click', function(){

		const nis = $(this).data('nis');

//CARA 1 with values in index.php
		// const nama_siswa = $(this).data('nama');
		// const tgl_lahir = $(this).data('tgllahir');
		// const username = $(this).data('username');
		// const password = $(this).data('pass');

		// $("#detailSiswaModalLabel").html(nama_siswa);
		// $(".modal-body #tgl_lahir").val(tgl_lahir);
		// $(".modal-body #username").val(username);
		// $(".modal-body #password").val(password);
		// $('#detailSiswaModal').modal('show');

		//title

//CARA 2 with nis & method getSiswaById
		// ajax
		$.ajax({
			url: base_url + 'siswa/detail',
			//nama data : data
			data: {nis : nis},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#detailSiswaModalLabel').html(data.nama_siswa);
				$('#tgl_lahir').val(data.tgl_lahir);
				$('#username').val(data.username);
				$('#password').val(data.password);
			}
		});


	});

	// $('.tampilModalDetailNilaisem').on('click', function(){

	// 	const id_presensi = $(this).data('id');

	// 	// ajax
	// 	$.ajax({
	// 		url: base_url + 'lappres/detail',
	// 		//nama data : data
	// 		data: {nis : nis},
	// 		method: 'POST',
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			// console.log(data);
	// 			$('#detailSiswaModalLabel').html(data.nama_siswa);
	// 			$('#tgl_lahir').val(data.tgl_lahir);
	// 			$('#username').val(data.username);
	// 			$('#password').val(data.password);
	// 		}
	// 	});
	// });

	$('.tampilModalDetailLappres').on('click', function(){

		const nis = $(this).data('nis');

		// ajax
		$.ajax({
			url: base_url + 'nilaisem/detail',
			//nama data : data
			data: {nis : nis},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#detailSiswaModalLabel').html(data.nama_siswa);
				$('#tgl_lahir').val(data.tgl_lahir);
				$('#username').val(data.username);
				$('#password').val(data.password);
			}
		});
	});

	$('.filterJadwal').on('click', function(){
		var kelas = document.getElementById('kelas').value;
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		var hari = document.getElementById('hari').value;
		
		$.ajax({
			url: base_url + 'jadwal/filter',
			data: {hari : hari, semester : semester, kelas : kelas, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td>${index+1}</td>
						<td>${value.nama_mapel}</td>
						<td>${value.nama_pegawai}</td>
						
						<td>${value.jam.slice(0, 5)}</td>
						<td class="px-0" style="width: 12%">
						<a href="<?= base_url(); ?>jadwal/hapus/<?=$j['id_jadwal'] ?>" class="btn btn-danger btn-sm float-right ml-2 tombol-hapus">hapus
						</a>
						<a href="<?= base_url(); ?>jadwal/ubah/<?=$j['id_jadwal'] ?>" class="btn btn-success btn-sm float-right ml-2">ubah
						</a>

						</td>
						</tr>`);
				});
			}
		});
	});

	$('.filterNilaiEkskul').on('click', function(){
		var kelas = document.getElementById('kelas').value;
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'nilaieks/filter',
			data: {kelas : kelas, semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td>${index+1}</td>
						<td>${value.nis}</td>
						<td>${value.nama_siswa}</td>
						<td>${value.nama_ekskul}</td>
						<td>${value.nilai_akhir_ekskul}</td>
						<td>${value.deskripsi_nilai}</td>
						<td class="px-0">
						<a href="hapus/${value.id_nilai_ekstrakulikulers}" class="btn btn-danger float-right ml-2 tombol-hapus">hapus
						</a>
						<a href="ubah/${value.id_nilai_ekstrakulikulers}" class="btn btn-success float-right ml-2">ubah
						</a>
						</td>
						</tr>`);
				});
			}
		});
	});

	$('.filterPresensi').on('click', function(){
		var kelas = document.getElementById('kelas').value;
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'presensi/filter',
			data: {kelas : kelas, semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td>${index+1}</td>
						<td>${value.nama_siswa}</td>
						<td>${value.tgl_presensi}</td>
						<td>${value.status}</td>
						<td class="px-0">
						<a href="hapus/${value.id_presensi}" class="btn btn-danger float-right ml-2 tombol-hapus">hapus
						</a>
						<a href="ubah/${value.id_presensi}" class="btn btn-success float-right ml-2">ubah
						</a>
						</td>
						</tr>`);
				});
			}
		});
	});

	$('.filterNilaiSemester').on('click', function(){
		var kelas = document.getElementById('kelas').value;
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'nilaisem/filter',
			data: {kelas : kelas, semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nis}</td>
						<td>${value.nama_siswa}</td>
						<td class="px-0">
						<a href="<?= base_url(); ?>nilaisem/hapus/${value.nis}"
						class="btn btn-sm btn-danger float-right btn-sm ml-2 tombol-hapus"
						>hapus
						</a>
						<a href="<?= base_url(); ?>nilaisem/ubah/${value.nis}" 
						class="btn btn-sm btn-success float-right btn-sm ml-2"
						>ubah
						</a>
						<a href="<?= base_url(); ?>nilaisem/detail/${value.nis}" class="btn btn-secondary float-right btn-sm ml-2">detail
						</a>

						</td>
						</tr>`);
				});
			}
		});
	});


	//filterLaporanPegawai
	$('.filterLaporanPegawai').on('click', function(){
		var level = document.getElementById('level').value;
		
		$.ajax({
			url: base_url + 'lappegawai/filter',

			data: {level : level},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nip}</td>
						<td>${value.nama_pegawai}</td>
						<td>${value.no_hp}</td>
						<td class="px-0">
						</tr>`);
				});
			}
		});
	});

	//filterLaporanSiswa
	$('.filterLaporanSiswa').on('click', function(){
		var nama_kelas = document.getElementById('nama_kelas').value;
		
		$.ajax({
			url: base_url + 'lapsiswa/filter',

			data: {nama_kelas : nama_kelas},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nis}</td>
						<td>${value.nama_siswa}</td>
						<td>${value.jenis_kelamin}</td>
						<td>${value.tgl_lahir}</td>
						<td>${value.alamat}</td>
						</tr>`);
				});
			}
		});
	});

	//filterLaporanJadwal
	$('.filterLaporanJadwal').on('click', function(){
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'lapjadwal/filter',

			data: {semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nama_mapel}</td>
						<td>${value.hari}</td>
						<td>${value.jam}</td>
						<td>${value.nama_kelas}</td>
						<td>${value.nama_pegawai}</td>
						</tr>`);
				});
			}
		});
	});

	//filterLaporanPresensi
	$('.filterLaporanPresensi').on('click', function(){
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'lappres/filter',

			data: {semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.tgl_presensi}</td>
						<td>${value.nama_kelas}</td>
						<td>${value.jumlah_siswa}</td>
						<td class="px-0" style="width: 12%">
						<a href="<?= base_url(); ?>lappres/detail/${value.id_presensi}" class="btn btn-secondary btn-sm ml-2">detail
						</a>

						</td>
						</tr>`);
				});
			}
		});
	});

	//filterLaporanDetPresensi
	$('.filterLaporanDetPresensi').on('click', function(){
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'lappres/detfilter',

			data: {semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nis}</td>
						<td>${value.nama_siswa}</td>
						<td>${value.status}</td>
						</tr>`);
				});
			}
		});
	});

	//filterLaporanLapnilaisem
	$('.filterLaporanLapnilaisem').on('click', function(){
		var nis = document.getElementById('nis').value;
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'lapnilaisem/filter',

			data: {nis : nis, semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nama_mapel}</td>
						<td>${value.nilai_pengetahuan}</td>
						<td>${value.konversi_nilai_pengetahuan}</td>
						<td>${value.nilai_keterampilan}</td>
						<td>${value.konversi_nilai_keterampilan}</td>
						<td>${value.nilai_sikap}</td>
						</tr>`);
				});
			}
		});
	});

	//filterLaporanLapnilaisemkelas
	$('.filterLaporanLapnilaisemkelas').on('click', function(){
		var id_kelas = document.getElementById('nama_kelas').value;
		var id_mapel = document.getElementById('nama_mapel').value;
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'lapnilaisemkelas/filter',

			data: {id_kelas : id_kelas, id_mapel : id_mapel, semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nis}</td>
						<td>${value.nama_siswa}</td>
						<td>${value.nama_mapel}</td>
						<td>${value.nilai_pengetahuan}</td>
						<td>${value.konversi_nilai_pengetahuan}</td>
						<td>${value.nilai_keterampilan}</td>
						<td>${value.konversi_nilai_keterampilan}</td>
						<td>${value.nilai_sikap}</td>
						</tr>`);
				});
			}
		});
	});

	//filterLaporanLapnilaieks
	$('.filterLaporanLapnilaieks').on('click', function(){
		var id_kelas = document.getElementById('nama_kelas').value;
		var semester = document.getElementById('semester').value;
		var tahun_ajaran = document.getElementById('tahun_ajaran').value;
		
		$.ajax({
			url: base_url + 'lapnilaieks/filter',

			data: {id_kelas : id_kelas, semester : semester, tahun_ajaran : tahun_ajaran},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('tbody').empty();

				$.each(data, function(index, value) {
					$('tbody').append(`<tr style="text-align: center;">
						<td><b>${index+1}</b></td>
						<td>${value.nama_siswa}</td>
						<td>${value.nama_ekskul}</td>
						<td>${value.nilai_akhir_ekskul}</td>
						</tr>`);
				});
			}
		});
	});

});


//////////////////////////////on Change
//input NilaiEks
function showNamaSiswa() {
	var nis = document.getElementById("nis").value;
	// console.log(nis);
	$.ajax({
		url: base_url + 'nilaieks/getNamaSiswa',
		data: {nis : nis},
		method: 'POST',
		dataType: 'json',
		success: function(data) {
			// console.log(data);
			$('#nama_siswa').val(data.nama_siswa);
		}
	});
};

////////////FILTER CETAK
function filterCetakPegawai() {
	var level = document.getElementById("level").value;
	
	// $("a").attr("href", base_url + "lappegawai/cetak/" + level);
	$(".href-lappegawai").attr("href", base_url + "lappegawai/cetak/" + level);
}

function filterCetakSiswa() {
	var nama_kelas = document.getElementById("nama_kelas").value;
	// console.log(level);
	$(".store-filterLapsiswa").val(nama_kelas);
	// $("a").attr("href", base_url + "lapsiswa/cetak/" + nama_kelas);
	$(".href-lapsiswa").attr("href", base_url + "lapsiswa/cetak/" + nama_kelas);
}

function filterCetakJadwal() {
	var semester = document.getElementById("semester").value;
	var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	
	// $("a").attr("href", base_url + "lapjadwal/cetak/" + semester + "_" + tahun_ajaran);
	$(".href-lapjadwal").attr("href", base_url + "lapjadwal/cetak/" + semester + "_" + tahun_ajaran);
}

function filterCetakPresensi() {
	var semester = document.getElementById("semester").value;
	var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	
	// $("a").attr("href", base_url + "lappres/cetak/" + semester + "_" + tahun_ajaran);
	$(".href-lappres").attr("href", base_url + "lappres/cetak/" + semester + "_" + tahun_ajaran);
	
}

// function filterCetakLapnnilaisem() {
// 	var kelas = document.getElementById("kelas").value;
// 	var semester = document.getElementById("semester").value;
// 	var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	
// 	$("a").attr("href", base_url + "lappres/cetak/" + semester + "_" + tahun_ajaran);
// 	// $("a[href='http://lappegawai']").attr('href', base_url + 'lappegawai/cetak/' + level);
// }

function filterCetakLapnnilaisem() {
	var nis = document.getElementById("nis").value;
	var semester = document.getElementById("semester").value;
	var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	
	// $("a").attr("href", base_url + "lapnilaisem/cetak/" + nis + "_" + semester + "_" + tahun_ajaran);
	$(".href-lapnilaisem").attr("href", base_url + "lapnilaisem/cetak/" + nis + "_" + semester + "_" + tahun_ajaran);
	
}

function filterCetakLapnnilaisemKelas() {
	var id_kelas = document.getElementById("nama_kelas").value;
	var id_mapel = document.getElementById("nama_mapel").value;
	var semester = document.getElementById("semester").value;
	var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	
	// $("a").attr("href", base_url + "lapnilaisemkelas/cetak/" + id_kelas + "_" + id_mapel + "_" + semester + "_" + tahun_ajaran);
	$(".href-lapnilaisemkelas").attr('href', base_url + 'lapnilaisemkelas/cetak/' + id_kelas + "_" + id_mapel + "_" + semester + "_" + tahun_ajaran);
	
	// $(".href-lapnilaisemkelas").attr('href', 'http://maps.com/');
}

function filterCetakLapnilaieks() {
	var id_kelas = document.getElementById("nama_kelas").value;
	var semester = document.getElementById("semester").value;
	var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	
	// $("a").attr("href", base_url + "lapnilaieks/cetak/" + id_kelas + "_" + semester + "_" + tahun_ajaran);
	$(".href-lapnilaieks").attr("href", base_url + "lapnilaieks/cetak/" + id_kelas + "_" + semester + "_" + tahun_ajaran);
	
}

//get guru input/ubah jadwal
function getNamaGuru() {
	var nama_mapel_asId = document.getElementById("nama_mapel").value;

	$.ajax({
		url: base_url + 'jadwal/getGuruByIdMapel',
		data: {id_mapel : nama_mapel_asId},
		method: 'post',
		dataType: 'json',
		success: function(data){
				// console.log(data);
				// console.log(data.length);

				var len = data.length;

				$("#nama_pegawai").empty();
                // $("#nama_pegawai").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var id_pegawai = data[i]['id_pegawai'];
                	var nama_pegawai = data[i]['nama_pegawai'];

                	$("#nama_pegawai").append("<option value='"+id_pegawai+"'>"+nama_pegawai+"</option>");
                }
            }
        });
}


	///////////////////////////////on Load
	//CETAK
	//lappegawai
	$(document).ready(function(){
		var level = document.getElementById("level").value;
		$(".store-filterLappegawai").val(level);
		$("a[href='http://lappegawai']").attr('href', base_url + 'lappegawai/cetak/' + level);
	});

	//lapsiswa
	$(document).ready(function(){
		var nama_kelas = document.getElementById("nama_kelas").value;
		$(".store-filterLapsiswa").val(nama_kelas);
		$("a[href='http://lapsiswa']").attr('href', base_url + 'lapsiswa/cetak/' + nama_kelas);
	});

	//lapjadwal
	$(document).ready(function(){
		var semester = document.getElementById("semester").value;
		var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	// $(".store-filterLappegawai").val(semester);
	$("a[href='http://lapjadwal']").attr('href', base_url + 'lapjadwal/cetak/' + semester + "_" + tahun_ajaran);
	});

	//lappres
	$(document).ready(function(){
		var semester = document.getElementById("semester").value;
		var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	// $(".store-filterLappegawai").val(semester);
	$("a[href='http://lappres']").attr('href', base_url + 'lappres/cetak/' + semester + "_" + tahun_ajaran);
	});

	//lapnilaisem
	$(document).ready(function(){
		var nis = document.getElementById("nis").value;
		var semester = document.getElementById("semester").value;
		var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	// $(".store-filterLappegawai").val(semester);
	$("a[href='http://lapnilaisem']").attr('href', base_url + 'lapnilaisem/cetak/' + nis + "_" + semester + "_" + tahun_ajaran);
	});

	//lapnilaisemkelas
	$(document).ready(function(){
		var id_kelas = document.getElementById("nama_kelas").value;
		var id_mapel = document.getElementById("nama_mapel").value;
		var semester = document.getElementById("semester").value;
		var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	$("a[href='http://lapnilaisemkelas']").attr('href', base_url + 'lapnilaisemkelas/cetak/' + id_kelas + "_" + id_mapel + "_" + semester + "_" + tahun_ajaran);
	});

	//lapnilaieks
	$(document).ready(function(){
		var id_kelas = document.getElementById("nama_kelas").value;
		var semester = document.getElementById("semester").value;
		var tahun_ajaran = document.getElementById("tahun_ajaran").value;
	// $(".store-filterLappegawai").val(semester);
	$("a[href='http://lapnilaieks']").attr('href', base_url + 'lapnilaieks/cetak/' + id_kelas + "_" + semester + "_" + tahun_ajaran);
	});

	// //detlappres
	// $(document).ready(function(){
	// var id_presensi = document.getElementById("id_presensi").value;
	// // $(".store-filterLappegawai").val(semester);
	// // $("a[href='http://detlappres']").attr('href', base_url + 'detlappres/detcetak/' + semester + "_" + tahun_ajaran);
	// $("a[href='http://lappres']").attr('href', base_url + 'lappres/detcetak/' + id_presensi );
	// });



	$(document).ready(function(){
	//dataTable_filter
	$(".dataTables_filter").addClass("float-right");
	//text body color
	$(".form-group").addClass("text-dark");
	$(".table").addClass("text-dark");


	//input NilaiEks
	//NIS dropdown by nama_kelas
	$(".inputKelasNilaiEks").change(function(){
		var nama_kelas = document.getElementById("nama_kelas").value;
		// console.log(nama_kelas);

		$.ajax({
			url: base_url + 'nilaieks/getListNis',
			data: {nama_kelas : nama_kelas},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				console.log("NILAI EKS: "+data);
				// console.log(data.length);
				var len = data.length;

				$("#nis").empty();
                // $("#nis").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var nis = data[i]['nis'];
                    // var nama_siswa = data[i]['nama_siswa'];
                    
                    $("#nis").append("<option value='"+nis+"'>"+nis+"</option>");
                }

                showNamaSiswa();
            }
        });
	});

	// ubah NilaiEks
	//NIS dropdown by nama_kelas
	$(".inputKelasNilaiEks").ready(function(){
		var nama_kelas = document.getElementById("nama_kelas").value;
		// console.log(nama_kelas);

		$.ajax({
			url: base_url + 'nilaieks/getListNis',
			data: {nama_kelas : nama_kelas},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				var len = data.length;

				$("#nis").empty();
                // $("#nis").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var nis = data[i]['nis'];
                    // var nama_siswa = data[i]['nama_siswa'];
                    
                    $("#nis").append("<option value='"+nis+"'>"+nis+"</option>");
                }

                showNamaSiswa();
            }
        });
	});

	//get guru, ubah jadwal/ubah mapel
	$(".idMapelUbahJadwal").ready(function(){
		var id_mapel = document.getElementById("id_mapel").value;

		$.ajax({
			url: base_url + 'jadwal/getGuruByIdMapel',
			data: {id_mapel : id_mapel},
			method: 'post',
			dataType: 'json',
			success: function(data){
				console.log("ubah guru onload");
				// console.log(data);
				// console.log(data.length);

				var len = data.length;

				$("#nama_pegawai").empty();
                // $("#nama_pegawai").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var nama_pegawai = data[i]['nama_pegawai'];
                    // var nama_siswa = data[i]['nama_siswa'];

                    $("#nama_pegawai").append("<option value='"+nama_pegawai+"'>"+nama_pegawai+"</option>");
                }
            }
        });
		// $(".store-filterLapsiswa").val(nama_kelas);
	});

	//ubah guru, ubahjadwal onChange
	$(".namaMapelUbahJadwal").change(function(){
		var nama_mapel_asId = document.getElementById("nama_mapel").value;
		console.log(nama_mapel_asId);

		$.ajax({
			url: base_url + 'jadwal/getGuruByIdMapel',
			data: {id_mapel : nama_mapel_asId},
			method: 'post',
			dataType: 'json',
			success: function(data){
				console.log("ubah guru onChange");
				// console.log(data.length);

				var len = data.length;

				$("#nama_pegawai").empty();
                // $("#nama_pegawai").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var nama_pegawai = data[i]['nama_pegawai'];
                    // var nama_siswa = data[i]['nama_siswa'];

                    $("#nama_pegawai").append("<option value='"+nama_pegawai+"'>"+nama_pegawai+"</option>");
                }
            }
        });
	});

	//listNama Pegawai Ubah Jadwal
	$(".namaMapelInputJadwal").change(function(){
		var nama_mapel_asId = document.getElementById("nama_mapel").value;

		$.ajax({
			url: base_url + 'jadwal/getGuruByIdMapel',
			data: {id_mapel : nama_mapel_asId},
			method: 'post',
			dataType: 'json',
			success: function(data){
				// console.log(data);
				// console.log(data.length);

				var len = data.length;

				$("#nama_pegawai").empty();
                // $("#nama_pegawai").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var id_pegawai = data[i]['id_pegawai'];
                	var nama_pegawai = data[i]['nama_pegawai'];

                	$("#nama_pegawai").append("<option value='"+id_pegawai+"'>"+nama_pegawai+"</option>");
                }
            }
        });
	});

	//laporan//
	$(".lapnilaisemNamaKelas").change(function(){
		var id_kelas = document.getElementById("nama_kelas").value;

		$.ajax({
			url: base_url + 'lapnilaisem/getNisByIdKelas',
			data: {id_kelas : id_kelas},
			method: 'post',
			dataType: 'json',
			success: function(data){
				console.log(data);
				// console.log(data.length);

				var len = data.length;

				$("#nis").empty();
				$("#nama_siswa").empty();
                // $("#nama_pegawai").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var nis = data[i]['nis'];
                	var nama_siswa = data[i]['nama_siswa'];

                	$("#nis").append("<option value='"+nis+"'>"+nis+"</option>");
                	$("#nama_siswa").append("<option value='"+nis+"'>"+nama_siswa+"</option>");
                }
                // showNamaSiswa();
            }
        });
	});

	$(".lapnilaisemNis").change(function(){
		var nis = document.getElementById("nis").value;

		$.ajax({
			url: base_url + 'lapnilaisem/getNamaSiswaByNis',
			data: {nis : nis},
			method: 'post',
			dataType: 'json',
			success: function(data){
				console.log(data);
				// console.log(data.length);

				var len = data.length;

				$("#nama_siswa").empty();
                // $("#nama_pegawai").append("<option value=''>"'-Pilih-'"</option>");
                for( var i = 0; i<len; i++){
                	var nama_siswa = data[i]['nama_siswa'];

                	$("#nama_siswa").append("<option value='"+nis+"'>"+nama_siswa+"</option>");
                }
                // showNamaSiswa();
            }
        });
	});

});