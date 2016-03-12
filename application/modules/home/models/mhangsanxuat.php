<?php
class mhangsanxuat extends CI_Model {
    protected $_table   = 'tbl_hangsanxuat';
    protected $_id      = 'hangsanxuat_id';
    protected $_order   = 'hangsanxuat_order';
    protected $_lang    = 'language';
    protected $_status  = 'hangsanxuat_status';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAll($lang, $limit = '', $start = '') 
    {
        if ($limit)
            $this->db->limit($limit, $start);
        
        return $this->db->select('tbl_hangsanxuat.hangsanxuat_name, tbl_hangsanxuat.hangsanxuat_id,
                (select count(tbl_products.pro_id) from tbl_products where tbl_products.hangsanxuat_id = tbl_hangsanxuat.hangsanxuat_id) as total_product')
            ->where($this->_lang, $lang)
            ->where($this->_status, '1')
            ->order_by($this->_order, 'DESC')
            ->order_by($this->_id, 'DESC')
            ->from($this->_table)->get()->result_array();
    }

    public function getOnce($id) {
        $this->db->where($this->_id, $id);
        return $this->db->get($this->_table)->row_array();
    }

    public function count_all($lang) {
        $this->db->where($this->_lang, $lang);
        return $this->db->count_all_results($this->_table);
    }
}