<?php 
require("libraries/student.php");
class role extends Student
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('role_model');
    }

    public function index()
    {
        $data['roles'] = $this->role_model->getAll();
        $data['title'] = "Danh sách quyền";
        $data['template'] = "role/index";
        $this->load->view("layout",$data);
    }

    public function add()
    {
        if($this->input->post('ok')){
            $this->validate();
            $this->messages();

            if($this->form_validation->run()) { 
                $data = array("label" => $this->fillter($this->input->post("label")));
                $this->role_model->insertOrupdate($data);
                redirect(base_url('admin/role'), 'location');  
            }
        }

        $data['roles'] = array();
        $data['title'] = "Thêm quyền mới";
        $data['template'] = "role/add";
        $this->load->view("layout",$data);
    }

    public function update()
    {
        $id = $this->uri->segment(4);
       
        if ($this->input->post('ok')) {
            $this->validate();
            $this->messages();

            if ($this->form_validation->run()) { 
                $data = array("label" => $this->fillter($this->input->post("label")));
                $this->role_model->insertOrupdate($data, $id);

                //Update role module
                if ($this->_getRoleFormData() != null) {
                    foreach ($this->_getRoleFormData() as $roleModule) {
                        if ($this->role_model->checkRoleModule($id, $roleModule['module_code']) > 0) {
                            $this->role_model->updateMutilPermisson($roleModule, $id, $roleModule['module_code']);
                        } else {
                            $roleModule['role_id'] = $id;
                            $this->role_model->insertMutilPermisson($roleModule);
                        }
                    }
                }
            }
        }

        $data['role']  = $this->role_model->getOnce($id);
        $data['roles'] = $this->role_model->getRoles($id);
        $data['title'] = "Cập nhật quyền";
        $data['template'] = "role/edit";
        $this->load->view("layout",$data);
    }

    public function delete() {
        $id = $this->uri->segment(4);
        $this->role_model->delete($id);
        redirect(base_url('admin/role'), 'location');  
    }

    public function validate()
    {
        $this->form_validation->set_rules('label', 'Tên quyền quản trị', 'required|callback_check_name');
    }

    public function messages() {
        $this->form_validation->set_message('required', '%s không được để trống');
        $this->form_validation->set_message("check_name","Quyền này đã tồn tại. Vui lòng thiết lập quyền khác");
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
    }

    protected function _getRoleFormData()
    {
        $roleNew = array();

        //Module product
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('product'), 'product');
        
        //Module product_category
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('product_category'), 'product_category');

        //Module articles
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('articles'), 'articles');

        //Module order
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('order'), 'order');

        //Module khachhang
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('khachhang'), 'khachhang');

        //Module system
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('system'), 'system');

        //Module recruitment
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('recruitment'), 'recruitment');

        //Module introduce
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('introduce'), 'introduce');

        //Module service
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('service'), 'service');

        //Module report
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('report'), 'report');

        //Module slide
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('slide'), 'slide');

        //Module config
        $roleNew[] = $this->_resultSubmitPermisson($this->input->post('config'), 'config');

        return $roleNew;
    }

    private function _resultSubmitPermisson($data = array(), $code)
    {

        if (@!in_array($code, $data)) {
            $data['module_code'] = $code;
        }

        if (@!array_key_exists('add', $data)) {
            $data['add'] = 0;
        }

        if (@!array_key_exists('edit', $data)) {
            $data['edit'] = 0;
        }

        if (@!array_key_exists('del', $data)) {
            $data['del'] = 0;
        }

        if (@!array_key_exists('view', $data)) {
            $data['view'] = 0;
        }
        
        return $data;
    }

    public function check_name()
    {
        $name = $this->input->post('label');
        $id = $this->uri->segment(4);
        if($this->role_model->checkName($name, $id) > 0) {
            return false;
        } else {
            return true;
        }
    }
}