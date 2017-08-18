<?php
class Stud_auth extends My_Controller{
	public function index(){
		if($this->session->userdata('stid')){
			return redirect('stud_profile');
		}
		$this->load->view('student/stud_front');
	}
	public function stud_login(){
		$this->form_validation->set_rules('em','Email','required|max_length[40]');
		$this->form_validation->set_rules('passwd','Password','required');
		$this->form_validation->set_error_delimiters('<b><p class="text-danger">','</p></b>');
		if($this->form_validation->run()){
			$email=$this->input->post('em');
			$password=$this->input->post('passwd');
			$this->load->model('stud_login_model','login');
			$id=$this->login->login_stud($email,$password);
			if($id){
				$this->session->set_userdata('stid',$id);
				return redirect('stud_profile');
			}
			else{
				$this->session->set_flashdata('login_failed','Credentials not matched!  Unautherized Student.');
				return redirect('stud_auth');
			}
		}
		else{
			$this->load->view('student/stud_front');
		}
	}
	public function logout(){
		$this->session->unset_userdata('stid');
		return redirect('stud_auth');
	}
	public function stud_register(){
		$this->form_validation->set_rules('name','Name','required|max_length[30]');
		$this->form_validation->set_rules('email','Email','required|max_length[40]');
		$this->form_validation->set_rules('branch','Branch','required');
		$this->form_validation->set_rules('unirollno','University Rollno','required|numeric');
		$this->form_validation->set_rules('clgrollno','College Rollno','required|numeric');
		$this->form_validation->set_rules('address','Address','required|max_length[100]');
		$this->form_validation->set_rules('phno','Contact Details','required|max_length[10]|numeric');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<b><p class="text-danger">','</p></b>');
		if($this->form_validation->run()){
			$inp=$this->input->post();
			unset($inp['register']);
			$this->load->model('stud_login_model','register');
			if($this->register->reg_stud($inp)){
				$this->session->set_flashdata('feedback','Registration Successful.Please Login to go to Profile');
				$this->session->set_flashdata('feedback_class','alert alert-success alert-dismissable fade in');
			}
			else{
				$this->session->set_flashdata('feedback','Registration Failed.Try again later');
				$this->session->set_flashdata('feedback_class','alert alert-danger alert-dismissable fade in');
			}
			return redirect('stud_auth');
		}
		else{
			$this->load->view('student/stud_front');
		}
	}
}
?>