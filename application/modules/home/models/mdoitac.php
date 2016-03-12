<?php
class mdoitac extends CI_Model {
	protected $_table 	= 'tbl_doitac';
	protected $_id 	= 'doitac_id';
	protected $_order 	= 'doitac_order';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($limit = '', $start = '') {
		if ($limit)
			$this->db->limit($limit, $start);
		$this->db->order_by($this->_order, 'DESC');
		$this->db->order_by($this->_id, 'DESC');
		return $this->db->get($this->_table)->result_array();
	}
}