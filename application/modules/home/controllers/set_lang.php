<?php
class set_lang extends MY_Controller {
	public function index() 
	{
		$lang = $this->uri->segment(2);
		if ($lang == 'vi') {
			$lang_page = array(
				'lang_page'	=> 1
			);
		} else {
			$lang_page = array(
				'lang_page'	=> 2
			);
		}
		$this->session->set_userdata($lang_page);
		redirect(base_url(), 'location');
	}
}