<?php
require("libraries/student.php");
class Product extends Student{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper("url");
            $this->load->model("mproduct");
            $this->load->model("mhangsanxuat");
            $this->load->library("string");
            $this->load->helper("form");
        }

        public function index()
        {
            $params = $_REQUEST;
            $cate = isset($params['cate']) && $params['cate'] != null ? "cate=". $params['cate'] : "";
            $language = isset($params['language']) && $params['language'] != null  ?  "&language=". $params['language']  : '';
            $hangsanxuat = isset($params['hangsanxuat']) && $params['hangsanxuat'] != null  ?  "&hangsanxuat=". $params['hangsanxuat']  : '';
            $hot = isset($params['hot']) && $params['hot'] != null  ?  "&hot=". $params['hot']  : '';
            $proname = isset($params['pro_name']) && $params['pro_name'] != null  ?  "&pro_name=". $params['pro_name']  : '';
            
            $totalProduct = $this->mproduct->productTotal($params);

            if ($totalProduct > 0 ) {
                $limit = 10;
                $start = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? ($_REQUEST['page'] - 1) * $limit : 0;
                $data['totalPage'] = ceil($totalProduct/$limit);
                $data['list_pro'] =  $this->mproduct->getAllProduct($limit, $start, $params);
            } else {
                $data['list_pro'] =  null;
            }

            $data['uri'] = $cate . $language . $hangsanxuat . $proname . $hot ;
            $data['listhsx'] = $this->mhangsanxuat->getAll();
            $data['list_cate'] = $this->mproduct->getAllCategory();

            $data['act'] = "2";
            $data['title'] = "Danh sách sản phẩm";
            $data['template'] = "product/list_product";
            $this->load->view("layout",$data);
        }

        public function add()
        {
            if(!$this->input->get('lang') || ($this->input->get('lang') != 1 && $this->input->get('lang') != 2)) {
                redirect(base_url('admin/product'));
            }

            $cate_id = $this->input->post("cate_id");
            $arr = explode(",", $cate_id);
            $id = $this->uri->segment(4);

            if($this->input->post('ok') != "") {
                $this->validationForm();
                if ($this->form_validation->run()) {
                    $formData = $this->getFormData();

                    if (isset($arr['1'])) {
                        $formData['cate_id'] = $arr['0'];
                        $formData['cate_id_parent'] = $arr['1'];
                    } else {
                        $formData['cate_id'] = $cate_id;
                    }

                    $image = $_FILES['image']['name'];
                    $imgm = array();
                    $nowm = "";

                    if($_FILES['image']['name'][0] != NULL)
                    {
                        for($i=0; $i < count($image); $i++){
                            $name = $_FILES['image']['name'][$i];
                            $type = $_FILES['image']['type'][$i];
                            $size = $_FILES['image']['size'][$i];
                            if ($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
                                if ($size > 1048576) {
                                    die("File size not larger than 1mb");
                                } else {
                                    $nowm = date("dmYhis");
                                    if(!file_exists("uploads/products/".$nowm)) {
                                        mkdir("uploads/products/".$nowm,0777);
                                    }
                                    $formData['pro_folderimg'] = $nowm;
                                    $newfilename = $nowm.end(explode("".$type."",$_FILES['image']['name'][$i]));
                                    move_uploaded_file($_FILES['image']['tmp_name'][$i],"uploads/products/".$nowm."/".$newfilename);
                                    $imgm[] = $nowm.end(explode("".$type."",$_FILES['image']['name'][$i]));
                                    $this->createThumbnail("uploads/products/".$nowm."/","uploads/products/thumb",$newfilename, 550, 550);
                                }
                            } else {
                                die("Invalid image file type (.jpg | .gif | .png) ");
                            }
                        }
                        $formData['pro_images'] = serialize($imgm);
                    }

                    $formData['pro_lang'] = $this->input->get('lang');
                    
                    $formData['user_created'] = $this->session->userdata('ses_userid');
                    $formData['user_updated'] = $this->session->userdata('ses_userid');

                    $idProduct = $this->mproduct->add($formData, $id);
                    $this->uploadThumb($idProduct);
                    redirect(base_url()."admin/product");
                }
            }

            $data['act'] = "1";
            $data['title'] = "Thêm sản phẩm";
            $data['template'] = "product/add_product";
            
            if ($this->_user_role == 4) {
                $data['list_cate'] = $this->mproduct->getAllCategory($this->input->get('lang'));
            } else {
                $data['list_cate'] = $this->mproduct->getCategoriesByUser($this->_user_categories, $this->input->get('lang'));
            }

            $data['listhsx'] = $this->mhangsanxuat->getAll();
            $this->load->view("layout",$data);
        }


        public function update()
        {
            $data['listhsx'] = $this->mhangsanxuat->getAll();
            $cate_id = $this->input->post("cate_id");
            $arr = explode(",",$cate_id);
            $id = $this->uri->segment(4);
            
            if($this->input->post('ok') != "") {
                $this->validationForm();
                if ($this->form_validation->run()) {
                    $formData = $this->getFormData();

                    if (isset($arr['1'])) {
                        $formData['cate_id'] = $arr['0'];
                        $formData['cate_id_parent'] = $arr['1'];
                    } else {
                        $formData['cate_id'] = $cate_id;
                    }

                    $image = $_FILES['image']['name'];
                    $imgm = array();
                    $nowm = "";

                    if($_FILES['image']['name'][0] != NULL)
                    {
                        for($i=0; $i < count($image); $i++){
                            $name = $_FILES['image']['name'][$i];
                            $type = $_FILES['image']['type'][$i];
                            $size = $_FILES['image']['size'][$i];
                            if ($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
                                if ($size > 1048576) {
                                    die("File size not larger than 1mb");
                                } else {
                                    $nowm = date("dmYhis");
                                    if(!file_exists("uploads/products/".$nowm)) {
                                        mkdir("uploads/products/".$nowm,0777);
                                    }
                                    $formData['pro_folderimg'] = $nowm;
                                    $newfilename = $nowm.end(explode("".$type."",$_FILES['image']['name'][$i]));
                                    move_uploaded_file($_FILES['image']['tmp_name'][$i],"uploads/products/".$nowm."/".$newfilename);
                                    $imgm[] = $nowm.end(explode("".$type."",$_FILES['image']['name'][$i]));
                                    $this->createThumbnail("uploads/products/".$nowm."/","uploads/products/thumb",$newfilename, 500, 500);
                                }
                            } else {
                                die("Invalid image file type (.jpg | .gif | .png) ");
                            }
                        }
                        $formData['pro_images'] = serialize($imgm);
                    }
                    
                    $formData['user_updated'] = $this->session->userdata('ses_userid');
                    $this->mproduct->update_product($formData, $id);
                    $this->uploadThumb($id);
                    redirect(base_url()."admin/product");
                }
            }

            $data['product'] = $imgs = $this->mproduct->getdata($id);
            
            if($id == NULL || !isset($data['product']['pro_id'])){
                redirect(base_url()."admin/product");
            }

            if ($this->_user_role == 4) {
                $data['list_cate'] = $this->mproduct->getAllCategory($data['product']['pro_lang']);
            } else {
                $data['list_cate'] = $this->mproduct->getCategoriesByUser($this->_user_categories, $data['product']['pro_lang']);
            }
           
            $data['thumbs'] = $this->mproduct->getAllImages($id);
            $data['act'] = "1";
            $data['title'] = "Sửa thông tin sản phẩm";
            $data['template'] = "product/new_edit";
            $this->load->view("layout",$data);
        }

        public function del(){
            $id = $this->input->post('pro_id');
            $imgs = $this->mproduct->getdata($id);
            @$images = unserialize($imgs['pro_images']);
            if($images != NULL){
                foreach($images as $value){
                    @unlink("uploads/products/thumb/".$value);
                }
            }
            $this->rmforder($imgs['pro_folderimg'],"uploads/products/");
            $this->mproduct->del($id);
        }
        
        public function update_status()
        {
            $id = $this->input->post('rel');
            if($this->input->post("type")){
                $status = $this->input->post('val');
                if($status == 0){
                    $val = array(
                        "pro_status" => "1"
                    );
                    $this->mproduct->update_product($val,$id);
                    die();
                }else{
                    $val = array(
                        "pro_status" => "0"
                    );
                    $this->mproduct->update_product($val,$id);
                    die();
                }
            }
        }
        
        public function update_all(){
            $id = $this->input->post('pro_id');
            $val = array(
                "pro_new"       => $this->input->post('pro_new'),
                "pro_hot"       => $this->input->post('pro_hot'),
                "pro_bestsale"  => $this->input->post('pro_bestsale'),
                "pro_saleoff"   => $this->input->post('pro_saleoff'),
                "pro_new_check"     => date("HisdmY"),
                "pro_saleoff_check"     => date("HisdmY"),
                "pro_bestsale_check"    => date("HisdmY"),
                "pro_hot_check"     => date("HisdmY")
            );

            $this->mproduct->update_product($val,$id);
        }

        public function update_order(){
            $id = $this->input->post('id');
            $val = $this->fillter($this->input->post('val'));
            $data = array(
                "pro_order" => $val
            );
            $this->mproduct->update_product($data,$id);
        }

        public function createThumbnail($parth,$parththumb,$fileName,$width,$height){
            $this->load->library('image_lib');
            //$this->load->helper('thumbnail_helper');
            $config['image_library'] = 'gd2';
            $config['source_image'] = $parth.'/'.$fileName;
            $config['new_image'] = $parththumb.'/'.$fileName;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['thumb_marker'] = FALSE;
            $config['width'] = $width;
            $config['height'] = $height;
            $this->image_lib->initialize($config); 
            $this->image_lib->resize();
            $this->image_lib->clear();
        }

        public function rmforder($forder,$parth){
            $dirPath = $parth."/".$forder;
            if(file_exists($dirPath)){
                if(! is_dir($dirPath)) {
                    throw new InvalidArgumentException("$dirPath must be a directory");
                }
                if(substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                    $dirPath .= '/';
                }
                $files = glob($dirPath . '*', GLOB_MARK);
                foreach ($files as $file) {
                    if (is_dir($file)) {
                        rmdir($file);
                    } else {
                        unlink($file);
                    }
                }
                rmdir($dirPath);
            }
        }

    /**
     * Validate Form
     */
    public function validationForm()
    {
        $this->form_validation->set_rules("pro_name","Tên sản phẩm","trim|required|xss_clean");
        $this->form_validation->set_rules("pro_name_rewrite","URL Rewrite","required|xss_clean");
        $this->form_validation->set_rules("pro_price","Giá bán","numeric|xss_clean");
        $this->form_validation->set_rules("cate_id","Danh mục sản phẩm","required|xss_clean");

        $this->form_validation->set_message('required', '%s không được để trống');          
        $this->form_validation->set_message("min_length","%s không được nhỏ hơn %d kí tự");
        $this->form_validation->set_message("max_length","%s không được lớn hơn %d kí tự");
        $this->form_validation->set_message('matches', '%s không trùng nhau');
        $this->form_validation->set_message("valid_email","%s không đúng định dạng");
        $this->form_validation->set_message("numeric","%s phải là định dạng số");
        $this->form_validation->set_message("check_name","Tên bài viết đã tồn tại. Hãy chọn tên khác");
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
    }

    protected function getFormData()
    {
        $data = array(
            "hangsanxuat_id"    => $this->input->post("hangsanxuat_id"),
            "pro_name"          => $this->fillter($this->input->post("pro_name")),
            "pro_name_rewrite"  => $this->fillter($this->input->post("pro_name_rewrite")),
            "pro_info"          => $this->input->post("pro_info"),
            "pro_price"         => $this->fillter($this->input->post("pro_price")),
            "pro_market"        => $this->fillter($this->input->post("pro_market")),
            "pro_qty"           => $this->fillter($this->input->post("pro_qty")),
            "pro_promotion"     => $this->fillter($this->input->post("pro_promotion")),
            "pro_war"           => $this->fillter($this->input->post("pro_war")),
            "pro_full"          => $this->input->post("pro_full"),
            "pro_date"          => date("H:i:s - d/m/Y"),
            "pro_key"           => $this->fillter($this->input->post("pro_key")),
            "pro_des"           => $this->fillter($this->input->post("pro_des")),
            "video_youtube"     => $this->input->post("video"),
            "phukien"           => $this->input->post("phukien")
        );
        return $data;
    }

    protected function uploadThumb($idProduct)
    {
        $image = $_FILES['thumbs']['name'];
        $imgm = array();
        $nowm = "";

        if(isset($image[0]) && $image[0] != NULL)
        {
            for($i=0; $i < count($image); $i++){
                $name = $_FILES['thumbs']['name'][$i];
                $type = $_FILES['thumbs']['type'][$i];
                $size = $_FILES['thumbs']['size'][$i];
                if ($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
                    if ($size > 1048576) {
                        die("File size not larger than 1mb");
                    } else {
                        $nowm = date("dmYhis");
                        if(!file_exists("uploads/images_products")) {
                            mkdir("uploads/images_products", 0777);
                        }

                        $time = time();

                        $newfilename =  $time. end(explode("".$type."", $time. $_FILES['thumbs']['name'][$i]));
                        
                        move_uploaded_file($_FILES['thumbs']['tmp_name'][$i], "uploads/images_products/". $newfilename);
                        $imgm[] = $newfilename;
                        $this->createThumbnail("uploads/images_products", "uploads/images_products/thumbs", $newfilename, 230, 200);
                    }
                } else {
                    die("Invalid image file type (.jpg | .gif | .png) ");
                }
            }

            if(isset($imgm) && $imgm != null) {
                foreach($imgm as $value) {
                    $dataImageProduct = array(
                        'url' => $value,
                        'product_id' => $idProduct
                    );
                    $this->mproduct->insertProduct($dataImageProduct);
                }
            }
        }
    }

    public function deleteimage($id, $product_id) {
        $image = $this->mproduct->getImages($id);
        @unlink('uploads/images_products/'. $image['url']);
        @unlink('uploads/images_products/thumbs/'. $image['url']);
        $this->mproduct->deleteImages($id);
        redirect(base_url('admin/product/update/'. $product_id));
    }
}
