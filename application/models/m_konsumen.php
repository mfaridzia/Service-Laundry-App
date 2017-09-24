<?php
class M_konsumen extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('kodekonsumen');
        $tampil = $this->db->get('konsumen');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('konsumen', $data);
    }
    
    public function edit($kode) 
    {
        $this->db->where('kodekonsumen',$kode);
        $edit = $this->db->get('konsumen');
        return $edit->row();
    }
    
    public function update($kode,$item) 
    {
        $this->db->where('kodekonsumen',$kode);
        $this->db->update('konsumen',$item);
    }
    
    public function hapus($kode) 
    {
        $this->db->where('kodekonsumen',$kode);
        $this->db->delete('konsumen');      
    }
    
}

