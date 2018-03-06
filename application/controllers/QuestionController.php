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
	* This method loads the set_question view 
	**/
	public function set_questions_trial($page='viewQuestion')
	{
		// Capitalize the first letter
		$data['title'] = ucfirst($page); 

		//loads the header
		$this->load->view('templates/header', $data); 

		//Loading the SetQuestions Page
		$this->load->view('setquestions_trial');

        //loads the footer
		$this->load->view('templates/footer'); 
	}

	/**
	* This function submits the questions set by the teacher into th database
	**/
	public function submit_questions()
	{
		//loading the questions view
		$this->load->view('setquestions_trial');
		
		// Initializing database table columns.
		$data = array(
			'Title' => $this->input->post('title'),
			'Subject' => $this->input->post('subject'),
			'Instructions' => $this->input->post('instruction'),
			'Due date' => $this->input->post('due_date'),
			'Due time' => $this->input->post('due_time'),
			'Class' => $this->input->post('class'),
			'Question' => $this->input->post('question')
			);

			// Calling the setquestion model and its function.
		$this->questionsmodel->set_questions($data); 

		echo "<script>alert('Form Submitted Successfully....!!!! ');</script>";

			// Reloading after submit.
		$this->load->view('setquestions_trial'); 

	}
	
	/**
	* This function loads the assignment questions
	*/
	public function quiz($page='Assignment')
	{
		// //loads the header
		// $this->load->view('templates/header', $page); 

		$data['questions'] = $this->questionsmodel->return_questions();
		$this->load->view('students_questions', $data);

		// //loads the footer
		// $this->load->view('templates/footer'); 

	}

	/**
	* This function loads the teacher_setQuestions dashboard which allows data insertion in the database
	*/
	public function answer_questions()
	{
		
		//Setting values for database table columns

		// $ar = array();
		// foreach ($_POST as $key => $value) {
		// 	$ar[] = $value;
		// }
		// $c = count($_REQUEST);
		// $i=1;
		// $qid ="";
		// $answer="";
		// while($c>0)
		// {
		// 	if (($i)/2 !=0) {
		// 		$qid = $ar[$i];
		// 	}
		// 	else
		// 	{
		// 		$answer = $ar[$i];
		// 		$data = array(
		// 			'Question_Id' => $qid,
		// 			'answer' => $answer
		// 			);
		// 	//Transfering data to Model
		// 		$this->questionsmodel->answer_questions($data);
		// 	}
		// 	//$answer = post($i);
		// 	$i++;	
		// }

		$answer="";
		$i=4;
		while($i!==0)
		{
			$answer=$this->input->post($i);
			$data = array(
				'Question_Id' => $this->input->post('Question_Id'),
				'answer' => $answer
				);
		}
		//Transfering data to Model
		$this->questionsmodel->answer_questions($data);
		$data['message'] = 'Data Inserted Successfully';
		//Loading View
		$this->load->view('students_dashboard');
	}
}
?>