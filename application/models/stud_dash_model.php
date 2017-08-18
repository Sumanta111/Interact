<?php
class Stud_dash_model extends CI_Model{
	public function getName(){
		$id=$this->session->userdata('stid');
		$q=$this->db->where('st_id',$id)
					->get('streg');
		return $q->row()->name;
	}
	public function getProfessor(){
		$q=$this->db->select(['u_id','name','desg','work'])
		            ->get('reg');
		return $q->result();
	}
	public function getFollow($table_name){
		$q=$this->db->get("$table_name");
		return $q->result();
	}
	public function getNotification($from_msg_id){
		$q=$this->db->where(['from_msg_id'=>$from_msg_id,'seen_unseen'=>'u'])
					->get('msg');
		return $q->result();
	}
	public function updateUnseen($table_name,$follower_id){
		$q=$this->db->update("$table_name",['seen_unseen'=>'s'],['follower_id'=>$follower_id]);
		return $q;		
	}
	public function countUnseen($table_name){
		$q=$this->db->where('seen_unseen','u')
					->get("$table_name");
		return $q->num_rows();
	}
	public function updateSeen($from_msg_id){
		$q=$this->db->update('msg',['seen_unseen'=>'s'],['from_msg_id'=>$from_msg_id]);
		return $q;
	}
	public function msgUpdate($table_name){
		$q=$this->db->update("$table_name",['seen_unseen'=>'u'],['seen_unseen'=>'s']);
		return $q;
	}
	public function get_prof_name($user_id){
		$q=$this->db->where('u_id',$user_id)
				 ->get('reg');
		return $q->row()->name;
	}
	public function followTable($table_name,$follower_name){
		$follower_id=$this->session->userdata('stid');
		$q=$this->db->insert("$table_name",['follower_name'=>$follower_name,'follower_id'=>$follower_id,'seen_unseen'=>'u']);
		return $q;
	}
	public function unfollowTable($table_name){
		$follower_id=$this->session->userdata('stid');
		if($this->db->delete("$table_name",['follower_id'=>$follower_id])){
			return true;
		}
		else{
			return false;
		}

	}
	public function cond($table_name){
		$follower_id=$this->session->userdata('stid');
		$q=$this->db->where('follower_id',$follower_id)
					->get("$table_name");
		return $q->num_rows();
	}
}
?>