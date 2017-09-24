<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_akun');
    }

	public function index()
	{
		$data['s_akun'] = $this->m_akun->tampil();
        $this->load->view('akun/index', $data);
	}
    
    public function tambah() 
    {
        $this->load->view('akun/form_tambah');
    }
    
    public function proses_tambah() 
    {  
        $data = [
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password'))
        ]; 
        
        $this->m_akun->simpan($data);
        redirect('akun/index');  
    }
    
    public function edit_akun($user)
    {
        $data['akun'] = $this->m_akun->edit($user);
        $this->load->view('akun/form_edit', $data);
    }
    
    public function proses_edit() 
    {
        $user = $this->input->post('username');
        $item = [
                    'password' => md5($this->input->post('password'))
                ];
        $this->m_akun->update($user,$item);
        redirect('akun/index');
    }
    
    public function hapus_akun($user) 
    {
        $this->m_akun->hapus($user);
        redirect('akun/index');
    }
    
    /* =========== Script untuk proses login ============ */
    
    public function proses_login()
    {
        $user = $this->input->post('username','true');
        $pass = md5($this->input->post('password','true'));
        $log  = $this->m_akun->auth_login($user,$pass);
        
        $jumlah = count($log);
        if($jumlah > 0 ) {
            $list = ['username' => $log->username, 'logged_in' => TRUE];
            $this->session->set_userdata($list);
            redirect('homeadmin');
        } else {
            $this->session->set_flashdata('notifikasi', 'Invalid Username or Password');
            redirect('home/login');
        }
    }
    
    public function keluar() 
    {
        $this->session->sess_destroy();
        redirect('home/login');
    }
    
}