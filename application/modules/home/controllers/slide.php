<?php
require("libraries/student.php");
class slide extends Student {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->model("mslide");
		}
		
		public function index() {
			$config['base_url'] 	= base_url()."admin/slide/index";
			$config['total_rows'] 	= $this->mslide->count_all();
			$config['per_page'] 	= "30";
			$config['uri_segment'] 	= "4";
			$config['next_link'] 	= "Next";
			$config['prev_link'] 	= "Prev";
			$config['first_link'] 	= "First";
			$config['last_link'] 	= "Last";
			$this->load->library("pagination");
			$this->pagination->initialize($config);
			$start = $this->uri->segment(4);
			$data['list'] = $this->mslide->getAll($config['per_page'], $start);
			$data['title'] 			= "Danh sách slide";
			$data['template'] 		= "slide/list_slide";
			$this->load->view("layout",$data);
		}

		public function add() {
			$this->load->helper("form");
			if($this->input->post('ok') != ""){
				$this->form_validation->set_rules('slide_title', 'Tên slide', 'required');
				if (empty($_FILES['slide_image']['name'])) {
	                $this->form_validation->set_rules('slide_image', 'Hình ảnh', 'required');
	          	}

                $this->form_validation->set_message('required', '%s không được để trống');
                $this->form_validation->set_error_delimiters('<div class="error">','</div>');
                if($this->form_validation->run()){ 
                	$val = array(
						"slide_title"		=> $this->fillter($this->input->post("slide_title")),
						"slide_alt"			=> $this->fillter($this->input->post("slide_title")),
						"slide_status"		=> 1
					);

					// Upload Image
	                $fileName = $this->_upload('slide_image');
	                if($fileName) {
	                    $val['slide_image'] = $fileName;
	                }

	                $this->mslide->insertOrupdate($val);
                	redirect(base_url('admin/slide'), 'location');
	            }
			}
			$data['title'] = "Thêm mới slide";
			$data['template'] = "slide/form_slide";
			$this->load->view("layout",$data);	
		}

		private function _upload($inputName = "slide_image", $upload_path = '', $width = '', $height = '')
	    {
	        if(isset($_FILES[$inputName]['name']) && $_FILES[$inputName]['name'] != null ) {
	        	// Set default
	        	if (!$upload_path) 
	        		$upload_path = './uploads/slideshow';
	        	if (!$width)
	        		$width = 200;
	        	if (!$height)
	        		$height = 200;

	        	// Make folder
	        	if(!file_exists($upload_path)) {
                    mkdir($upload_path, 0777);
                }

                // Config
	            $config['upload_path'] = $upload_path;
	            $config['allowed_types'] = 'gif|jpg|png|jpeg';
	            $config['max_size'] = '20000';
	            $config['max_width'] = '1920';
	            $config['max_height'] = '1080';
	            $this->load->library('upload', $config);
	            
	            if(!$this->upload->do_upload($inputName)) {
	              $data['errors'] = $this->upload->display_errors("<p></p>");
	              return false;
	            } else {
	                $file_info = $this->upload->data();

	                $config = array(
	                    "image_library" => 'gd2',
	                    "source_image" =>$upload_path.'/'.$file_info['file_name'],
	                    "new_image" => $upload_path.'/thumb',
	                    "create_thumb"=> TRUE,
	                    "maintain_ration" =>TRUE,
	                    "thumb_marker"	=> FALSE,
	                    "width" => $width,
	                    "height" => $height,
	                );

	                $this->load->library("image_lib",$config);

	                if(!$this->image_lib->resize()){
	                    $data['errors'] = $this->image_lib->display_errors();
	                    return false;
	                } else {
	                     $this->image_lib->resize();
	                }
	                return $file_info['file_name'];
	            }
	        } else {
	            return false;
	        }
	    }

		public function update() {
			$id = $this->uri->segment(4);
			$data['info']  = $this->mslide->getOnce($id);
			$this->load->helper("form");
			if($this->input->post('ok') != ""){
				$this->form_validation->set_rules('slide_title', 'Tên slide', 'required');
				if (empty($_FILES['slide_image']['name'])) {
	                $this->form_validation->set_rules('slide_image', 'Hình ảnh', 'required');
	          	}

                $this->form_validation->set_message('required', '%s không được để trống');
                $this->form_validation->set_error_delimiters('<div class="error">','</div>');
                if($this->form_validation->run()){ 
                	$val = array(
						"slide_title"		=> $this->fillter($this->input->post("slide_title")),
						"slide_alt"			=> $this->fillter($this->input->post("slide_title")),
						"slide_status"		=> 1
					);

                	// Delete Old-image
                	$pathImage 	= 'uploads/slideshow/';
                	$pathThumb 	= 'uploads/slideshow/thumb/';
                	$cimage 	= $pathImage.$data['info']['slide_image'];
                	$cthumb 	= $pathThumb.$data['info']['slide_image'];
                	if (file_exists($cimage)) 
                		unlink($cimage);
                	if (file_exists($cthumb)) 
                		unlink($cthumb);

					// Upload Image
	                $fileName = $this->_upload('slide_image');
	                if($fileName) {
	                    $val['slide_image'] = $fileName;
	                }
	                $this->mslide->insertOrupdate($val, $id);
                	redirect(base_url('admin/slide'), 'location');
	            }
			}
			$data['title'] = "Cập nhật slide";
			$data['template'] = "slide/form_slide";
			$this->load->view("layout",$data);	
		}

		public function del() {
			$id = $this->input->post('id');
			$data['info']  = $this->mslide->getOnce($id);
			// Delete Old-image
        	$pathImage 	= 'uploads/slideshow/';
        	$pathThumb 	= 'uploads/slideshow/thumb/';
        	$cimage 	= $pathImage.$data['info']['slide_image'];
        	$cthumb 	= $pathThumb.$data['info']['slide_image'];
        	if (file_exists($cimage)) 
        		unlink($cimage);
        	if (file_exists($cthumb)) 
        		unlink($cthumb);
        	$this->mslide->delete($id);
		}

		public function update_status(){
			$id = $this->input->post('rel');
			if($this->input->post("type")){
				$status = $this->input->post('val');
				if($status == 0){
					$val = array(
						"slide_status" => "1"
					);
					$this->mslide->insertOrupdate($val,$id);
					die();
				}else{
					$val = array(
						"slide_status" => "0"
					);
					$this->mslide->insertOrupdate($val,$id);
					die();
				}
			}
		}
		public function update_order(){
			$id = $this->input->post('id');
			$val = $this->fillter($this->input->post('val'));
			$data = array(
				"slide_type" => $val
			);
			$this->mslide->insertOrupdate($data,$id);
		}
	}