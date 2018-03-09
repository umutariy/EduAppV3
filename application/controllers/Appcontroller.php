<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Appcontroller extends CI_Controller
{
	/**
	* Constructor
	*/
	function __construct(){

		parent::__construct();
		$this->load->model('usermodel');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
	}

  	/**
	* This function loads the login view
	*/
	public function index($page='login Form')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 

		//loads the header
		$this->load->view('templates/header', $data); 

        //loads the Login Page
		$this->load->view('index2');

		//loads the footer
		$this->load->view('templates/footer'); 

	}


	/**
	* This function loads the signup view 
	*/
	public function signup2($page='signup')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 

		//loads the header
		$this->load->view('templates/header', $data);

        //loads the SignUp page 
		$this->load->view('signUp2');

        //loads the footer
		$this->load->view('templates/footer'); 

	}



	/**
	* This function loads the students dashboard view with the assignment questions
	*/
	public function student_dashboard($page='dashboard')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 

		//loads the header
		$this->load->view('templates/header', $data); 
       	//loads the view 
		$this->load->view('Students_Dashboard');

		//loads the footer
		$this->load->view('templates/footer'); 

	}


	/**
	* This function loads parent_viewChild
	**/
	public function view_child($page='your child')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 

		//loads the header
		$this->load->view('templates/header', $data); 

        // Loads the Parent View Child Page
		$this->load->view('parent_viewchild');

		//loads the footer
		$this->load->view('templates/footer'); 
	}

	// login page
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));

		$result=$this->usermodel->login($email,$password);
		if($result) 
		{
			//if STUDENT
			if ($this->session->Status=="Student") {
				
				//loads the header
				$this->load->view('templates/header');
				//Loads the student dashboard
				$this->load->view('Students_Dashboard');
				//loads the footer
				$this->load->view('templates/footer');

			}

			//IF PARENT
			elseif ($this->session->Status=="Parent") 
			{
				//loads the header
				$this->load->view('templates/header'); 
				// Loads the Parent View Child Page
				$this->load->view('parent_viewchild');
				//loads the footer
				$this->load->view('templates/footer');
			}

			//IF TEACHER
			elseif ($this->session->Status=="Teacher") 
			{
				//loads the header
				$this->load->view('templates/header'); 
				// Loads the teacher View student Page
				$this->load->view('Teacher_viewStudent');
				//loads the footer
				$this->load->view('templates/footer');
			}
		}
		else 
		{
			$this->index();
		}
	}

    /**
    * This function registers a user
    **/
    public function registration()
    {
    	$this->usermodel->registerUser();
    	$this->index();

    }

	/**
	* This functions logs out the user
	**/
	public function logout()
	{
		$this->usermodel->signout(); 

		//loads the login page
		$this->index();

	}

    /**
	* This functions lits the students in the different classes
	**/
	public function get_students()
	{
		$data['table'] = $this->usermodel->students();

    	//loads the header
		$this->load->view('templates/header');

    	// Loads the View 
		$this->load->view('Teacher_viewStudent', $data);

		//loads the footer
		$this->load->view('templates/footer');
	}

	
}
?>
