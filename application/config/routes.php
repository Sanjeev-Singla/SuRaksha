<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**********************PUBLIC******************************/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/* Home */
$route['default_controller'] = 'welcome';
$route['home'] = "public/home/home";

/* Services */
$route['services'] = "public/services";

/* Properties */
$route['properties'] = "public/properties/properties";
$route['serach-property'] = "public/properties/serach_property";

/* COmpany */
$route['about'] = "public/about/about";
$route['terms-conditions'] = "public/company/terms_conditions";
$route['privacy-policy'] = "public/company/privacy_policy";

/* Blog */
$route['blog'] = "public/blog";

/* Contact */
$route['contact'] = "public/contact/contact";

/* Users */
$route['register'] = "user/users/register";
$route['login'] = "user/users/login";
$route['update-password'] = "user/common/update_password";
$route['logout'] = "user/common/logout";

/*Forgot password*/
$route['forgot-password'] = "user/users/forgot_password";
$route['reset-password'] = "user/users/reset_password";


/***************************** Admin ***************************/
$route['admin'] = "admin/admin";
$route['admin/login'] = "admin/admin/login";
$route['admin/home'] = "admin/home/home";
/*Contact*/
$route['admin/contact'] = "admin/home/contact";
$route['admin/contact/(:num)'] = "admin/home/contact_details/$1";
/*Peoperties*/
$route['admin/properties'] = "admin/property/properties";
$route['admin/properties/(:num)'] = "admin/property/properties/$1";
$route['admin/delete-property/(:num)'] = "admin/property/delete_property/$1";
$route['admin/sold-property/(:num)'] = "admin/property/sold_property/$1";
/*Aminities*/
$route['admin/aminities'] = "admin/property/aminity";
$route['admin/aminities/(:num)'] = "admin/property/aminity/$1";
$route['admin/delete-aminity/(:num)'] = "admin/property/delete_aminity/$1";
/*Client Review*/
$route['admin/client-reviews'] = "admin/client/client_reviews";
$route['admin/delete-client-review/(:num)'] = "admin/client/delete_client_review/$1";
$route['admin/edit-client-review/(:num)'] = "admin/client/edit_client_review/$1";
/*Admin Address*/
$route['admin/admin-address'] = "admin/admin_address/address";
/*Social Links*/
$route['admin/social-link'] = "admin/admin_address/social_link";
$route['admin/edit-admin-address/(:num)'] = "admin/admin_address/edit_admin_address/$1";
$route['admin/delete-admin-address/(:num)'] = "admin/admin_address/delete_admin_address/$1";
/*Terms & Condition*/
$route['admin/privacy-policy'] = "admin/company/privacy_policy";
$route['admin/terms-condition'] = "admin/company/terms_condition";
$route['admin/about'] = "admin/company/about";

$route['admin/logout'] = "admin/home/logout";
