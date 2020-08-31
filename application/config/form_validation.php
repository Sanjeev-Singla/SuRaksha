<?php

$config = array(

	"employee_signup" => array(
        array(
            'field' => 'phone',
            'rules' => 'required|is_natural|is_unique[employee.phone]',
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
            'rules' => 'required|valid_email|is_unique[employee.email]',
            'errors' => array(
                'required' => 'Please enter your %s.',
                'valid_email' => 'Please enter valid %s.',
                'is_unique' => 'This email id already register with different account.'
            )
        )
    ),
    
    "employee_profile" => array(
        array(
            'field' => 'name',
            'rules' => 'required|alpha',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'dob',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'area',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'present_company',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'experience',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'skills',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'current_salary',
            'rules' => 'required|is_natural',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'preference_area',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
    ),
    
    "employee_update_password" => array(
        array(
            'field' => 'password',
            'rules' => 'required|min_length[6]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'cpassword',
            'rules' => 'required|matches[password]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        )
       
    ),
    
    "employee_change_password" => array(
       array(
            'field' => 'new_password',
            'rules' => 'required|min_length[6]',
            'label' => 'New password',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'c_password',
            'rules' => 'required|matches[new_password]',
            'label' => 'Confirm password',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        )
       
    ),
    
    "company_signup" => array(
        array(
            'field' => 'phone',
            'rules' => 'required|is_natural|is_unique[company.phone]',
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
            'field' => 'accountable_person',
            'label' => 'Accountable Person',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.'
            )
        ),
        array(
            'field' => 'email',
            'rules' => 'required|valid_email|is_unique[company.email]',
            'errors' => array(
                'required' => 'Please enter your %s.',
                'valid_email' => 'Please enter valid %s.',
                'is_unique' => 'This email id already register with different account.'
            )
        )
    ),
   
    "company_update_password" => array(
        array(
            'field' => 'password',
            'rules' => 'required|min_length[6]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'cpassword',
            'rules' => 'required|matches[password]',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        )
       
    ),
    
    "company_profile" => array(
        array(
            'field' => 'name',
            'rules' => 'required|alpha',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'area',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'address',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'role',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        
    ),
    
    "company_change_password" => array(
       array(
            'field' => 'new_password',
            'rules' => 'required|min_length[6]',
            'label' => 'New password',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        ),
        array(
            'field' => 'c_password',
            'rules' => 'required|matches[new_password]',
            'label' => 'Confirm password',
            'errors' => array(
                'required' => 'Please enter your %s.',
            ),
        )
       
    )


   
);