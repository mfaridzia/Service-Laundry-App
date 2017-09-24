<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin extends CI_Controller {
    
    public function index()
    {
        // kode auantentikasi agar user selain admin tidak boleh masuk langsung tanpa login
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in) {
            redirect('home/login');
        } 
            $this->load->view('homeadmin/index');
    }
}