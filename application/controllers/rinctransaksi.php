<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rinctransaksi extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_rinctransaksi');
        $this->load->model('m_transaksi');
        $this->load->model('m_tarif');
    }

	public function index()
	{
		$data['s_rinctrans'] = $this->m_rinctransaksi->tampil();
        $this->load->view('rinctransaksi/index', $data);
	}
    
    public function tambah() 
    {
        $ambil['trans'] = $this->m_transaksi->tampil();
        $ambil['tarif'] = $this->m_tarif->tampil();
        $this->load->view('rinctransaksi/form_tambah', $ambil);
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'notransaksi'      => $this->input->post('notransaksi'),
                    'jumlah'           => $this->input->post('jumlah'),
                    'idjenispakaian'   => $this->input->post('idjenispakaian')
        ]; 
        
        $this->m_rinctransaksi->simpan($data);
        redirect('rinctransaksi/index');  
    }
    
    public function edit_rinctransaksi($id)
    {
        $data['trans'] = $this->m_transaksi->tampil();
        $data['tarif'] = $this->m_tarif->tampil();
        $data['rinctransaksi'] = $this->m_rinctransaksi->edit($id);
        $this->load->view('rinctransaksi/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $id = $this->input->post('idrincian');
        $data = [
                    'notransaksi'      => $this->input->post('notransaksi'),
                    'jumlah'           => $this->input->post('jumlah'),
                    'idjenispakaian'   => $this->input->post('idjenispakaian')  
                ];
        $this->m_rinctransaksi->update($id,$data);
        redirect('rinctransaksi/index');
    }
    
    public function hapus_rinctransaksi($id) 
    {
        $this->m_rinctransaksi->hapus($id);
        redirect('rinctransaksi/index');
    }
    
}