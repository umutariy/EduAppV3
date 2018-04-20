<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Unit_testing extends CI_Controller
{
	/**
	* Constructor
	*/
	function __construct(){

		parent::__construct();
		//loads the php unit testing file
		$this->load->library("unit_test");
		//loads the model for messages
		$this->load->model('messagemodel');
		//loads the model for users
		$this->load->model('usermodel');
		
	}

	//testing method
	private function test($testid)
	{
		$this->messagemodel->view_message($testid);
	}

	private function test_listStudents()
	{
		$this->usermodel->students();
	}
	//method that calls the testing method
	function index()
	{
		echo "unit testing";
		$testing=$this->test(5);
		$expected_results="";
		$test_name="test my function";
		echo $this->unit->run($testing,$expected_result,$test_name);
	}
	
	function test_students()
	{
		echo "unit testing";
		$testing=$this->test_listStudents();
		$expected_results="list of students";
		$test_name="test my function";
		echo $this->unit->run($testing,$expected_result,$test_name);
	}
}
?>