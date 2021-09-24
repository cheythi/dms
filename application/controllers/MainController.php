<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
    
		parent::__construct();

		$this->load->helper('url');
	}

	public function login1()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login1');
	}

	public function login2()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login2');
	}

	public function login3()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login3');
	}

	public function login4()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login4');
	}

	public function login5()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login5');
	}

	public function login6()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login6');
	}

	public function login7()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login7');
	}

	public function login8()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/login8');
	}

	public function home_loans()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('home_loan/main');
		$this->load->view('templates/footer');
	}

	public function savings()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('savings_acc/main');
		$this->load->view('templates/footer');
	}

	public function personal_loans()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('savings_acc/main');
		$this->load->view('templates/footer');
	}

	public function fixed()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('fixed_deposit/main');
		$this->load->view('templates/footer');
	}

	public function online_bank()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('online_bank/main');
		$this->load->view('templates/footer');
	}

	public function customer_support()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('customer_support/main');
		$this->load->view('templates/footer');
	}

	public function hr()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('human_resourse/main');
		$this->load->view('templates/footer');
	}

	public function recruitment()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/upperbar');
		$this->load->view('templates/sidebar');
		$this->load->view('emp_recruit/main');
		$this->load->view('templates/footer');
	}

}