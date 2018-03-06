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
		$query=$this->db->get('assignment');
		return $query->result_array();
	}

	/**
	* This function inserts the questions into the database
	*/
	public function set_questions($data)
	{
		$query=$this->db->insert('assignment', $data);
	}

	/**
	* This function inserts the answers into the database
	*/
	public function answer_questions($data)
	{
		$query=$this->db->insert('answer', $data);
	}

}

?>