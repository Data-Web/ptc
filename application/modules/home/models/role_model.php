<?php
class role_model extends CI_Model {
    protected $_table   = 'roles';
    protected $_id      = 'id';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertOrupdate($data, $id = null) {
        if ($id == null) {
            $this->db->insert($this->_table, $data);
        } else {
            $this->db->where($this->_id, $id);
            $this->db->update($this->_table, $data);
        }
    }

    public function delete($id) {
        if (!$id)
            return 'Thieu id';
        $this->db->where($this->_id, $id);
        $this->db->delete($this->_table);
    }
    
    public function getAll($limit = '', $start = '') {
        if ($limit && $start)
            $this->db->limit($limit, $start);
        $this->db->order_by($this->_id);
        return $this->db->get($this->_table)->result_array();
    }

    public function getOnce($id) {
        $this->db->where($this->_id, $id);
        return $this->db->get($this->_table)->row_array();
    }

    public function count_all() {
        return $this->db->count_all_results($this->_table);
    }

    public function getRoles($id) {
        $this->db->where('role_id', $id);
        $role_modules = $this->db->get('role_modules')->result_array();

        if ($role_modules != null ) {
            foreach ($role_modules as $key=>$value) {
                $role_modules[$value['module_code']] = $value;
                unset($role_modules[$key]);
            }
        }

        return $role_modules;
    }

    public function updateMutilPermisson($data, $role_id, $module_code) {
        $this->db->where('role_id', $role_id);
        $this->db->where('module_code', $module_code);
        $this->db->update('role_modules', $data);
    }

    public function checkRoleModule( $role_id, $module_code) {
        $this->db->where('role_id', $role_id);
        $this->db->where('module_code', $module_code);
        return  $this->db->get('role_modules')->num_rows();
    }

    public function insertMutilPermisson($data) {
        $this->db->insert('role_modules', $data);
    }

    public function checkName($name, $id = "") 
    {
        $this->db->where('label', $name);
        if ($id) {
            $this->db->where('id != ', $id);
        }
        return $this->db->get('roles')->num_rows();
    }
}