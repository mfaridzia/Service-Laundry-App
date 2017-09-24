<?php
class M_jendlaundry extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('idjenislaundry');
        $tampil = $this->db->get('jenislaundry');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('jenislaundry', $data);
    }
    
    public function edit($id) 
    {
        $this->db->where('idjenislaundry',$id);
        $edit = $this->db->get('jenislaundry');
        return $edit->row();
    }
    
    public function update($id,$item) 
    {
        $this->db->where('idjenislaundry',$id);
        $this->db->update('jenislaundry',$item);
    }
    
    public function hapus($id) 
    {
        $this->db->where('idjenislaundry',$id);
        $this->db->delete('jenislaundry');      
    }
    
}