<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    
	function __construct()
	{
		parent::__construct();
		$this->load->model('ProductModel');
	}

	public function index()
	{
        $data['products'] = $this->ProductModel->listProduk();
		$this->load->view('product', $data);
	}

    public function beliProduk()
	{
        $idProduk = $_POST['idProduk'];
        $data['products'] = $this->ProductModel->beliProduk($idProduk);
		$this->load->view('checkout', $data);
	}

    public function transfer()
	{
        $idProduk = $_POST['idProduk'];
        $namaDepan = $_POST['namaDepan'];
        $namaBelakang = $_POST['namaBelakang'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $negara = $_POST['negara'];
        $provinsi = $_POST['provinsi'];
        $kodePos = $_POST['kodePos'];
        $setData = array(
            'NAMA_DEPAN_PEMBELI' => $namaDepan,
            'NAMA_BELAKANG_PEMBELI' => $namaBelakang,
            'EMAIL_PEMBELI' => $email,
            'ALAMAT_PEMBELI' => $alamat,
            'NEGARA_PEMBELI' => $negara,
            'PROVINSI_PEMBELI' => $provinsi,
            'KODE_POS_PEMBELI' => $kodePos,
            'ID_PRODUK' => $idProduk,
            'STATUS' => 'Belum Diproses'
        );
        $data['products'] = $this->ProductModel->insertPembeli($setData);
        redirect(base_url(),'refresh');
	}
}
