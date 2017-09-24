<?php
class M_pemakaian extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_barang');
    }
    
    public function tampil() 
    {
        $this->db->order_by('kodepengeluaran');
        $tampil = $this->db->get('pemakaianbarang');
        return $tampil->result();
    }
    
    // PROBLEM SOLVED
    public function simpan($data) 
    {
        
   #Insert ke tabel pemakaianbarang
   $jumlah  = abs((int)$this->input->post('jumlah')); // Agar Tetap dianggap int/angka
   $kodebrg = abs((int)$this->input->post('kodebarang')); // Agar Tetap dianggap int/angka
   //$data ['jml'] = $jumlah;

   $this->db->insert('pemakaianbarang', $data); 
        
   if($jumlah !=0 || $jumlah !='') {

      #ambil data dari tabel Barang
      $raw = $this->db->select('kodebarang, stok')->from('barang')->where('kodebarang', $kodebrg)->get()->row();
      
      #update table barang
      if($jumlah > $raw->stok) {
          #return Message 
          echo 'Stok tidak mencukupi';
     } else {
       $xdata['stok'] = $raw->stok - $jumlah;
       $this->db->where('kodebarang', $kodebrg);
       $this->db->update('barang', $xdata);
     }

    }
        
   } // end
    
    public function edit($kode) 
    {
        $this->db->where('kodepengeluaran',$kode);
        $edit = $this->db->get('pemakaianbarang');
        return $edit->row();
    }
    
    public function update($kode,$data) 
    {
        $this->db->where('kodepengeluaran',$kode);
        $this->db->update('pemakaianbarang',$data);
    }
    
    public function hapus($kode) 
    {
        $this->db->where('kodepengeluaran',$kode);
        $this->db->delete('pemakaianbarang');      
    }
}