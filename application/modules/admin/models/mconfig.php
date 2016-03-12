<?php
	class Mconfig extends CI_Model{
		protected $_table = "tbl_config";

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getdataVietnam()
		{
			$this->db->where("language","1");
			return $this->db->get($this->_table)->row_array();
		}

		public function getdataEnglish()
		{
			$this->db->where("language","2");
			return $this->db->get($this->_table)->row_array();
		}

		public function update_config($data, $language){
			$this->db->where("language", $language);
			$this->db->update($this->_table, $data);
		}

		public function insert_config($data){
			$this->db->insert($this->_table, $data);
		}

		public function checkDataByLanguage($language)
		{
			$this->db->where("language", $language);
			return $this->db->get($this->_table)->num_rows();
		}
	}