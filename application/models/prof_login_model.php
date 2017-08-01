<?php
class Prof_login_model extends CI_Model{
	public function login_prof($email,$password){

		$q=$this->db->where(['email'=>$email,'password'=>$password])
				 ->GET('reg');
		if($q->num_rows()){
			return $q->row()->u_id;
		}
		else{
			return FALSE;
		}
	}

	public function reg_prof($array){
		return $this->db->insert('reg',$array);
	}
}
?>