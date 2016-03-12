<div class="page-content">
    <div class="page-breadcrumbs">
        <ul>
            <li>
                <a href="/" title="<?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?>"><?php echo $lang_page == '1' ? 'Trang chủ' : 'Home' ?></a>
            </li>
            <li>
                <?php 
                    if ($lang_page == '1') {
                ?>
                <a href="<?php echo base_url('gio-hang') ?>" title="Giỏ hàng">Giỏ hàng</a>
                <?php } else { ?>
                <a href="<?php echo base_url('cart') ?>" title="Cart">Cart</a>
                <?php } ?>
            </li>
        </ul>
    </div>
    <div class="page-wrapper">
        <div class="page-body">
            <form action="<?php echo base_url('cart/updatecart') ?>" method="post">
            <table class="table table-hover table-responsive">
                <tbody>
                    <tr>
                        <th>
                            <?php echo $lang_page == '1' ? 'Ảnh sản phẩm' : 'Product image' ?>
                        </th>
                        <th>
                            <?php echo $lang_page == '1' ? 'Tên sản phẩm' : 'Product name' ?>
                        </th>
                        <th>
                            <?php echo $lang_page == '1' ? 'Số lượng' : 'Number' ?>
                        </th>
                        <th>
                            <?php echo $lang_page == '1' ? 'Xóa' : 'Delete' ?>
                        </th>
                    </tr>
                    <?php 
                        if (mycart::content() != null): 
                            foreach(mycart::content() as $cart):
                    ?>
                    <tr>
                        <td><img src="<?php echo $cart['image'] ?>" width='100' alt='<?php echo $cart['name']; ?>' /></td>
                        <td style="vertical-align: middle"><?php echo $cart['name']; ?></td>
                        <td style="vertical-align: middle"><input type='number' name="qty[<?php echo $cart['id']; ?>]" value="<?php echo $cart['qty']; ?>" style="width:60px;" /></td>
                        <td style="vertical-align: middle">
                            <a href="<?php echo $lang_page == 1 ? 'gio-hang/xoa-san-pham/'. $cart['id'] : 'cart/delete-product/'. $cart['id']; ?>" class="btn andy-btn hover-btn">
                                <?php echo $lang_page == '1' ? 'Xóa' : 'Delete' ?>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; else: 
                        echo '<tr><td colspan="4">';
                        echo $lang_page == '1' ? '<p>Không có sản phẩm nào trong giỏ</p>' : '<p>Cart empty</p>'; 
                        echo '</td></tr>'; 
                        endif; 
                    ?>
                    <tr>
                        <td colspan="6">
                            <input type="submit" class="btn andy-btn hover-btn" style="float: right;" value="<?php echo $lang_page == '1' ? 'Cập nhật' : 'Update' ?>" />
                            <a href="<?php echo $lang_page == 1 ? 'gio-hang/xoa-tat-ca-san-pham' : 'cart/delete-all-product'; ?>" class="btn andy-btn hover-btn" style="float: right; margin-left: 10px; margin-right: 5px;"><?php echo $lang_page == '1' ? 'Xóa tất cả' : 'Delete all' ?></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </form>

            <?php if (mycart::content() != null): ?>
                <div class="col-md-12 center">
                    <div class="page-content">
                        <div class="page-wrapper">
                            <div class="page-body">
                                <div class="page-detail">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form-horizontal no-padding" action="<?php echo base_url('gio-hang'); ?>" method="post" name="contact">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtName">
                                                            <?php echo $lang_page == '1' ? 'Họ và tên ' : 'Fullname ' ?>
                                                        </label>
                                                        <div class="col-md-8 col-sm-8 col-xs-8 full-xs">
                                                            <input name="con_name" value="<?php echo set_value('con_name'); ?>" type="text" placeholder="<?php echo $lang_page == '1' ? 'Nhập họ tên...' : 'Enter fullname...' ?>" class="form-control input-md">
                                                            <?php echo form_error('con_name') ?>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtEmail">
                                                            Email
                                                        </label>
                                                        <div class="col-md-8 col-sm-8 col-xs-8 full-xs">
                                                            <input name="con_email" value="<?php echo set_value('con_email'); ?>" type="email" placeholder="<?php echo $lang_page == '1' ? 'Nhập email...' : 'Enter email...' ?>" class="form-control input-md">
                                                            <?php echo form_error('con_email') ?>    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtPhone">
                                                            <?php echo $lang_page == '1' ? 'Điện thoại ' : 'Phone ' ?>
                                                        </label>
                                                        <div class="col-md-8 col-sm-8 col-xs-8 full-xs">
                                                            <input name="con_phone" type="text" placeholder="<?php echo $lang_page == '1' ? 'Nhập số điện thoại...' : 'Enter phone number...' ?>" class="form-control input-md">
                                                            <?php echo form_error('con_phone') ?> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="txtPhone">
                                                            <?php echo $lang_page == '1' ? 'Địa chỉ ' : 'Address ' ?>
                                                        </label>
                                                        <div class="col-md-8 col-sm-8 col-xs-8 full-xs">
                                                            <input name="local" type="text" placeholder="<?php echo $lang_page == '1' ? 'Nhập địa chỉ...' : 'Enter phone address...' ?>" class="form-control input-md">
                                                            <?php echo form_error('local') ?> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 col-sm-4 col-xs-4 full-xs control-label" for="btnSent"></label>
                                                        <div class="col-md-8 col-sm-8 col-xs-8 full-xs">
                                                            <input type="submit" name="sendcart" class="btn andy-btn hover-btn" value="<?php echo $lang_page == '1' ? 'Gửi đơn hàng' : 'Send order' ?>">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;  ?>
        </div>
    </div>
</div>
<style type="text/css">
    .control-label {
        margin-bottom: 15px;
    }
</style>
<h1 style="display: none;"><?= isset($title) ? $title : '' ?></h1>