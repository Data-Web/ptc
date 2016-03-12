<?php
class mnews extends CI_Model {
	protected $_table 	= 'tbl_news';
	protected $_id 		= 'news_id';
	protected $_lang 	= 'news_lang';
	protected $_status 	= 'news_status';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($lang, $limit = '', $start = '', $idCate = '') {
		if ($limit)
			$this->db->limit($limit, $start);
		if ($idCate)
			$this->db->where('cago_id', $idCate);
		$this->db->where($this->_lang, $lang);
		$this->db->where($this->_status, '1');
		$this->db->order_by($this->_id, 'DESC');
		return $this->db->get($this->_table)->result_array();
	}

	public function getOnce($id)
	{
		$this->db->where($this->_id, $id);
		return $this->db->get($this->_table)->row_array();
	}

	public function lastNews() {
		$this->db->order_by('news_id', 'DESC');
		return $this->db->get($this->_table)->row_array();
	}

	public function count_all($lang, $idCate = ''){
		if ($idCate)
			$this->db->where('cago_id', $idCate);
		$this->db->where($this->_status, '1');
		$this->db->where($this->_lang, $lang);
		return $this->db->count_all_results($this->_table);
	}
}