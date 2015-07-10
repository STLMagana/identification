<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
     function index()
     {
          $this->load->helper(array('form','url'));
          $this->load->library('session');
          $this->load->library('form_validation');
          $this->load->model('login_m');
          
          $this->form_validation->set_rules('password' ,'Password','required');
          $this->form_validation->set_rules('username' ,'Username','required');
          if($this->form_validation->run()==FALSE){
               $data['message']="";
               $this->load->view('login');
          }
          else{

          $query = $this->login_m->validate();

          if ($query) {

               $data = array(
                    'usertype' => $this->input->post('usertype'),
                    'username' => $this->input->post('username'),
                    'id' => $this->input->post('id'),
                    'is_logged_in' => true
               );
               $this->session->set_userdata($data);
               $this->test();
               $log=$this->input->post('username');
               $this->db->query('UPDATE clerk set logged_in = "'.yes.'" where username="'.$log.'"');
               header('location:'.base_url('index.php/home'));
          }
          else{

               //$data['query'] =$query;
               $data['error'] = "Validation Error";
               $this->load->view('login',$data);

          }
          }
          
     }
     function test(){
          $this->db->where('usertype',$this->input->post('usertype'));
          $this->db->where('username',$this->input->post('username'));
          $pass = $this->db->where('password', md5($this->input->post('password')));
          $query = $this->db->get('clerk');

          if ($query->num_rows == 1) {
               
               $add=$query->result_array();
               $name=$add[0]["username"];
               $type=$add[0]["usertype"];

               $t = $this->session->userdata('session_id');

               $this->load->helper('date');
               $format = 'DATE_RFC822';
               $time = time();

               $ses = standard_date($format, $time);
               
               //var_dump($t);
          $data = array('user_id' => $t,
                           'username' => $name, 
                           'session_start' => $ses, 
                           'session_end' => '');

                    
                         $this->db->insert('sessions', $data);
                         header('location:'.base_url('index.php/home'));
                         // header(location 'echo site_url('drugs');');

               //$this->db->insert('sessions', $data);

               //var_dump($t);
               //echo "success";
          }
          else {
               
               //  $k=$this->session->set_userdata('login_attempt','1');
               //  echo $k;
               
               // // if (!$this->session->userdata('login_attempt')) {
                    
               //  //     return false;
               //  // }
               //  //    else{
               // $this->session->set_userdata('login_attempt','1');
               //      $n = $this->session->userdata('login_attempt');
               //      //$n++;
               //      $this->session->set_userdata('login_attempt','1');
               //      return false;
               // //}

               for ($k=1; $k < 4 ; $k++) { 
                    echo $k;
               }

          }
     }
     function time(){
          // $this->load->helper('date');
          // $format = 'DATE_RFC822';
          // $time = time();

          // $ses = standard_date($format, $time);

          $ses = $this->session->all_userdata();
          // $add=$ses->result_array();
          // $s=$add["session_id"];
          $session_id = $this->session->userdata('session_id');
          $login_attempt = $this->session->userdata('login_attempt');
          $ip_address = $this->session->userdata('ip_address');
          $user_id = $this->session->userdata('user_id');
          var_dump($session_id) ;
     }

     function login_attempt(){
          $num = 1;
                $data = array('login_attempt' => $num,
                    'is_logged_in' => false
               );

               $num++;
               $this->session->set_userdata($data);

               echo $num;
          // for ($k=1; $k < 4 ; $k++) { 
          //           echo $k;
          //      }
     }
}

