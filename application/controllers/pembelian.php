<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_pembelian');
        $this->load->model('m_supplier');
    }

	public function index()
	{
		$data['s_pembelian'] = $this->m_pembelian->tampil();
        $this->load->view('pembelian/index', $data);
	}
    
    public function tambah() 
    {
        $ambil['ambil'] = $this->m_supplier->tampil();
        $this->load->view('pembelian/form_tambah', $ambil);
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'tglpembelian'  => $this->input->post('tglpembelian'),
                    'totalbiaya'    => $this->input->post('totalbiaya'),
                    'idsupplier'    => $this->input->post('idsupplier')
        ]; 
        
        $this->m_pembelian->simpan($data);
        redirect('pembelian/index');  
    }
    
    public function edit_pembelian($no)
    {
        $data['supplier'] = $this->m_supplier->tampil();
        $data['pembelian'] = $this->m_pembelian->edit($no);
        $this->load->view('pembelian/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $no = $this->input->post('nopembelian');
        $item = [
                    'tglpembelian'  => $this->input->post('tglpembelian'),
                    'totalbiaya'    => $this->input->post('totalbiaya'),
                    'idsupplier'    => $this->input->post('idsupplier')
                ];
        $this->m_pembelian->update($no,$item);
        redirect('pembelian/index');
    }
    
    public function hapus_pembelian($no) 
    {
        $this->m_pembelian->hapus($no);
        redirect('pembelian/index');
    }
    
}