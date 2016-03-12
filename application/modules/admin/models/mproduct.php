<?php
class mproduct extends CI_Model
{
        protected $_product= "tbl_products";
        protected $_cate = "tbl_category";

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        
        public function list_cate()
        {
            $this->db->where("cate_parent", 1);
            return $this->db->get($this->_cate)->result_array();
        }

        public function list_sub($cate_id)
        {
            $this->db->where("cate_id_parent", $cate_id);
            $this->db->where("cate_parent", 2);
            return $this->db->get($this->_cate)->result_array();
        }

        public function list_pro($off,$start)
        {
            $this->db->join("tbl_category","tbl_category.cate_id = tbl_products.cate_id");
            $this->db->order_by("pro_id","DESC");
            $this->db->limit($off,$start);
            return $this->db->get($this->_product)->result_array();
        }

        public function count_all()
        {
            $this->db->join("tbl_category","tbl_category.cate_id = tbl_products.cate_id");
            return $this->db->count_all_results($this->_product);
        }

        public function list_pro_cate($id,$off,$start)
        {
            $this->db->join("tbl_category","tbl_category.cate_id = tbl_products.cate_id");
            $this->db->where("tbl_products.cate_id", $id);
            $this->db->or_where("tbl_products.cate_id_parent",$id);
            $this->db->order_by("pro_id","DESC");
            $this->db->limit($off,$start);
            return $this->db->get($this->_product)->result_array();
        }
        public function count_all_procate($id){
            $this->db->join("tbl_category","tbl_category.cate_id = tbl_products.cate_id");
            $this->db->where("tbl_products.cate_id",$id);
            $this->db->or_where("tbl_products.cate_id_parent",$id);
            return $this->db->count_all_results($this->_product);
        }
        public function list_pro_change($off, $start, $id){
            $this->db->where("cate_id",$id);
            $this->db->order_by("pro_id","DESC");
            $this->db->limit($off,$start);
            return $this->db->get($this->_product)->result_array();
        }
        public function count_alls($id)
        {
            $this->db->where("cago_id",$id);
            return $this->db->count_all_results($this->_product);
        }

        public function add($value)
        {
            $this->db->set('created_at', 'NOW()', FALSE);
            $this->db->set('updated_at', 'NOW()', FALSE);
            $this->db->insert($this->_product, $value);
            $insert_id = $this->db->insert_id();

            return  $insert_id;
        }

        public function del($id)
        {
            $this->db->where("pro_id",$id);
            $this->db->delete($this->_product);
        }

        public function update_product($data,$id)
        {
            $this->db->where("pro_id",$id);
            $this->db->set('updated_at', 'NOW()', FALSE);
            $this->db->update($this->_product,$data);
        }

        public function getdata($id)
        {
            $this->db->where("pro_id",$id);
            return $this->db->get($this->_product)->row_array();
        }

    public function getAllProduct($limit = "", $start = 0, $params = array())
    {
        $this->db->select('tbl_products.*, cate_name, hangsanxuat_name, 
            (select user_fullname from tbl_user where tbl_user.user_id = tbl_products.user_created) as usercreate,
            (select user_fullname from tbl_user where tbl_user.user_id = tbl_products.user_updated) as userupdate');

        if (isset($params['cate']) && $params['cate']) {
            $this->db->where('tbl_products.cate_id', $params['cate']);
        }

        if (isset($params['hot']) && $params['hot']) {
            $this->db->where('tbl_products.pro_hot', $params['hot']);
        }

        if (isset($params['language']) && $params['language']) {
            $this->db->where('tbl_products.pro_lang', $params['language']);
        }

        if((isset($params['pro_name']) && $params['pro_name'] != null)) {
            $this->db->where("pro_name  LIKE '%". $params['pro_name'] ."%'");
        }

        if (isset($params['hangsanxuat']) && $params['hangsanxuat']) {
            $this->db->where('tbl_products.hangsanxuat_id', $params['hangsanxuat']);
        }

        if ($limit != null) {
            $this->db->limit($limit,$start);
        }

        return $this->db->from($this->_product)
                    ->join('tbl_category', 'tbl_category.cate_id = tbl_products.cate_id','left')
                    ->join('tbl_hangsanxuat', 'tbl_hangsanxuat.hangsanxuat_id = tbl_products.hangsanxuat_id','left')
                    ->order_by('updated_at','desc')
                    ->get()
                    ->result_array();
    }


    public function productTotal($params = array())
    {
        $this->db->select('tbl_products.*, cate_name');

        if((isset($params['cate']) && $params['cate'] != null)) {
            $this->db->where('tbl_products.cate_id', $params['cate']);
        }

        if((isset($params['pro_name']) && $params['pro_name'] != null)) {
            $this->db->where("pro_name  LIKE '%". $params['pro_name'] ."%'");
        }

        if((isset($params['language']) && $params['language'] != null)) {
            $this->db->where('tbl_products.pro_lang', $params['language']);
        }

        if (isset($params['hot']) && $params['hot']) {
            $this->db->where('tbl_products.pro_hot', $params['hot']);
        }
        
        return $this->db->from($this->_product)
                    ->join('tbl_category', 'tbl_category.cate_id = tbl_products.cate_id','left')
                    ->get()
                    ->num_rows();
    }

    public function getCategoriesByUser($categoryIds = array(), $language = "")
    {
        if ($language) {
            $this->db->where('cate_lang', $language);
        }
        $this->db->where_in('cate_id', $categoryIds);
        $this->db->where('cate_display', 'product');
        $this->db->order_by('cate_id', 'desc');
        return $this->db->get($this->_cate)->result_array();
    }

    public function getAllCategory($language = "")
    {   
        if ($language) {
            $this->db->where('cate_lang', $language);
        }

        return $this->db->get($this->_cate)->result_array();
    }

    public function insertProduct($data) {
        $this->db->insert('images_products', $data);
    }

    public function getAllImages($productId) {
        $this->db->where('product_id', $productId);
        return $this->db->get('images_products')->result_array();
    }

    public function getImages($id) 
    {
        $this->db->where('id', $id);
        $image = $this->db->get('images_products')->row_array();
        return $image;
    }

    public function deleteImages($id) 
    {
        $this->db->where('id', $id);
        $this->db->delete('images_products');
    }
}