<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_m extends CI_Model{

     function validate()
     {
          $this->db->where('usertype',$this->input->post('usertype'));
          $this->db->where('username',$this->input->post('username'));
          $this->db->where('password', md5($this->input->post('password')));
          $query = $this->db->get('clerk');

          if ($query->num_rows == 1) {
               return true;
          }
     }
}