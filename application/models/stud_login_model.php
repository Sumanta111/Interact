<?php
class Stud_login_model extends CI_Model{
	public function login_stud($email,$password){

		$q=$this->db->where(['email'=>$email,'password'=>$password])
				 ->GET('streg');
		if($q->num_rows()){
			return $q->row()->st_id;
		}
		else{
			return FALSE;
		}
	}

	public function reg_stud($array){
		return $this->db->insert('streg',$array);
	}
}
?>