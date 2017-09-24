<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_tarif');
        $this->load->model('m_jendlaundry');
    }

	public function index()
	{
		$data['s_tarif'] = $this->m_tarif->tampil();
        $this->load->view('tarif/index', $data);
	}
    
    public function tambah() 
    {
        $ambil['jenlaundry'] = $this->m_jendlaundry->tampil();
        $this->load->view('tarif/form_tambah', $ambil);
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'nmpakaian'        => $this->input->post('nmpakaian'),
                    'tarif'            => $this->input->post('tarif'),
                    'idjenislaundry'   => $this->input->post('idjenislaundry')
        ]; 
        
        $this->m_tarif->simpan($data);
        redirect('tarif/index');  
    }
    
    public function edit_tarif($id)
    {
        $data['jenlaundry'] = $this->m_jendlaundry->tampil();
        $data['tarif'] = $this->m_tarif->edit($id);
        $this->load->view('tarif/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $id = $this->input->post('idjenispakaian');
        $data = [
                    'nmpakaian'        => $this->input->post('nmpakaian'),
                    'tarif'            => $this->input->post('tarif'),
                    'idjenislaundry'   => $this->input->post('idjenislaundry')
                ];
        $this->m_tarif->update($id,$data);
        redirect('tarif/index');
    }
    
    public function hapus_tarif($id) 
    {
        $this->m_tarif->hapus($id);
        redirect('tarif/index');
    }
    
}