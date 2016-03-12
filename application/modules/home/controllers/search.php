<?php
	class Search extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->model("mproduct");
			$this->load->model("mhangsanxuat");
			$this->load->library("string");
		}
		public function index(){
			$data['lang_page'] 	= $this->session->userdata('lang_page');
			$hsx = $this->input->get('hsx');
			$data['keyword']	= $this->input->get('s');
			if ($data['lang_page'] == '1') 
				$config['base_url'] 	= base_url()."tim-kiem";
			else
				$config['base_url'] 	= base_url()."search";
			if ($hsx) {
				if ($data['keyword']) 
					$config['total_rows'] 	= $this->mproduct->count_all($data['lang_page'], $hsx, $data['keyword']);
				else 
					$config['total_rows'] 	= $this->mproduct->count_all($data['lang_page'], $hsx);
			} else 
				$config['total_rows'] 	= $this->mproduct->count_all($data['lang_page'], '', $data['keyword']);
			
			$config['per_page'] 	= "10";
			$config['uri_segment'] 	= "2";
			$config['next_link'] 	= "Next";
			$config['prev_link'] 	= "Prev";
			$config['first_link'] 	= "First";
			$config['last_link'] 	= "Last";
			if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
			$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
			$this->load->library("pagination");
			$this->pagination->initialize($config);
			$start = $this->uri->segment(2);
			if ($hsx) {
				if ($data['keyword']) 
					$listProduct = $this->mproduct->getAll($data['lang_page'], $config['per_page'], $start, $hsx, $data['keyword']);
				else
					$listProduct = $this->mproduct->getAll($data['lang_page'], $config['per_page'], $start, $hsx);
			} else 
				$listProduct = $this->mproduct->getAll($data['lang_page'], $config['per_page'], $start, '', $data['keyword']);

			$data['totalRecord'] = $config['total_rows'];
			if (!empty($listProduct)) {
				foreach($listProduct as $k => $v) {
					if ($v['pro_images']) {
						@$images = unserialize($v['pro_images']);
						$listProduct[$k]['pro_images'] = base_url('uploads/products/thumb/'.$images[0]);
					}
					else 
						$listProduct[$k]['pro_images'] = base_url('public/admin/images/no-images.jpg');
				}
			}

			// System
			$data['activeMenu']			= 'home';
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

			$data['listHangSanXuat']	= $this->mhangsanxuat->getAll($data['lang_page']);
			$data['listProduct']		= $listProduct;

			$data['template'] = 'search/index';
			$this->load->view('layout', $data);
		}
	}