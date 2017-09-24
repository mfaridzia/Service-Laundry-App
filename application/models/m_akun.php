<?php
class M_akun extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('username');
        $tampil = $this->db->get('login');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('login', $data);
    }
    
    public function edit($user) 
    {
        $this->db->where('username',$user);
        $edit = $this->db->get('login');
        return $edit->row();
    }
    
    public function update($user,$item) 
    {
        $this->db->where('username',$kodebarang);
        $this->db->update('login',$item);
    }
    
    public function hapus($user) 
    {
        $this->db->where('username',$user);
        $this->db->delete('login');      
    }
    
    /* =========== Script untuk proses login ============ */
    
    public function auth_login($user,$pass)
    {
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        $auth = $this->db->get('login');
        return $auth->row();
    }
    
}