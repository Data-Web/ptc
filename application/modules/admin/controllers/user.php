<?php
require("libraries/student.php");

class User extends Student
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("muser");
        $this->load->model('role_model');
    }

    public function index()
    {
        $config['base_url']     = base_url()."admin/user/index";
        $config['total_rows']   = $this->muser->count_all($this->session->userdata['ses_userid']);
        $config['per_page']     = 10;
        $config['uri_segment']  = 4;
        $config['next_link']    = "Next";
        $config['prev_link']    = "Prev";
        $config['first_link']   = "First";
        $config['last_link']    = "Last";
        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $start = $this->uri->segment(4);
        $data['list_user'] = $this->muser->list_user($config['per_page'],$start, $this->session->userdata['ses_userid']);
        $data['act'] = "10";
        $data['title'] = "Danh sách user";
        $data['template'] = "user/list_user";
        $this->load->view("layout",$data);
    }

    public function add()
    {     
        if ($this->input->post('ok') != "") {
            $this->validationForm();
            $this->form_validation->set_rules("password","Mật khẩu", "trim|required|min_length[6]|xss_clean");
            if ($this->form_validation->run()) {
                $formData = $this->getFormData();
                $formData['user_password'] = $this->fillter(md5($this->input->post("password")));
                $this->muser->add_user($formData);
                redirect(base_url()."admin/user");
            }
        }

        $data['categories'] = $this->muser->getAllCategory();
        $data['roles'] = $this->role_model->getAll();
        $data['title'] = "Thêm mới user";
        $data['template'] = "user/form";
        $this->load->view("layout",$data);
    }

    public function update()
    {
        $id = $this->uri->segment(4);
        if ($this->input->post('ok')) {
            $this->validationForm();
            $this->form_validation->set_rules("password","Mật khẩu", "trim|min_length[6]|xss_clean");
            if ($this->form_validation->run()) {
                $formData = $this->getFormData();
                if($this->input->post("password") != null) {
                    $formData['user_password'] = $this->fillter(md5($this->input->post("password")));
                }
                $this->muser->update_user($formData, $id); 
            }
        }

        $data['categories'] = $this->muser->getAllCategory();
        $data['roles'] = $this->role_model->getAll();
        $data['title']      = "Sửa thông tin user";
        $data['template']   = "user/form";
        $data['user'] = $this->muser->getdata($id);
        $this->load->view("layout",$data);
    }

    public function update_status() {
        $id = $this->input->post('rel');
        if($this->input->post("type")){
            $status = $this->input->post('val');
            if($status == 0){
                $val = array(
                    "user_status" => "1"
                );
                $this->muser->update_user($val,$id);
                die();
            }else{
                $val = array(
                    "user_status" => "0"
                );
                $this->muser->update_user($val,$id);
                die();
            }
        }
    }

    public function del(){
        $id = $this->input->post('id');
        $this->muser->del($id);
    }

    protected function getFormData()
    {   
        $data = array(
            "user_name"     => $this->fillter($this->input->post("user_name")),
            "user_level"    => $this->fillter($this->input->post("user_level")),
            "user_fullname" => $this->fillter($this->input->post("user_fullname")),
            "user_gender"   => $this->fillter($this->input->post("user_gender")),
            "user_phone"    => $this->fillter($this->input->post("user_phone")),
            "user_email"    => $this->fillter($this->input->post("user_email")),
            "user_address"  => $this->fillter($this->input->post("user_address")),
            "user_role"     => $this->fillter($this->input->post("user_role")),
            "categories"    => json_encode($this->input->post('categories')),
            "user_date"     => date("H:i:s - d/m/Y")
        );

        return $data;
    }


    public function validationForm()
    {
        $this->form_validation->set_rules("user_name","Tên đăng nhập", "trim|required|callback_check_name|xss_clean");
        $this->form_validation->set_rules("user_level","Quyền quản trị", "required|xss_clean");
        $this->form_validation->set_rules("user_email","Địa chỉ email", "required|valid_email|callback_check_email|xss_clean");
        $this->form_validation->set_rules("user_fullname","Họ và tên", "required|xss_clean");

        $this->form_validation->set_message('required', '%s không được để trống');          
        $this->form_validation->set_message("min_length","%s không được nhỏ hơn %d kí tự");
        $this->form_validation->set_message("max_length","%s không được lớn hơn %d kí tự");
        $this->form_validation->set_message('matches', '%s không trùng nhau');
        $this->form_validation->set_message("valid_email","%s không đúng định dạng");
        $this->form_validation->set_message("numeric","%s phải là định dạng số");
        $this->form_validation->set_message("check_name","Tên đăng nhập đã tồn tại. Hãy chọn tên khác");
        $this->form_validation->set_message("check_email", "Địa chỉ email đã tồn tại. Hãy chọn tên khác");
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
    }

    public function check_name() 
    {
        $username = $this->input->post('user_name');
        $id = $this->uri->segment(4);

        if($this->muser->checkName($username, $id)  > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function check_email() 
    {
        $email = $this->input->post('user_email');
        $id = $this->uri->segment(4);
        
        if($this->muser->checkEmail($email, $id)  > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function changepass()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules("password","Mật khẩu mới", "trim|required|min_length[6]|xss_clean");
            $this->form_validation->set_rules("repassword","Xác nhận mật khẩu", "required|matches[password]|xss_clean");

            $this->form_validation->set_message("min_length","%s không được nhỏ hơn %d kí tự");
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_message('matches', '%s không trùng nhau');
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');

            if ($this->form_validation->run()) {
                $formData['user_password'] = md5($this->input->post('password'));
                $this->muser->update_user($formData, $this->session->userdata['ses_userid']);
                $data['success'] = 'Thay đổi mật khẩu thành công';
            }
        }

        $data['title'] = "Đổi mật khẩu";
        $data['template']   = "user/changepass";
        $data['user'] = $this->muser->getdata($this->session->userdata['ses_userid']);
        $this->load->view("layout",$data);
    }

    public function profile()
    {
        if ($this->input->post()) 
        {
            $this->form_validation->set_rules("user_email","Địa chỉ email", "required|valid_email|callback_check_email_profile|xss_clean");
            $this->form_validation->set_message("check_email_profile","Địa chỉ email đã tồn tại. Hãy chọn tên khác");
            
            if ($this->form_validation->run()) {
                $formData = array(
                    "user_fullname" => $this->fillter($this->input->post("user_fullname")),
                    "user_gender"   => $this->fillter($this->input->post("user_gender")),
                    "user_phone"    => $this->fillter($this->input->post("user_phone")),
                    "user_email"    => $this->fillter($this->input->post("user_email")),
                    "user_address"  => $this->fillter($this->input->post("user_address")),
                    "user_date"     => date("H:i:s - d/m/Y")
                );
                $this->muser->update_user($formData, $this->session->userdata['ses_userid']);
                $data['success'] = 'Thay đổi thông tin cá nhân thành công';
            } else {
               echo 'Validate chua thanh cong';
            }
        }

        $data['title'] = "Thay đổi thông tin cá nhân";
        $data['template']   = "user/profile";
        $data['user'] = $this->muser->getdata($this->session->userdata['ses_userid']);
        $this->load->view("layout",$data);
    }

    public function check_email_profile() 
    {
        $email = $this->input->post('user_email');
        
        if($this->muser->checkEmail($email, $this->session->userdata['ses_userid'])  > 0) {
            return false;
        } else {
            return true;
        }
    }
}
