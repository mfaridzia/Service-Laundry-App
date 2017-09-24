<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_supplier');
    }

	public function index()
	{
		$data['s_supplier'] = $this->m_supplier->tampil();
        $this->load->view('supplier/index', $data);
	}
    
    public function tambah() 
    {
        $this->load->view('supplier/form_tambah');
    }

    public function proses_tambah() 
    {  
        $data = [
                    'idsupplier'    => $this->input->post('idsupplier'),
                    'nmsupplier'    => $this->input->post('nmsupplier'),
                    'almtsupplier'  => $this->input->post('almtsupplier'),
                    'telpsupplier'  => $this->input->post('telpsupplier')
        ]; 
        
        $this->m_supplier->simpan($data);
        redirect('supplier/index');  
    }
    
    public function edit_supplier($id)
    {
        $data['supplier'] = $this->m_supplier->edit($id);
        $this->load->view('supplier/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $id = $this->input->post('idsupplier');
        $item = [
                    'idsupplier'    => $this->input->post('idsupplier'),
                    'nmsupplier'    => $this->input->post('nmsupplier'),
                    'almtsupplier'  => $this->input->post('almtsupplier'),
                    'telpsupplier'  => $this->input->post('telpsupplier')
                ];
        $this->m_supplier->update($id,$item);
        redirect('supplier/index');
    }
    
    public function hapus_supplier($id) 
    {
        $this->m_supplier->hapus($id);
        redirect('supplier/index');
    }
    
    public function detail($id)
    {
        $data['detail_sup'] = $this->m_supplier->detail($id);
        $this->load->view('supplier/detail_supplier', $data);
    }
    
}