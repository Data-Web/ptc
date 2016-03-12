<?php
require("libraries/student.php");
class Hangsanxuat extends Student {
	public function __construct() {
		parent::__construct();
		$this->load->model('mhangsanxuat');
	}

	public function index() {
		$config['base_url'] 	= base_url()."admin/hangsanxuat/index";
		$config['total_rows'] 	= $this->mhangsanxuat->count_all();
		$config['per_page'] 	= "30";
		$config['uri_segment'] 	= "4";
		$config['next_link'] 	= "Next";
		$config['prev_link'] 	= "Prev";
		$config['first_link'] 	= "First";
		$config['last_link'] 	= "Last";
		$this->load->library("pagination");
		$this->pagination->initialize($config);
		$start = $this->uri->segment(4);
		$data['list'] = $this->mhangsanxuat->getAll($config['per_page'], $start);
		$data['title'] 			= "Danh sách hãng sản xuất";
		$data['template'] 		= "hangsanxuat/list";
		$this->load->view("layout",$data);
	}

	public function add()
	{
		$this->load->helper("form");
		if($this->input->post('ok') != ""){
			$this->form_validation->set_rules('hangsanxuat_name', 'Tên hãng sản xuất', 'required');
		
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
            if($this->form_validation->run()){ 
            	$url = $this->string->makeTitle($this->input->post('hangsanxuat_name'));
            	$val = array(
					"hangsanxuat_name"		=> $this->fillter($this->input->post("hangsanxuat_name")),
					"hangsanxuat_rewrite"	=> $url,
					"language"	=> $this->fillter($this->input->post("language"))
				);
                $this->mhangsanxuat->insertOrupdate($val);
            	redirect(base_url('admin/hangsanxuat'), 'location');
            }
		}
		$data['title'] = "Thêm mới hãng sản xuất";
		$data['template'] = "hangsanxuat/form";
		$this->load->view("layout",$data);	
	}

	public function update() {
		$id = $this->uri->segment(4);
		$data['info']  = $this->mhangsanxuat->getOnce($id);
		$this->load->helper("form");
		if($this->input->post('ok') != ""){
			$this->form_validation->set_rules('hangsanxuat_name', 'Tên hãng sản xuất', 'required');
		
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
            if($this->form_validation->run()){ 
            	$url = $this->string->makeTitle($this->input->post('hangsanxuat_name'));
            	$val = array(
					"hangsanxuat_name"		=> $this->fillter($this->input->post("hangsanxuat_name")),
					"hangsanxuat_rewrite"	=> $url,
					"language"	=> $this->fillter($this->input->post("language")),
				);
                $this->mhangsanxuat->insertOrupdate($val, $id);
            	redirect(base_url('admin/hangsanxuat'), 'location');
            }
		}
		$data['title'] = "Cập nhật hãng sản xuất";
		$data['template'] = "hangsanxuat/form";
		$this->load->view("layout",$data);
	}

	public function del() {
		$id = $this->input->post('id');
    	$this->mhangsanxuat->delete($id);
	}

	public function update_status(){
		$id = $this->input->post('rel');
		if($this->input->post("type")){
			$status = $this->input->post('val');
			if($status == 0){
				$val = array(
					"hangsanxuat_status" => "1"
				);
				$this->mhangsanxuat->insertOrupdate($val,$id);
				die();
			}else{
				$val = array(
					"hangsanxuat_status" => "0"
				);
				$this->mhangsanxuat->insertOrupdate($val,$id);
				die();
			}
		}
	}
	public function update_order(){
		$id = $this->input->post('id');
		$val = $this->fillter($this->input->post('val'));
		$data = array(
			"hangsanxuat_order" => $val
		);
		$this->mhangsanxuat->insertOrupdate($data,$id);
	}
}	