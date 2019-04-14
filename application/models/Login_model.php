<?php

class Login_model extends CI_Model {

public function login($data) {
    $condition = "email =" . "'" . $data['email']. "' AND " . "password =" . "'".$data['password']. "'";
    $this->db->select('*');
    $this->db->from('registrasi');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if($query->num_rows() == 1){
    	return $query->result();
    } else{
    	return false;
    }
  }

}
