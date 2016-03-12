<?php
	class Mindex extends CI_Model{
		protected $_table 			= "tbl_config";
		protected $_category 		= "tbl_category";
		protected $_subcategory 	= "tbl_subcategory";
		protected $_news 			= "tbl_news";
		protected $_support 		= "tbl_support";
		protected $_setup 			= "tbl_setup";
		protected $_product 		= "tbl_products";
		protected $_popup 			= "tbl_popup";
		protected $_referer			= "tbl_referer";
		protected $_lang			= 'pro_lang';
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function get_setup(){
			$this->db->where("set_id","1");
			return $this->db->get($this->_setup)->row_array();
		}
		public function getdata(){
			$this->db->where("config_id","1");
			return $this->db->get($this->_table)->row_array();
		}
		public function get_popup(){
			$this->db->where("pop_id","1");
			return $this->db->get($this->_popup)->row_array();
		}
		public function list_pro_saleoff($off){
			$this->db->where("pro_status","1");
			$this->db->where("pro_saleoff","1");
			$this->db->order_by("pro_saleoff_check","DESC");
			$this->db->limit($off);
			return $this->db->get($this->_product)->result_array();
		}
		
		public function list_pro_new($lang, $off)
		{
	        $this->db->where("pro_status","1");
		    $this->db->where($this->_lang, $lang);
		    $this->db->where("pro_hot != ", "1");
		    $this->db->order_by("updated_at", "desc");
		    $this->db->limit($off);
		    return $this->db->get($this->_product)->result_array();

		}

		public function list_pro_hot($lang = 'vi')
		{
			$this->db->where("pro_status", "1");
			$this->db->where("pro_hot", "1");
			$this->db->where($this->_lang, $lang);
			$this->db->order_by("updated_at", "desc");
			return $this->db->get($this->_product)->result_array();
		}


		public function list_pro_bestsale($off){
			$this->db->where("pro_status","1");
			$this->db->where("pro_bestsale","1");
			$this->db->order_by("pro_bestsale_check", "DESC");
			$this->db->limit($off);
			return $this->db->get($this->_product)->result_array();
		}
		
		public function list_pro_view(){
			$this->db->where("pro_status","1");
			$this->db->order_by("pro_view","DESC");
			$this->db->limit(4);
			return $this->db->get($this->_product)->result_array();
		}
		public function list_news()
		{
			$this->db->order_by("news_id","DESC");
			$this->db->limit(3);
			return $this->db->get($this->_news)->result_array();
		}
		public function list_support(){
			$this->db->where("sup_status",1);
			$this->db->order_by("sup_id","DESC");
			return $this->db->get($this->_support)->result_array();
		}
		public function list_cate(){
			$this->db->where("cate_status",1);
			$this->db->where("cate_parent",1);
			$this->db->order_by("cate_order","DESC");
			return $this->db->get($this->_category)->result_array();
		}
		public function list_sub($cate_id){
			$this->db->where("cate_id_parent",$cate_id);
			$this->db->where("cate_parent",2);
			$this->db->order_by("cate_order","DESC");
			return $this->db->get($this->_category)->result_array();
		}
		public function listall(){
			$list = $this->list_cate();
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
		public function add_referer($data){
			$this->db->insert($this->_referer,$data);
		}
		public function check_referer($domain,$id=""){
			if($id != ""){
				$this->db->where("re_id !=",$id);
			}
			$this->db->where("re_domain",$domain);
			$query=$this->db->get($this->_referer);
			if($query->num_rows() == 0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		public function update_referer($domain){
			$this->db->where("re_domain",$domain);
			$this->db->set('re_count','re_count+1',FALSE);
			$this->db->update($this->_referer);
		}
	}