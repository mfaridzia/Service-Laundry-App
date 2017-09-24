<?php
class M_supplier extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('idsupplier');
        $tampil = $this->db->get('supplier');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('supplier', $data);
    }
    
    public function edit($id) 
    {
        $this->db->where('idsupplier',$id);
        $edit = $this->db->get('supplier');
        return $edit->row();
    }
    
    public function update($id,$item) 
    {
        $this->db->where('idsupplier',$id);
        $this->db->update('supplier',$item);
    }
    
    public function hapus($id) 
    {
        $this->db->where('idsupplier',$id);
        $this->db->delete('supplier');      
    }
    
    public function detail($id) 
    {
        $this->db->where('idsupplier',$id);
        $det = $this->db->get('supplier');
        return $det->result();   
    }
    
}