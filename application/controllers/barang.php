<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_barang');
    }

	public function index()
	{
		$data['s_brg'] = $this->m_barang->tampil();
        $this->load->view('barang/index', $data);
	}
    
    public function tambah() 
    {
        $this->load->view('barang/form_tambah');
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'kodebarang'       => $this->input->post('kodebarang'),
                    'nmbarang'         => $this->input->post('nmbarang'),
                    'stok'             => $this->input->post('stok'),
                    'tglupdatestok'    => $this->input->post('tglupdatestok')
        ]; 
        
        $this->m_barang->simpan($data);
        redirect('barang/index');  
    }
    
    public function edit_barang($kode)
    {
        $data['brg'] = $this->m_barang->edit($kode);
        $this->load->view('barang/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $kode = $this->input->post('kodebarang');
        $data = [
                    'nmbarang'         => $this->input->post('nmbarang'),
                    'stok'             => $this->input->post('stok'),
                    'tglupdatestok'    => $this->input->post('tglupdatestok')
                ];
        $this->m_barang->update($kode,$data);
        redirect('barang/index');
    }
    
    public function hapus_barang($kode) 
    {
        $this->m_barang->hapus($kode);
        redirect('barang/index');
    }
    
}