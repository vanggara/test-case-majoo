<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
    
    public function listProduk(){
        $data = $this->db->query('SELECT * FROM PRODUK;');
        return $data;
    }

    public function insertProduk($data){
		$this->db->insert('PRODUK', $data);
		return true;
    }

    public function cekDuplikatProduk($namaProduk){
        $data = $this->db->query("SELECT * FROM PRODUK WHERE NAMA_PRODUK = '".$namaProduk."';");

        if ($data->num_rows() > 0) {
            return true;
        }
        return false;
    }

    public function editProduk($idProduk){
        $data = $this->db->query('SELECT * FROM PRODUK WHERE ID_PRODUK = '.$idProduk.';');
        return $data;
    }

    public function updateProduk($data, $id){
        $this->db->where('ID_PRODUK', $id);
        $this->db->update('PRODUK', $data);
		return true;
    }

    public function hapusProduk($id){
        $this->db->where('ID_PRODUK', $id);
        $this->db->delete('PRODUK');
		return true;
    }

    public function listPesanan(){
        $data = $this->db->query('SELECT pem.*, pro.NAMA_PRODUK FROM PEMBELI pem JOIN PRODUK pro ON pem.ID_PRODUK = pro.ID_PRODUK;');
        return $data;
    }

    public function lihatPesanan($idPembeli){
        $data = $this->db->query('SELECT pem.*, pro.NAMA_PRODUK, pro.DESKRIPSI_PRODUK, pro.HARGA_PRODUK 
        FROM PEMBELI pem JOIN PRODUK pro ON pem.ID_PRODUK = pro.ID_PRODUK WHERE pem.ID_PEMBELI = '.$idPembeli.';');
        return $data;
    }

    public function prosesPesanan($id){
        $this->db->set('STATUS', 'Diproses');
        $this->db->where('ID_PEMBELI', $id);
        $this->db->update('PEMBELI');
		return true;
    }
}
?>