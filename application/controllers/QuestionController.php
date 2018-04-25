<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class QuestionController extends CI_Controller
{
	/**
	* Constructor
	*/
	function __construct(){

		parent::__construct();
		$this->load->model('questionsmodel');
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->helper('dump');
	}


	/**
	* This function submits the questions set by the teacher into th database
	**/
	public function submit_questions()
	{
		//loading the questions view
		// $this->load->view('setquestions_trial');
		var_dump("hello");
		// Calling the setquestion model and its function.
		// $this->questionsmodel->set_questions(); 


		// Reloading after submit.
		// $this->load->view('setquestions_trial'); 

	}
	
	/**
	* This function loads the assignment questions
	*/
	public function quiz($page='Assignment')
	{
		//loads the header
		$this->load->view('templates/header', $page); 

		$data['questions'] = $this->questionsmodel->return_questions();
		$this->load->view('students_questions', $data);

		//loads the footer
		$this->load->view('templates/footer'); 

	}

	/**
	* This function loads the teacher_setQuestions dashboard which allows data insertion in the database
	*/
	public function answer_questions()
	{
		
		//Setting values for database table columns

		
		//Transfering data to Model
		$this->questionsmodel->answer_questions($data);
		$data['message'] = 'Data Inserted Successfully';
		//Loading View
		$this->load->view('students_dashboard',$data);
	}
}
?>