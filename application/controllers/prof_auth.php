<?php
class Prof_auth extends My_Controller{
	public function index(){
		if($this->session->userdata('uid')){
			return redirect('prof_profile');
		}
		$this->load->view('professor/prof_front');
	}
	public function prof_login(){
		$this->form_validation->set_rules('em','Email','required|max_length[40]');
		$this->form_validation->set_rules('passwd','Password','required');
		$this->form_validation->set_error_delimiters('<b><p class="text-danger">','</p></b>');
		if($this->form_validation->run()){
			$email=$this->input->post('em');
			$password=$this->input->post('passwd');
			$this->load->model('prof_login_model','login');
			$id=$this->login->login_prof($email,$password);
			if($id){
				$this->session->set_userdata('uid',$id);
				return redirect('prof_profile');
			}
			else{
				$this->session->set_flashdata('login_failed','Credentials not matched!  Unautherized Professor.');
				return redirect('prof_auth');
			}
		}
		else{
			$this->load->view('professor/prof_front');
		}
	}
	public function logout(){
		$this->load->model('prof_dash_model');
		$this->prof_dash_model->del_online();
		$this->session->unset_userdata('uid');
		return redirect('prof_auth');
	}
	public function prof_register(){
		$this->form_validation->set_rules('name','Name','required|alpha_numeric|max_length[30]');
		$this->form_validation->set_rules('email','Email','required|max_length[40]');
		$this->form_validation->set_rules('desg','Designation','required|alpha_numeric');
		$this->form_validation->set_rules('work','Work','required|alpha_numeric');
		$this->form_validation->set_rules('dept','Department','required|alpha_numeric');
		$this->form_validation->set_rules('address','Address','required|max_length[100]');
		$this->form_validation->set_rules('phno','Contact Details','required|max_length[10]|numeric');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<b><p class="text-danger">','</p></b>');
		if($this->form_validation->run()){
			$inp=$this->input->post();
			unset($inp['register']);
			$this->load->model('prof_login_model','register');
			if($this->register->reg_prof($inp)){
				$this->session->set_flashdata('feedback','Registration Successful.Please Login to go to Profile');
				$this->session->set_flashdata('feedback_class','alert alert-success alert-dismissable fade in');
			}
			else{
				$this->session->set_flashdata('feedback','Registration Failed.Try again later');
				$this->session->set_flashdata('feedback_class','alert alert-danger alert-dismissable fade in');
			}
			return redirect('prof_auth');
		}
		else{
			$this->load->view('professor/prof_front');
		}
	}
}
?>