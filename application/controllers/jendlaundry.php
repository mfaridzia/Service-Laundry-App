<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jendlaundry extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_jendlaundry');
    }

	public function index()
	{
		$data['s_jendlaundry'] = $this->m_jendlaundry->tampil();
        $this->load->view('jenlaundry/index', $data);
	}
    
    public function tambah() 
    {
        $this->load->view('jenlaundry/form_tambah');
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'idjenislaundry' => $this->input->post('idjenislaundry'),
                    'nmjenislaundry' => $this->input->post('nmjenislaundry')
        ]; 
        
        $this->m_jendlaundry->simpan($data);
        redirect('jendlaundry/index');  
    }
    
    public function edit_jendlaundry($id)
    {
        $data['jendlaundry'] = $this->m_jendlaundry->edit($id);
        $this->load->view('jenlaundry/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $id = $this->input->post('idjenislaundry');
        $item = [
                    'nmjenislaundry' => $this->input->post('nmjenislaundry')
                ];
        $this->m_jendlaundry->update($id,$item);
        redirect('jendlaundry/index');
    }
    
    public function hapus_jendlaundry($id) 
    {
        $this->m_jendlaundry->hapus($id);
        redirect('jendlaundry/index');
    }
    
}