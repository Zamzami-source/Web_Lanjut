<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "ZamiPoll";
		$data['jenis_kelamin'] = "Pria";
		$Mahasiswa[0] = array(
			'nim' => 1810330019,
			'nama' => 'ZamiPoll',
			'profil' => 'Data Diri'
		);
		$data['mahasiswa'] = $Mahasiswa;
		$this->load->view('mahasiswa_index',$data);
	}

	public function tambah()
	{
		$this->load->view('add_mhs');
	}

}
