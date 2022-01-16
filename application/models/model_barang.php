<?php
class model_barang extends CI_Model{
    public $id_brg;
    public $nama_brg;
    public $keterangan;
    public $kategori;
    public $harga;
    public $stok;
    public $gambar;
    
    public function tampil_data(){
        return $this->db->get('katalog');
    }

    public function tambah_barang($data,$table){
        $this->db->insert($data,$table);
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
                           ->limit(1)
                           ->get('katalog');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg',$id_brg)->get('katalog');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}