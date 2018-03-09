<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MessageModel extends CI_Model
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
	* This function inserts the message into the database
	*/
	public function send_message($data)
	{
		$query=$this->db->insert('message', $data);
	}

	/**
	* This function selects the message from the database and displays
	*/
	public function view_message($messageId)
	{
		// selects the query from the database
		// $query=$this->db->get('message');
		$query=$this->db->query("SELECT Title, Subject, Message FROM message WHERE MessageId=".$messageId);
		return $query->result_array();
		return $query->result_array();
	}

	/**
	* This function selects the message from the database and displays
	*/
	public function retrieve_message()
	{
		// // selects the query from the database
		// $query1=$this->db->get('student');
		// return $query1->result_array();

		// //message
		// $query=$this->db->get('message');
		// return $query->result_array();

		 
		$query=$this->db->query("SELECT Date_Time, Subject FROM message join student On student.classId=message.Recipient WHERE studentId=5");
		return $query->result_array();
		// $this->db->select('Date','message'); 
  //       $this->db->from('message');
  //       $this->db->join('student.classId = message.recipient');
  //       $this->db->where('studentId=5');
  //       $query = $this->db->get();
  //       return $query->result_array();

		

		// if ($this->session->userId==$row['studentId']) {
		// 	# code...
		// }

		//gets the id
		//find the student ID
		//select * from users get id and status
		//student table and get the id

	
	}
}