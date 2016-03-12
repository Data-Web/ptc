<?php
    require("libraries/student.php");
class Config extends Student
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("mconfig");
    }

    public function index()
    {
        if($this->input->post("ok") != "")
        {
            $formData = $this->getFormData();
            $formData['language'] = 1;

            if ($this->mconfig->checkDataByLanguage(1) > 0) {
                $this->mconfig->update_config($formData, 1);
            } else {
                $this->mconfig->insert_config($formData);
            }
        }

        $data['config'] = $this->mconfig->getdataVietnam();
        $data['title'] = "Cập nhật thông tin website";
        $data['template'] = "config/edit_config";
        $data['current'] = 'vi';
        $this->load->view("layout",$data);
    }


    public function english()
    {
        if($this->input->post("ok") != "")
        {
            if($this->input->post("ok") != "")
            {
                $formData = $this->getFormData();
                $formData['language'] = 2;

                if ($this->mconfig->checkDataByLanguage(2) > 0) {
                    $this->mconfig->update_config($formData, 2);
                } else {
                    $this->mconfig->insert_config($formData);
                }
            }
        }
        
        $data['title'] = "Cập nhật thông tin website";
        $data['template'] = "config/edit_config";
        $data['config'] = $this->mconfig->getdataEnglish();
        $data['current'] = 'en';
        $this->load->view("layout",$data);
    }

    protected function getFormData()
    {
        $data = array(
                    "marquee"      => $this->fillter($this->input->post("marquee")),
                    "hotline"      => $this->fillter($this->input->post("hotline")),
                    "facebook"     => $this->fillter($this->input->post("facebook")),
                    "youtube"      => $this->input->post("youtube"),
                    "config_title" => $this->fillter($this->input->post("config_title")),
                    "config_key"   => $this->fillter($this->input->post("config_key")),
                    "config_des"   => $this->fillter($this->input->post("config_des")),
                    "mienbac"      => $this->input->post("mienbac")
                );
        $fileUpload = $this->_upload();
                
        if($fileUpload) {
            $data['logo'] = $fileUpload;
        }
        $this->_uploadSiteMap();
        return $data;
    }

    protected function _upload()
    {
        $flag = "";
        if($_FILES['image']['name'] != "") {
                    $config['upload_path'] = './uploaded';
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
                            "source_image" =>"./uploaded/". $file_info['file_name'],
                            "new_image" => "./uploaded/thumbs/" . $file_info['file_name'],
                            "create_thumb"=> false,
                            "maintain_ration" =>TRUE,
                            "width" =>200,
                            "height" =>250,
                        );

                        $this->load->library("image_lib",$config);

                        if(!$this->image_lib->resize()) {
                            $data['errors'] = $this->image_lib->display_errors();
                        }else{
                             $this->image_lib->resize();
                        }
                        $flag = '/uploaded/thumbs/'. $file_info['file_name'];
                    }
            }
            return $flag;
    }

    protected function _uploadSiteMap()
    {
        if($_FILES['sitemap']['name'] != "") {
            @unlink('./sitemap.xml');
            move_uploaded_file($_FILES['sitemap']['tmp_name'], './'. $_FILES['sitemap']['name']);
        }
    }
}