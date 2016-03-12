<?php
	class contact extends MY_Controller{
		protected $_lang_page;

		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->helper("form");
			$this->load->helper('captcha');
			$this->load->library("string");
			$this->load->library("session");
			$this->load->library('form_validation');
			$this->load->model('mcaptcha');
			$this->load->model("mcustomer_contact");
			$this->_lang_page = $this->session->userdata('lang_page');
		}
		public function index(){
			$data['lang_page'] = $this->_lang_page; 
			if (isset($_POST['addcontact'])) {
				$this->_validation();
				$this->_messages();
				if($this->form_validation->run()){ 
					$data = $this->_getData();
					$this->mcustomer_contact->insertContact($data);
					$_SESSION['added'] = 1;
					if ($this->_lang_page == '1')
						redirect(base_url('lien-he'), 'location');
					else 
						redirect(base_url('contact'), 'location');
				}
			}

			// System
			$data['activeMenu']			= 'contact';
			$data['configWeb']			= $this->_config;
			$data['config']   			= $this->mindex->getdata();
			$data['info'] 				= $get_setup = $this->mindex->get_setup();
			$data['title'] 				= "Liên hệ với chúng tôi | ". $data['config']['config_title'];
			$data['keyword'] 		    = "Liên hệ với chúng tôi | ". $data['config']['config_title'];
			$data['description'] 		= "Liên hệ với chúng tôi | ". $data['config']['config_title'];
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

			$data['listOffice']		= $this->moffice->getAll($this->_lang_page);
			$data['template'] 		= 'contact/index';
			$this->load->view('layout', $data);
		}

		private function _validation() {
			if ($this->_lang_page == '1') {
				$this->form_validation->set_rules('con_name', 'Họ và tên', 'required|min_length[4]');
				$this->form_validation->set_rules('con_email', 'Email', 'required|email');
				$this->form_validation->set_rules('con_full', 'Nội dung', 'required');
			} else {
				$this->form_validation->set_rules('con_name', 'Fullname', 'required|min_length[4]');
				$this->form_validation->set_rules('con_email', 'Email', 'required|email');
				$this->form_validation->set_rules('con_full', 'Content', 'required');
			}
		}

		private function _messages() {
			if ($this->_lang_page == '1') {
				$this->form_validation->set_message('required', '%s không được để trống');
				$this->form_validation->set_message('min_length', '%s không được ít hơn %d ký tự');
				$this->form_validation->set_message('email', '%s không đúng định dạng');
			} else {
				$this->form_validation->set_message('required', '%s required');
				$this->form_validation->set_message('min_length', 'Input is too short, minimum is %d characters');
				$this->form_validation->set_message('email', 'Invalid %s format');
			}
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-validate">','</div>');
		}

		private function _getData() {
			$data = array(
				'con_name'		=> $this->input->post('con_name'),
				'con_email'		=> $this->input->post('con_email'),
				'con_phone'		=> $this->input->post('con_phone'),
				'con_full'		=> $this->input->post('con_full'),
				'office_id'		=> $this->input->post('office_id'),
				"con_date"      => date("H:i:s - d/m/Y")
			);
			return $data;
		}
	}