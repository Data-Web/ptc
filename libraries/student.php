<?php
class Student extends CI_Controller
{
    protected $_permission = array(
        1 => 'Thêm danh mục sản phẩm',
        2 => 'Sửa danh mục sản phẩm',
        3 => 'Xóa danh mục sản phẩm',
        4 => 'Thêm sản phẩm',
        5 => 'Sửa sản phẩm',
        6 => 'Xóa sản phẩm'
    );

    protected $_user_role;
    protected $_user_categories;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");
        $this->load->model('role_model');
        $this->load->model('muser');
        
        if (!$this->session->userdata("ses_user")) {
            redirect(base_urL()."admin/verify");
        }

        $user_role = $this->muser->getdata($this->session->userdata('ses_userid'));
        
        $this->_user_role = $user_role['user_role'];
        $this->_user_categories = $user_role['categories'] != null ? json_decode($user_role['categories'], true) : array();

        $this->session->set_userdata('roles', $this->__getPermisson());
    }
    
    public function fillter($str){
        $str = str_replace("<", "&lt;", $str);
        $str = str_replace(">", "&gt;", $str);
        $str = str_replace("&", "&amp;", $str);         
        $str = str_replace("|", "&brvbar;", $str);
        $str = str_replace("~", "&tilde;", $str);
        $str = str_replace("`", "&lsquo;", $str);
        $str = str_replace("#", "&curren;", $str);
        $str = str_replace("%", "&permil;", $str);
        $str = str_replace("'", "&rsquo;", $str);
        $str = str_replace("\"", "&quot;", $str);
        $str = str_replace("\\", "&frasl;", $str);
        $str = str_replace("--", "&ndash;&ndash;", $str);
        $str = str_replace("ar(", "ar&Ccedil;", $str);
        $str = str_replace("Ar(", "Ar&Ccedil;", $str);
        $str = str_replace("aR(", "aR&Ccedil;", $str);
        $str = str_replace("AR(", "AR&Ccedil;", $str);
        return htmlspecialchars($str);
    }

    public function debug($val){
        echo "<pre>";
        print_r($val);
        echo "</pre>";
        die();
    }

    public function php_file_tree($directory, $return_link, $extensions = array()) 
    {
        if( substr($directory, -1) == "/" ) $directory = substr($directory, 0, strlen($directory) - 1);
        $code = php_file_tree_dir($directory, $return_link, $extensions);
        return $code;
    }
    
    public function php_file_tree_dir($directory, $return_link, $extensions = array(), $first_call = true) {
        // Recursive function called by php_file_tree() to list directories/files
        
        // Get and sort directories/files
        if( function_exists("scandir") ) $file = scandir($directory); else $file = php4_scandir($directory);
        natcasesort($file);
        // Make directories first
        $files = $dirs = array();
        foreach($file as $this_file) {
            if( is_dir("$directory/$this_file" ) ) $dirs[] = $this_file; else $files[] = $this_file;
        }
        $file = array_merge($dirs, $files);
        
        // Filter unwanted extensions
        if( !empty($extensions) ) {
            foreach( array_keys($file) as $key ) {
                if( !is_dir("$directory/$file[$key]") ) {
                    $ext = substr($file[$key], strrpos($file[$key], ".") + 1); 
                    if( !in_array($ext, $extensions) ) unset($file[$key]);
                }
            }
        }
        
        if( count($file) > 2 ) { // Use 2 instead of 0 to account for . and .. "directories"
            $php_file_tree = "<ul";
            if( $first_call ) { $php_file_tree .= " class=\"php-file-tree\""; $first_call = false; }
            $php_file_tree .= ">";
            foreach( $file as $this_file ) {
                if( $this_file != "." && $this_file != ".." ) {
                    if( is_dir("$directory/$this_file") ) {
                        // Directory
                        $php_file_tree .= "<li class=\"pft-directory\"><a href=\"#\">" . htmlspecialchars($this_file) . "</a>";
                        $php_file_tree .= php_file_tree_dir("$directory/$this_file", $return_link ,$extensions, false);
                        $php_file_tree .= "</li>";
                    } else {
                        // File
                        // Get extension (prepend 'ext-' to prevent invalid classes from extensions that begin with numbers)
                        $ext = "ext-" . substr($this_file, strrpos($this_file, ".") + 1); 
                        $link = str_replace("[link]", "$directory/" . urlencode($this_file), $return_link);
                        $php_file_tree .= "<li class=\"pft-file " . strtolower($ext) . "\"><a href=\"$link\">" . htmlspecialchars($this_file) . "</a></li>";
                    }
                }
            }
            $php_file_tree .= "</ul>";
        }
        return $php_file_tree;
    }

    public function php4_scandir($dir)
    {
        $dh  = opendir($dir);
        while( false !== ($filename = readdir($dh)) ) {
            $files[] = $filename;
        }
        sort($files);
        return($files);
    }

    protected function __getPermisson()
    {   
        $role = $this->role_model->getOnce($this->session->userdata('user_permisson'));
        if ($role != null) {
            $role_modules = $this->db->where('role_id', $role['id'])
                                ->get('role_modules')->result_array();

            if ($role_modules != null ) {
                foreach ($role_modules as $key=>$value) {
                    $role_modules[$value['module_code']] = $value;
                    unset($role_modules[$key]);
                }
            } else {
                $role_modules = array();
            }
        } else {
            $role_modules = array();
        }
        
        return $role_modules;
    }

    protected function __checkPermisson($roleModules) 
    {
        $moduleCode = $this->router->fetch_class();
        $actionName = $this->router->fetch_method();
        $moduleConfig = $this->config->item('modules');

        // Kiểm tra xem action có trong
        if (array_key_exists($moduleCode, $moduleConfig) && array_key_exists($moduleCode, $roleModules)) {
            // Action đã được config trong controller chưa
            echo $actionName;
            if (in_array($actionName, $moduleConfig[$moduleCode])) {
                // User này có quyền vào action này không ?
                $columnRole = array_search($actionName, $moduleConfig[$moduleCode]);
                if (!$roleModules[$moduleCode][$columnRole]) {
                    return "<h1>Ban chua co quyen trong action nay</h1>";
                }
            } else {
                return "Action không có controller nay";
            }
        } else {
            return "<h1>Ban chua được set quyền trong module này</h1>";
        }

        // die;
        // switch ($actionName) {
        //     case 'update':
        //         if (!$roleAction[$moduleCode]['edit']) {
        //             redirect(base_url('/admin/error_permisson/index'));
        //             return false;
        //         }
        //         break;
        //     case 'add':
        //         if (!$roleAction[$moduleCode]['add']) {
        //             redirect(base_url('/admin/error_permisson/index'));
        //             return false;
        //         }
        //         break;
        //     case 'delete':
        //         if (!$roleAction[$moduleCode]['delete']) {
        //             redirect(base_url('/admin/error_permisson/index'));
        //             return false;
        //         }
        //         break;
        //     case 'index':
        //         if (!$roleAction[$moduleCode]['view']) {
        //             redirect(base_url('/admin/error_permisson/index'));
        //             return false;
        //         }
        //         break;
        // }
    }
}
