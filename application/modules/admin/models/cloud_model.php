<?php

class cloud_model extends CI_Model
{
	protected $_table = 'tbl_cloud';

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function insertOrUpdate($data, $id = "") {
		if ($id) {
			$this->db->where('id', $id);
			$this->db->update($this->_table, $data);
		} else {
			$this->db->insert($this->_table, $data);
		}
	}

	public function getOne($id)
	{
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->_table);
	}
}
