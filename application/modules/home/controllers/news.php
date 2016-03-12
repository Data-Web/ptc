<?php
	class News extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->library("string");
		}
		public function index(){
			$data['lang_page'] 	= $this->session->userdata('lang_page');
			$data['infoCate']	= '';
			if ($data['lang_page'] == '1') 
				$config['base_url'] 	= base_url()."tin-tuc";
			else
				$config['base_url'] 	= base_url()."news";
			$config['total_rows'] 	= $this->mnews->count_all($data['lang_page']);
			$config['per_page'] 	= "10";
			$config['uri_segment'] 	= "2";
			$config['next_link'] 	= "Next";
			$config['prev_link'] 	= "Prev";
			$config['first_link'] 	= "First";
			$config['last_link'] 	= "Last";
			$this->load->library("pagination");
			$this->pagination->initialize($config);
			$start = $this->uri->segment(2);
			if ($config['total_rows']) {
				$listNews = $this->mnews->getAll($data['lang_page'], $config['per_page'], $start);
				if (!empty($listNews)) {
					foreach($listNews as $k => $v) {
						if ($v['news_images']) 
							$listNews[$k]['news_images'] = base_url('uploads/news/thumb/'.$v['news_images']);
						else 
							$listNews[$k]['news_images'] = base_url('public/admin/images/no-images.jpg');
					}
				}
			} else
				$listNews = '';

			// System
			$data['activeMenu']			= 'news';
			$data['configWeb']			= $this->_config;
			$data['config']   			= $this->mindex->getdata();
			$data['info'] 				= $get_setup = $this->mindex->get_setup();
			
			$data['title'] 				= 'Tin tức tân phát';
			$data['keyword']            = 'Tin tức tân phát';
            $data['description']        = 'Tin tức tân phát';

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
            $data['listHangSanXuat']    = $this->mhangsanxuat->getAll($data['lang_page']);
			$data['listNews']			= $listNews;
			$data['template'] 			= 'news/index';
			$this->load->view('layout', $data);
		}

		public function detail() {
			$data['lang_page'] 	= $this->session->userdata('lang_page');
			$params 			= $this->uri->segment(2);
			$id					= (int)end(explode("-", $params));
			$info 				= $this->mnews->getOnce($id);
			if ($data['lang_page'] != $info['news_lang'])
				redirect(base_url());
			if (empty($info)) 
				redirect(base_url());
			$data['infoCate']	= $this->mnewscategory->getOnce($info['cago_id']);
			if (empty($data['infoCate']))
				redirect(base_url());
			$data['fullURL'] 	= uri_string();
			$data['infoItem']	= $info;

			// System
			$data['activeMenu']			= 'news';
			$data['configWeb']			= $this->_config;
			$data['config']   			= $this->mindex->getdata();
			$data['info'] 				= $get_setup = $this->mindex->get_setup();
			$data['title'] 				= $info['news_title'];
			$data['keyword']            = $info['news_key'];
            $data['description']        = $info['news_des'];

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
            $data['listHangSanXuat']    = $this->mhangsanxuat->getAll($data['lang_page']);
            
			$data['template'] 	= 'news/detail';
			$this->load->view('layout', $data);
		}
	}