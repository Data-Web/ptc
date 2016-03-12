
<br style="clear: left;" />
<h3 class="title_roles">Danh sách quyền</h3>

<?php
    function checked($data = array(), $key, $type) {
        $checked = '';
        if ($data != null) {
            if (array_key_exists($key, $data)) {
                if(isset($data[$key][$type]) && $data[$key][$type]) {
                    $checked = 'checked';
                } else {
                    echo "Chua ton tai";
                }
            }
        }
        return $checked;
    }
?>

<ul>
    <li class="modules">
        <input type="checkbox" name="product[module_code]" value="product" />
        Quản lý sản phẩm
        <div class="action">
            <input type="checkbox" name="product[add]" value="1" <?php echo checked($roles, 'product', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="product[edit]" value="1" <?php echo checked($roles, 'product', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="product[del]" value="1" <?php echo checked($roles, 'product', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="product[view]" value="1" <?php echo checked($roles, 'product', 'view'); ?> /> Xem <br/>
        </div>
    </li>
    
    <li class="modules">
        <input type="checkbox" name="product_category[module_code]" value="product_category" />
        Quản lý danh mục sản phẩm
        <div class="action">
            <input type="checkbox" name="product_category[add]" value="1" <?php echo checked($roles, 'product_category', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="product_category[edit]" value="1" <?php echo checked($roles, 'product_category', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="product_category[del]" value="1" <?php echo checked($roles, 'product_category', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="product_category[view]" value="1" <?php echo checked($roles, 'product_category', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="articles[module_code]" value="articles" />
        Quản lý tin tức
        <div class="action">
            <input type="checkbox" name="articles[add]" value="1" <?php echo checked($roles, 'articles', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="articles[edit]" value="1" <?php echo checked($roles, 'articles', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="articles[del]" value="1"  <?php echo checked($roles, 'articles', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="articles[view]" value="1" <?php echo checked($roles, 'articles', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="order[module_code]" value="order" />
        Quản lý đơn hàng
        <div class="action">
            <input type="checkbox" name="order[add]" value="1" <?php echo checked($roles, 'order', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="order[edit]" value="1" <?php echo checked($roles, 'order', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="order[del]" value="1" <?php echo checked($roles, 'order', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="order[view]" value="1" <?php echo checked($roles, 'order', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="slide[module_code]" value="slide" />
        Quản lý slider
        <div class="action">
            <input type="checkbox" name="slide[add]" value="1" <?php echo checked($roles, 'slide', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="slide[edit]" value="1" <?php echo checked($roles, 'slide', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="slide[del]" value="1" <?php echo checked($roles, 'slide', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="slide[view]" value="1" <?php echo checked($roles, 'slide', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="khachhang[module_code]" value="" />
        Quản lý khách hàng
        <div class="action">
            <input type="checkbox" name="khachhang[add]" value="1" <?php echo checked($roles, 'khachhang', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="khachhang[edit]" value="1" <?php echo checked($roles, 'khachhang', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="khachhang[del]" value="1" <?php echo checked($roles, 'khachhang', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="khachhang[view]" value="1" <?php echo checked($roles, 'khachhang', 'view'); ?> /> Xem <br/>
        </div>
    </li>
    
    <li class="modules">
        <input type="checkbox" name="config[module_code]" value="config" />
        Quản lý thông tin website
        <div class="action">
            <input type="checkbox" name="config[edit]" value="1" <?php echo checked($roles, 'config', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="config[view]" value="1" <?php echo checked($roles, 'config', 'view'); ?> /> Xem <br/>
            &nbsp;
            <br/>
            &nbsp;
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="system[module_code]" value="system" />
        Quản lý hệ thống
        <div class="action">
            <input type="checkbox" name="system[add]" value="1" <?php echo checked($roles, 'system', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="system[edit]" value="1" <?php echo checked($roles, 'system', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="system[del]" value="1" <?php echo checked($roles, 'system', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="system[view]" value="1" <?php echo checked($roles, 'system', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="recruitment[module_code]" value="recruitment" />
        Quản lý tuyển dụng
        <div class="action">
            <input type="checkbox" name="recruitment[add]" value="1" <?php echo checked($roles, 'recruitment', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="recruitment[edit]" value="1" <?php echo checked($roles, 'recruitment', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="recruitment[del]" value="1" <?php echo checked($roles, 'recruitment', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="recruitment[view]" value="1" <?php echo checked($roles, 'recruitment', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="introduce[module_code]" value="introduce" />
        Quản lý bài giới thiệu
        <div class="action">
            <input type="checkbox" name="introduce[add]" value="1" <?php echo checked($roles, 'introduce', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="introduce[edit]" value="1" <?php echo checked($roles, 'introduce', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="introduce[del]" value="1" <?php echo checked($roles, 'introduce', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="introduce[view]" value="1" <?php echo checked($roles, 'introduce', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="service[module_code]" value="service" />
        Quản lý bài giới thiệu
        <div class="action">
            <input type="checkbox" name="service[add]" value="1" <?php echo checked($roles, 'service', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="service[edit]" value="1" <?php echo checked($roles, 'service', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="service[del]" value="1" <?php echo checked($roles, 'service', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="service[view]" value="1" <?php echo checked($roles, 'service', 'view'); ?> /> Xem <br/>
        </div>
    </li>

    <li class="modules">
        <input type="checkbox" name="report[module_code]" value="service" />
        Quản lý thống kê
        <div class="action">
            <input type="checkbox" name="report[add]" value="1" <?php echo checked($roles, 'report', 'add'); ?> /> Thêm <br/>
            <input type="checkbox" name="report[edit]" value="1" <?php echo checked($roles, 'report', 'edit'); ?> /> Sửa <br/>
            <input type="checkbox" name="report[del]" value="1" <?php echo checked($roles, 'report', 'del'); ?> /> Xóa <br/>
            <input type="checkbox" name="report[view]" value="1" <?php echo checked($roles, 'report', 'view'); ?> /> Xem <br/>
        </div>
    </li>
</ul>
<style type="text/css">
    h3.title_roles {
        background: #1799a3;
        padding: 0px;
        color: #FFF;
        height: 32px;
        line-height: 32px;
        text-indent: 10px;
        font-weight: normal;
    }

    ul li.modules {
        font-weight: bold;
        background: #eee;
        padding-left: 5px;
        display: inline-block;
        width: 200px;
        padding-bottom: 5px;
        margin-bottom: 6px;
        margin-left: 4px;
    }

    div.action {
        padding-left: 15px;
        font-weight: normal;
    }
</style>