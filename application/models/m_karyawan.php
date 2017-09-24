<?php
class M_karyawan extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('nik');
        $tampil = $this->db->get('karyawan');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        $this->db->insert('karyawan', $data);
    }
    
    public function edit($nik) 
    {
        $this->db->where('nik',$nik);
        $edit = $this->db->get('karyawan');
        return $edit->row();
    }
    
    public function update($nik,$data) 
    {
        $this->db->where('nik',$nik);
        $this->db->update('karyawan',$data);
    }
    
    public function hapus($nik) 
    {
        $this->db->where('nik',$nik);
        $this->db->delete('karyawan');      
    }
    
    public function detail($nik) 
    {
        $this->db->where('nik',$nik);
        $det = $this->db->get('karyawan');
        return $det->result();   
    }
}