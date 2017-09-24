<?php
class M_rinctransaksi extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('idrincian');
        $tampil = $this->db->get('rinciantransaksi');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('rinciantransaksi', $data);
    }
    
    public function edit($id) 
    {
        $this->db->where('idrincian',$id);
        $edit = $this->db->get('rinciantransaksi');
        return $edit->row();
    }
    
    public function update($id,$item) 
    {
        $this->db->where('idrincian',$id);
        $this->db->update('rinciantransaksi',$item);
    }
    
    public function hapus($id) 
    {
        $this->db->where('idrincian',$id);
        $this->db->delete('rinciantransaksi');      
    }
    
}