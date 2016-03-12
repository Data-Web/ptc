<?php
require("libraries/student.php");
class Office extends Student {
    public function __construct() {
        parent::__construct();
        $this->load->model('moffice');
    }

    public function index() {
        $config['base_url']     = base_url()."admin/office/index";
        $config['total_rows']   = $this->moffice->count_all();
        $config['per_page']     = "30";
        $config['uri_segment']  = "4";
        $config['next_link']    = "Next";
        $config['prev_link']    = "Prev";
        $config['first_link']   = "First";
        $config['last_link']    = "Last";
        $this->load->library("pagination");
        $this->pagination->initialize($config);
        $start = $this->uri->segment(4);
        $data['list'] = $this->moffice->getAll($config['per_page'], $start);
        $data['title'] = "Danh sách chi nhánh";
        $data['template'] = "office/list";
        $this->load->view("layout",$data);
    }

    public function add() 
    {
        $this->load->helper("form");
        if($this->input->post('ok') != ""){
            $this->form_validation->set_rules('office_name', 'Tên chi nhánh', 'required');
            $this->form_validation->set_rules('office_address', 'Địa chỉ', 'required');
        
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
            if($this->form_validation->run()){ 
                $url = $this->string->makeTitle($this->input->post('office_name'));
                $val = array(
                    "office_name" => $this->fillter($this->input->post("office_name")),
                    'office_rewrite' => $url,
                    "office_address" => $this->fillter($this->input->post("office_address")),
                    "language" => $this->input->post("language")
                );
                $this->moffice->insertOrupdate($val);
                redirect(base_url('admin/office'), 'location');
            }
        }
        $data['title'] = "Thêm mới chi nhánh";
        $data['template'] = "office/form";
        $this->load->view("layout",$data);  
    }

    public function update() {
        $id = $this->uri->segment(4);
        $data['info']  = $this->moffice->getOnce($id);
        $this->load->helper("form");
        if($this->input->post('ok') != ""){
            $this->form_validation->set_rules('office_name', 'Tên chi nhánh', 'required');
            $this->form_validation->set_rules('office_address', 'Địa chỉ', 'required');
        
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_error_delimiters('<div class="error">','</div>');
            
            if ($this->form_validation->run()) { 
                $url = $this->string->makeTitle($this->input->post('office_name'));

                $val = array (
                    "office_name" => $this->fillter($this->input->post("office_name")),
                    'office_rewrite' => $url,
                    "office_address" => $this->input->post("office_address"),
                    "language" => $this->input->post("language")
                );

                $this->moffice->insertOrupdate($val, $id);
                redirect(base_url('admin/office'), 'location');
            }
        }
        $data['title'] = "Cập nhật chi nhánh";
        $data['template'] = "office/form";
        $this->load->view("layout",$data);
    }

    public function del()
    {
        $id = $this->input->post('id');
        $this->moffice->delete($id);
    }

    public function update_status()
    {
        $id = $this->input->post('rel');
        if($this->input->post("type")){
            $status = $this->input->post('val');
            if($status == 0){
                $val = array(
                    "office_status" => "1"
                );
                $this->moffice->insertOrupdate($val,$id);
                die();
            }else{
                $val = array(
                    "office_status" => "0"
                );
                $this->moffice->insertOrupdate($val,$id);
                die();
            }
        }
    }

    public function update_order()
    {
        $id = $this->input->post('id');
        $val = $this->fillter($this->input->post('val'));
        $data = array(
            "office_order" => $val
        );
        $this->moffice->insertOrupdate($data,$id);
    }
}   