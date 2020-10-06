<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Alumni_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }

        function regAlumni($data){
			$this->db->insert('register',$data);
        }
        function getAlumni(){
			$this->db->select('C_ID, Name_Lastname, Sex, Address, Tel, E_mail, Work, Content');
			$result = $this->db->get('register');
			return $result;
		}
		function updateWork($data,$C_ID){
			$this->db->where('c_id', $C_ID);
			$this->db->update('register', $data);
        }
        function updateContent($data,$C_ID){
			$this->db->where('c_id', $C_ID);
			$this->db->update('register', $data);
		}		
}