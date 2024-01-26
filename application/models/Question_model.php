<?php 
	class Question_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		
		//Admin Panel Models
		public function get_question($id = ""){
			if($id === ""){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('question');
				return $query->result_array();
			}
			$this->db->where('question_id',$id);
			$query = $this->db->get('question');
			return $query->row_array();			
		}

		
		// Come form contact page at client side
		public function create_question(){
			$post = $_POST;
			foreach($_POST as $question=>$answer)
			{
				if(is_array($answer))
					$answer = implode("|||",$answer);
				
				$data = array(
					'question' => $question,
					'answer' => $answer,
				);		
				$data = array('answer' => $answer);
				$query = $this->db
					->where('question',$question)
					->get('question');
				
				if($query->num_rows()>0)
				{
					$this->db
					->where('question',$question)
					->update('question',$data);
				}
				else
				{
					$this->db->insert('question',$data);
				}
				
			}
			return; 
		}
		
		public function delete_question($id){
			$this->db->where('question_id',$id);
			$this->db->delete('question');
		}
	}