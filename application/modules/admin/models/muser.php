<?php
class Muser extends CI_Model
{
    protected $_table = "tbl_user";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($user,$pass)
    {
        $this->db->where("user_status", 1);
        $this->db->where("user_name", $user);
        $this->db->where("user_password",md5($pass));
        $result = $this->db->get($this->_table);
        if($result->num_rows() == 0){
            return FALSE;
        }else{
            return $result->row_array();
        }
    }

    public function check_user($user,$id=""){
        if($id != ""){
            $this->db->where("user_id !=",$id);
        }
        $this->db->where("user_name",$user);
        $query=$this->db->get($this->_table);

        if ($query->num_rows() == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function check_email($email,$id="")
    {
        if($id != ""){
            $this->db->where("user_id !=",$id);
        }
        $this->db->where("user_email",$email);
        $query=$this->db->get($this->_table);
        if($query->num_rows() == 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function add_user($data)
    {
        $this->db->insert($this->_table,$data);
    }

    public function list_user($off,$start, $user_id)
    {
        $this->db->order_by("user_id","DESC");
        $this->db->where("user_mod", 0);
        $this->db->where("user_mod", 0);
        $this->db->where("user_id != ", $user_id);
        $this->db->join('roles', 'roles.id = tbl_user.user_level', 'left');
        $this->db->limit($off,$start);
        return $this->db->get($this->_table)->result_array();
    }

    public function count_all($user_id)
    {
        $this->db->where("user_id != ", $user_id);
        return $this->db->count_all($this->_table);
    }

    public function getdata($id){
        $this->db->where("user_id",$id);
        return $this->db->get($this->_table)->row_array();
    }

    public function update_user($data,$id)
    {
        $this->db->where("user_id",$id);
        $this->db->update($this->_table,$data);
    }
    
    public function del($id){
        $this->db->where("user_id",$id);
        $this->db->where("user_id !=",1);
        $this->db->delete($this->_table);
    }

    public function checkName($username, $id) 
    {
        $this->db->where('user_name', $username);
        if ($id) {
            $this->db->where('user_id !=', $id);
        }
        return $this->db->get('tbl_user')->num_rows();
    }

    public function checkEmail($email, $id) 
    {
        $this->db->where('user_email', $email);
        if ($id) {
            $this->db->where('user_id !=', $id);
        }
        return $this->db->get('tbl_user')->num_rows();
    }

    public function getAllCategory()
    {
        return $this->db->get('tbl_category')->result_array();
    }
}