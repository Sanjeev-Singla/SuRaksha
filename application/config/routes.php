<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Home */
$route['default_controller'] = 'welcome';
$route['home'] = "public/home/home";

/* Services */
$route['services'] = "public/services";

/* Properties */
$route['properties'] = "public/properties";

/* About */
$route['about'] = "public/about";

/* Blog */
$route['blog'] = "public/blog";

/* Contact */
$route['contact'] = "public/contact/contact";

/* Users */
$route['register'] = "user/users/register";
$route['login'] = "user/users/login";
$route['logout'] = "user/common/logout";

/* Admin */
$route['admin'] = "admin/admin";
$route['admin/login'] = "admin/admin/login";
$route['admin/home'] = "admin/home/home";
$route['admin/contact'] = "admin/home/contact";
$route['admin/logout'] = "admin/home/logout";