<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincpembelian extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_rincpembelian');
        $this->load->model('m_pembelian');
        $this->load->model('m_barang');
    }

	public function index()
	{
		$data['s_rincpem'] = $this->m_rincpembelian->tampil();
        $this->load->view('rincpembelian/index', $data);
	}
    
    public function tambah() 
    {
        $ambil['pembelian'] = $this->m_pembelian->tampil();
        $ambil['barang']    = $this->m_barang->tampil();
        $this->load->view('rincpembelian/form_tambah', $ambil);
    }
   
    public function proses_tambah() 
    {  
        $data = [
                    'nopembelian'   => $this->input->post('nopembelian'),
                    'kodebarang'    => $this->input->post('kodebarang'),
                    'jumlah'        => $this->input->post('jumlah')
        ]; 
        
        $this->m_rincpembelian->simpan($data);
        redirect('rincpembelian/index');  
    }
    
    public function edit_rincpembelian($no)
    {
        $data['pembelian'] = $this->m_pembelian->tampil();
        $data['barang']    = $this->m_barang->tampil();
        $data['rincpem']   = $this->m_rincpembelian->edit($no);
        $this->load->view('rincpembelian/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $no = $this->input->post('norincian');
        $item = [
                   'nopembelian'   => $this->input->post('nopembelian'),
                    'kodebarang'   => $this->input->post('kodebarang'),
                    'jumlah'       => $this->input->post('jumlah')
        ];
        $this->m_rincpembelian->update($no,$item);
        redirect('rincpembelian/index');
    }
    
    public function hapus_rincpembelian($no) 
    {
        $this->m_rincpembelian->hapus($no);
        redirect('rincpembelian/index');
    }
    
}