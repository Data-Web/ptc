<?php
    require("libraries/student.php");
class product_category extends Student{
        
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("mproduct_category");
        $this->load->library("string");
        $this->load->helper("form");
       
    }

    public function index()
    {
        $data['categories'] = array();

        $params = $_REQUEST;
        $language = isset($params['language']) && $params['language'] != null  ?  "?language=". $params['language']  : '?language=';
        $cate_name = isset($params['cate_name']) && $params['cate_name'] != null  ?  "&cate_name=".$params['cate_name'] : ''; 
        
        $totalCate = $this->mproduct_category->getTotalCategory($params); 
        
        if ($totalCate  > 0 ) {
            $limit = 19;
            $start = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? ($_REQUEST['page'] - 1) * $limit : 0;
            $data['totalPage'] = ceil($totalCate/$limit);
            $data['uri'] = $language . $cate_name;
            $data['categories'] = $this->mproduct_category->getAllOrFilterCategory($params, $limit, $start);
        }

        $data['title'] = "Danh mục sản phẩm";
        $data['template'] = "product_category/list_category";
        $this->load->view("layout",$data);
    }

    public function add($language)
    {

        $language = $this->uri->segment(4);
        if ($language != 1 && $language != 2) {
            redirect(base_url()."admin/product_category");
        }

        if ($this->input->post()) {
            $this->_validationForm();

            if($this->form_validation->run()) {
                $formData = $this->getFormData();
                $formData['cate_lang'] = $language;
                
                $formData['user_created'] = $this->session->userdata('ses_userid');
                $formData['user_updated'] = $this->session->userdata('ses_userid');

                $this->mproduct_category->add($formData);
                redirect(base_url()."admin/product_category");
            }
        }

        $data['act'] = 1;
        $data['title'] = "Thêm mới danh mục sản phẩm";
        $data['template'] = "product_category/form";
        $data['categories'] = $this->mproduct_category->getAllCategory($language);
        
        $this->load->view("layout",$data);
    }

    public function update()
    {   
        $id = $this->uri->segment(4);
        $language = $this->uri->segment(5);

        if ($language != 1 && $language != 2) {
            redirect(base_url()."admin/product_category");
        }

        if ($this->input->post('ok')) {
            $this->_validationForm();
            if($this->form_validation->run()) {
                $formData = $this->getFormData();
                $formData['cate_lang'] = $language;

                $formData['user_updated'] = $this->session->userdata('ses_userid');
                
                $this->mproduct_category->update_cate($formData, $id);
                redirect(base_url()."admin/product_category");
            }
        }

        $data['act'] = "2";
        $data['title'] = "Sửa danh mục sản phẩm";
        $data['template'] = "product_category/form";
        $data['categories'] = $this->mproduct_category->getAllCategory($language, $id);
        $data['category'] = $this->mproduct_category->getdata($id);
        $this->load->view("layout",$data);
    }

    public function update_status()
    {
        $id = $this->input->post('rel');
        if($this->input->post("type")){
            $status = $this->input->post('val');
            if($status == 0){
                $val = array(
                    "cate_status" => "1"
                );
                $this->mproduct_category->update_cate($val,$id);
                die();
            }else{
                $val = array(
                    "cate_status" => "0"
                );
                $this->mproduct_category->update_cate($val,$id);
                die();
            }
        }
    }

    public function update_order()
    {
        $id = $this->input->post('id');
        $val = $this->fillter($this->input->post('val'));
        $data = array(
            "cate_order" => $val
        );
        $this->mproduct_category->update_cate($data,$id);
    }

    public function del(){
        $id = $this->input->post('id');
        $imgs = $this->mproduct_category->getdata($id);
        @unlink("uploads/product_category/".$imgs['cate_images']);
        @unlink("uploads/product_category/thumb/".$imgs['cate_images']);
        $this->mproduct_category->del_cate($id);
    }

    public function delete($id)
    {
        $imgs = $this->mproduct_category->getdata($id);
        @unlink("uploads/product_category/".$imgs['cate_images']);
        @unlink("uploads/product_category/thumb/".$imgs['cate_images']);
        $this->mproduct_category->del_cate($id);
        redirect(base_url()."admin/product_category");
    }

    public function createThumbnail($parth, $fileName, $width,$height)
    {
        $this->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = $parth.'/'.$fileName;
        $config['new_image'] = $parth.'/thumb/'.$fileName;
        $config['create_thumb'] = fale;
        $config['maintain_ratio'] = TRUE;
        $config['thumb_marker'] = FALSE;
        $config['width'] = $width;
        $config['height'] = $height;
        $this->image_lib->initialize($config); 
        $this->image_lib->resize();
        $this->image_lib->clear();
    }

    /**
     * Validate Form
     */
    public function _validationForm()
    {
        $this->form_validation->set_rules("cate_name","Tên danh mục","trim|required|callback_check_name|xss_clean");
        $this->form_validation->set_rules("cate_rewrite","URL Rewrite","trim|required|xss_clean");

        $this->form_validation->set_message('required', '%s không được để trống');          
        $this->form_validation->set_message("min_length","%s không được nhỏ hơn %d kí tự");
        $this->form_validation->set_message("max_length","%s không được lớn hơn %d kí tự");
        $this->form_validation->set_message('matches', '%s không trùng nhau');
        $this->form_validation->set_message("valid_email","%s không đúng định dạng");
        $this->form_validation->set_message("numeric","%s phải là định dạng số");
        $this->form_validation->set_message("check_name","Tên danh mục đã tồn tại. Hãy chọn tên khác");
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
    }

    /**
     * Validate Form
     */
    protected function getFormData()
    {
        $data = array (
            "cate_name"     => $this->fillter($this->input->post("cate_name")),
            "cate_rewrite"  => $this->input->post("cate_rewrite"),
            "cate_info"     => $this->fillter($this->input->post("cate_info")),
            "cate_full"     => $this->input->post("cate_full"),
            "cate_order"    => $this->fillter($this->input->post("cate_order")),
            "cate_key"      => $this->fillter($this->input->post("cate_key")),
            "cate_des"      => $this->fillter($this->input->post("cate_des")),
            "cate_display"  => $this->input->post("cate_display"),
            "is_home"       => $this->input->post("is_home"),
            "cate_id_parent" => $this->input->post("cate_id_parent")
        );

        if ($_FILES['cate_images']['name'] != NULL) {
            $config['upload_path'] = './uploads/product_category';
            $config['file_name'] = time() . rand(1, 988);
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10000';
            $config['max_width']  = '10000';
            $config['max_height']  = '10000';
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload("cate_images")) {
                echo $this->upload->display_errors();
                die;
            } else {
                $fileInfo = $this->upload->data();
                $data['cate_images'] = $fileInfo['file_name'];
                $this->createThumbnail("uploads/product_category/", $fileInfo['file_name'], 250, 250);
            }
        }

        return $data;
    }

    public function check_name() 
    {
        $name = $this->input->post('cate_name');
        $check = $this->mproduct_category->checkName($name, $this->uri->segment(4));
        if ($check > 0) {
            return false;
        } else {
            return true;
        }
    }
}