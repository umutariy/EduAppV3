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
	* This function displays questions form
	**/
	public function setquestions($page='Questions')
	{
		//loads the header
		$this->load->view('templates/header', $page);

		//loading the questions view
		$this->load->view('setquestions_trial');

		//loads the footer
		$this->load->view('templates/footer'); 
		
	}

	/**
	* This function displays questions form
	**/
	public function choice($page='Questions_Type')
	{
		//loads the header
		$this->load->view('templates/header', $page);

		//loading the questions view
		$this->load->view('test');

		//loads the footer
		$this->load->view('templates/footer'); 
		
	}

	/**
	* This function displays questions form
	**/
	public function multiple_choice($page='Questions')
	{
		//loads the header
		$this->load->view('templates/header', $page);

		//loading the questions view
		$this->load->view('test2');

		//loads the footer
		$this->load->view('templates/footer'); 
		
	}

	/**
	* This function displays questions form
	**/
	public function fillin_blank($page='Questions')
	{
		//loads the header
		$this->load->view('templates/header', $page);

		//loading the questions view
		$this->load->view('test3');

		//loads the footer
		$this->load->view('templates/footer'); 
		
	}

	/**
	* This function submits the questions set by the teacher into the database
	**/
	public function submit_questions()
	{
		
		// Calling the setquestion model and its function.
		$this->questionsmodel->set_questions(); 
		//loading the questions view
		$this->load->view('setquestions_trial');

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
	public function answer_questions($page='Answers')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 
		//loads the header
		$this->load->view('templates/header', $data); 
		//Transfering data to Model
		$data['data'] = $this->questionsmodel->answer_questions();

		//Loading View
		$this->load->view('students_questions',$data);
		//loads the footer
		$this->load->view('templates/footer');
	}
}
?>