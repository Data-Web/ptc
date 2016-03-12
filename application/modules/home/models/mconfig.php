<?php
class mconfig extends CI_Model {
	protected $_table 	= 'tbl_config';
	protected $_lang 	= 'language';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getData($lang) {
		$this->db->where($this->_lang, $lang);
		return $this->db->get($this->_table)->row_array();
	}
}