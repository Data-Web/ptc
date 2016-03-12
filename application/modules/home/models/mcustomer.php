<?php
class mcustomer extends CI_Model {
	protected $_table 	= 'tanphat_posts';
	protected $_type	= 'CUS';
	protected $_id 		= 'id';
	protected $_lang 	= 'language';
	protected $_status 	= 'status';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($limit = '', $start = '') {
		if ($limit)
			$this->db->limit($limit, $start);
		$this->db->where('type', $this->_type);
		$this->db->where($this->_status, '1');
		$this->db->order_by($this->_id, 'DESC');
		return $this->db->get($this->_table)->result_array();
	}

	public function getOnce($id) {
		$this->db->where($this->_id, $id);
		return $this->db->get($this->_table)->row_array();
	}

	public function count_all(){
		$this->db->where('type', $this->_type);
		$this->db->where($this->_status, '1');
		return $this->db->count_all_results($this->_table);
	}
}	