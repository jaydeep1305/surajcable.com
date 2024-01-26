<?php 
	class Login_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}

		public function get_login($username, $password){

			$userdata = array('username' => $username, 'password' => $password);
			$this->db->where($userdata);
			$query = $this->db->get('user');
			
			if($query->num_rows() > 0){
				return true;
			}
			else {
				return false;
			}
		}
		public function get_username(){
			$query = $this->db->get('user');
            $result = $query->row_array();
            return $result['username'];
		}

		public function update_profile(){
		    $query = $this->db->get('user');
            $result = $query->row_array();
            $password = $result['password'];
            $username = $result['username'];
            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');

            if($password == $old_password)
            {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('new_password')
                );
                $this->db->where('username',$username);
                return $this->db->update('user',$data);
            }
            else
            {
                echo "Wrong old password.";
                die();
            }
		}

	}
