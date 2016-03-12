<?php
class Mslide extends CI_Model {
	protected $_table 	= 'tbl_slideshow';
	protected $_id 		= 'slide_id';
	protected $_order 	= 'slide_type';
	protected $_status 	= 'slide_status';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($limit = '', $start = '') {
		if ($limit)
			$this->db->limit($limit, $start);
		$this->db->order_by($this->_order, 'DESC');
		$this->db->order_by($this->_id, 'DESC');
		$this->db->where($this->_status, '1');
		return $this->db->get($this->_table)->result_array();
	}
}