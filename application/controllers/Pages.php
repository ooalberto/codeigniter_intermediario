<?php
class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pages_model');
	}

	public function index()
	{
		$pages = $this->pages_model->get();

		$this->load->view('templates/header');
		$this->load->view('pages/index', ['pages' => $pages]);
		$this->load->view('templates/footer');
	}

	public function views($id)
	{
		$page = $this->pages_model->get($id);
		$this->load->view('templates/header');
		$this->load->view('pages/view', ['page' => $page]);
		$this->load->view('templates/footer');
	}

	public function insert()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Titulo', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('pages/insert');
			$this->load->view('templates/footer');
		} else {
			$data['back'] = '\pages';			
			
			$this->pages_model->insert();
			$this->load->view('templates/success',$data);
		}
	}
}
