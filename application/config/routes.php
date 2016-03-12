<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|   http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|   $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/index";
$route['admin'] = 'admin/index';
$route['404_override'] = 'home/notfound';

$route['gioi-thieu'] = "home/intro";
$route['dang-ky'] = "home/users";
$route['dang-nhap'] = "home/users/login";
$route['thoat'] = "home/users/logout";
$route['tai-khoan'] = "home/users/manage";
$route['don-hang'] = "home/users/order";
$route['san-pham-yeu-thich'] = "home/users/save";
$route['sua-thong-tin'] = "home/users/update_info";
$route['man-hinh-laptop'] = "home/monitor";
$route['([a-zA-Z0-9-_]+)/ac(:num)'] = "home/articles/list_news/(:num)";
$route['san-pham-khuyen-mai'] = "home/product_sale";
$route['san-pham-khuyen-mai/(:num)'] = "home/product_sale";
$route['san-pham-moi'] = "home/product_new";
$route['san-pham-moi/(:num)'] = "home/product_new";
$route['san-pham-ban-chay'] = "home/product_bestsale";
$route['san-pham-ban-chay/(:num)'] = "home/product_bestsale";
$route['([a-zA-Z0-9-_]+)/c(:num)'] = "home/product/index/(:num)";
$route['([a-zA-Z0-9-_]+)/p(:num)'] = "home/detail/index/(:num)";
$route['([a-zA-Z0-9-_]+)/c(:num)/(:num)'] = "home/product/index/(:num)/(:num)";
$route['page/([a-zA-Z0-9-_]+)/(:num)'] = "home/page/detail/(:num)";
$route['lien-he'] = "home/customer_contact";

/** VI **/
$route['danh-muc/(:any)']                       = "home/category";
$route['danh-muc/(:any)/(:num)']                = "home/category";
$route['san-pham']                              = "home/product/index";
$route['san-pham/(:num)']                       = "home/product/index";
$route['san-pham/(:any)']                       = "home/product/detail";
$route['danh-muc-tin/(:any)']                   = "home/newscategory";
$route['danh-muc-tin/(:any)/(:num)']            = "home/newscategory";
$route['tin-tuc']                               = "home/news/index";
$route['tin-tuc/(:num)']                        = "home/news/index";
$route['tin-tuc/(:any)']                        = "home/news/detail";
$route['tuyen-dung']                            = "home/recruit/index";
$route['tuyen-dung/(:num)']                     = "home/recruit/index";
$route['tuyen-dung/(:any)']                     = "home/recruit/detail";
$route['dich-vu']                               = "home/service/index";
$route['dich-vu/(:num)']                        = "home/service/index";
$route['dich-vu/(:any)']                        = "home/service/detail";
$route['gioi-thieu']                            = "home/introduce/index";
$route['gioi-thieu/(:num)']                     = "home/introduce/index";
$route['gioi-thieu/(:any)']                     = "home/introduce/detail";
$route['khach-hang']                            = "home/customer/index";
$route['khach-hang/(:num)']                     = "home/customer/index";
$route['khach-hang/(:any)']                     = "home/customer/detail";
$route['lien-he']                               = "home/contact/index";
$route['gio-hang']                              = "home/cart/index";
$route['gio-hang/xoa-san-pham/(:num)']          = "home/cart/delete";
$route['gio-hang/xoa-tat-ca-san-pham']          = "home/cart/deleteAll";
$route['them-gio-hang/(:num)']                  = "home/cart/addcart";
$route['tim-kiem']                              = "home/search";
$route['tim-kiem/(:any)']                       = "home/search";
$route['danh-muc-khach-hang/(:any)']            = "home/category_customer/index";
$route['danh-muc-khach-hang/(:any)/(:num)']     = "home/category_customer/index";

/** EN **/
$route['category/(:any)']                       = "home/category";
$route['category/(:any)/(:num)']                = "home/category";
$route['product']                               = "home/product/index";
$route['product/(:num)']                        = "home/product/index";
$route['product/(:any)']                        = "home/product/detail";
$route['newscategory/(:any)']                   = "home/newscategory";
$route['newscategory/(:any)/(:num)']            = "home/newscategory";
$route['news']                                  = "home/news/index";
$route['news/(:num)']                           = "home/news/index";
$route['news/(:any)']                           = "home/news/detail";
$route['recruit']                               = "home/recruit/index";
$route['recruit/(:num)']                        = "home/recruit/index";
$route['recruit/(:any)']                        = "home/recruit/detail";
$route['service']                               = "home/service/index";
$route['service/(:num)']                        = "home/service/index";
$route['service/(:any)']                        = "home/service/detail";
$route['introduce']                             = "home/introduce/index";
$route['introduce/(:num)']                      = "home/introduce/index";
$route['introduce/(:any)']                      = "home/introduce/detail";
$route['customer']                              = "home/customer/index";
$route['customer/(:num)']                       = "home/customer/index";
$route['customer/(:any)']                       = "home/customer/detail";
$route['contact']                               = "home/contact/index";
$route['cart']                                  = "home/cart/index";
$route['add-cart/(:num)']                       = "home/cart/addcart";
$route['cart/delete-product/(:num)']            = "home/cart/delete";
$route['cart/delete-all-product']               = "home/cart/deleteAll";
$route['cart/updatecart']                       = "home/cart/updatecart";
$route['search']                                = "home/search";
$route['search/(:any)']                         = "home/search";
$route['category-customer/(:any)']              = "home/category_customer";
$route['category-customer/(:any)/(:num)']       = "home/category_customer";

//Other
$route['view_ip'] = "home/index/view";
$route['setup/update_key'] = "home/setup/update_key";
$route['close'] = "home/setup/web_close";

// Setlang
$route['setlang/(:any)'] = 'home/set_lang';

/* End of file routes.php */
/* Location: ./application/config/routes.php */