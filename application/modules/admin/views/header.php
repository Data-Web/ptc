<?php 
  $roles = $this->session->userdata['roles'];
  $this->router->fetch_method();
?>
<div class="bgg_top">
    <div class="left"> <a title="Xem trang chủ" href="<?php echo base_url(); ?>" target="_blank">
      <div class="icon_logo"></div>
      </a> </div>
    <div class="right user_login">
      <div class="left bachnx_repon_left">Xin chào: <u style="font-weight:bold;"><?php echo $this->session->userdata['ses_user']; ?></u> 
        ( 
          <a href="<?php echo base_url()."admin/user/changepass"; ?>" style="color:#f00"><b>Đổi mật khẩu</b></a> |  
          <a href="<?php echo base_url()."admin/user/profile"; ?>" style="color:#f00"><b>Cập nhật thông tin</b></a>  
        )
      </div>
      <div class="bachnx_group_icons">
          <div class="pic icon_clock left"></div>
          <div class="left" style="margin-top: 2px;"><?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('d/m/Y'); ;?></div>
          <div class="pic icon_exit left"></div>
          <div class="left" style="margin-top: 2px;"><a class="bachnx_logout" href="<?php echo base_url()."admin/verify/logout" ?>">Thoát quản trị</a> &nbsp;</div>
      </div>
      <div class="clear"></div>
      
      <div class="right bachnx_repon_left" style="margin-top:5px;margin-right:5px;">Server time : 
      <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('H:i:s - d/m/Y'); ;?>
      </div>
      <div class="right clear bachnx_repon_left" style="margin-top:5px;margin-right:5px;">Last login ip :
    <?php
      //Gets the IP address
      $ip = getenv("REMOTE_ADDR"); 
      echo $ip; 
    ;?> 
    </div>
    </div>
    <div class="clear"></div>
  
  </div>
  <!--Start menu-->
  <div id="tabMenuDm">
    <div class="bgg navbar">
        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar bachnx_navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
      <div style="padding-left: 10px;">
        <script type="text/javascript">
      $(document).ready(function(){
        $("#tabMenuDm .h_menu_content li").eq(<?php if(isset($act)){ echo $act;}else{ echo "0";} ?>).addClass("menu_active");
      });
    </script>
        <ul class="h_menu_content">
          <li class="h_menu_item left">
            <a href="<?php echo base_url()."admin/index" ;?>" class="first_"><span><i class="icon-home"></i>Home</span></a>
          </li>

          <?php if (isset($roles['product']['view']) && $roles['product']['view']  || isset($roles['product_category']['view']) && $roles['product_category']['view']) { ?>
            <li id="s2" class="h_menu_item left">
              <a class="first_" href="javascript:void(0);" title="Bán hàng"><span><i class="icon-tags"></i>Gian hàng</span></a>
              <div class="h_menu_sub_full2 h_menu_sub_public" id="h_menu_sub_s2">
                <?php if (isset($roles['product']['view']) && $roles['product']['view']) { ?>
                  <p class="a_root"><a href="<?php echo base_url()."admin/product" ;?>">Quản lý sản phẩm</a></p>
                <?php } ?>

                <?php if (isset($roles['product_category']['view']) && $roles['product_category']['view']) { ?>
                <p class="a_root"><a href="<?php echo base_url()."admin/product_category" ;?>">Quản lý danh mục sản phẩm</a></p>
                <?php } ?>
                <p class="a_root"><a href="<?php echo base_url()."admin/doitac" ; ?>">Danh sách đối tác</a></p>
                <p class="a_root"><a href="<?php echo base_url()."admin/hangsanxuat" ; ?>">Danh sách hãng sản xuất</a></p>
                <p class="a_root"><a href="<?php echo base_url()."admin/cloud" ; ?>">Quản lý cloud</a></p>
              </div>
            </li>
          <?php } ?>

          <?php if (isset($roles['order']['view']) && $roles['order']['view'] && $this->session->userdata('supper_admin') == 4) { ?>
            <li id="s1" class="h_menu_item left">
              <a class="first_" href="<?php echo base_url()."admin/order"; ?>" title="Quản lý đơn hàng"><span><i class="icon-shopping-cart"></i>Đơn hàng</span></a>
            </li>
          <?php } ?>

          <?php if (isset($roles['articles']['view']) && $roles['articles']['view']) { ?>
          <li id="s5" class="h_menu_item left ">
            <a class="first_" href="javascript:void(0);" title="Quản lý tin tức"><span><i class="icon-th-large"></i>Tin tức</span></a>
            <div class="h_menu_sub_full5 h_menu_sub_public" id="h_menu_sub_s5">
              <p class="a_root"><a href="<?php echo base_url()."admin/articles" ; ?>">Danh sách tin tức</a></p>
            </div>
          </li>
          <?php } ?>
          <?php if(isset($roles['recruitment']['view']) || isset($roles['service']['view']) || isset($roles['introduce']['view'])): ?>
            <li id="s6" class="h_menu_item left ">
              <a class="first_" href="javascript:void(0);" title="Quản lý dịch vụ"><span><i class="icon-th-large"></i>Nội dung</span></a>
              <div class="h_menu_sub_full6 h_menu_sub_public" id="h_menu_sub_s6">
                <?php if(isset($roles['recruitment']['view']) && $roles['recruitment']['view']): ?>
                  <p class="a_root"><a href="<?php echo base_url()."admin/recruitment" ; ?>" title="Quản lý tuyển dụng">Tuyển dụng</a></p>
                <?php endif; ?>
                
                <?php if(isset($roles['service']['view']) && $roles['service']['view']): ?>
                  <p class="a_root"><a href="<?php echo base_url()."admin/service" ; ?>" title="Quản lý dịch vụ">Dịch vụ</a></p>
                <?php endif; ?>

                <?php if(isset($roles['introduce']['view']) && $roles['introduce']['view']): ?>
                  <p class="a_root"><a href="<?php echo base_url()."admin/introduce" ; ?>">Giới thiệu</a></p>
                <?php endif; ?>
              </div>
            </li>
          <?php endif; ?>

          <?php if(isset($roles['khachhang']['view']) && $roles['khachhang']['view']): ?>
          <li id="s3" class="h_menu_item left ">
            <a class="first_" href="<?php echo base_url('admin/khachhang'); ?>" title="Bán hàng"><span><i class="icon-user"></i>Khách hàng</span></a>
          </li>
          <?php endif; ?>

          <?php if ($this->session->userdata('supper_admin') == 4):  ?>
            <li id="s10" class="h_menu_item left">
              <a class="first_" href="javascript:void(0);" title="Quản lý user"><span><i class="icon-user"></i>Quản lý user</span></a>
              <div class="h_menu_sub_full10 h_menu_sub_public" id="h_menu_sub_s10">
                  <p class="a_root"><a href="<?php echo base_url()."admin/user" ; ?>">Danh sách user</a></p>
                  <p class="a_root"><a href="<?php echo base_url()."admin/role" ; ?>">Danh sách quyền</a></p>
              </div>
            </li>
          
            <li id="s20" class="h_menu_item left ">
              <a class="first_" href="<?php echo base_url()."admin/customer_contact" ;?>">
                <span><i class="icon-th-large"></i>Liên hệ</span>
              </a>
            </li>
          <?php endif; ?>

          <li id="s17" class="h_menu_item left">
            <a class="first_" href="javascript:void(0);" title="Bán hàng"><span><i class="icon-cogs"></i>Hệ thống</span></a>
            <div class="h_menu_sub_full17 h_menu_sub_public" id="h_menu_sub_s17">
              <?php if ($this->session->userdata('supper_admin') == 4):  ?>
              <p class="a_root"><a href="<?php echo base_url()."admin/setup" ; ?>">Cài đặt hiển thị</a></p>
              <p class="a_root"><a href="<?php echo base_url()."admin/support" ; ?>">Danh sách hỗ trợ</a></p>
              <?php endif; ?>
              <?php if(isset($roles['config']['view']) && $roles['config']['view'] || isset($roles['config']['edit']) && $roles['config']['edit']): ?>
              <p class="a_root"><a href="<?php echo base_url()."admin/config" ; ?>">Thông tin website</a></p>
              <?php endif; ?>

              <?php if ($this->session->userdata('supper_admin') == 4):  ?>
              <p class="a_root"><a href="<?php echo base_url()."admin/slide" ; ?>">Danh sách slide</a></p>
              <p class="a_root"><a href="<?php echo base_url()."admin/link" ; ?>">Danh sách liên kết</a></p>
              <p class="a_root"><a href="<?php echo base_url()."admin/office" ; ?>">Danh sách chi nhánh</a></p>
              <p class="a_root"><a href="<?php echo base_url()."admin/popup" ;?>">Popup quảng cáo</a></p>
              <?php endif; ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <!--End menu--> 
  
  <!--Start  noi dung-->
  <div class="bgg_under_menu">
    <div class="padd">
      <div class="pic icon_tomtat left"></div>
      <div class="text"><?php echo $title; ?></div>
      <div class="clear"></div>
    </div>
  </div>
