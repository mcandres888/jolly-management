<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $view_data['title'] = "Index";
    $this->load->model('service');
    $services = new service();


    $this->load->model('specialization');
    $specialization = new specialization();


    $this->load->model('client');
    $clients = new client();
    $view_data['clients_data'] = $clients->get_all_data();


    $view_data['services'] = $services->get_all_data();
    $view_data['specializations'] = $specialization->get_all_data();
		$this->load->view('main', $view_data);
	}
	public function about()
	{

    $this->load->model('employee');
    $employee = new employee();
    $view_data['employees_data'] = $employee->get_all_data();

    $this->load->model('client');
    $clients = new client();
    $view_data['clients_data'] = $clients->get_all_data();
		$this->load->view('about', $view_data);
	}
	public function services()
	{
    $view_data['title'] = "Services";
    $this->load->model('service');
    $services = new service();


    $this->load->model('specialization');
    $specialization = new specialization();

    $view_data['services'] = $services->get_all_data();
    $view_data['specializations'] = $specialization->get_all_data();
		$this->load->view('services', $view_data);
	
	}
	public function contact()
	{
		$this->load->view('contact');
	}

	public function branches()
	{
    $this->load->model('branch');
    $branch_data = new branch();
    $view_data['branches_data'] = $branch_data->get_all_data();

		$this->load->view('branches', $view_data);
	}

	public function jobs( $page )
	{

    $this->load->model('job');
    $job = new job();
    $view_data['jobs_data'] = $job->get_page_data($page);
    
    $view_data['prev_url'] = site_url() . "/main/jobs/" . ($page - 1);
    $view_data['current_page'] = $page;
    $view_data['next_url'] = site_url() . "/main/jobs/" . ($page + 1);
		$this->load->view('jobs', $view_data);
	}





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
