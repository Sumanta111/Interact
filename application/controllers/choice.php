<?php
class Choice extends My_Controller{
	public function index(){
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('main_page');
	}
	public function about_us(){
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('about_us');
	}
}
?>