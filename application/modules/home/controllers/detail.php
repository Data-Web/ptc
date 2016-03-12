<?php
	class Detail extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('session');
			$this->load->library("string");
			$this->load->model("mproduct");
		}
		public function index(){
			$id1 = $this->uri->segment(2);
		    $id  = array_pop(explode('p', $id1));
			$data['detail'] 		= $this->mproduct->getdata($id);
			if($id == NULL || !isset($data['detail']['pro_id'])){
				redirect(base_url());
			}
			$data['online'] 		= $this->online();
			$data['access'] 	= $this->access();
			$this->write($data['access']);
			$data['pro_view'] 		= $this->mindex->list_pro_view();
			$get_setup 				= $this->mindex->get_setup();
			$data['pro_hot'] 		= $this->mindex->list_pro_hot($get_setup['set_pro_hot']);
			$data['list_support'] 	= $this->mindex->list_support();
			$data['listall'] 		= $this->mindex->listall();
			$data['title'] 			= $data['detail']['pro_name'];
			$data['list_pro_best'] 	= $this->mcolumn_right->list_product();
			$data['list_news'] 		= $this->mcolumn_right->list_news();
			$this->mproduct->update_pro($id);
			
			/*$history = $this->mproduct->getdata($id);
			$his = array(
               'id'      	=> $history['pro_id'],
               'price'   	=> $history['pro_price'],
               'name'    	=> url_title($history['pro_name']),
			   'rewrite'    => $history['pro_name_rewrite'],
               'images' 	=> $history['pro_images']
            );
			$this->debug($his);
			$this->session->set_userdata($his);*/
			
			//$this->Debug($data['list_pro_best']);
			$this->load->view("product/detail/layout",$data);
		}
	}