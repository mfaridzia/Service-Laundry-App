<?php
class M_barang extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('kodebarang');
        $tampil = $this->db->get('barang');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('barang', $data);
    }
    
    public function edit($kode) 
    {
        $this->db->where('kodebarang',$kode);
        $edit = $this->db->get('barang');
        return $edit->row();
    }
    
    public function update($kodebarang,$item) 
    {
        $this->db->where('kodebarang',$kodebarang);
        $this->db->update('barang',$item);
    }
    
    public function hapus($kode) 
    {
        $this->db->where('kodebarang',$kode);
        $this->db->delete('barang');      
    }
    
}