<?php
class Stud_profile extends My_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('stid')){
			return redirect('stud_auth');
		}
	}
	public function index(){
		$this->load->model('stud_dash_model');
		$this->load->library('pagination');
		$config=[
					'base_url'  => base_url("index.php/stud_profile/index"),
					'per_page'  => 8,
					'total_rows' =>$this->stud_dash_model->getNumProf(),
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
		$st_id=$this->session->userdata('stid');
		$name=$this->stud_dash_model->getName();
		$prof_info=$this->stud_dash_model->getProfessor($config['per_page'],$this->uri->segment(3));
		$this->load->view('student/stud_dashboard',['name'=>$name,'prof'=>$prof_info]);
	}

	public function studNot(){
		$this->load->model('stud_dash_model');
		$st_id=$this->session->userdata('stid');
		$name=$this->stud_dash_model->getName();

		$this->load->library('pagination');
		$config=[
					'base_url'  => base_url("index.php/stud_profile/index"),
					'per_page'  => 8,
					'total_rows' =>$this->stud_dash_model->getNumProf(),
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
		$prof_info=$this->stud_dash_model->getProfessor($config['per_page'],$this->uri->segment(3,0));
		$flag=false;
		foreach ($prof_info as $i) {
			$full_name = $i->name;
			$parts =explode(" ",$full_name);
			$lastname=array_pop($parts);
			$firstname=implode(" ", $parts);
			if($firstname!=null){
				$table_name=$i->u_id."_".$firstname;
			}
			else{
				$table_name=$i->u_id."_".$full_name;	
			}
			//echo $table_name;
			$follow_info=$this->stud_dash_model->getFollow($table_name);
			if($follow_info!=null){
			foreach ($follow_info as $follow) {
				$follower_name=$follow->follower_name;
				$follower_id=$follow->follower_id;
				$follower_seen_unseen=$follow->seen_unseen;
				if($x=($follower_name==$name && $follower_id==$st_id)){
					//var_dump($x);exit;
					$from_msg_id=$i->u_id;
					$notification_info=$this->stud_dash_model->getNotification($from_msg_id);
					//print_r($notification_info);exit;
					if($notification_info != null){
						$flag=true;
						foreach ($notification_info as $not) {
							echo "<div class='alert alert-info alert-dismissable fade in'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Hi!</strong> You have a new notification from <strong>$not->from_msg_name</strong> and the message is: <strong>$not->messages.</strong>
  </div>";
						}
					
						$this->stud_dash_model->updateUnseen($table_name,$follower_id);
						if($this->stud_dash_model->countUnseen($table_name) ==0){
								$this->stud_dash_model->updateSeen($from_msg_id);
								$this->stud_dash_model->msgUpdate($table_name);
						}
					}
					else{
						
					}
				}
			}
		  }
		}


		if($flag == false){
						echo '<div class="alert alert-danger alert-dismissable fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Sorry!</strong>You have no new notification.</div>';
					}


		//return redirect('stud_profile');
		$this->load->view('student/stud_dashboard',['name'=>$name,'prof'=>$prof_info]);
	}
	public function follow($user_id){
		$this->load->model('stud_dash_model');
		$prof_name=$this->stud_dash_model->get_prof_name($user_id);
		$parts =explode(" ",$prof_name);
		$lastname=array_pop($parts);
		$firstname=implode(" ", $parts);
		if($firstname!=null){
				$table_name=$user_id."_".$firstname;
			}
			else{
				$table_name=$user_id."_".$prof_name;	
			}
		$follower_name=$this->stud_dash_model->getName();
		$count=$this->stud_dash_model->cond($table_name);
		if($count==0){
		$q=$this->stud_dash_model->followTable($table_name,$follower_name);
		if($q){
			$this->session->set_flashdata('follow','Successfully followed the professor.');
			$this->session->set_flashdata('follow_class','alert alert-success alert-dismissable fade in');
		}
	  }
	  else{
	  	$this->session->set_flashdata('already_followed','You have already followed that professor.');
			$this->session->set_flashdata('already_followed_class','alert alert-warning alert-dismissable fade in');
	  }
		return redirect('stud_profile');
	}

	public function unfollow($user_id){
		$this->load->model('stud_dash_model');
		$prof_name=$this->stud_dash_model->get_prof_name($user_id);
		$parts =explode(" ",$prof_name);
		$lastname=array_pop($parts);
		$firstname=implode(" ", $parts);
		if($firstname!=null){
				$table_name=$user_id."_".$firstname;
			}
			else{
				$table_name=$user_id."_".$prof_name;	
			}
		$follower_name=$this->stud_dash_model->getName();
		$count=$this->stud_dash_model->cond($table_name);
		if($count!=0){
		$q=$this->stud_dash_model->unfollowTable($table_name);
		if($q){
			$this->session->set_flashdata('follow','Successfully unfollowed the professor.');
			$this->session->set_flashdata('follow_class','alert alert-success alert-dismissable fade in');
		}
	  }
	  else{
	  	$this->session->set_flashdata('already_followed','You have not followed the professor.');
			$this->session->set_flashdata('already_followed_class','alert alert-danger alert-dismissable fade in');
	  }
		return redirect('stud_profile');

	}

	public function download($user_id){
		$this->load->helper('directory');
		$this->load->model('stud_dash_model');
		$full_name=$this->stud_dash_model->get_prof_name($user_id);
		$parts =explode(" ",$full_name);
		$lastname=array_pop($parts);
		$firstname=implode(" ", $parts);
		if($firstname!=null){
				$folder_name=$user_id."_".$firstname;
			}
			else{
				$folder_name=$user_id."_".$full_name;	
			}
		$dir_map=directory_map($_SERVER['DOCUMENT_ROOT']."/Interact/upload/".$folder_name);
		$this->load->view('student/stud_download',['files'=>$dir_map,'user_id'=>$user_id]);
	}
	public function download_func($file_name=null,$user_id){
		$this->load->helper('download');
		$this->load->model('stud_dash_model');
		$full_name=$this->stud_dash_model->get_prof_name($user_id);
		$parts =explode(" ",$full_name);
		$lastname=array_pop($parts);
		$firstname=implode(" ", $parts);
		if($firstname!=null){
				$folder_name=$user_id."_".$firstname;
			}
			else{
				$folder_name=$user_id."_".$full_name;	
			}
		$data=file_get_contents(base_url('/upload/'.$folder_name.'/'.$file_name));
		force_download($file_name, $data);
	}




}
?>