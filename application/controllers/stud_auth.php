<?php
class Stud_auth extends My_Controller{
	public function index(){
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('student/stud_front');
	}
}
?>