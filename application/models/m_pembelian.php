<?php
class M_pembelian extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('nopembelian');
        $tampil = $this->db->get('pembelian');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('pembelian', $data);
    }
    
    public function edit($no) 
    {
        $this->db->where('nopembelian',$no);
        $edit = $this->db->get('pembelian');
        return $edit->row();
    }
    
    public function update($no,$item) 
    {
        $this->db->where('nopembelian',$no);
        $this->db->update('pembelian',$item);
    }
    
    public function hapus($no) 
    {
        $this->db->where('nopembelian', $no);
        $this->db->delete('pembelian');      
    }
    
}