<?php
require("libraries/student.php");
class Link extends Student {
	public function __construct() {
		parent::__construct();
		$this->load->model('mlink');
	}

	public function index() {
		$config['base_url'] 	= base_url()."admin/link/index";
		$config['total_rows'] 	= $this->mlink->count_all();
		$config['per_page'] 	= "30";
		$config['uri_segment'] 	= "4";
		$config['next_link'] 	= "Next";
		$config['prev_link'] 	= "Prev";
		$config['first_link'] 	= "First";
		$config['last_link'] 	= "Last";
		$this->load->library("pagination");
		$this->pagination->initialize($config);
		$start = $this->uri->segment(4);
		$data['list'] = $this->mlink->getAll($config['per_page'], $start);
		$data['title'] 			= "Danh sách liên kết";
		$data['template'] 		= "link/list";
		$this->load->view("layout",$data);
	}

	public function add() 
	{
		$this->load->helper("form");
		if($this->input->post('ok') != ""){
			$this->form_validation->set_rules('link_url', 'Liên kết', 'required');
		
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
            if($this->form_validation->run()){ 
            	$val = array(
					"link_url"		=> $this->fillter($this->input->post("link_url"))
				);
                $this->mlink->insertOrupdate($val);
            	redirect(base_url('admin/link'), 'location');
            }
		}
		$data['title'] = "Thêm mới liên kết";
		$data['template'] = "link/form";
		$this->load->view("layout",$data);	
	}

	public function update() {
		$id = $this->uri->segment(4);
		$data['info']  = $this->mlink->getOnce($id);
		$this->load->helper("form");
		if($this->input->post('ok') != ""){
			$this->form_validation->set_rules('link_url', 'Liên kết', 'required');
		
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
            if($this->form_validation->run()){ 
            	$val = array(
					"link_url"		=> $this->fillter($this->input->post("link_url"))
				);
                $this->mlink->insertOrupdate($val, $id);
            	redirect(base_url('admin/link'), 'location');
            }
		}
		$data['title'] = "Cập nhật liên kết";
		$data['template'] = "link/form";
		$this->load->view("layout",$data);	
	}

	public function del() {
		$id = $this->input->post('id');
    	$this->mlink->delete($id);
	}

	public function update_status(){
		$id = $this->input->post('rel');
		if($this->input->post("type")){
			$status = $this->input->post('val');
			if($status == 0){
				$val = array(
					"link_status" => "1"
				);
				$this->mlink->insertOrupdate($val,$id);
				die();
			}else{
				$val = array(
					"link_status" => "0"
				);
				$this->mlink->insertOrupdate($val,$id);
				die();
			}
		}
	}
	public function update_order(){
		$id = $this->input->post('id');
		$val = $this->fillter($this->input->post('val'));
		$data = array(
			"link_order" => $val
		);
		$this->mlink->insertOrupdate($data,$id);
	}
}	