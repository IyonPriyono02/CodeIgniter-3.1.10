<?php



class Registrasi_Models extends CI_Model {
public function tambahDataPelanggan()
	{
		$data = [
			'tlp' => $this->input->post('tlp', true),
			'email' => $this->input->post('email', true),
			'password' => $this->input->post('password', true),
			'password_konfirm' => $this->input->post('password_konfirm', true),
			'nama'=> $this->input->post('nama', true),
			'identitas' => $this->input->post('identitas', true),
			'jalan' => $this->input->post('jln', true),
			'kota' => $this->input->post('kota', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		return $this->db->insert('registrasi', $data);
	}
}