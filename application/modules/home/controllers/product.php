<?php
    class Product extends MY_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->library("string");
            $this->load->model("mproduct");
            $this->load->model("mhangsanxuat");
            $this->load->model("mlink");
        }
        
        public function index()
        {
            $data['info']               = $get_setup = $this->mindex->get_setup();

            $data['lang_page']  = $this->session->userdata('lang_page');
            $hsx = $this->input->get('hsx');
            if ($data['lang_page'] == '1') 
                $config['base_url']     = base_url()."san-pham";
            else
                $config['base_url']     = base_url()."product";
            if ($hsx) 
                $config['total_rows']   = $this->mproduct->count_all($data['lang_page'], $hsx);
            else 
                $config['total_rows']   = $this->mproduct->count_all($data['lang_page']);
            
            $config['per_page']     = $get_setup['set_pro_bestsale'];
            $config['uri_segment']  = "2";
            $config['next_link']    = "Next";
            $config['prev_link']    = "Prev";
            $config['first_link']   = "First";
            $config['last_link']    = "Last";
            if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
            $this->load->library("pagination");
            $this->pagination->initialize($config);
            $start = $this->uri->segment(2);
            if ($hsx) 
                $listProduct = $this->mproduct->getAll($data['lang_page'], $config['per_page'], $start, $hsx);
            else 
                $listProduct = $this->mproduct->getAll($data['lang_page'], $config['per_page'], $start);
            
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
            $data['activeMenu']         = 'product';
            $data['configWeb']          = $this->_config;
            $data['config']             = $this->mindex->getdata();
            $data['title']              = "Danh sách tất cả sản phẩm";
            $data['keyword']            = "Danh sách tất cả sản phẩm";
            $data['description']        = "Danh sách tất cả sản phẩm";
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
            $data['listLink']           = $this->mlink->getAll();
            $data['listHangSanXuat']    = $this->mhangsanxuat->getAll($data['lang_page']);
            $data['listProduct']        = $listProduct;

            $data['template'] = 'product/index';
            $this->load->view('layout', $data);
        }

        public function detail() {
            $data['lang_page']  = $this->session->userdata('lang_page');
            $params             = $this->uri->segment(2);
            $id                 = (int)end(explode("-", $params));
            $info               = $this->mproduct->getOnce($id);
            if ($data['lang_page'] != $info['pro_lang'])
                redirect(base_url());
            if (empty($info)) 
                redirect(base_url());
            if (!empty($info)) {
                if ($info['pro_images']) {
                    @$images = unserialize($info['pro_images']);
                    $info['pro_first_image'] = base_url('uploads/products/'.$info['pro_folderimg'].'/'.$images[0]);
                    $info['pro_first_thumb_image'] = base_url('uploads/products/thumb/'.$images[0]);
                    unset($images[0]);
                    foreach ($images as $v) {
                        $info['pro_list_images'][] = base_url('uploads/products/thumb/'.$v);
                        $info['pro_main_images'][] = base_url('uploads/products/'.$info['pro_folderimg'].'/'.$v);
                    }
                } else {
                    $info['pro_first_image'] = base_url('public/admin/images/no-images.jpg');
                    $info['pro_first_thumb_image'] = base_url('public/admin/images/no-images.jpg');
                    $info['pro_list_images'] = '';
                    $info['pro_main_images'] = '';
                }
            }
            $data['infoCate']   = $this->mcategory->getOnce($info['cate_id']);
            if (empty($data['infoCate']))
                redirect(base_url());
            $data['fullURL']    = uri_string();
            $data['infoItem']   = $info;
            $productRelative    = $this->mproduct->getProductRelative($data['lang_page'], $info['pro_id'], $info['cate_id'], 10);
            if (!empty($productRelative)) {
                foreach ($productRelative as $k => $v) {
                    if ($v['pro_images']) {
                        @$images = unserialize($v['pro_images']);
                        $productRelative[$k]['pro_images'] = base_url('uploads/products/thumb/'.$images[0]);
                    }
                    else 
                        $productRelative[$k]['pro_images'] = base_url('public/admin/images/no-images.jpg');
                }
            }

            $this->mproduct->update_pro($id);
            
            $data['productRelative'] = $productRelative;

            // System
            $data['activeMenu']         = 'product';
            $data['configWeb']          = $this->_config;
            $data['config']             = $this->mindex->getdata();
            $data['info']               = $get_setup = $this->mindex->get_setup();
            
            $data['title']              = $info['pro_name'];
            $data['keyword']            = $info['pro_key'];
            $data['description']        = $info['pro_des'];

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
            $data['listLink']       = $this->mlink->getAll();
            $data['brand'] = $this->mhangsanxuat->getOnce($info['hangsanxuat_id']);
            $data['thumbs'] = $this->mproduct->getThums($id);
            $data['template']   = 'product/detail';
            $this->load->view('layout', $data);
        }
    }
