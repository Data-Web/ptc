<?php
require("libraries/student.php");

class khachhang extends Student
{
    CONST TYPE = 'CUS';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tanphat_post');
        $this->load->model('mproduct_category');
    }

    public function index()
    {
        $params = $_REQUEST;
        $category = isset($params['category']) && $params['category'] != null  ?  "?category=". $params['category']  : '?category=';
        $page = isset($params['page']) && $params['page'] != null  ?  "&page=".$params['page'] : '&page=1';
        $data['total'] = $totalPost = $this->tanphat_post->getTotalCustomer(self::TYPE, $params); 

        if ($totalPost  > 0 ) {
            $limit = 10;
            $start = isset($_REQUEST['page']) && $_REQUEST['page'] ? ($_REQUEST['page'] - 1) * $limit : 0;
            $data['totalPage'] = ceil($totalPost/$limit);
            $data['posts'] =  $this->tanphat_post->getAllCustomer(self::TYPE, $limit, $start, $params);
        } else {
            $data['posts'] =  null;
        }
        $data['uri'] = $category;
        $data['categories'] = $this->mproduct_category->getAllOrFilterCategory();
        $data['title'] = "Danh sách khách hàng tân phát";
        $data['template'] = "khachhang/index";
        $this->load->view("layout",$data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $this->validationForm();
            if($this->form_validation->run()) {
                $formData = $this->_getForm();
                $cateIds = $this->_getCategoryIds();
                $fileUpload = $this->_upload();
                
                if($fileUpload) {
                    $formData['image'] = $fileUpload;
                }
                
                $formData['user_created'] = $this->session->userdata('ses_userid');
                $formData['user_updated'] = $this->session->userdata('ses_userid');

                $this->tanphat_post->insert($formData);
                $customerId = $this->tanphat_post->getIdEndCustomer();

                if ($customerId && $this->_getCategoryIds() != null) {
                    foreach($this->_getCategoryIds() as $value) {
                        $this->tanphat_post->insertCustomerCategory($value, $customerId);
                    }
                }
                redirect('/admin/khachhang');
            }
        }

        $data['categories'] = $this->mproduct_category->getAllOrFilterCategory();
        $data['title'] = "Thêm mới bài viết tuyển dụng";
        $data['template'] = "khachhang/add";
        $this->load->view("layout",$data);
    }

    public function edit($id)
    {
        $data['post'] = $this->tanphat_post->getOne($id);
        if ($this->input->post()) {
            $this->validationForm();
            if($this->form_validation->run()) {
                $formData = $this->_getForm();
                $cateIds = $this->_getCategoryIds();
                $fileUpload = $this->_upload();
                
                if($fileUpload) {
                    $formData['image'] = $fileUpload;
                }
                
                $formData['user_updated'] = $this->session->userdata('ses_userid');

                $this->tanphat_post->update($formData, $id);
                if (!empty($cateIds)) {
                    $this->tanphat_post->deleteCustomerCategory($id);
                    foreach($cateIds as $value) {
                        $this->tanphat_post->insertCustomerCategory($value, $id);
                    }
                }
                redirect('/admin/khachhang');
            }
        }

        $data['customers'] = $this->tanphat_post->getCustomers($id);
        
        $data['categories'] = $this->mproduct_category->getAllOrFilterCategory();
        $data['title'] = "Sửa nội dung bài viết tuyển dụng";
        $data['template'] = "khachhang/edit";
        $this->load->view("layout",$data);
    }

    public function delete($id)
    {
        $this->tanphat_post->deleteCustommer($id);
        redirect('/admin/khachhang');
    }

    protected function _getForm()
    {
        return array(
            'language' => $this->input->post('language'),
            'title'    => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'url_rewrite' => $this->input->post('url_rewrite'),
            'type' => self::TYPE,
            'seo_keyword' => $this->input->post('seo_keyword'),
            'seo_desc' => $this->input->post('seo_desc'),
            'status' => $this->input->post('status'),
            'desc' => $this->input->post('desc')
        );
    }

    protected function _getCategoryIds()
    {
        return $this->input->post('cate_id');
    }

    public function validationForm()
    {
            $this->form_validation->set_rules("title", "Tên bài viết", "trim|required|xss_clean");
            $this->form_validation->set_rules("content", "Nội dung bài viết", "required");
            $this->form_validation->set_rules("url_rewrite","URL Rewrite","required|xss_clean");

            $this->form_validation->set_message('required', '%s không được để trống');          
            $this->form_validation->set_message("min_length","%s không được nhỏ hơn %d kí tự");
            $this->form_validation->set_message("max_length","%s không được lớn hơn %d kí tự");
            $this->form_validation->set_message('matches', '%s không trùng nhau');
            $this->form_validation->set_message("valid_email","%s không đúng định dạng");
            $this->form_validation->set_message("numeric","%s phải là định dạng số");
            $this->form_validation->set_message("check_name","Tên bài viết đã tồn tại. Hãy chọn tên khác");
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
    }

    protected function _upload()
    {
        $flag = "";
        if($_FILES['image']['name'] != "") {
                    $config['upload_path'] = './uploads/posts';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '10000';
                    $config['max_width'] = '10000';
                    $config['max_height'] = '10000';
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);
                    
                    if(!$this->upload->do_upload('image')){
                       $errors = $this->upload->display_errors("<p></p>");
                       if ($errors) {
                          $flag = false;
                       }
                        
                    } else {
                        $file_info = $this->upload->data();

                        $config = array(
                            "source_image" =>"./uploads/posts/". $file_info['file_name'],
                            "new_image" => "./uploads/posts/thumbs/" . $file_info['file_name'],
                            "create_thumb"=> false,
                            "maintain_ration" =>TRUE,
                            "width" =>250,
                            "height" =>250,
                        );

                        $this->load->library("image_lib",$config);

                        if(!$this->image_lib->resize()) {
                            $data['errors'] = $this->image_lib->display_errors();
                        }else{
                             $this->image_lib->resize();
                        }
                        $flag = '/uploads/posts/thumbs/'. $file_info['file_name'];
                    }
            }
            return $flag;
    }
}