<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class QuestionsModel extends CI_Model
{
	/**
	* Constructor
	*/
	function __construct(){

		// parent::__Construct();
		$this->load->database();
		//$this->load->helper('dump');
	}

	/**
	* This function returns the questions
	*/
	public function return_questions()
	{
		// selects the query from the database
		$query=$this->db->get('questions');
		return $query->result_array();
	}

	/**
	* This function inserts the questions into the database
	*/
	public function set_questions()
	{
		$quest_type="";
		if ($this->input->post('multiple_choice')) 
		{
			$quest_type="Multiple Choice";
		}
		elseif ($this->input->post('fill_in')) 
		{
			$quest_type="fill_in";
		}
		// Initializing database table columns.
		$data = array(
			'Title' => $this->input->post('title'),
			'Subject' => $this->input->post('subject'),
			'Question' => $this->input->post('question'),
			'QuestionType' => $quest_type,
			'Correct_Answer' => $this->input->post('choice1'),
			'ClassId' => $this->input->post('class'),
			'Due_date' => $this->input->post('due_date')
			
			);
		var_dump($data);
		$query=$this->db->insert('questions', $data);
		$last_id = $this->db->insert_id();
		
		$data1=array(
			'QuestionId'=>$last_id,
			'Answer1'=>$this->input->post('choice1'),
			'Answer2'=>$this->input->post('choice2'),
			'Answer3'=>$this->input->post('choice3')
			);
		$this->db->insert('answers',$data1);
		
		// var_dump($data);
	}

	/**
	* This function inserts the answers into the database
	*/
	public function answer_questions()
	{
		$this->db->select('Question, Answer1, Answer2, Answer3');
		$this->db->from('answers'); 
		$this->db->join('questions','answers.QuestionId=questions.QuestionId');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$results = $query->result();
			return $results;
		}
		else
		{
			return false;
		}
	}

}

?>