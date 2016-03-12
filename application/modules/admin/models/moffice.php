<?php
class moffice extends CI_Model {
	protected $_table 	= 'tbl_office';
	protected $_id 		= 'office_id';
	protected $_order 	= 'office_order';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function insertOrupdate($data, $id = null) {
		if ($id == null) {
			$this->db->insert($this->_table, $data);
		} else {
			$this->db->where($this->_id, $id);
			$this->db->update($this->_table, $data);
		}
	}

	public function delete($id) {
		if (!$id)
			return 'Thieu id';
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}

	public function getAll($limit = '', $start = '') {
		if ($limit && $start)
			$this->db->limit($limit, $start);
		$this->db->order_by($this->_order, 'DESC');
		$this->db->order_by($this->_id, 'DESC');
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