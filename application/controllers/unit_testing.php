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
		
	}

	//testing method
	private function test($testid)
	{
		$this->messagemodel->view_message($testid);
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
}
?>