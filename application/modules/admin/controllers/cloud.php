<?php
require("libraries/student.php");
class cloud extends Student
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('cloud_model');
    }

    public function index()
    {
        $data['clouds'] = $this->cloud_model->getAll();
        $data['title'] = "Danh sách cloud";
        $data['template'] = "cloud/index";
        $this->load->view("layout",$data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $this->validationForm();
            if($this->form_validation->run()) {
                $formData = $this->_getForm();
                $this->cloud_model->insertOrUpdate($formData);
                redirect('/admin/cloud');
            }
        }
        $data['title'] = "Thêm mới cloud";
        $data['template'] = "cloud/form";
        $this->load->view("layout",$data);
    }

    public function edit($id)
    {
        $data['post'] = $this->cloud_model->getOne($id);
        if ($this->input->post()) {
            $this->validationForm();
            if($this->form_validation->run()) {
                $formData = $this->_getForm();
                $this->cloud_model->insertOrUpdate($formData, $id);
                redirect('/admin/cloud');
            }
        }
        $data['title'] = "Sửa nội cloud";
        $data['template'] = "cloud/form";
        $this->load->view("layout",$data);
    }

    public function delete($id)
    {
        $this->cloud_model->delete($id);
        redirect('/admin/cloud');
    }

    protected function _getForm()
    {
        return array(
            'label1' => $this->input->post('label1'),
            'label2'    => $this->input->post('label2'),
            'label3' => $this->input->post('label3'),
            'label4' => $this->input->post('label4'),
            'label5' => $this->input->post('label5'),
        );
    }

    public function validationForm()
    {
            $this->form_validation->set_rules("label1", "Name", "required|xss_clean");
            $this->form_validation->set_rules("label2", "Link", "trim|required|xss_clean");
            $this->form_validation->set_rules("label3", "User", "trim|required|xss_clean");
            $this->form_validation->set_rules("label4", "Password", "trim|required|xss_clean");
            $this->form_validation->set_rules("label5", "Code", "trim|required|xss_clean");

            $this->form_validation->set_message('required', '%s không được để trống');          
            $this->form_validation->set_message("min_length","%s không được nhỏ hơn %d kí tự");
            $this->form_validation->set_message("max_length","%s không được lớn hơn %d kí tự");
            $this->form_validation->set_message('matches', '%s không trùng nhau');
            $this->form_validation->set_message("valid_email","%s không đúng định dạng");
            $this->form_validation->set_message("numeric","%s phải là định dạng số");
            $this->form_validation->set_message("check_name","Tên bài viết đã tồn tại. Hãy chọn tên khác");
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
    }
}
