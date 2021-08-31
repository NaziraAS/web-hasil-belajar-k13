const flashData = $('.flash-data').data('flashdata');

if (flashData){
	if (flashData) {

		Swal.fire({
			title: 'Data ',
			text: 'berhasil ' + flashData,
			icon: 'success'
		});
	}
}


// hapus
$('.tombol-hapus').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Hapus?',
		text: "data akan dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'

		// jika dihapus
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

// hapus
$('.tombol-hapus-pegawai').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Hapus?',
		text: "Silakan BACKUP terlebih dahulu data:Nilai Semester dan Mata Pelajaran ini !",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'

		// jika dihapus
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

// hapus
$('.tombol-hapus-siswa').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Hapus?',
		text: "Silakan BACKUP terlebih dahulu data: Nilai Semester dan Mata Pelajaran dari siswa ini !",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'

		// jika dihapus
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

// hapus
$('.tombol-hapus-ekskul').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Hapus?',
		text: "Silakan BACKUP terlebih dahulu data: Nilai Ektrakulikuler dari Ektrakulikuler ini !",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'

		// jika dihapus
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

// hapus
$('.tombol-hapus-kelas').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Hapus?',
		text: "Silakan BACKUP terlebih dahulu data: Siswa, Jadwal, Presensi, Nlai semester dan Nilai Ektrakulikuler dari kelas ini !",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'

		// jika dihapus
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

// tambah Warning
$('.btn-warningTambah').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Akses Terbatas !',
		text: "Anda tidak berhak mengakses fitur ini!",
		icon: 'warning',
		// showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ok'

		// jika dihapus
	})
});

// ubah Warning
$('.btn-warningUbah').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Akses Terbatas !',
		text: "Anda tidak berhak mengakses fitur ini!",
		icon: 'warning',
		// showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ok'

		// jika dihapus
	})
});

// hapus Warning
$('.btn-warningHapus').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Akses Terbatas !',
		text: "Anda tidak berhak mengakses fitur ini!",
		icon: 'warning',
		// showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ok'

		// jika dihapus
	})
});

// logout
$('.tombol-logout').on('click', function(e){
	e.preventDefault();
	// cari href di tombol yg ditekan
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Logout?',
		text: "logout dari session ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Logout!'

		// jika dihapus
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

//active nav
$('.navbar-nav').on('click', function(){
	$('.navbar-nav.active').removeClass('active');
	$(this).addClass('active');
});