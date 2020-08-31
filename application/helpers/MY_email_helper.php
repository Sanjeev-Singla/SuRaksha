<?php defined('BASEPATH') OR exit('No direct script access allowed.');



if (!function_exists('name_email_format')) {

    function name_email_format($name, $email) {
        return $name.' <'.$email.'>';
    }

}
