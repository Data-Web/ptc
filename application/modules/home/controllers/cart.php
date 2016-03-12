<?php
class cart extends MY_Controller
{
    protected $_lang_page;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper('mail_helper');
        $this->load->helper('form');
        $this->load->model("mcart");
        $this->_lang_page = $this->session->userdata('lang_page');
    }
    
    public function index()
    {
        if ($this->input->post('sendcart')) {
            $this->_validation();
            $this->_messages();
            if ($this->form_validation->run()) {
                $userInfo = array(
                    'name' => $this->input->post('con_name'),
                    'phone' => $this->input->post('con_email'),
                    'email' => $this->input->post('con_phone'),
                    'local' => $this->input->post('local'),
                    'status' => 13,
                    'date' => date("H:i:s - d/m/Y")
                );
                $this->mcart->insertOrder($userInfo);

                if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                    foreach ($_SESSION['cart'] as $cart) {
                        $orderDetail = array(
                            'pro_name' => $cart['name'],
                            'image' => $cart['image'],
                            'pro_qty' => $cart['qty'],
                            'order_id' => $this->mcart->getLastOrderId()
                        );
                        $this->mcart->insertOrderDetail($orderDetail);
                    }
                }
                
                mycart::deleteAll();
                redirect(base_url().'gio-hang','refresh');
            }
        }

        $data['lang_page']  = $this->session->userdata('lang_page');
        
        // System
        $data['activeMenu']         = 'customer';
        $data['configWeb']          = $this->_config;
        $data['config']             = $this->mindex->getdata();
        $data['info']               = $get_setup = $this->mindex->get_setup();
        $data['title']              = "Trang giỏ hàng | ". $data['config']['config_title'];
        $data['keyword']            = "Trang giỏ hàng | ". $data['config']['config_title'];
        $data['description']        = "Trang giỏ hàng | ". $data['config']['config_title'];

        $data['listSlide']          = $this->_slide;
        $data['listCategory']       = $this->_listCategoryMenu;
        $data['listNewsCategory']   = $this->_listNewsCategory;
        $data['listServiceMenu']    = $this->_listServiceMenu;
        $data['listIntroduceMenu']  = $this->_listIntroduceMenu;
        $data['listRecruitMenu']    = $this->_listRecruitMenu;
        $data['listCustomerMenu']   = $this->_listCustomerMenu;
        $data['footerInfo']         = $this->_footerInfo;
        $data['userAccess']         = $this->_count_user_access;
        $data['userOnline']         = $this->_user_online;

        $data['template']           = 'cart/layout';
        $this->load->view('layout', $data);
    }
    public function addcart()
    {
        $id = $this->uri->segment(2);
        $data = $this->mcart->getpro($id);
        if (!is_numeric($id) || !$id || $data == null) {
            redirect(base_url()); 
        }
        
        if ($data['pro_images'] != null) {
            $imageSer = unserialize($data['pro_images']);
           $image = '/uploads/products/thumb/'. $imageSer[0];
        } else {
            $image = '/public/admin/images/no-images.jpg';
        }

        $inputCart = array(
                'id' => $data['pro_id'],
                'name' => $data['pro_name'],
                'image' => $image,
                'price' => $data['pro_price']
            );
        mycart::insert($inputCart);
        redirect(base_url().'gio-hang','refresh');
   }

    public function updatecart()
    {
        $qtys = $this->input->post('qty');
        mycart::update($qtys);
        redirect(base_url().'gio-hang.html', 'refresh');     
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        
        $data = $this->mcart->getpro($id);
        if (!is_numeric($id) || !$id || $data == null) {
            redirect(base_url()); 
        }

        mycart::delete($id);

        redirect(base_url().'gio-hang.html','refresh'); 
    }

    public function deleteAll()
    {
        mycart::deleteAll();
        redirect(base_url().'gio-hang.html','refresh');
    }

    public function emptycart(){
        $this->cart->destroy();
        redirect(base_url().'gio-hang.html','refresh'); 
    }

    public function ajax(){
       $this->load->helper("date");
       if(isset($_POST['type'])){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $name   = $this->fillter($this->input->post("cart_name"));
        $email  = $this->fillter($this->input->post("cart_email"));
        $phone  = $this->fillter($this->input->post("cart_tel"));
        $address = $this->fillter($this->input->post("cart_address"));
        $pay_method = $this->fillter($this->input->post("cart_pay"));
        $ship_method = $this->fillter($this->input->post("cart_ship"));
        //$message = $_POST['cart_message'];
        $cart_total = $this->fillter($this->input->post("cart_total"));
        $rule = "/^[a-zA-Z]{1}[a-zA-Z0-9.]{2,20}\@[a-zA-Z0-9]{2,}\.[a-zA-Z]{2,5}$/";
        $rule1 = "/^[0]{1}[0-9]{9,10}$/";
        if($name == "" || $email == "" || $phone == "" || $address == ""){
            echo "1";
            die();
        }else{
            if(preg_match($rule1,$phone)){
                if(preg_match($rule,$email)){
                    $data = array(
                    "name"  => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "local" => $address,
                    "pay_method" => $pay_method,
                    "ship_method" => $ship_method,
                    "serial" => json_encode($this->cart->contents()),
                    "price" => $cart_total,
                    "date"  => date("H:i:s - d/m/Y"),
                    "date_count"    => date("d-m-Y")
                    );
                if(isset($_SESSION['userid'])){
                    $data['user_id'] = $_SESSION['userid'];
                }
                $cart = $this->cart->contents();
                foreach($cart as $val){
                    $this->mcart->update_pro($val['id']);
                }
                $this->sendmail($data);
                $this->sendmails($data,$email);
                $this->mcart->add($data);
                $this->emptycart();
                }else{
                    echo 2;
                }
            }else{
                echo 3;
            }
        }
    }
   }
   public function sendmail($data){
       $config = $this->mindex->getdata();
       $mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                </head>
                <body>
                <h2 style="font-size: 16px;">Đơn hàng từ '.$_SERVER['HTTP_HOST'].'</h2>
                <h3>Thông tin khách hàng</h3>

        ';
        $mesnger .= "<table><tr><td>Tên khách hàng</td><td>".$data['name']."</td></tr><tr><td>Địa chỉ email</td><td>".$data['email']."</td></tr><tr><td>Điện thoại liên hệ</td><td>".$data['phone']."</td></tr><tr><td>Địa chỉ</td><td>".$data['local']."</td></tr></table>";
        $mesnger .= '<h3>Nội dung đặt hàng</h3>
                    <style type="text/css">#bachnx_cart tr td{padding:5px;}</style>
                    <table id="bachnx_cart" style="border-collapse: collapse;width: 100%;" border="1" bordercolor="#CCCCCC">
                      <tr style="background-color:#FC0; font-weight:bold">
                        <td style="padding:5px;">STT</td>
                        <td style="padding:5px;">Sản phẩm</td>
                        <td style="padding:5px;">Đơn giá</td>
                        <td style="padding:5px;">Số lượng</td>
                        <td style="padding:5px;">Tổng tiền</td>
                      </tr>
        ';
        $unserial = $data['serial'];
        $serial = json_decode($unserial,true);
        $stt = 0;
        foreach($serial as $value){
        $stt++;
        $mesnger .= '<tr>
                        <td style="padding:5px;">'.$stt.'</td>
                        <td style="padding:5px;"><a href="'.base_url().''.$value['rewrite'].'/p'.$value['id'].'.html"><b>'.$value['name'].'</b></a></td>
                        <td style="padding:5px;">'.@number_format($value['price']).' <u>đ</u></td>
                        <td style="padding:5px;">'.$value['qty'].'</td>
                        <td style="padding:5px;">'.@number_format($value['subtotal']).' <u>đ</u></td>
                      </tr>
        ';
        }
        $mesnger .= '<tr class="txt_16">
                        <td class="txt0" colspan=4 align="right" style="padding:5px;"> Tổng tiền </td>
                        <td class="txt_right" style="padding:5px;"> '.@number_format($data['price']).' <u>đ</u></td>
                      </tr>
                    </table>
        ';
        $mesnger .= '</body></html> ';
        
        send_mail_helper(''.$config['config_email'].'', 'Thư đặt hàng từ '.$_SERVER['HTTP_HOST'].'', htmlspecialchars_decode($mesnger));
   }
   
   public function sendmails($data,$mail){
       $mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                </head>
                <body>
                <h2 style="font-size: 16px;">Đơn hàng từ '.$_SERVER['HTTP_HOST'].'</h2>
                <h3>Thông tin khách hàng</h3>

        ';
        $mesnger .= "<table><tr><td>Tên khách hàng</td><td>".$data['name']."</td></tr><tr><td>Địa chỉ email</td><td>".$data['email']."</td></tr><tr><td>Điện thoại liên hệ</td><td>".$data['phone']."</td></tr><tr><td>Địa chỉ</td><td>".$data['local']."</td></tr></table>";
        $mesnger .= '<h3>Nội dung đặt hàng</h3>
                    <style type="text/css">#bachnx_cart tr td{padding:5px;}</style>
                    <table id="bachnx_cart" style="border-collapse: collapse;width: 100%;" border="1" bordercolor="#CCCCCC">
                      <tr style="background-color:#FC0; font-weight:bold">
                        <td style="padding:5px;">STT</td>
                        <td style="padding:5px;">Sản phẩm</td>
                        <td style="padding:5px;">Đơn giá</td>
                        <td style="padding:5px;">Số lượng</td>
                        <td style="padding:5px;">Tổng tiền</td>
                      </tr>
        ';
        $unserial = $data['serial'];
        $serial = json_decode($unserial,true);
        $stt = 0;
        foreach($serial as $value){
        $stt++;
        $mesnger .= '<tr>
                        <td style="padding:5px;">'.$stt.'</td>
                        <td style="padding:5px;"><a href="'.base_url().''.$value['rewrite'].'/p'.$value['id'].'.html"><b>'.$value['name'].'</b></a></td>
                        <td style="padding:5px;">'.@number_format($value['price']).' <u>đ</u></td>
                        <td style="padding:5px;">'.$value['qty'].'</td>
                        <td style="padding:5px;">'.@number_format($value['subtotal']).' <u>đ</u></td>
                      </tr>
        ';
        }
        $mesnger .= '<tr class="txt_16">
                        <td class="txt0" colspan=4 align="right" style="padding:5px;"> Tổng tiền </td>
                        <td class="txt_right" style="padding:5px;"> '.@number_format($data['price']).' <u>đ</u></td>
                      </tr>
                    </table>
        ';
        $mesnger .= '</body></html> ';
        
        send_mail_helper(''.$mail.'', 'Đơn hàng của bạn', htmlspecialchars_decode($mesnger));
    }

    private function _validation() 
    {
        if ($this->_lang_page == '1') {
            $this->form_validation->set_rules('con_name', 'Họ và tên', 'required|min_length[4]');
            $this->form_validation->set_rules('con_email', 'Email', 'required|email');
            $this->form_validation->set_rules('con_phone', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('local', 'Địa chỉ', 'required');
        } else {
            $this->form_validation->set_rules('con_name', 'Fullname', 'required|min_length[4]');
            $this->form_validation->set_rules('con_email', 'Email', 'required|email');
            $this->form_validation->set_rules('con_phone', 'Phone number', 'required');
            $this->form_validation->set_rules('local', 'Address', 'required');
        }
    }

    private function _messages() 
    {
        if ($this->_lang_page == '1') {
            $this->form_validation->set_message('required', '%s không được để trống');
            $this->form_validation->set_message('min_length', '%s không được ít hơn %d ký tự');
            $this->form_validation->set_message('email', '%s không đúng định dạng');
        } else {
            $this->form_validation->set_message('required', '%s required');
            $this->form_validation->set_message('min_length', 'Input is too short, minimum is %d characters');
            $this->form_validation->set_message('email', 'Invalid %s format');
        }
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-validate">','</div>');
    }
}
