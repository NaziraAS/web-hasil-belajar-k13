<?php
$ci = &get_instance();
$ci->load->library('session');
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() . 'dashboard'; ?>">
    <div class="sidebar-brand-icon">
      <!-- gambar icon logo -->
      <!-- <i class="fas fa-coffee" href="<?= base_url() . 'dashboard'; ?>" ></i> -->
      <img width="54px" height="54px" src="<?= base_url(); ?>assets/img/icon.png" href="<?= base_url() . 'dashboard'; ?>"></i>
    </div>
    <div class="sidebar-brand-text mx-3" href="<?= base_url() . 'dashboard'; ?>">SMAN 1<br>LASEM REMBANG</div>
  </a>

  <!-- Divider -->
  <!-- garis -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?= ($ci->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url() . 'dashboard'; ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Beranda</span></a>
  </li>

  <!-- Divider -->
  <!-- garis -->
  <hr class="sidebar-divider">

  <!-- ============================ -->
  <!-- Heading -->
  <div class="sidebar-heading">
    KELOLA DATA
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTampil" aria-expanded="true" aria-controls="collapseTampil">
      <i class="fas fa-fw fa-folder"></i>
      <span>Menu Data</span>
    </a>
    <div id="collapseTampil" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <?php if ($this->session->userdata['level'] == 'Admin') : ?>
        <div class="bg-white py-2 collapse-inner rounded">
          <!-- <h6 class="collapse-header">Login Screens:</h6> -->
          <a class="collapse-item" href="<?= base_url() . 'Pegawai'; ?>">Data Pegawai</a>
          <a class="collapse-item" href="<?= base_url() . 'Siswa'; ?>">Data Siswa</a>
          <a class="collapse-item" href="<?= base_url() . 'Mapel'; ?>">Data Mata Pelajaran</a>
          <!-- <div class="collapse-divider"></div> -->
          <!-- <h6 class="collapse-header">Other Pages:</h6> -->
          <a class="collapse-item" href="<?= base_url() . 'Kelas'; ?>">Data Kelas</a>
          <a class="collapse-item" href="<?= base_url() . 'Jadwal'; ?>">Data Jadwal</a>
          <a class="collapse-item" href="<?= base_url() . 'Ekskul'; ?>">Data Ekstrakulikuler</a>
        </div>
      <?php elseif ($this->session->userdata['level'] == 'Guru Wali') : ?>
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url() . 'Presensi'; ?>">Data Presensi</a>
        </div>
      <?php else : ?>
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url() . 'Nilaisem'; ?>">Nilai Semester</a>
          <a class="collapse-item" href="<?= base_url() . 'Nilaieks'; ?>">Nilai Ekstrakulikuler</a>
        </div>
      <?php endif; ?>
    </div>
  </li>
  <!-- ============================ -->
  <!-- Heading -->
  <div class="sidebar-heading">
    LAPORAN
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="true" aria-controls="collapseLaporan">
      <i class="fas fa-fw fa-folder"></i>
      <span>Menu Laporan</span>
    </a>
    <div id="collapseLaporan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <?php if ($this->session->userdata['level'] == 'Guru Wali') : ?>
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url() . 'Lapsiswa'; ?>">Laporan Siswa</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapjadwal'; ?>">Laporan Jadwal</a>
          <a class="collapse-item" href="<?= base_url() . 'Lappres'; ?>">Laporan Presensi</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaisem'; ?>">Lap. Nilai Semester</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaisemkelas'; ?>">Lap. Nilai Semester Kelas</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaieks'; ?>">Lap. Nilai Ekstrakulikuler</a>
        </div>
      <?php elseif ($this->session->userdata['level'] == 'Guru Mapel') : ?>
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url() . 'Lapsiswa'; ?>">Laporan Siswa</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapmapel'; ?>">Laporan Mata Pelajaran</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapjadwal'; ?>">Laporan Jadwal</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapekskul'; ?>">Laporan Ekstrakulikuler</a>
          <a class="collapse-item" href="<?= base_url() . 'Lappres'; ?>">Laporan Presensi</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaisem'; ?>">Lap. Nilai Semester</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaisemkelas'; ?>">Lap. Nilai Semester Kelas</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaieks'; ?>">Lap. Nilai Ekstrakulikuler</a>
        </div>
      <?php else : ?>
        <div class="bg-white py-2 collapse-inner rounded">
          <!-- <h6 class="collapse-header">Login Screens:</h6> -->
          <a class="collapse-item" href="<?= base_url() . 'Lappegawai'; ?>">Laporan Pegawai</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapsiswa'; ?>">Laporan Siswa</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapmapel'; ?>">Laporan Mata Pelajaran</a>
          <!-- <div class="collapse-divider"></div> -->
          <!-- <h6 class="collapse-header">Other Pages:</h6> -->
          <a class="collapse-item" href="<?= base_url() . 'Lapkelas' ?>">Laporan Kelas</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapjadwal'; ?>">Laporan Jadwal</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapekskul'; ?>">Laporan Ekstrakulikuler</a>
          <a class="collapse-item" href="<?= base_url() . 'Lappres'; ?>">Laporan Presensi</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaisem'; ?>">Lap. Nilai Semester</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaisemkelas'; ?>">Lap. Nilai Semester Kelas</a>
          <a class="collapse-item" href="<?= base_url() . 'Lapnilaieks'; ?>">Lap. Nilai Ekstrakulikuler</a>
        </div>
      <?php endif; ?>
    </div>
  </li>
  <!-- ============================ -->
  <!-- ============================ -->

  <!-- Divider -->
  <hr class="sidebar-divider mb-2 mt-2">

  <!-- Nav Item - Logout -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url() . 'auth/logout'; ?>" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar