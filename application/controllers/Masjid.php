<?php

class Masjid extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('Masjid_model');
    }
    
    public function index() {

        $data['judul'] = 'Daftar Masjid';
        $data['masjid'] = $this->Masjid_model->getAllMasjid();

        if ($this->input->post('keyword')) {
            $data['masjid'] = $this->Masjid_model->searchDataMasjid();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('masjid/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $data['judul'] = 'Tambah Data Masjid';

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('pemasukan', 'Pemasukan', 'required|integer');
        $this->form_validation->set_rules('pengeluaran', 'Pengeluaran', 'required|integer');
        $this->form_validation->set_rules('total', 'Total', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('masjid/create');
            $this->load->view('templates/footer');            
        }else {
            $this->Masjid_model->createDataMasjid();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('masjid');
        }
    }

    public function delete($id) {
        $this->Masjid_model->deleteDataMasjid($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('masjid');
    }

    public function detail($id){
        $data['judul'] = 'Tambah Data masjid';
        $data['masjid'] = $this->Masjid_model->getMasjidById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('masjid/detail', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data['judul'] = 'Update Data Masjid';
        $data['masjid'] = $this->Masjid_model->getMasjidById($id);

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('pemasukan', 'Pemasukan', 'required|integer');
        $this->form_validation->set_rules('pengeluaran', 'Pengeluaran', 'required|integer');
        $this->form_validation->set_rules('total', 'Total', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('masjid/update', $data);
            $this->load->view('templates/footer');            
        }else {
            $this->Masjid_model->UpdateDataMasjid();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('masjid');
        }
    }
}