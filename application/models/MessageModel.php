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
	* This function inserts the questions into the database
	*/
	public function send_message($data)
	{
		$query=$this->db->insert('message', $data);
	}
}