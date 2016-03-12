<?php

	$sess_key = $_SESSION['sess_key_to_web'];
	$sess_domain = $_SESSION['sess_key_domain'];
	$arr_key = array($sess_key);
	if(in_array($sess_domain,$arr_key)){
		
		require("libraries/student.php");
		class Index extends Student{
			public function __construct(){
				parent::__construct();
				$this->load->helper("url");
				$this->load->library("string");	
				$this->load->model("mindex");
				$this->load->model("msetup");
			}
			public function index(){
				$data['act'] 			= 0;
				$data['title'] 			= "Thông tin cơ bản";
				$data['list_contact'] 	= $this->mindex->list_contact();
				$data['list_order'] 	= $this->mindex->list_order();
				$data['list_proview'] 	= $this->mindex->list_proview();
				$data['list_buy'] 		= $this->mindex->list_buy();
				$data['list_search'] 	= $this->mindex->list_search();
				$data['list_referer'] 	= $this->mindex->list_referer();
				$data['setup']			= $this->msetup->getdata();
				$data['product_total']  = $this->mindex->totalProduct();
				$data['customer_total']  = $this->mindex->totalCustomer();
				$data['category_total']  = $this->mindex->totalCategory();
				$data['product_hot_total']  = $this->mindex->totalProductHot();
				//$this->debug($data['setup']);
				$data['template'] = "home";
				$this->load->view("layout",$data);
			}
		}
	}