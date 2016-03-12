<?php
class category_customer extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("string");
		$this->load->model('mcategory_customer');
	}
	public function index(){
		$data['lang_page'] 	= $this->session->userdata('lang_page');
		$params 			= $this->uri->segment(2);
		$id					= (int)end(explode("-", $params));
		$info 				= $this->mcategory->getOnce($id);
		$data['fullURL'] 	= uri_string();
		$data['infoItem']	= $info;
		
		if ($data['lang_page'] == '1') 
			$config['base_url'] 	= base_url()."danh-muc-khach-hang/".$info['cate_rewrite'].'-'.$info['cate_id'];
		else
			$config['base_url'] 	= base_url()."category-customer/".$info['cate_rewrite'].'-'.$info['cate_id'];
		$config['total_rows'] 	= $this->mcategory_customer->count_all($id);
		$config['per_page'] 	= "10";
		$config['uri_segment'] 	= "3";
		$config['next_link'] 	= "Next";
		$config['prev_link'] 	= "Prev";
		$config['first_link'] 	= "First";
		$config['last_link'] 	= "Last";
		$this->load->library("pagination");
		$this->pagination->initialize($config);
		$start = $this->uri->segment(3);

		// System
		$data['activeMenu']			= 'customer';
		$data['configWeb']			= $this->_config;
		$data['config']   			= $this->mindex->getdata();
		$data['info'] 				= $get_setup = $this->mindex->get_setup();
		$data['title'] 				= $data['config']['config_title'];
		$data['listSlide']			= $this->_slide;
		$data['listCategory'] 		= $this->_listCategoryMenu;
		$data['listNewsCategory']	= $this->_listNewsCategory;
		$data['listServiceMenu']	= $this->_listServiceMenu;
		$data['listIntroduceMenu']	= $this->_listIntroduceMenu;
		$data['listRecruitMenu']	= $this->_listRecruitMenu;
		$data['listCustomerMenu']	= $this->_listCustomerMenu;
		$data['footerInfo']			= $this->_footerInfo;
		$data['userAccess']         = $this->_count_user_access;
            	$data['userOnline']         = $this->_user_online;
		
		$data['listCustomer']		= $this->mcategory_customer->getAll($config['per_page'], $start, $id);

		$data['template'] 		= 'category_customer/index';
		$this->load->view('layout', $data);
	}
}