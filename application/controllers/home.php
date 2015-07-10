<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->is_logged_in();
	}

	function is_logged_in(){

		$is_logged_in = $this->session->userdata('is_logged_in');

		if (!isset($is_logged_in) || $is_logged_in != true )
		{
			echo 'You don\'t have permission to access this page. <a href="../index.php/login">Login</a>';
			die();
		}
	}

	public function index()
	{

		$user_type = $this->session->userdata('usertype');

		$view_sections[0] = true;
		$view_sections[1] = true;
		$view_sections[2] = true;
		$view_sections[3] = true;
		$view_sections[4] = true;

		if($user_type == 'admin'){
			$view_sections[0] = true;
			$view_sections[1] = true; 
			$view_sections[2] = true;
			$view_sections[3] = true;
			$view_sections[4] = true;
		}

		else
		{
			$view_sections[0] = false;
			$view_sections[2] = false;
			$view_sections[4] = false;
		}
		$this->session->set_userdata(
				array('sections' => $view_sections)
			);
		$data['sections'] = $view_sections;
		$this->load->view('home');
	}

	function apply(){

		$data['error']="";
		$this->load->view('registration', $data);
	}
	function addclerk(){
		$this->load->view('add_new');
	}
	function create_applicant(){

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required|alpha');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('district_of_birth', 'District of Birth', 'required|alpha|alpha_numeric');
		$this->form_validation->set_rules('place_of_issue', 'Place of issue', 'required|alpha|alpha_numeric');
		$this->form_validation->set_rules('pfname', 'Parent First Name', 'required|alpha');
		$this->form_validation->set_rules('pmname', 'Parent Middle Name', 'required|alpha|alpha_numeric');
		$this->form_validation->set_rules('plname', 'Parent Last Name', 'required|alpha');
		$this->form_validation->set_rules('district', 'District', 'required|alpha');
		$this->form_validation->set_rules('division', 'Division', 'required|alpha');
		$this->form_validation->set_rules('location', 'Location', 'required|alpha');
		$this->form_validation->set_rules('sublocation', 'Sub-Location', 'required|alpha');
 
		
	
		$date=$this->input->post('date_of_birth');
		$new=date('Y/m/d',strtotime($date));


		$result=$this->db->query('SELECT idnumber FROM applicant ORDER BY idnumber DESC LIMIT 1');
	    $add=$result->result_array();
	    $t=$add[0]["idnumber"] + 1;

	    $results=$this->db->query('SELECT serialnumber FROM applicant ORDER BY serialnumber DESC LIMIT 1');
	    $adds=$results->result_array();
	    $s=$adds[0]["serialnumber"] + 1;


		if ($this->form_validation->run())
		{
		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => './images/',
						'max_size' => '10000');
		$this->load->library('upload', $config);
		if ($this->year( $this->input->post('date_of_birth')) >= 18){

		if (!$this->upload->do_upload('picture')) {
			echo $this->upload->display_errors();
		}
		$upload_data = $this->upload->data();

		$data = array('fname' => $this->input->post('fname'),
					  'mname' => $this->input->post('mname'),
					  'lname' => $this->input->post('lname'), 
					  'picture' => $upload_data['file_name'], 
					  'district_of_birth' => $this->input->post('district_of_birth'), 
					  'place_of_issue' => $this->input->post('place_of_issue'), 
					  'date_of_birth' => $new, 
					  'idnumber' => $t, 
					  'serialnumber' => $s, 
					  'sex' => $this->input->post('sex'), 
					  'pfname' => $this->input->post('pfname'), 
					  'pmname' => $this->input->post('pmname'), 
					  'plname' => $this->input->post('plname'), 
					  'district' => $this->input->post('district'), 
					  'division' => $this->input->post('division'), 
					  'location' => $this->input->post('location'), 
					  'sublocation' => $this->input->post('sublocation'));

			$this->my_model->add_applicant($data);
			header('location:'.base_url('index.php/home/apply'));
			// header(location 'echo site_url('drugs');');
		}
		else{
				$data['error'] = "Applicant Must be 18+";
        		$this->load->view('registration',$data);
	
		}}

		else
		{
	            $data['error'] = "Validation Error";
        		$this->load->view('registration',$data);
		}
	}

	function year($date){
		$this->load->helper(array('form', 'url'));
  	  
		   $d1 = new DateTime(date("Y/m/d"));

			$d2 = new DateTime($date);

			$diff = $d2->diff($d1);

			return $diff->y;
		   
		}
	// function id($id){

	//     $result=$this->db->query('SELECT idnumber FROM applicant ORDER BY idnumber DESC LIMIT 1');
	//     $add=$result->result_array();
	//     $t=$add[0]["idnumber"] + 1;

	// 	return $t;
	// }
	
	function create_clerk(){

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric|min_length[10]');
		$this->form_validation->set_rules('usertype', 'Usertype', 'required|alpha');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

		if ($this->form_validation->run())
		{
		$data = array('fname' => $this->input->post('fname'),
							  'lname' => $this->input->post('lname'),
							  'logged_in' => $this->input->post('log'), 
							  'phone' => $this->input->post('phone'), 
							  'usertype' => $this->input->post('usertype'), 
							  'username' => $this->input->post('username'), 
							  'password' => md5($this->input->post('password')));

				
					$this->my_model->add_clerk($data);
					header('location:'.base_url('index.php/home/addclerk'));
					// header(location 'echo site_url('drugs');');
		
		}else{
			$this->load->view('add_new');
		}
	}

	function clerktable(){
		$value = array();
		if($data = $this->my_model->read_clerk()){
			$value['record'] = $data;
		}

		$this->load->view('clerk_table', $value);
	}

	 function deleteclerk($id){
		$this->my_model->deleteclerk($id);
		header('location:'.base_url('index.php/home/clerktable'));
	}


	function applicanttable(){
		$value = array();
		if($data = $this->my_model->read_applicant()){
			$value['record'] = $data;
		}

		$this->load->view('applicant_table', $value);
	}

	 function deleteapplicant($id){
		$this->my_model->deleteapplicant($id);
		header('location:'.base_url('index.php/home/applicanttable'));
	}

	function updateclerk(){
		$value = array();
		if ($data=$this->my_model->edit_clerk()) {
			$value['record']=$data;
		}
		$this->load->view('updateclerk', $value);
	}

	 function update(){

		$data = array('id' => $this->input->post('id'),
					  'fname' => $this->input->post('fname'),					  
					  'lname' => $this->input->post('lname'), 
					  'phone' => $this->input->post('phone'), 
					  'password' => md5($this->input->post('password')));

		if (!empty($data['fname']) && !empty($data['lname']) && !empty($data['phone']) && !empty($data['password'])) 
		{
			$this->my_model->updateclerk($data);
			header('location:'.base_url('index.php/home/clerktable'));
		}

		else
		{
			echo "please complete all fields";
		}

		$this->updateclerk();
	}

	 function update_profile(){


		$data = array('id' => $this->input->post('id'),
					  'fname' => $this->input->post('fname'),					  
					  'lname' => $this->input->post('lname'), 
					  'phone' => $this->input->post('phone'), 
					  'password' => md5($this->input->post('password')));

		if (!empty($data['fname']) && !empty($data['lname']) && !empty($data['phone']) && !empty($data['password'])) 
		{
			$this->my_model->updateclerkp($data);
			header('location:'.base_url('index.php/home/clerktable'));
		}

		else
		{
			echo "please complete all fields";
		}

		$this->updateclerkp();
	}

	function updateapplicant(){
		$value = array();
		if ($data=$this->my_model->edit_applicant()) {
			$value['record']=$data;
		}
		$this->load->view('updateapplicant', $value);
	}

	function updateapp(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required|alpha');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('district_of_birth', 'District of Birth', 'required|alpha');
		$this->form_validation->set_rules('place_of_issue', 'Place of issue', 'required|alpha');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
		$this->form_validation->set_rules('pfname', 'Parent First Name', 'required|alpha');
		$this->form_validation->set_rules('pmname', 'Parent Middle Name', 'required|alpha');
		$this->form_validation->set_rules('plname', 'Parent Last Name', 'required|alpha');
		$this->form_validation->set_rules('district', 'District', 'required|alpha');
		$this->form_validation->set_rules('division', 'Division', 'required|alpha');
		$this->form_validation->set_rules('location', 'Location', 'required|alpha');
		$this->form_validation->set_rules('sublocation', 'Sub-Location', 'required|alpha');

		if ($this->form_validation->run())
		{
		
		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => './images',
						'max_size' => '10000' );
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('picture')) {
			echo $this->upload->display_errors();
		}
		
		$upload_data = $this->upload->data();

		$data = array('id' => $this->input->post('id'),
					  'fname' => $this->input->post('fname'),
					  'mname' => $this->input->post('mname'),
					  'lname' => $this->input->post('lname'), 
					  'picture' => $upload_data['file_name'], 
					  'district_of_birth' => $this->input->post('district_of_birth'), 
					  'place_of_issue' => $this->input->post('place_of_issue'), 
					  'date_of_birth' => $this->input->post('date_of_birth'), 
					  'sex' => $this->input->post('sex'), 
					  'pfname' => $this->input->post('pfname'), 
					  'pmname' => $this->input->post('pmname'), 
					  'plname' => $this->input->post('plname'), 
					  'district' => $this->input->post('district'), 
					  'division' => $this->input->post('division'), 
					  'location' => $this->input->post('location'), 
					  'sublocation' => $this->input->post('sublocation'));

			$this->my_model->updateapplicant($data);
			header('location:'.base_url('index.php/home/applicanttable'));
			// header(location 'echo site_url('drugs');');
		}

		else
		{
			$this->load->view('updateapplicant');
		}

		// $this->updateapp();
	}

	function viewapplicant(){
		$value = array();
		if ($data=$this->my_model->view_applicant()) {
			$value['record']=$data;
		}
		$this->load->view('viewapplicant', $value);
	}

	function viewbehind(){
		$value = array();
		if ($data=$this->my_model->view_applicant()) {
			$value['record']=$data;
		}
		$this->load->view('viewbehind', $value);
	}

	function applicants(){
		$value = array();
		if($data = $this->my_model->read_applicant()){
			$value['record'] = $data;
		}
		$this->load->view('applicants', $value);
	}

	function profile(){
		$value = array();
			$data['record']=$this->my_model->load_profile();
			$this->load->view('profile',$data);
		
	}

	function idfront(){
		$value = array();
		if ($data=$this->my_model->read_applicant()) {
			$value['record']=$data;
		}
		$this->load->view('front', $value);
	}


	function page(){
		$value = array();
		if ($data=$this->my_model->view_applicant()) {
			$value['record']=$data;
		}
		$this->load->view('page', $value);
	}

	function testing(){

		$this->load->helper(array('form', 'url'));

		$result=$this->db->query('SELECT idnumber FROM applicant ORDER BY idnumber DESC LIMIT 1');
	    $add=$result->result_array();
	    $p=$add[0]["idnumber"];
		
		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => './files/',
						'max_size' => '10000' );

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('userfile')) {
			echo $this->upload->display_errors();
		}
		
		$upload_data = $this->upload->data();

		$data = array('idnumber' => $p,
					  'first' => $upload_data['file_name']);

			$this->my_model->add_files($data);
			header('location:'.base_url('index.php/home/tes'));
			// header(location 'echo site_url('drugs');');
	}

	function sign(){
		$this->load->helper(array('form', 'url'));
		
		
		$result=$this->db->query('SELECT idnumber FROM applicant ORDER BY idnumber DESC LIMIT 1');
	    $add=$result->result_array();
	    $p=$add[0]["idnumber"];

		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => './files/sign',
						'max_size' => '10000' );

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('sign')) {
			echo $this->upload->display_errors();
		}
		
		$upload_data = $this->upload->data();
		$data = array('sign' => $upload_data['file_name']);
		$secondf=$data["sign"];
		//print_r($p);
		
			$data = array('sign' => $upload_data['file_name']);
			 $this->db->query("UPDATE applicant SET sign = '".$secondf."' WHERE idnumber = '".$p."'");

			// //$this->my_model->updatefiles($data);
			 header('location:'.base_url('index.php/home/apply'));
			// header(location 'echo site_url('drugs');');

	}

	function thumb(){
		$this->load->helper(array('form', 'url'));
		
		
		$result=$this->db->query('SELECT idnumber FROM applicant ORDER BY idnumber DESC LIMIT 1');
	    $add=$result->result_array();
	    $p=$add[0]["idnumber"];

		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => './files/thumbs/',
						'max_size' => '10000' );

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fingerprint')) {
			echo $this->upload->display_errors();
		}
		
		$upload_data = $this->upload->data();
		$data = array('thumb' => $upload_data['file_name']);
		$secondf=$data["thumb"];
		//print_r($p);
		
			$data = array('thumb' => $upload_data['file_name']);
			$this->db->query("UPDATE applicant SET thumb = '".$secondf."' WHERE idnumber = '".$p."'");
			// //$this->my_model->updatefiles($data);
			 header('location:'.base_url('index.php/home/apply'));
			// header(location 'echo site_url('drugs');');

	}

		function fingerprints(){
		$this->load->helper(array('form', 'url'));
		
		
		$result=$this->db->query('SELECT idnumber FROM applicant ORDER BY idnumber DESC LIMIT 1');
	    $add=$result->result_array();
	    $p=$add[0]["idnumber"];

		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => './files/fingerprints/',
						'max_size' => '10000' );

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fingerprints')) {
			echo $this->upload->display_errors();
		}
		
		$upload_data = $this->upload->data();
		$data = array('fingerprints' => $upload_data['file_name']);
		$secondf=$data["fingerprints"];
		//print_r($p);
		
			$data = array('fingerprints' => $upload_data['file_name']);
			 $this->db->query("UPDATE applicant SET fingerprints = '".$secondf."' WHERE idnumber = '".$p."'");

			 header('location:'.base_url('index.php/home/apply'));

	}

	function doupload() {
		$result=$this->db->query('SELECT idnumber FROM applicant ORDER BY idnumber DESC LIMIT 1');
	    $add=$result->result_array();
	    $p=$add[0]["idnumber"];

	    var_dump($p);
	}

	function tes(){
		$value = array();
		if ($data=$this->my_model->read_sessions()) {
			$value['record']=$data;
		}
		$this->load->view('blank', $value);
		
	}
	function sess(){
		$value = array();
		if ($data=$this->my_model->read_sessions()) {
			$value['record']=$data;
		}
		$this->load->view('session', $value);
		
	}
	function time(){
		$t=date('Y-m-d H:i:s');
		echo date_timezone_get('Kenya/Nairobi');
	}
}