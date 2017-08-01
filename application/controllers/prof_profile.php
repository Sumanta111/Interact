<?php
class Prof_profile extends My_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('uid')){
			return redirect('prof_auth');
		}
	}
	public function index(){
		$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$prof_id=$result->u_id;
		$fullname=$result->name;
		$parts=explode(" ",$fullname);
		$lastname=array_pop($parts);
		$firstname=implode(" ", $parts);
		if($firstname!= NULL){
			$this->dashboard->follow_details($prof_id."_".$firstname);
			$number=$this->dashboard->follow_number($prof_id."_".$firstname);
		}
		else{
			$this->dashboard->follow_details($prof_id."_".$fullname);
			$number=$this->dashboard->follow_number($prof_id."_".$fullname);
		}
		$this->dashboard->store_online($prof_id,$fullname);
		$this->load->view('professor/prof_dashboard',['res'=>$result,'follow_num'=>$number]);
	}
	public function update_info(){
		$this->form_validation->set_rules('desg','Designation','required|alpha_numeric');
		$this->form_validation->set_rules('work','Work','required|alpha_numeric');
		$this->form_validation->set_rules('dept','Department','required|alpha_numeric');
		$this->form_validation->set_rules('address','Address','required|max_length[100]');
		$this->form_validation->set_rules('phno','Contact Details','required|max_length[10]|numeric');
		$this->form_validation->set_error_delimiters('<b><p class="text-danger">','</p></b>');
		if($this->form_validation->run()){
		$res=$this->input->post();
		unset($res['submit']);
		$this->load->model('prof_dash_model');
		$q=$this->prof_dash_model->update_info_model($res);
		if($q){
			$this->session->set_flashdata('update','Successfully Updated');
			$this->session->set_flashdata('update_class','alert alert-success alert-dismissable fade in');
		}
		else{
			$this->session->set_flashdata('update','Updation failed.Try again later');
			$this->session->set_flashdata('update_class','alert alert-danger alert-dismissable fade in');
		}
		return redirect('prof_profile');
	}
	else{
		$this->load->view('professor/prof_dashboard');
	}
  }
  public function online(){
 	$this->load->model('prof_dash_model','dashboard');
  	$online=$this->dashboard->show_online();
  	foreach($online as $on){
  		$x=$on->prof_id;
  		echo '<div class=user>'.anchor("prof_profile/chat/{$x}",$on->prof_name).'</div>';
  	}
  }
  public function chat_prof($x){
  	$this->load->model('prof_dash_model','dashboard');
	$result=$this->dashboard->get_details();
  	$this->load->view('professor/prof_chat_view',['res'=>$result,'to_id'=>$x]);
  }
  public function store_chat($send_to_id){
  	$this->form_validation->set_rules('prof_chat','Message','required');
  	$this->form_validation->set_error_delimiters('<b><p class="text-danger">','</p></b>');
  	if($this->form_validation->run()){
  	$this->load->model('prof_dash_model','dashboard');
  	$result=$this->dashboard->get_details();
	$send_from_id=$this->session->userdata('uid');
	$messages=$this->input->post('prof_chat');
	$x=$this->dashboard->show_chat_name($send_to_id);
	$send_to_name=$x->send_to_name;
	$send_from_name=$result->name;
	$show_chat=$this->dashboard->store_chat($send_from_id,$send_to_id,$messages,$send_to_name,$send_from_name);
  	return redirect("prof_profile/chat/{$send_to_id}");
  	}
  	else{
  		$this->load->model('prof_dash_model','dashboard');
  		$result=$this->dashboard->get_details();
  		$this->load->view('professor/prof_chat_view',['res'=>$result,'to_id'=>$send_to_id]);
  	}	
  }
  public function show_message(){
  	$this->load->model('prof_dash_model','dashboard');
  	$result=$this->dashboard->get_details();
  	$sendfromname=$result->name;
  	$sendtoid=$_POST['id'];
  	$msg1=$this->dashboard->show_chat1($sendtoid);
  	$msg2=$this->dashboard->show_chat2($sendtoid);
  	if($msg1 || $msg2){
  	foreach($msg2 as $y){
  	echo '<div class="panel panel-info"><div class="panel-heading"><strong>'.$y->send_from_name.'</strong></div><div class="panel-body">'.$y->messages.'</div></div>';	
   }
  	foreach($msg1 as $x){
  	echo '<div class="panel panel-success"><div class="panel-heading"><strong>'.$sendfromname.'</strong></div><div class="panel-body">'.$x->messages.'</div></div>';
  	}
  }
  else{
  		echo "<div class='alert alert-warning'>
  			  <strong>Oops!</strong> Sorry.You havn't no conversations yet.Let's make a chat.
			  </div>";
  }
  }
}
?>