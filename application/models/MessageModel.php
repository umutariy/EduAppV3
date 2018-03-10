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
		// $query=$this->db->query("SELECT Title, Subject, Message FROM message WHERE MessageId=".$messageId);
		// return $query->result_array();
		$this->db->select('Title, Subject, Message'); 
  		$this->db->from('message');
  		$this->db->where('MessageId = '.$messageId);
  		$query = $this->db->get();
		return $query->result();
	}

	/**
	* This function selects the message from the database and displays
	*/
	public function retrieve_message()
	{

		$id=$this->session->userdata('UserId');
		// $query=$this->db->query("SELECT Date_Time, Subject FROM message join student On student.classId=message.Recipient WHERE studentId=".$id);
		// return $query->result_array();


		$this->db->select('Date_Time, Subject'); 
  		$this->db->from('message');
  		$this->db->join('student', 'student.classId = message.Recipient');
  		$this->db->where('studentId='.$id);
  		$query = $this->db->get();
  		return $query->result();

	}
}