<?php
	class Category extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->library("string");
			$this->load->model("mslide");
			$this->load->model("mcategory");
			$this->load->model("mproduct");
			$this->load->model('mlink');
                        $this->load->model('mhangsanxuat');
		}

		public function index()
		{
			$data['info'] 		= $get_setup = $this->mindex->get_setup();
			$data['lang_page'] 	= $this->session->userdata('lang_page');
			$params 			= $this->uri->segment(2);
			$id					= (int)end(explode("-", $params));
			$info				= $this->mcategory->getOnce($id);
			if (empty($info)) 
				redirect(base_url());
			$data['infoItem']	= $info;
			
			//Category ID Mutil
			$this->mcategory->getCateIds($id	);
			$cateIds = $this->mcategory->cateIds();
			$cateIds[] = $id;
			
			if ($data['lang_page'] == '1') 
				$config['base_url'] 	= base_url()."danh-muc/".$info['cate_rewrite'].'-'.$info['cate_id'];
			else
				$config['base_url'] 	= base_url()."category/".$info['cate_rewrite'].'-'.$info['cate_id'];

			$config['total_rows'] 	= $this->mproduct->count_all_cate_news($data['lang_page'],  $cateIds);
			$config['per_page'] 	= $get_setup['set_pro_saleoff'];
			$config['uri_segment'] 	= "3";
			$config['next_link'] 	= "Next";
			$config['prev_link'] 	= "Prev";
			$config['first_link'] 	= "First";
			$config['last_link'] 	= "Last";
			$this->load->library("pagination");
			$this->pagination->initialize($config);
			$start = $this->uri->segment(3);

			if ($config['total_rows']) {
				$listProduct = $this->mcategory->getProductOfCate($data['lang_page'], $config['per_page'], $start,  $cateIds);
				if (!empty($listProduct)) {
					foreach ($listProduct as $k => $v) {
						if ($v['pro_images']) {
							@$images = unserialize($v['pro_images']);
							$listProduct[$k]['pro_images'] = base_url('uploads/products/thumb/'.$images[0]);
						}
						else 
							$listProduct[$k]['pro_images'] = base_url('public/admin/images/no-images.jpg');
					}
				}
			} else
				$listProduct = '';

			$data['listProduct'] = $listProduct;
			$data['fullURL'] 	= base_url(uri_string());
			$list 				= $this->mcategory->getCateParent($data['lang_page']);
			$data['list']		= $list;
			
			// System
			$data['activeMenu']			= 'product';
			$data['configWeb']			= $this->_config;
			$data['config']   			= $this->mindex->getdata();
			
			$data['title'] 				= $data['infoItem']['cate_name'];
			
			$data['keyword']            = $info['cate_key'];
                        $data['description']        = $info['cate_des'];

			$data['listSlide']			= $this->_slide;
			$data['listCategory'] 		= $this->_listCategoryMenu;
			$data['listSubCategory'] 	= $this->_listSubCategory;
			$data['listNewsCategory']	= $this->_listNewsCategory;
			$data['listServiceMenu']	= $this->_listServiceMenu;
			$data['listIntroduceMenu']	= $this->_listIntroduceMenu;
			$data['listRecruitMenu']	= $this->_listRecruitMenu;
			$data['listCustomerMenu']	= $this->_listCustomerMenu;
			$data['footerInfo']			= $this->_footerInfo;
			$data['userAccess']         = $this->_count_user_access;
            $data['userOnline']         = $this->_user_online;
            $data['listLink']       = $this->mlink->getAll();
            $data['listHangSanXuat']    = $this->mhangsanxuat->getAll($data['lang_page']);
			$data['template'] 	= 'category/index';
			$this->load->view('layout', $data);
		}
	}
