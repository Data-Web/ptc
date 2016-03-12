<?php
class tanphat_post extends CI_Model
{
    protected $_table= 'tanphat_posts';

    CONST CUSTOMMER = 'CUS';

    public function getAllPost($type, $limit = "", $start = 0, $params = array())
    {
        $this->db->select('tanphat_posts.*, 
            (select user_fullname from tbl_user where tbl_user.user_id = tanphat_posts.user_created) as usercreate,
            (select user_fullname from tbl_user where tbl_user.user_id = tanphat_posts.user_updated) as userupdate');
        
        if (isset($params['language']) && $params['language']) {
            $this->db->where('language', $params['language']);
        }

        if ($limit != null) {
            $this->db->limit($limit, $start);
        }

        return $this->db->from($this->_table)
                    ->where('type', $type)
                    ->order_by('id', 'desc')
                    ->get()
                    ->result_array();
    }

    public function getTotalPost($type, $params = array())
    {
        $this->db->select('tanphat_posts.*');
        
        if (isset($params['language']) && $params['language']) {
            $this->db->where('language', $params['language']);
        }

        return $this->db->from($this->_table)
                    ->where('type', $type)
                    ->get()
                    ->num_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    public function deleteCustommer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
        $this->db->where('customer_id', $id);
        $this->db->delete('category_customers');
    }

    public function getOne($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table)->row_array();
    }

    public function getIdEndCustomer()
    {
        $data = $this->db->where('type', self::CUSTOMMER)
                 ->order_by('id', 'desc')
                 ->get($this->_table)->row_array();

        if ($data != null) {
            return $data['id'];
        } else {
            return 0;
        }
    }

    public function insertCustomerCategory($category, $customer)
    {
        $data = array(
            'category_id' => $category,
            'customer_id' => $customer
        );
        $this->db->insert('category_customers', $data);
    }

    public function deleteCustomerCategory($customerID) {
        $this->db->where('customer_id', $customerID);
        $this->db->delete('category_customers');       
    }

    public function getCustomers($customer)
    {
        $data = $this->db->select('category_id')
                        ->from('category_customers')
                        ->where('customer_id', $customer)
                        ->get()
                        ->result_array();
        $customerIds = array();
        
        if ($data != null):
            foreach ($data as $value):
                $customerIds[] = $value['category_id'];
            endforeach;
        endif;

        return $customerIds;
    }


    public function getAllCustomer($type, $limit = "", $start = 0, $params = array())
    {
        $this->db->select('DISTINCT(tanphat_posts.id), tanphat_posts.title, 
                tanphat_posts.image, 
                tanphat_posts.id, 
                tanphat_posts.status, 
                tanphat_posts.created_at, 
                (select user_fullname from tbl_user where tbl_user.user_id = tanphat_posts.user_created) as usercreate,
                (select user_fullname from tbl_user where tbl_user.user_id = tanphat_posts.user_updated) as userupdate');

        $this->db->join('category_customers', 'category_customers.customer_id = tanphat_posts.id');
        $this->db->join('tbl_category', 'tbl_category.cate_id = category_customers.category_id');

        if (isset($params['category']) && $params['category']) {
            $this->db->where('tbl_category.cate_id', $params['category']);
        }

        if ($limit != null) {
            $this->db->limit($limit, $start);
        }

        return $this->db->from($this->_table)
                    ->where('type', $type)
                    ->order_by('id', 'desc')
                    ->get()
                    ->result_array();
    }

     public function getTotalCustomer($type, $params = array())
    {
        $this->db->select('DISTINCT(tanphat_posts.id), tanphat_posts.title, tanphat_posts.image, tanphat_posts.id, tanphat_posts.status, tanphat_posts.created_at');
        $this->db->join('category_customers', 'category_customers.customer_id = tanphat_posts.id');
        $this->db->join('tbl_category', 'tbl_category.cate_id = category_customers.category_id');

        if (isset($params['category']) && $params['category']) {
            $this->db->where('tbl_category.cate_id', $params['category']);
        }

        return $this->db->from($this->_table)
                    ->where('type', $type)
                    ->get()
                    ->num_rows();
    }
}
