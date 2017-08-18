<?php
class Prof_profile extends My_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('uid')){
			return redirect('prof_auth');
		}
	}
	private function _profcred(){
		$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data['prof_id']=$result->u_id;
		$data['fullname']=$result->name;
		$data['parts']=explode(" ",$data['fullname']);
		$data['lastname']=array_pop($data['parts']);
		$data['firstname']=implode(" ", $data['parts']);
		if($data['firstname']!= NULL){
			$this->dashboard->follow_details($data['prof_id']."_".$data['firstname']);
			$data['number']=$this->dashboard->follow_number($data['prof_id']."_".$data['firstname']);
		}
		else{
			$this->dashboard->follow_details($data['prof_id']."_".$data['fullname']);
			$data['number']=$this->dashboard->follow_number($data['prof_id']."_".$data['fullname']);
		}

		return $data;
	}
	public function index(){
		$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
		if($this->dashboard->condition_online()== 0){
		   $this->dashboard->store_online($data['prof_id'],$data['fullname']);
		}
		if($data['firstname']!=NULL){
		if(!is_dir($_SERVER['DOCUMENT_ROOT']."/Interact/upload/".$data['prof_id']."_".$data['firstname'])){
				mkdir($_SERVER['DOCUMENT_ROOT']."/Interact/upload/".$data['prof_id']."_".$data['firstname']);
		}
	    }
	    else{
	    if(!is_dir($_SERVER['DOCUMENT_ROOT']."/Interact/upload/".$data['prof_id']."_".$data['fullname'])){
				mkdir($_SERVER['DOCUMENT_ROOT']."/Interact/upload/".$data['prof_id']."_".$data['fullname']);
		 }	
	    }
		$this->load->view('professor/prof_dashboard',['res'=>$result,'follow_num'=>$data['number']]);
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
		$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
		$this->load->view('professor/prof_dashboard',['res'=>$result,'follow_num'=>$data['number']]);
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
	$send_to_name=$x->name;
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

  public function not_stud(){
 	 $this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
  	$this->load->view('professor/notify_students',['res'=>$result,'follow_num'=>$data['number']]);
  }

  public function notification(){
  	$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
  	$this->form_validation->set_rules('msg','Notification Box','required');
  	$this->form_validation->set_error_delimiters("<b><p class='text-danger'>","</p></b>");
  	if($this->form_validation->run()){
  	$msg=$this->input->post('msg');
	$name=$result->name;
  	if($this->dashboard->stud_notify($msg,$name)){
  			$this->session->set_flashdata('feedback','Student Successfully Notified');
			$this->session->set_flashdata('feedback_class','alert alert-success alert-dismissable fade in');
  	}
  	else{
  			$this->session->set_flashdata('feedback','Some error Occured.Please Try Again');
			$this->session->set_flashdata('feedback_class','alert alert-danger alert-dismissable fade in');
  	}
  	return redirect('prof_profile/not_stud');
  	}
  	else{
  		$this->load->view('professor/notify_students',['res'=>$result,'follow_num'=>$data['number']]);
  	}
  }
  public function upl_stud(){
  		$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
		$this->load->view('professor/student_upload_view',['res'=>$result,'follow_num'=>$data['number']]);
  }
  public function upload(){
  	$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
  	$config=[
  				'upload_path' => "upload/$prof_id"."_".$firstname."/",
  				'allowed_types' => 'jpg|jpeg|png|gif|pdf|doc|txt',
  				'max_size' => '20480'
  			];
    	
  	$this->load->library('upload',$config);
  	if($this->upload->do_upload()){
  		$data=$this->upload->data();
  		//$upload_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
  		//echo $upload_path;exit;
  		$this->session->set_flashdata('feedback','File Successfully Uploaded');
		$this->session->set_flashdata('feedback_class','alert alert-success alert-dismissable fade in');
  		return redirect('prof_profile/upl_stud');
  	}
  	else{
  		$upload_error=$this->upload->display_errors();
  		$this->load->view('professor/student_upload_view',['res'=>$result,'follow_num'=>$data['number'],'upload_error'=>$upload_error]);
  	}
  }
  public function msg_hist(){
  	$this->load->library('pagination');
  	$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
		$config=[
					'base_url'  => base_url("index.php/prof_profile/msg_hist"),
					'per_page'  => 5,
					'total_rows' =>$this->dashboard->prev_msg_person_num(),
					'full_tag_open' => "<ul class='pagination'>",
					'full_tag_close'=> '</ul>',
					'next_tag_open' => '<li>',
					'next_tag_close' => '</li>',
					'prev_tag_open'  =>'<li>',
					'prev_tag_close'  =>'</li>',
					'num_tag_open'  =>'<li>',
					'num_tag_close' =>'</li>',
					'cur_tag_open' =>"<li class='active'><a>",
					'cur_tag_close'=>'</a></li>'
				];
		$this->pagination->initialize($config);
		$prev=$this->dashboard->prev_msg_person($config['per_page'],$this->uri->segment(3,0));
		$this->load->view('professor/prof_msg_hist',['res'=>$result,'follow_num'=>$data['number'],'chat_person'=>$prev]);
  }
  public function prev_msg($send_to_id){
  	$this->load->library('pagination');
  	$this->load->model('prof_dash_model','dashboard');
		$result=$this->dashboard->get_details();
		$data=$this->_profcred();
		$config=[
					'base_url'  => base_url("index.php/prof_profile/prev_msg/$send_to_id"),
					'per_page'  => 5,
					'total_rows' =>$this->dashboard->prev_msg_chat_num($send_to_id),
					'uri_segment' =>4,
					'full_tag_open' => "<ul class='pagination'>",
					'full_tag_close'=> '</ul>',
					'next_tag_open' => '<li>',
					'next_tag_close' => '</li>',
					'prev_tag_open'  =>'<li>',
					'prev_tag_close'  =>'</li>',
					'num_tag_open'  =>'<li>',
					'num_tag_close' =>'</li>',
					'cur_tag_open' =>"<li class='active'><a>",
					'cur_tag_close'=>'</a></li>'
				];
		$this->pagination->initialize($config);
		$msg=$this->dashboard->prev_msg_chat($send_to_id,$config['per_page'],$this->uri->segment(4,0));
  	$this->load->view('professor/prof_msg_view',['res'=>$result,'follow_num'=>$data['number'],'msg'=>$msg]);
  }
}
?>