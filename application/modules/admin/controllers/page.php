<?php
	require("libraries/student.php");
	class Page extends Student{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->model("mpage");
			$this->load->library("string");
		}
		public function index(){
			$config['base_url'] 	= base_url()."admin/page/index";
			$config['total_rows'] 	= $this->mpage->count_all();
			$config['per_page'] 	= "10";
			$config['uri_segment'] 	= "4";
			$config['next_link'] 	= "Next";
			$config['prev_link'] 	= "Prev";
			$config['first_link'] 	= "First";
			$config['last_link'] 	= "Last";
			$this->load->library("pagination");
			$this->pagination->initialize($config);
			$start = $this->uri->segment(4);
			$data['list_page'] = $this->mpage->list_page($config['per_page'],$start);
			$data['act'] = "5";
			$data['title'] = "Danh sách nội dung cố định";
			$data['template'] = "page/list_page";
			$this->load->view("layout",$data);
		}
		public function add(){
			$data['act'] = "5";
			$data['title'] = "Thêm mới nội dung cố định";
			$data['template'] = "page/add_page";
			$this->load->helper("form");
			if($this->input->post('ok') != ""){
				$val = array(
					"page_title"	=> $this->fillter($this->input->post("page_title")),
					"page_lang"		=> $this->input->post("page_lang"),
					"page_rewrite"	=> $this->fillter($this->input->post("page_rewrite")),
					"page_info"		=> $this->fillter($this->input->post("page_info")),
					"page_full"		=> $this->input->post("page_full"),
					"page_key"		=> $this->fillter($this->input->post("page_key")),
					"page_des"		=> $this->fillter($this->input->post("page_des")),
					"page_date"   	=> date("H:i:s - d/m/Y")
				);
				//$this->Debug($val);
				$this->mpage->add($val);
				redirect(base_url()."admin/page");
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function update(){
			$data['act'] = "5";
			$data['title'] = "Sửa nội dung cố định";
			$data['template'] = "page/edit_page";
			$id = $this->uri->segment(4);
			$data['get'] = $this->mpage->getdata($id);
			if($id == NULL || !isset($data['get']['page_id'])){
				redirect(base_url()."admin/page");
			}
			$this->load->helper("form");
			if($this->input->post('ok') != ""){
				$val = array(
					"page_lang"		=> $this->input->post("page_lang"),
					"page_rewrite"	=> $this->fillter($this->input->post("page_rewrite")),
					"page_title"	=> $this->fillter($this->input->post("page_title")),
					"page_info"		=> $this->fillter($this->input->post("page_info")),
					"page_full"		=> $this->input->post("page_full"),
					"page_key"		=> $this->fillter($this->input->post("page_key")),
					"page_des"		=> $this->fillter($this->input->post("page_des")),
					"page_date"   	=> date("H:i:s - d/m/Y")
				);
				$this->mpage->update_page($val,$id);
				redirect(base_url()."admin/page");
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function update_status(){
			$id = $this->input->post('rel');
			if($this->input->post("type")){
				$status = $this->input->post('val');
				if($status == 0){
					$val = array(
						"page_status" => "1"
					);
					$this->mpage->update_page($val,$id);
					die();
				}else{
					$val = array(
						"page_status" => "0"
					);
					$this->mpage->update_page($val,$id);
					die();
				}
			}
		}
		public function del(){
			$id = $this->input->post('id');
			$this->mpage->del($id);
		}
	}