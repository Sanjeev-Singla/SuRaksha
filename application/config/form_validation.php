<?php

$config = array(

	"user_register" => array(
        array(
            'field' => 'phone',
            'rules' => 'required|is_unique[users.phone]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'password',
            'rules' => 'required|min_length[6]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'confirm password',
            'rules' => 'required|matches[password]',
            'errors' => array(
                'required' => 'Please enter your %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'rules' => 'required|valid_email|is_unique[users.email]',
            'errors' => array(
                'required' => 'Please enter your %s.',
                'valid_email' => 'Please enter valid %s.',
                'is_unique' => 'This email id already register with different account.'
            )
        )
    )
  
    
    


   
);