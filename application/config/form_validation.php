<?php

$config = array(

	"user_register" => array(
        array(
            'field' => 'phone',
            'rules' => 'trim|required|is_unique[users.phone]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'password',
            'rules' => 'trim|required|min_length[6]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'confirm password',
            'rules' => 'trim|required|matches[password]',
            'errors' => array(
                'required' => 'Please enter your %s.'
            )
        ),
        array(
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'trim|required|alpha',
            'errors' => array(
                'required' => 'Please enter your %s.'
            )
        ),
        array(
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'trim|required|alpha',
            'errors' => array(
                'required' => 'Please enter your %s.'
            )
        ),
        
        array(
            'field' => 'email',
            'rules' => 'trim|required|valid_email|is_unique[users.email]',
            'errors' => array(
                'required' => 'Please enter your %s.',
                'valid_email' => 'Please enter valid %s.',
                'is_unique' => 'This email id already register with different account.'
            )
        )
    ),

    "signin" => array(
        array(
            'field' => 'email',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'password',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
    ),

    "contact" => array(
        array(
            'field' => 'name',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'email',
            'rules' => 'trim|required|valid_email',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'subject',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'message',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
    )
);