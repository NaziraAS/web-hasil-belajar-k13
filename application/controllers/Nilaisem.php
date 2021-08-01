<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaisem extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Nilaisem_model');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Manajemen Nilai Semester';
            $data['nsem'] = $this->Nilaisem_model->getAllNilaisem();

            $data['kls'] = $this->Nilaisem_model->getAllKelas();
            $data['smt'] = $this->Nilaisem_model->getAllSmt();
            $data['tahun'] = $this->Nilaisem_model->getAllTahunajaran();
            // $data['tahun'] = array(
            //     array('tahun_ajaran' => '2017/2018'),
            //     array('tahun_ajaran' => '2018/2019'),
            //     array('tahun_ajaran' => '2019/2020'),
            //     array('tahun_ajaran' => '2020/2021'),
            //     array('tahun_ajaran' => '2021/2022'),
            //     array('tahun_ajaran' => '2022/2023'),
            //     array('tahun_ajaran' => '2023/2024'),
            //     array('tahun_ajaran' => '2024/2025'),
            //     array('tahun_ajaran' => '2025/2026'),
            //     array('tahun_ajaran' => '2026/2027'),
            //     array('tahun_ajaran' => '2027/2028'),
            //     array('tahun_ajaran' => '2028/2029'),
            //     array('tahun_ajaran' => '2029/2030')
            // );

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilaisem/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function getNamaSiswa()
    {
        // echo json_encode($_POST['nis']);
        // echo json_encode($this->Nilaisem_model->getNamasiswaById($_POST['nis']));
        echo json_encode($this->Nilaisem_model->getNamasiswaByNis($_POST['nis']));
    }

    public function filter()
    {
        echo json_encode($this->Nilaisem_model->getAllNilaisemFiltered($_POST['semester'], $_POST['kelas'], $_POST['tahun_ajaran']));
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Nilai Semester';

        $data['kls'] = $this->Nilaisem_model->getAllKelasIndex();
        $data['map'] = $this->Nilaisem_model->getAllMapel();
        $data['smt'] = array(
                array('semester' => 'I'),
                array('semester' => 'II')
            );
        $data['tahun'] = array(
            array('tahun_ajaran' => '2017/2018'),
            array('tahun_ajaran' => '2018/2019'),
            array('tahun_ajaran' => '2019/2020'),
            array('tahun_ajaran' => '2020/2021'),
            array('tahun_ajaran' => '2021/2022'),
            array('tahun_ajaran' => '2022/2023'),
            array('tahun_ajaran' => '2023/2024'),
            array('tahun_ajaran' => '2024/2025'),
            array('tahun_ajaran' => '2025/2026'),
            array('tahun_ajaran' => '2026/2027'),
            array('tahun_ajaran' => '2027/2028'),
            array('tahun_ajaran' => '2028/2029'),
            array('tahun_ajaran' => '2029/2030')
        );
        $data['nis'] = $this->Nilaisem_model->getAllNis();

        //rules
        $this->form_validation->set_rules('nama_kelas', 'Nama kelas', 'required');
        $this->form_validation->set_rules('nama_mapel', 'Nama mapel', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun ajaran', 'required');

        $this->form_validation->set_rules('nilai_tugas1_p', 'Nilai tugas 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_tugas2_p', 'Nilai tugas 2', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH1_p', 'Nilai ulangan Harian 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH2_p', 'Nilai ulangan Harian 2', 'required|numeric');

        $this->form_validation->set_rules('nilai_tugas1_k', 'Nilai tugas 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_tugas2_k', 'Nilai tugas 2', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH1_k', 'Nilai ulangan Harian 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH2_k', 'Nilai ulangan Harian 2', 'required|numeric');

        $this->form_validation->set_rules('nilai_UTS', 'Nilai UTS', 'required|numeric');
        $this->form_validation->set_rules('nilai_UAS', 'Nilai UAS', 'required|numeric');
        $this->form_validation->set_rules('nilai_sikap', 'Nilai sikap', 'required');


        if ($this->form_validation->run() == FALSE) {
            # gagal
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilaisem/tambah', $data);
            $this->load->view('templates/footer');

        } else {
            # berhasil
            $this->Nilaisem_model->tambahDataNilaisem();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('nilaisem');
            // echo '<script>alrt("TESSSSSSSSS");</script>';
        }

        
    }

    public function getListNis()
    {
        // echo json_encode($_POST['nama_kelas']);
        echo json_encode($this->Nilaisem_model->getListNisByKelas($_POST['nama_kelas']));
    }

    public function hapus($id_nilai_ekskul)
    {
        $this->Nilaisem_model->hapusDataNilaisem($id_nilai_ekskul);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('nilaisem');
    }

    public function detail($nis)
    {
        // echo json_encode($this->Siswa_model->getDetailNilaisemById($_POST['nis']));
        $data['judul'] = 'Detai nilai semester siswa';
        $data['dnsem'] = $this->Nilaisem_model->getDetailNilaisemById($nis);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nilaisem/detail', $data);
        $this->load->view('templates/footer');

    }

    public function ubah($nis)
    {
        $data['judul'] = 'Ubah Data Nilai Semester';

        $data['dnsem'] = $this->Nilaisem_model->getDetailNilaisemById($nis);

        $data['kls'] = $this->Nilaisem_model->getAllKelasIndex();
        $data['map'] = $this->Nilaisem_model->getAllMapel();
        $data['smt'] = array(
            array('semester' => 'I'),
            array('semester' => 'II')
        );
        $data['tahun'] = array(
            array('tahun_ajaran' => '2017/2018'),
            array('tahun_ajaran' => '2018/2019'),
            array('tahun_ajaran' => '2019/2020'),
            array('tahun_ajaran' => '2020/2021'),
            array('tahun_ajaran' => '2021/2022'),
            array('tahun_ajaran' => '2022/2023'),
            array('tahun_ajaran' => '2023/2024'),
            array('tahun_ajaran' => '2024/2025'),
            array('tahun_ajaran' => '2025/2026'),
            array('tahun_ajaran' => '2026/2027'),
            array('tahun_ajaran' => '2027/2028'),
            array('tahun_ajaran' => '2028/2029'),
            array('tahun_ajaran' => '2029/2030')
        );
        $data['nis'] = $this->Nilaisem_model->getAllNis();

        //rules
        $this->form_validation->set_rules('nama_kelas', 'Nama kelas', 'required');
        $this->form_validation->set_rules('nama_mapel', 'Nama mapel', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun ajaran', 'required');

        $this->form_validation->set_rules('nilai_tugas1_p', 'Nilai tugas 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_tugas2_p', 'Nilai tugas 2', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH1_p', 'Nilai ulangan Harian 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH2_p', 'Nilai ulangan Harian 2', 'required|numeric');

        $this->form_validation->set_rules('nilai_tugas1_k', 'Nilai tugas 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_tugas2_k', 'Nilai tugas 2', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH1_k', 'Nilai ulangan Harian 1', 'required|numeric');
        $this->form_validation->set_rules('nilai_ulanganH2_k', 'Nilai ulangan Harian 2', 'required|numeric');

        $this->form_validation->set_rules('nilai_UTS', 'Nilai UTS', 'required|numeric');
        $this->form_validation->set_rules('nilai_UAS', 'Nilai UAS', 'required|numeric');
        $this->form_validation->set_rules('nilai_sikap', 'Nilai sikap', 'required');

        if ($this->form_validation->run() == FALSE) {
            # gagal
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilaisem/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            # berhasil
            $this->Nilaisem_model->ubahDataNilaisem();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('nilaisem');
        }
    }

}