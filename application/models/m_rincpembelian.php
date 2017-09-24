<?php
class M_rincpembelian extends CI_Model {

    public function tampil() 
    {
        $this->db->order_by('norincian');
        $tampil = $this->db->get('rincianpembelian');
        return $tampil->result();
    }
    
    public function simpan($data) 
    {
        
   #Insert ke tabel rincianpembelian
   $jumlah  = abs((int)$this->input->post('jumlah')); // Agar Tetap dianggap int
   $kodebrg = abs((int)$this->input->post('kodebarang')); // Agar Tetap dianggap int
   //$data ['jml'] = $jumlah;

    $this->db->insert('rincianpembelian', $data);
        
   if($jumlah !=0 || $jumlah !='') {

      #ambil data dari tabel Barang
      $raw = $this->db->select('kodebarang, stok')->from('barang')->where('kodebarang', $kodebrg)->get()->row();
      
      #update table barang
      if($jumlah > $raw->stok) {
          #return Message 
          echo 'Stok sudah penuh';
     } else {
       $xdata['stok'] = $raw->stok + $jumlah;
       $this->db->where('kodebarang', $kodebrg);
       $this->db->update('barang', $xdata);
     }

    }
        
   } // end
    
    public function edit($no) 
    {
        $this->db->where('norincian',$no);
        $edit = $this->db->get('rincianpembelian');
        return $edit->row();
    }
    
    public function update($no,$item) 
    {
        $this->db->where('norincian',$no);
        $this->db->update('rincianpembelian',$item);
    }
    
    public function hapus($no) 
    {
        $this->db->where('norincian',$no);
        $this->db->delete('rincianpembelian');      
    }
    
}