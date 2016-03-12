<?php
class error_permisson extends CI_Controller
{
	public function index()
	{
		$data['title']	= "Error Permisson";
		$data['message'] = "Bạn không đủ quyền truy cập";
		$data['template'] = "error_permisson/index";
		$this->load->view("layout", $data);
	}
}
