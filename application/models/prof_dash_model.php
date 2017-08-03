<?php
class Prof_dash_model extends CI_Model{
	public function del_online(){
		$id= $this->session->userdata('uid');
		$this->db->where('prof_id',$id)
				 ->delete('online_prof');
	}
	public function get_details(){
		$id=$this->session->userdata('uid');
		$q=$this->db->where('u_id',$id)
				 ->get('reg');
		return $q->row();
	}
	public function update_info_model($array){
		$id=$this->session->userdata('uid');
		$q=$this->db->update('reg',$array,['u_id'=>$id]);
		return $q;
	}
	public function follow_details($table_name){
		$this->load->dbforge();
		$fields=array(
				'follower_name'=>array(
							'type'=>'VARCHAR',
							'constraint'=>'100'
					),
				'follower_id'=>array(
							'type'=>'INT',
							'constraint'=>'20'
					),
				'seen_unseen'=>array(
							'type'=>'VARCHAR',
							'constraint'=>'10'
					),
			);
		$this->dbforge->add_field($fields);
		return $this->dbforge->create_table($table_name,TRUE);
	}
	public function follow_number($table_name){
		$q=$this->db->get($table_name);
		return $q->num_rows();
	}
	public function show_online(){
		$id=$this->session->userdata('uid');
		$q=$this->db->where('prof_id !=',$id)
					->get('online_prof');
		return $q->result();
	}
	public function condition_online(){
		$id=$this->session->userdata('uid');
		$q=$this->db->where('prof_id',$id)
					->get('online_prof');
		return $q->num_rows();
	}
	public function store_online($id,$name){
		return $this->db->insert('online_prof',['prof_id'=>$id,'prof_name'=>$name]);
	}
	public function store_chat($sendfromid,$sendtoid,$msg,$sendtoname,$sendfromname){
		return $this->db->insert('chat',['send_from_id'=>$sendfromid,'send_to_id'=>$sendtoid,'messages'=>$msg,'send_to_name'=>$sendtoname,'send_from_name'=>$sendfromname]);
	}
	public function show_chat_name($id){
		$q=$this->db->select('name')
					->where('u_id',$id)
				 	->get('reg');
		return $q->row(); 
	}
	public function show_chat1($send_to_id){
		$sendfromid=$this->session->userdata('uid');
		$q=$this->db->select(['messages'])
					->from('chat')
					->where(['send_from_id'=>$sendfromid,'send_to_id'=>$send_to_id])
					->order_by('message_id','DESC')
					->limit(5)
				 	->get();
		return $q->result();
	}
	public function show_chat2($send_to_id){
		$sendfromid=$this->session->userdata('uid');
		$q=$this->db->select(['messages','send_from_name'])
					->from('chat')
					->where(['send_from_id'=>$send_to_id,'send_to_id'=>$sendfromid])
					->order_by('message_id','DESC')
					->limit(5)
				 	->get();
		return $q->result();
	}
	public function stud_notify($msg,$name){
		$id=$this->session->userdata('uid');
		return $this->db->insert('msg',['messages'=>$msg,'from_msg_id'=>$id,'from_msg_name'=>$name,'seen_unseen'=>'u']);
	}
	public function prev_msg_person($limit,$offset){
		$id=$this->session->userdata('uid');
		$flag=1;
		$q=$this->db->select(['send_to_name','send_to_id'])
				 ->distinct([$flag])
				 ->where('send_from_id',$id)
				 ->limit($limit,$offset)
				 ->get('chat');
		return $q->result();
	}
	public function prev_msg_person_num(){
		$id=$this->session->userdata('uid');
		$flag=1;
		$q=$this->db->select(['send_to_name','send_to_id'])
				 ->distinct([$flag])
				 ->where('send_from_id',$id)
				 ->get('chat');
		return $q->num_rows();
	}
	public function prev_msg_chat($send_to_id,$limit,$offset){
		$send_from_id=$this->session->userdata('uid');
		$q=$this->db->query("(select * from chat where send_from_id=$send_from_id AND send_to_id=$send_to_id) UNION (select * from chat where send_from_id=$send_to_id AND send_to_id=$send_from_id) ORDER BY message_id asc LIMIT $limit OFFSET $offset;");
		return $q->result();
	}
	public function prev_msg_chat_num($send_to_id){
		$send_from_id=$this->session->userdata('uid');
		$q=$this->db->query("(select * from chat where send_from_id=$send_from_id AND send_to_id=$send_to_id) UNION (select * from chat where send_from_id=$send_to_id AND send_to_id=$send_from_id) ORDER BY message_id asc;");
		return $q->num_rows();
	}
}
?>