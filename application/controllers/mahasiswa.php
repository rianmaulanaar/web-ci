<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "john lennon";
		$data['nim'] = 1810330022;
		$mahasiswa[0] = array(
			'nim' => 123456,
			'nama' => "john");
		$data['Mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
	}
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}





/* End of file mahasiswa_index.php */
/* Location: ./application/views/mahasiswa_index.php */