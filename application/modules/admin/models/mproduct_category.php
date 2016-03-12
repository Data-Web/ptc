<?php
  class mproduct_category extends CI_Model{
    protected $_table = "tbl_category";
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function count_all(){
        return $this->db->count_all($this->_table);
    }
    public function add($value){
        $this->db->insert($this->_table,$value);
    }

    public function del_cate($id)
    {   
        $checkProduct = $this->db->where('cate_id', $id)->get('tbl_products')->num_rows();
        $categoryTotal = $this->db->where('cate_id_parent', $id)->get($this->_table)->num_rows();
        if ($checkProduct > 0 || $categoryTotal > 0) {
            die('Danh mục đang có sản phẩm. Phải xóa hết sản phẩm mới được xóa. </a> <a href="javascript:history.go(-1)" >&laquo;Quay lại</a>');
            return false;
        }

        $cateIds = array();
        $this->db->where("cate_id",$id);
        $this->db->delete($this->_table);

        $categories = $this->db->where('cate_id_parent', $id)->get($this->_table)->result_array();

        if ($categories != null ) {
            foreach ($categories as $key => $value) {
                $cateIds[] = $value['cate_id'];
                $this->del_cate($value['cate_id']);       
            }
        }
    }

    public function update_cate($data,$id){
        $this->db->where("cate_id",$id);
        $this->db->update($this->_table,$data);
    }
    public function getdata($id){
        $this->db->where("cate_id",$id);
        return $this->db->get($this->_table)->row_array();
    }
    public function count_all_parent(){
        $this->db->where("cate_parent",1);
        return $this->db->count_all_results($this->_table);
    }
    public function list_cate($off,$start){
        $this->db->where("cate_parent",1);
        $this->db->order_by("cate_order","DESC");
        $this->db->limit($off,$start);
        return $this->db->get($this->_table)->result_array();
    }
    public function list_sub($cate_id){
        $this->db->where("cate_id_parent",$cate_id);
        $this->db->where("cate_parent",2);
        $this->db->order_by("cate_order","DESC");
        return $this->db->get($this->_table)->result_array();
    }

    public function list_cate_all($off,$start){
        $list = $this->list_cate($off,$start);
        $data = array();
        if($list != NULL){
            foreach($list as $k => $v){
                $data[] = $this->list_sub($v['cate_id']);
            }
        }
        $ok = array(
            "cate" => $list,
            "sub" => $data
        );
        return $ok;
    }

    public function getAllCategory($language = '', $id = '', $params = array())
    {
        if ($language) {
            $this->db->where('cate_lang', $language);
        }

        if ($id) {
            $this->db->where('cate_id !=', $id);
        }

        $this->db->order_by('cate_id', 'desc');
        return $this->db->get($this->_table)->result_array();
    }

    public function getAllOrFilterCategory($params = array(), $limit = null, $start = 0)
    {
        $this->db->select('tbl_category.*, 
            (select user_fullname from tbl_user where tbl_user.user_id = tbl_category.user_created) as usercreate,
            (select user_fullname from tbl_user where tbl_user.user_id = tbl_category.user_updated) as userupdate');
        
        if (isset($params['language']) && $params['language'] != null) {
            $this->db->where('cate_lang', $params['language']);
        }

        if (isset($params['cate_name']) && $params['cate_name'] != null) {
            $this->db->where("cate_name  LIKE '%". $params['cate_name'] ."%'");
        }

        $this->db->order_by('cate_id', 'desc');

        if ($limit != null) {
            $this->db->limit($limit, $start);
        }

        return $this->db->get($this->_table)->result_array();
    }

    public function getTotalCategory($params = array())
    {
        $this->db->select('tbl_category.*, 
            (select user_fullname from tbl_user where tbl_user.user_id = tbl_category.user_created) as usercreate,
            (select user_fullname from tbl_user where tbl_user.user_id = tbl_category.user_updated) as userupdate');

        if (isset($params['language']) && $params['language'] != null) {
            $this->db->where('cate_lang', $params['language']);
        }
        
        if (isset($params['cate_name']) && $params['cate_name'] != null) {
            $this->db->where("cate_name  LIKE '%". $params['cate_name'] ."%'");
        }

        $this->db->order_by('cate_id', 'desc');
        return $this->db->get($this->_table)->num_rows();
    }

    public function checkName($name, $id = '') 
    {
        $this->db->where('cate_name', $name);
        if ($id) {
            $this->db->where('cate_id != ', $id);
        }
        
        return $this->db->get($this->_table)->num_rows();
    }
  }