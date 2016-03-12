<?php
class mcategory_customer extends CI_Model {
	protected $_table 	= 'category_customers';
	protected $_cus 	= 'tanphat_posts';
	protected $_cate 	= 'tbl_category';
	protected $_id 		= 'id';
	protected $_lang 	= 'language';
	protected $_status 	= 'status';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($limit = '', $start = '', $idCate) {
		$this->db->select('*');
		$this->db->from('tanphat_posts');
		$this->db->join('category_customers', 'category_customers.customer_id = tanphat_posts.id');
		$this->db->join('tbl_category', 'category_customers.category_id = tbl_category.cate_id');
		$this->db->where('tbl_category.is_home', 1);
		$this->db->where('tbl_category.cate_status', 1);
		$this->db->where('tbl_category.cate_id', $idCate);
		$this->db->where('tanphat_posts.type', 'CUS');
		$this->db->where('tanphat_posts.status', 1);
		$this->db->order_by('tanphat_posts.id', 'DESC');
		if ($limit)
			$this->db->limit($limit, $start);
		return $this->db->get()->result_array();
	}

	public function getOnce($id) {
		$this->db->where($this->_id, $id);
		return $this->db->get($this->_table)->row_array();
	}

	public function count_all($idCate){
		$this->db->select('*');
		$this->db->join('category_customers', 'category_customers.customer_id = tanphat_posts.id');
		$this->db->join('tbl_category', 'category_customers.category_id = tbl_category.cate_id');
		$this->db->where('tbl_category.is_home', 1);
		$this->db->where('tbl_category.cate_status', 1);
		$this->db->where('tbl_category.cate_id', $idCate);
		$this->db->where('tanphat_posts.type', 'CUS');
		$this->db->where('tanphat_posts.status', 1);
		return $this->db->count_all_results('tanphat_posts');
	}
}	