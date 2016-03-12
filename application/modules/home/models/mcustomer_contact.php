<?php
class Mcustomer_contact extends CI_Model{
	protected $_table = "tbl_contact";

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function insertContact($data) {
		$this->db->insert($this->_table, $data);
	}
}