<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('alumni_model','register');
	}
	
	public function alumni_insert(){
		$data = array(
			'C_ID' => '05',
			'Name_Lastname' => 'anurak klakphet',
			'Sex' => 'male',
			'Address'=> '262',
			'Tel'=> '0984812229',
			'E_mail'=> 'max@mail.com',
			
		);
		$this->register->regAlumni($data);
		}
		public function showall()
	{
		$result['rts'] = $this->register->getAlumni();
		$this->load->view('view_alumni',$result);
	}
	public function alumni_updatework(){
		$data = array(
			
			'Work'=> "ก่อสร้าง"
		);
		$C_ID = "5";
		$this->register->updateWork($data,$C_ID);
		}
		public function alumni_updatecontent(){
			$data = array(
				'Content'=> "555555"
			);
			$C_ID = "5";
			$this->register->updateContent($data,$C_ID);
			}
	}

