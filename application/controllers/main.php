<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}

	public function index()
	{


		$this->load->view('homepage.php');
	}



	// ===========================================

	function registerNow()
	{

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');

			if ($this->form_validation->run() == TRUE) {
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$data = array(
					'username' => $username,
					'email' => $email,
					'password' => sha1($password),
					'status' => '1'
				);

				$this->load->model('user_model');
				$this->user_model->insertuser($data);
				$this->session->set_flashdata('success', 'Your account has been registered successfully. You can now login.');
				redirect(base_url('main/index'));
			} else {
				$this->session->set_flashdata('error', 'Fill all the required fields');
				redirect(base_url('main/index'));
			}
		}
	}

	function login()
	{


		$this->load->view('login');
		// $this->load->view('footer');
	}

	function loginnow()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == TRUE) {
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);

				$this->load->model('user_model');
				$status = $this->user_model->checkPassword($password, $email);
				if ($status != false) {
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'username' => $username,
						'email' => $email,
					);

					$this->session->set_userdata('UserLoginSession', $session_data);

					redirect(base_url('main/developer'));
				} else {
					$this->session->set_flashdata('error', 'Email or Password is Wrong ');
					redirect(base_url('main/login'));
				}
			} else {
				$this->session->set_flashdata('error', 'Fill all the required fields');
				redirect(base_url('main/login'));
			}
		}
	}



	function logout()
	{
		// unset($_SESSION);
		// session_destroy();
		$this->session->unset_userdata('UserLoginSession');
		$this->session->sess_destroy();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		redirect(base_url('main/index', 'refresh'));
	}
	// ===========================================




	// Developer
	public function developer()
	{
		$this->load->view('header');
		$crud = new grocery_CRUD();
		// $crud->set_theme('datatables');
		$crud->set_theme('flexigrid');
		$crud->set_table('developer');
		$crud->set_subject('Developer');
		$crud->columns('devName', 'companyAddress', 'companyTel', 'email');
		$crud->fields('devName', 'companyAddress', 'companyTel', 'email');
		$crud->required_fields('devID', 'devName', 'comapnyAddress', 'companyTel', 'email');
		$crud->display_as('devID', 'Developer ID');
		$crud->display_as('devName', 'Name');
		$crud->display_as('companyAddress', 'Address');

		$crud->display_as('companyTel', 'Phone');
		$crud->display_as('email', 'Email');

		$output = $crud->render();
		$this->developer_output($output);
	}

	function developer_output($output = null)
	{

		$this->load->view('developer.php', $output);
		$this->load->view('footer.php');
	}
	// Productivity/Technologies
	public function product_tech()
	{

		$this->load->view('header.php');
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('productivity_technology');
		$crud->set_subject('productivity technology');
		$crud->columns('name', 'description', 'setup', 'RRP', 'devID');
		$crud->fields('name', 'description', 'setup', 'RRP', 'devID');
		$crud->required_fields('name', 'description', 'setup', 'RRP', 'devID');
		$crud->set_relation('devID', 'developer', 'devName');
		$crud->display_as('devID', 'Developer Name');
		$output = $crud->render();
		$this->product_tech_output($output);
	}

	function product_tech_output($output = null)
	{


		$this->load->view('productivity_tech', $output);

		$this->load->view('footer.php');
	}




	// // Employee
	public function employee()
	{
		$this->load->view('header.php');
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('employee');
		$crud->set_subject('Employee');
		$crud->columns('name', 'jobType', 'techniques');
		$crud->fields('name', 'jobType', 'techniques', 'job_id');
		$crud->required_fields('name', 'jobType', 'techniques', 'job_id');
		$crud->set_relation('jobType', 'job', 'name');
		$crud->set_relation('job_id', 'job', '{job_id} - {name}');
		$crud->display_as('jobType', 'Job Type');
		$crud->display_as('job_id', 'Job ID');
		$output = $crud->render();
		$this->employee_output($output);
	}

	function employee_output($output = null)
	{

		$this->load->view('employee', $output);
		$this->load->view('footer.php');
	}





	// // Rating
	public function rating()
	{
		$this->load->view('header.php');
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('rating');
		$crud->set_subject('Ratings');
		$crud->columns('techID', 'employeeID', 'usage', 'scoreRating', 'comments');
		$crud->fields('techID', 'employeeID', 'usage', 'scoreRating', 'comments', 'rateID', 'useID');
		$crud->required_fields('techID', 'employeeID', 'usage', 'scoreRating', 'comments', 'rateID', 'useID');
		$crud->set_relation('usage', 'use', 'use');
		$crud->set_relation('scoreRating', 'rate', 'rate');
		$crud->set_relation('employeeID', 'employee', 'name');
		$crud->set_relation('techID', 'productivity_technology', 'name');
		$crud->set_relation('rateID', 'rate', 'rateID');
		$crud->set_relation('useID', 'use', 'useID');
		$crud->display_as('employeeID', 'Employee Name');
		$crud->display_as('techID', 'Productivity/Technology');
		$crud->display_as('scoreRating', 'Score Rating');
		$crud->display_as('rateID', 'Rate ID');
		$crud->display_as('useID', 'Use ID');
		$crud->unset_edit();
		$crud->unset_delete();
		$output = $crud->render();
		$this->rating_output($output);
	}

	function rating_output($output = null)
	{

		$this->load->view('technology_rating', $output);
		$this->load->view('footer.php');
	}


	public function querynav()
	{
		$this->load->view('header');
		$this->load->view('querynav_view');
		$this->load->view('footer');
	}

	public function query1()
	{
		$this->load->view('header');
		$this->load->view('query1_view');
	}

	public function query2()
	{
		$this->load->view('header');
		$this->load->view('query2_view');
	}

	public function blank()
	{
		$this->load->view('header');
		$this->load->view('blank_view');
	}
	public function team()
	{

		$this->load->view('header');

		$this->load->view('team');
		$this->load->view('footer');
	}
	public function contact()
	{

		$this->load->view('header');

		$this->load->view('contact');
		$this->load->view('footer');
	}
}