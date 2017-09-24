<?php
class M_tarif extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('idjenispakaian');
        $tampil = $this->db->get('tarif');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('tarif', $data);
    }
    
    public function edit($id) 
    {
        $this->db->where('idjenispakaian',$id);
        $edit = $this->db->get('tarif');
        return $edit->row();
    }
    
    public function update($id,$item) 
    {
        $this->db->where('idjenispakaian',$id);
        $this->db->update('tarif',$item);
    }
    
    public function hapus($id) 
    {
        $this->db->where('idjenispakaian',$id);
        $this->db->delete('tarif');      
    }
    
}