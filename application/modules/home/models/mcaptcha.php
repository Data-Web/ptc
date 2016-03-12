<?php
class mcaptcha extends CI_Model {
	protected $_table = 'captcha';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function insert_captcha($cap) {
		$ip = $_SERVER['REMOTE_ADDR'];
		$data = array(
			'word'			=> $cap['word'],
			'ip_address'	=> $ip,
			'captcha_time'	=> $cap['time']
		);
    	$this->db->insert($this->_table, $data);
	}

	public function check_captcha_value(){
    	$expiration = time()-7200;
    	$ip = $_SERVER['REMOTE_ADDR'];

    	// Delete old captcha
    	$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);

    	// Then see if a captcha exists:
    	$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
    	$binds = array($_POST['captcha'], $ip, $expiration);
    	$query = $this->db->query($sql, $binds);
    	$row = $query->row();
   		if ($row->count == 0)
   		{
    		return false;
   		} else {
    		return true;
   		}
	}
}