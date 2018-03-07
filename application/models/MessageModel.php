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
	public function view_message()
	{
		// selects the query from the database
		$query=$this->db->get('message');
		return $query->result_array();
	}
}