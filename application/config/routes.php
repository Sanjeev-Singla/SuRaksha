<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Home */
$route['default_controller'] = 'welcome';
$route['home'] = "public/home/home";

/* Services */
$route['services'] = "public/services";

/* Admin */
$route['admin'] = "admin/admin";
$route['admin/login'] = "admin/admin/login";

$route['admin/home'] = "admin/home/home";
$route['admin/logout'] = "admin/home/logout";