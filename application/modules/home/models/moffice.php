<?php
class moffice extends CI_Model {
	protected $_table 	= 'tbl_office';
	protected $_id 		= 'office_id';
	protected $_order 	= 'office_order';
	protected $_status 	= 'office_status';
	protected $_lang	= 'language';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($lang, $limit = '', $start = '') {
		if ($limit)
			$this->db->limit($limit, $start);
		$this->db->order_by($this->_order, 'DESC');
		$this->db->order_by($this->_id, 'DESC');
		$this->db->where($this->_lang, $lang);
		$this->db->where($this->_status, '1');
		return $this->db->get($this->_table)->result_array();
	}

	public function getOnce($id) {
		$this->db->where($this->_id, $id);
		return $this->db->get($this->_table)->row_array();
	}

	public function count_all() {
		return $this->db->count_all_results($this->_table);
	}
}