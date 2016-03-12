<?php 
    class MY_Controller extends CI_Controller{
        protected $_config                  = array();
        protected $_slide                   = array();
        protected $_listCategoryMenu        = array();
        protected $_listSubCategory         = array();
        protected $_listNewsCategoryMenu    = array();
        protected $_listServiceMenu         = array();
        protected $_listIntroduceMenu       = array();
        protected $_listRecruitMenu         = array();
        protected $_listCustomerMenu        = array();
        protected $_footerInfo              = array();
        protected $_count_file              = 'libraries/count_ip.txt';
        protected $_ip_file                 = 'libraries/ip_address.txt';
        protected $_count_user_access;
        protected $_user_online;

        public function __construct(){
            parent::__construct();
            $this->load->helper('file');
            $this->load->library("string");
            $this->load->library('session');
            $this->load->library('cart');
            $this->load->model("mconfig");
            $this->load->model("mindex");
            $this->load->model("monline");
            $this->load->model("mcolumn_right");
            $this->load->model("mnews");
            $this->load->model("mservice");
            $this->load->model("mslide");
            $this->load->model("mcategory");
            $this->load->model("mnewscategory");
            $this->load->model("mintroduce");
            $this->load->model("mrecruit");
            $this->load->model("mcustomer");
            $this->load->model("moffice");
            $this->load->model("mlink");
            $this->load->model('mhangsanxuat');
            
            // $this->load->model("mipaddress");
            
            //lấy ra url từ website khác dến website mh
            if(isset($_SERVER['HTTP_REFERER'])) {
                $domain2 = $_SERVER['HTTP_REFERER'];
                $col = explode("/",$domain2);
                $rule = "/".$_SERVER['SERVER_NAME']."/";
                if(!preg_match($rule,$domain2)){
                    $domain = $this->mindex->check_referer($col['2']);
                    if($domain == FALSE){
                        $this->mindex->update_referer($col['2']);
                    }else{
                        $db = array(
                            "re_domain"     => $col['2'],
                        );
                        $this->mindex->add_referer($db);
                    }
                }
            }

            if (!$this->session->userdata('lang_page')) {
                $this->session->set_userdata('lang_page', 1);
            }
            $data['lang_page']  = $this->session->userdata('lang_page');
            $this->_config = $this->mconfig->getData($data['lang_page']);
            $this->_slide = $this->mslide->getAll();
            if (!empty($this->_slide)) {
                foreach ($this->_slide as $k => $v) {
                    $this->_slide[$k]['slide_image'] = base_url('uploads/slideshow/'.$v['slide_image']);
                }
            }
            
            if($this->router->fetch_class() == 'category') {
                $params = $this->uri->segment(2);
                $idCategory = (int)end(explode("-", $params));
                $subCategories = $this->mcategory->getAllSubCategories($data['lang_page'], $idCategory);
                
                if (isset($subCategories) && $subCategories != null) {
                    $this->_listCategoryMenu = $this->mcategory->getAll($data['lang_page']);
                    if (!empty($this->_listCategoryMenu)) {
                        $aObj = new andyrecursive;
                        $this->_listCategoryMenu = $aObj->recursiveMenu($this->_listCategoryMenu, 'cate_id', 'cate_id_parent');
                    }
                    
                    if (!empty($subCategories)) {
                        $this->_listSubCategory = $subCategories;
                        $aObj = new andyrecursive;
                        $this->_listSubCategory = $aObj->recursiveMenu($this->_listSubCategory, 'cate_id', 'cate_id_parent', $idCategory);
                    }
                } else {
                    $this->_listCategoryMenu = $this->mcategory->getAll($data['lang_page']);
                    if (!empty($this->_listCategoryMenu)) {
                        $aObj = new andyrecursive;
                        $this->_listCategoryMenu = $aObj->recursiveMenu($this->_listCategoryMenu, 'cate_id', 'cate_id_parent');
                    }
                }

            } else {
                $this->_listCategoryMenu = $this->mcategory->getAll($data['lang_page']);
                if (!empty($this->_listCategoryMenu)) {
                    $aObj = new andyrecursive;
                    $this->_listCategoryMenu = $aObj->recursiveMenu($this->_listCategoryMenu, 'cate_id', 'cate_id_parent');
                }
            }

            
            $this->_listNewsCategory    = $this->mnewscategory->getAll($data['lang_page']);
            $this->_listServiceMenu     = $this->mservice->getAll($data['lang_page']);
            $this->_listIntroduceMenu   = $this->mintroduce->getAll($data['lang_page']);
            $this->_listRecruitMenu     = $this->mrecruit->getAll($data['lang_page']);
            $this->_listCustomerMenu    = $this->mcustomer->getAll($data['lang_page']);
            $this->_footerInfo          = $this->moffice->getAll($data['lang_page']);

            // Count user access
            $ipAddress  = get_client_ip();
            $this->_count_user_access = $this->countUserAccess($ipAddress, $this->_ip_file, $this->_count_file);

            // User dang online
            $this->_user_online = $this->online();
        }

        public function countUserAccess($ip, $ipFile, $countFile) {
            $arrIp = $this->readFiletoArray($ipFile);
            $count = file_exists($countFile) ? file_get_contents($countFile) : 0;
            if (!in_array($ip, $arrIp)) {
                file_put_contents($ipFile, $ip."\n", FILE_APPEND);
                file_put_contents($countFile, ++$count);
            }
            return $count;
        }

        public function readFiletoArray($file) {
            $readFile = file($file, FILE_IGNORE_NEW_LINES);
            return $readFile;
        }

        public function fillter($str){
            $str = str_replace("<", "&lt;", $str);
            $str = str_replace(">", "&gt;", $str);
            $str = str_replace("&", "&amp;", $str);         
            $str = str_replace("|", "&brvbar;", $str);
            $str = str_replace("~", "&tilde;", $str);
            $str = str_replace("`", "&lsquo;", $str);
            $str = str_replace("#", "&curren;", $str);
            $str = str_replace("%", "&permil;", $str);
            $str = str_replace("'", "&rsquo;", $str);
            $str = str_replace("\"", "&quot;", $str);
            $str = str_replace("\\", "&frasl;", $str);
            $str = str_replace("--", "&ndash;&ndash;", $str);
            $str = str_replace("ar(", "ar&Ccedil;", $str);
            $str = str_replace("Ar(", "Ar&Ccedil;", $str);
            $str = str_replace("aR(", "aR&Ccedil;", $str);
            $str = str_replace("AR(", "AR&Ccedil;", $str);
            return htmlspecialchars($str);
        }
        public function cut_str($str,$start,$end){
            $val = substr($str,$start,$end);
            return $val;
        }
        public function debug($val){
            echo "<pre>";
            print_r($val);
            echo "</pre>";
            die();
        }
        public function access(){
            return read_file('libraries/source.txt');
        }
        public function write($data){
            $ok = $data + 1;
            write_file('libraries/source.txt',$ok);
        }
        public function online(){
            $tg = time();
            $tgout = 900;
            $tgnew = $tg - $tgout;
            $REMOTE_ADDR = get_client_ip();//$_SERVER["REMOTE_ADDR"];̣
            $PHP_SELF = $_SERVER["PHP_SELF"];
            $data = array(
                    "time" => $tg,
                    "user_ip" => $REMOTE_ADDR,
                    "local" => $PHP_SELF,
                    //"date" => date('d')
                );
            $this->monline->online($data);
            $this->monline->online_del($tgnew);
            return $this->monline->online_total($PHP_SELF);
        }
        public function online_view(){
            return $this->monline->online_view();
        }
    }
    
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }