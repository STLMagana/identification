<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model{

	function read_clerk(){
		$query = $this->db->get('clerk');
		return $query->result();
	}

	function read_sessions(){
		$query = $this->db->get('sessions');
		return $query->result();
	}

	 function add_clerk($data)
	{
		$this->db->insert('clerk', $data);
	}
	function read_applicant(){
		$query = $this->db->get('applicant');
		return $query->result();
	}

	 function add_applicant($data)
	{
		$this->db->insert('applicant', $data);
	}
	function add_files($data)
	{
		$this->db->insert('files', $data);
	}
	function add_fils()
	{
		$this->db->where('id', $data['id']);
		$this->db->update('applicant', $data);
	}

	function edit_clerk(){
		$this->db->where('id', $this->uri->segment(3));
		$query = $this->db->get('clerk');
		return $query->result();
	}


	function updateclerk($data){
		$this->db->where('id', $data['id']);
		$this->db->update('clerk', $data);
	}

	function updatefiles($data){
		$this->db->where('idnumber', $data['idnumber']);
		$this->db->update('files', $data);
	}

	function edit_profile(){
		$this->db->where('id', $this->uri->segment(3));
		$query = $this->db->get('clerk');
		return $query->result();
	}
	function load_profile(){
		$this->load->library('session');
		$username = $this->session->userdata['username'];
		$sql = "select * from clerk where username = '".$username."'";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function updateclerkp($data){
		$this->db->where('id', $data['id']);
		$this->db->update('clerk', $data);
	}

	function edit_applicant(){
		$this->db->where('id', $this->uri->segment(3));
		$query = $this->db->get('applicant');
		return $query->result();
	}

	function updateapplicant($data){
		$this->db->where('id', $data['id']);
		$this->db->update('applicant', $data);
	}

	function view_applicant(){
		$this->db->where('id', $this->uri->segment(3));
		$query = $this->db->get('applicant');
		return $query->result();
	}

	function deleteclerk($id){
		$sql="delete from clerk where id ='".$id."'";
		$this->db->query($sql);
	}

	function deleteapplicant($id){
		$sql="delete from applicant where id ='".$id."'";
		$this->db->query($sql);
	}
	
}