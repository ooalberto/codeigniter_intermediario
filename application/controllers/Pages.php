<?php
class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pages_model');
		$this->load->helper('form');
		// $this->load->helper('url');  jogou no autoload C:\Complementos\treinamento\codeigniter_intermediario\codeigniter_intermediario\application\config\autoload.php
	}

	public function index()
	{
		$pages = $this->pages_model->get();

		$this->load->view('templates/header');
		$this->load->view('pages/index', ['pages' => $pages]);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{

		$page = $this->pages_model->get($id);

		$this->load->view('templates/header');
		$this->load->view('pages/view', ['page' => $page]);
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Título', 'required');
		$this->form_validation->set_rules('body', 'Mensagem', 'required');
		if ($this->form_validation->run() === false) {
			$page = $this->pages_model->get($id);
			$this->load->view('templates/header');
			$this->load->view('pages/edit', ['page' => $page]);
			$this->load->view('templates/footer');
		} else {
			$data['back'] = '/pages/' . $id;
			$this->pages_model->update($id);
			$this->load->view('templates/success', $data);
		}
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
			$this->load->view('templates/success', $data);
		}
	}
	public function delete($id)
	{
		$data['back'] = '/pages';
		$this->pages_model->delete($id);
		$this->load->view('templates/success', $data);
	}

	public function novo()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'E-mail', 'required|min_lenght[4]|max_len[100]');
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_lenght[4]|max_len[100]');
		$this->form_validation->set_rules('senha', 'Senha', 'required|min_lenght[6]|max_len[100]');

		if ($this->form_validation->run() === false) {

			$erros = array('msgs' => validation_errors());

			$this->load->view('templates/header');
			$this->load->view('pages/insert',$erros);
			$this->load->view('templates/footer');

		} else {
		}
	}
}
