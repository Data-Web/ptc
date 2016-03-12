<?php
class Mcategory extends CI_Model {
	protected $_table 		= 'tbl_category';
	protected $_id 			= 'cate_id';
	protected $_order 		= 'cate_order';
	protected $_status 		= 'cate_status';
	protected $_lang 		= 'cate_lang';
	protected $_product 	= 'tbl_products';
	protected $_references	= 'cate_id';
	protected $_prostatus	= 'pro_status';
	protected $_cateIds      = array();
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll($lang, $limit = '', $start = '') {
		if ($limit)
			$this->db->limit($limit, $start);
		$this->db->where($this->_lang, $lang);
		$this->db->where($this->_status, '1');
		$this->db->order_by($this->_order, 'DESC');
		$this->db->order_by($this->_id, 'DESC');
		return $this->db->get($this->_table)->result_array();
	}

	public function getAllSubCategories($lang, $id) {
		$this->db->where($this->_lang, $lang);
		$this->db->where('cate_id_parent', $id);
		$this->db->where($this->_status, '1');
		$this->db->order_by($this->_order, 'DESC');
		$this->db->order_by($this->_id, 'DESC');
		return $this->db->get($this->_table)->result_array();
	}

	public function getCateParent($lang, $limit = '') {
		if ($limit)
			$this->db->limit($limit);
		$this->db->where('cate_id_parent', 0);
		$this->db->where($this->_lang, $lang);
		$this->db->where($this->_status, 1);
		$this->db->where('is_home', 1);
		$this->db->order_by($this->_order, 'DESC');
		$this->db->order_by($this->_id, 'DESC');
		return $this->db->get($this->_table)->result_array();
	}

	public function getOnce($id) {
		$this->db->where($this->_id, $id);
		return $this->db->get($this->_table)->row_array();
	}

	public function getProductOfCate($lang, $limit = '', $start = '', $idCate = array()) {
		$this->db->select($this->_product.".*");
		$this->db->from($this->_table);
		$this->db->join($this->_product, $this->_product.".".$this->_references."=".$this->_table.".".$this->_id, 'left');
		$this->db->where('pro_lang', $lang);
		$this->db->where_in($this->_table.".".$this->_id, $idCate);
		$this->db->where($this->_product.".".$this->_prostatus, 1);
		$this->db->order_by('updated_at', 'desc');
		if ($limit)
			$this->db->limit($limit, $start);
		return $this->db->get()->result_array();
	}
	
	public function getCateIds($id) 
    {
        $categories = $this->db->where('cate_id_parent', $id)
                        ->get($this->_table)
                        ->result_array();          
        $cateIds = array();

        foreach ($categories as $value) {
            $this->getCateIds($value['cate_id']);       
            array_push($this->_cateIds, $value['cate_id']);
        }
    }

    public function cateIds() 
    {
        return $this->_cateIds;
    }
}