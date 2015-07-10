<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function index()
	{
		
		$this->end();
		 $this->session->sess_destroy();
		 header('location:'.base_url('index.php/login'));
	}
	function end(){
		$session_id = $this->session->userdata('session_id');
		$username = $this->session->userdata('username');
		$this->load->helper('date');
          $format = 'DATE_RFC822';
          $time = now();

          $ses = standard_date($format, $time);
          $username = $this->session->userdata('username');
          //echo $session_id;
		  $th = substr($session_id, 0,20);

          $this->db->where('user_id', $th);

		  $query = $this->db->get('sessions');

          //$r=$this->db->where('sessions');

          $add=$query->result_array();
          
	       $t=$add[0]["user_id"];
  			// var_dump($t);
     //      echo $th;
          
		
		 if ($t == $th) {
          $this->db->query('UPDATE sessions set session_end="'.$ses.'" where user_id="'.$th.'"');
          $log = $this->session->userdata('username');

          $this->db->query('UPDATE clerk set logged_in = "'.no.'" where username="'.$log.'"');
               

			   header('location:'.base_url('index.php/login'));
          }
          else header('location:'.base_url('index.php/home'));
		// $this->db->where('username', $username);
		// $this->db->update('clerk');
	}
}