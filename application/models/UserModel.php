<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class UserModel extends CI_Model 
{
    /**
    * Constructor
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
    * Tis function allows the user o login using sessions
    **/
	public function login($email,$password)
    {
		$this->db->where("Email",$email);
        $this->db->where("Password",$password);
            
        $query=$this->db->get("users");
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
            	//add all data to session
                $newdata = array(
                	'UserId' => $rows->UserId,
                    'FirstName' => $rows->FirstName,
		            'LastName' => $rows->LastName,
                    'Status' => $rows->Status,
                    'PhoneNumber' => $rows->PhoneNumber,
                    'Email' => $rows->Email,
                    'Password' => $rows->Password,
	                'logged_in' => TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }

    /**
    * This function registers a user
    **/
	public function registerUser()
	{
		$data=array(
			'FirstName'=>$this->input->post('firstname'),
			'LastName'=>$this->input->post('lastname'),
            'Status'=>$this->input->post('status'),
            'PhoneNumber'=>$this->input->post('phonenumber'),
            'Email'=>$this->input->post('email'),
            'Password'=>md5($this->input->post('password'))
			);
		$this->db->insert('users',$data);
	}


    /**
    * This function logs out the user
    **/
    public function signout()
    {
        $newdata = array(
            'UserId' => '',
            'FirstName' => '',
            'LastName' => '',
            'Status' =>'',
            'PhoneNumber' => '',
            'Email' => '',
            'Password' => '',
            'logged_in' => false,
            );
        $this->session->unset_userdata($newdata );
        $this->session->sess_destroy();
    }
}

?>