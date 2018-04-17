<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MessageController extends CI_Controller
{
	/**
	* Constructor
	*/
	function __construct(){

		parent::__construct();
		$this->load->model('messagemodel');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		//$this->load->helper('dump');
	}

	/**
	* This method loads the send_message view 
	**/
	public function message($page='Message')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 

		//loads the header
		$this->load->view('templates/header', $data); 

		//Loading View
		$this->load->view('Teacher_sendMessage');
		
		//loads the footer
		$this->load->view('templates/footer'); 
	}

	/**
	* This method sends the message 
	**/
	public function send_message()
	{

		// Initializing database table columns.
		$sender=$this->session->userdata('UserId');
		$data = array(
			'Title' => $this->input->post('title'),
			'Subject' => $this->input->post('subject'),
			'Message' => $this->input->post('msg'),
			'Sender_Id'=>$sender,
			'Recipient_Id' => $this->input->post('recipient')
			);

			// Calling the setquestion model and its function.
		$this->messagemodel->send_message($data); 

		echo "<script>alert('Message sent successfully....!!!! ');</script>";
		// // Reloading after submit.
		// $this->load->view('Teacher_sendMessage');
		$this->message();

	}

	/**
	* This method loads the message in the student's dashboard 
	**/
	public function view_message($messageId)
	{

		//loads the header
		$this->load->view('templates/header'); 

		//Loading View
		$data['table'] = $this->messagemodel->view_message($messageId);
		$this->load->view('view_message', $data);
		
		//loads the footer
		$this->load->view('templates/footer'); 
	}

	/**
	* This method loads the list of the messages in the student's dashboard 
	**/
	public function retrieve_message($page='Message')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 

		//loads the header
		$this->load->view('templates/header', $data); 

		//Loading View
		$data['table'] = $this->messagemodel->retrieve_message();
		$this->load->view('retrieve_message', $data);
		
		//loads the footer
		$this->load->view('templates/footer'); 
	}

}
?>