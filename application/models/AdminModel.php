<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
    
    
    public function semua_barang(){
      
      $query = $this->db->query('CALL STOK_BARANG()');

      return $query->result_array();

    }

    public function kategori_barang(){
      
      $query = $this->db->query('SELECT * FROM kategori');

      return $query->result_array();

    }

    public function update_stok($id_barang,$stok_br){
      $data = array(
        'stok' => $stok_br);

$this->db->where('id', $id_barang);
$this->db->update('barang', $data);
    }
}