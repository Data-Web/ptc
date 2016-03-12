<?php
class customer extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("string");
    }
    public function index(){
        $data['lang_page']  = $this->session->userdata('lang_page');
        if ($data['lang_page'] == '1') 
            $config['base_url']     = base_url()."khach-hang";
        else
            $config['base_url']     = base_url()."customer";
        $config['total_rows']   = $this->mcustomer->count_all();
        $config['per_page']     = "10";
        $config['uri_segment']  = "2";
        $config['next_link']    = "Next";
        $config['prev_link']    = "Prev";
        $config['first_link']   = "First";
        $config['last_link']    = "Last";
        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $start = $this->uri->segment(2);

        // System
        $data['activeMenu']         = 'customer';
        $data['configWeb']          = $this->_config;
        $data['config']             = $this->mindex->getdata();
        $data['info']               = $get_setup = $this->mindex->get_setup();

        $data['title']              = "Danh sách khách hàng Tân Phát";
        $data['keyword']            = "Danh sách khách hàng Tân Phát";
        $data['description']        = "Danh sách khách hàng Tân Phát";

        $data['listSlide']          = $this->_slide;
        $data['listCategory']       = $this->_listCategoryMenu;
        $data['listNewsCategory']   = $this->_listNewsCategory;
        $data['listServiceMenu']    = $this->_listServiceMenu;
        $data['listIntroduceMenu']  = $this->_listIntroduceMenu;
        $data['listRecruitMenu']    = $this->_listRecruitMenu;
        $data['listCustomerMenu']   = $this->_listCustomerMenu;
        $data['footerInfo']         = $this->_footerInfo;
        $data['userAccess']         = $this->_count_user_access;
        $data['userOnline']         = $this->_user_online;
        $data['listCustomer']       = $this->mcustomer->getAll($config['per_page'], $start);
        $data['listHangSanXuat']    = $this->mhangsanxuat->getAll($data['lang_page']);
        $data['template']       = 'customer/index';
        $this->load->view('layout', $data);
    }

    public function detail() {
        $data['lang_page']  = $this->session->userdata('lang_page');
        $params             = $this->uri->segment(2);
        $id                 = (int)end(explode("-", $params));
        $info               = $this->mcustomer->getOnce($id);
        
        if (empty($info)) 
            redirect(base_url());
        $data['fullURL']    = uri_string();
        $data['infoItem']   = $info;

        // System
        $data['footerInfo']         = $this->_footerInfo;
        $data['activeMenu']         = 'customer';
        $data['configWeb']          = $this->_config;
        $data['config']             = $this->mindex->getdata();
        $data['info']               = $get_setup = $this->mindex->get_setup();
        $data['title']              = $info['title'];
        $data['keyword']            = $info['seo_keyword'];
        $data['description']        = $info['seo_desc'];

        $data['listSlide']          = $this->_slide;
        $data['listCategory']       = $this->_listCategoryMenu;
        $data['listNewsCategory']   = $this->_listNewsCategory;
        $data['listServiceMenu']    = $this->_listServiceMenu;
        $data['listIntroduceMenu']  = $this->_listIntroduceMenu;
        $data['listRecruitMenu']    = $this->_listRecruitMenu;
        $data['listCustomerMenu']   = $this->_listCustomerMenu;
        $data['userAccess']         = $this->_count_user_access;
        $data['userOnline']         = $this->_user_online;
        $data['listHangSanXuat']    = $this->mhangsanxuat->getAll($data['lang_page']);
        $data['template']   = 'customer/detail';
        $this->load->view('layout', $data);
    }
}