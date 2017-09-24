<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_konsumen');
    }

	public function index()
	{
		$data['s_konsumen'] = $this->m_konsumen->tampil();
        $this->load->view('konsumen/index', $data);
	}
    
    public function tambah() 
    {
        $this->load->view('konsumen/form_tambah');
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'kodekonsumen'  => $this->input->post('kodekonsumen'),
                    'nmkonsumen'    => $this->input->post('nmkonsumen'),
                    'almtkonsumen'  => $this->input->post('almtkonsumen'),
                    'telpkonsumen'  => $this->input->post('telpkonsumen')
        ]; 
        
        $this->m_konsumen->simpan($data);
        redirect('konsumen/index');  
    }
    
    public function edit_konsumen($kode)
    {
        $data['konsumen'] = $this->m_konsumen->edit($kode);
        $this->load->view('konsumen/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $kode = $this->input->post('kodekonsumen');
        $item = [
                    'nmkonsumen'    => $this->input->post('nmkonsumen'),
                    'almtkonsumen'  => $this->input->post('almtkonsumen'),
                    'telpkonsumen'  => $this->input->post('telpkonsumen')
        ];
        $this->m_konsumen->update($kode,$item);
        redirect('konsumen/index');
    }
    
    public function hapus_konsumen($kode) 
    {
        $this->m_konsumen->hapus($kode);
        redirect('konsumen/index');
    }
    
}