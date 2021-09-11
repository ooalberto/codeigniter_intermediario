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
}
