<?php
class mnewscategory extends CI_Model {
	protected $_table 	= 'tbl_categorie';
	protected $_id 		= 'cago_id';
	protected $_lang 	= 'cago_lang';
	protected $_status 	= 'cago_status';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($lang, $limit = '', $start = '') {
		if ($limit)
			$this->db->limit($limit, $start);
		$this->db->where($this->_status, '1');
		$this->db->where($this->_lang, $lang);
		$this->db->order_by($this->_id, 'DESC');
		return $this->db->get($this->_table)->result_array();
	}

	public function getOnce($id) {
		$this->db->where($this->_id, $id);
		return $this->db->get($this->_table)->row_array();
	}
}