<?php
class M_transaksi extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('notransaksi');
        $tampil = $this->db->get('transaksi');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('transaksi', $data);
    }
    
    public function edit($no) 
    {
        $this->db->where('notransaksi',$no);
        $edit = $this->db->get('transaksi');
        return $edit->row();
    }
    
    public function update($no,$item) 
    {
        $this->db->where('notransaksi',$no);
        $this->db->update('transaksi',$item);
    }
    
    public function hapus($no) 
    {
        $this->db->where('notransaksi',$no);
        $this->db->delete('transaksi');      
    }
    
}