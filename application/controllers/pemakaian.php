<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemakaian extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_pemakaian');
        $this->load->model('m_barang');
    }

	public function index()
	{
		$data['s_pemakaian'] = $this->m_pemakaian->tampil();
        $this->load->view('pemakaian/index', $data);
	}
    
    public function tambah() 
    {
        $ambil['ambil'] = $this->m_barang->tampil();
        $this->load->view('pemakaian/form_tambah', $ambil);
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'jumlah'     => $this->input->post('jumlah'),
                    'kodebarang' => $this->input->post('kodebarang')
        ]; 
        
        $this->m_pemakaian->simpan($data);
        redirect('pemakaian/index');  
    }
    
    public function edit_pemakaian($kode)
    {
        $data['barang'] = $this->m_barang->tampil();
        $data['pemakaian'] = $this->m_pemakaian->edit($kode);
        $this->load->view('pemakaian/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $kode = $this->input->post('kodepengeluaran');
        $data = [
                    'jumlah'           => $this->input->post('jumlah'),
                    'kodebarang'       => $this->input->post('kodebarang')
                ];
        $this->m_pemakaian->update($kode,$data);
        redirect('pemakaian/index');
    }
    
    public function hapus_pemakaian($kode) 
    {
        $this->m_pemakaian->hapus($kode);
        redirect('pemakaian/index');
    }
    
}