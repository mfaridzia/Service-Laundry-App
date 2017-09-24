<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_karyawan');
    }

	public function index()
	{
		$data['s_karyawan'] = $this->m_karyawan->tampil();
        $this->load->view('karyawan/index', $data);
	}
    
    public function tambah() 
    {
        $this->load->view('karyawan/form_tambah');
    }
    
    public function proses_tambah() 
    {
        $data = [
                    'nik'            => $this->input->post('nik'),
                    'nmkaryawan'     => $this->input->post('nmkaryawan'),
                    'almtkaryawan'   => $this->input->post('almtkaryawan'),
                    'telpkaryawan'   => $this->input->post('telpkaryawan'),
                    'genderkaryawan' => $this->input->post('genderkaryawan')
        ];
        $simpan = $this->m_karyawan->simpan($data);
        if($simpan >=1 ) {
          $this->session->set_flashdata('pesan','Berhasil Tambah Data'); //Untuk menampilkan pesan sukses dengan session flashdata
          redirect('karyawan/index');
        } else {
          $this->session->set_flashdata('pesan','Gagal Tambah Data'); //Untuk menampilkan pesan sukses dengan session flashdata
          redirect('karyawan/tambah');
        }
    }
    
    public function edit_karyawan($nik)
    {
        $data['karyawan'] = $this->m_karyawan->edit($nik);
        $this->load->view('karyawan/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $nik  = $this->input->post('nik');
        $data = [
                    'nmkaryawan'     => $this->input->post('nmkaryawan'),
                    'almtkaryawan'   => $this->input->post('almtkaryawan'),
                    'telpkaryawan'   => $this->input->post('telpkaryawan'),
                    'genderkaryawan' => $this->input->post('genderkaryawan')
                ];
        $this->m_karyawan->update($nik,$data);
         $this->session->set_flashdata('pesan','Berhasil Edit Data'); //Untuk menampilkan pesan sukses dengan session flashdata
        redirect('karyawan/index');
    }
    
    public function hapus_karyawan($nik) 
    {
        $this->m_karyawan->hapus($nik);
         $this->session->set_flashdata('pesan','Berhasil Hapus Data'); //Untuk menampilkan pesan sukses dengan session flashdata
        redirect('karyawan/index');
    }
    
    public function detail($nik)
    {
        $data['detail_kar'] = $this->m_karyawan->detail($nik);
        $this->load->view('karyawan/detail_karyawan', $data);
    }
    
}