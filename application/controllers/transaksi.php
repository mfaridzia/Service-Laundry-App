<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_transaksi');
        $this->load->model('m_konsumen');
    }

	public function index()
	{
		$data['transaksi'] = $this->m_transaksi->tampil();
        $this->load->view('transaksi/index', $data);
	}
    
    public function tambah() 
    {
        $data['transaksi'] = $this->m_konsumen->tampil();
        $this->load->view('transaksi/form_tambah',$data);
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'notransaksi'    => $this->input->post('notransaksi'),
                    'tgltransaksi'   => $this->input->post('tgltransaksi'),
                    'tglambil'       => $this->input->post('tglambil'),
                    'diskon'       => $this->input->post('diskon'),
                    'kodekonsumen'   => $this->input->post('kodekonsumen')
        ]; 
        
        $this->m_transaksi->simpan($data);
        redirect('transaksi/index');  
    }
    
    public function edit_transaksi($no)
    {
        $data['kodekon'] = $this->m_konsumen->tampil();
        $data['transaksi'] = $this->m_transaksi->edit($no);
        $this->load->view('transaksi/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $no = $this->input->post('notransaksi');
        $item = [
                    'tgltransaksi'   => $this->input->post('tgltransaksi'),
                    'tglambil'       => $this->input->post('tglambil'),
                    'diskon'       => $this->input->post('diskon'),
                    'kodekonsumen'   => $this->input->post('kodekonsumen')
                ];
        $this->m_transaksi->update($no,$item);
        redirect('transaksi/index');
    }
    
    public function hapus_transaksi($no) 
    {
        $this->m_transaksi->hapus($no);
        redirect('transaksi/index');
    }
    
}