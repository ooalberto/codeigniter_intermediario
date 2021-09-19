<?php

class Upload2 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('upload2_model');
	}
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('upload/index');
		$this->load->view('templates/footer');
	}

	public function subir()
	{
		$nome = $this->input->post('nome');
		
		$arquivo = $_FILES['arquivo'];
		$trim = trim($nome);
		$config = [
			'upload_path' => 'public/upload',
			'allowed_types' => 'pdf',
			'file_name' => rand(1, 1955) . 	$trim  . '.pdf',
			'max_size' => '300000'
		];

		$this->load->library('upload');
		$this->upload->initialize($config);

		if ($this->upload->do_upload('arquivo') == true) {

			$data['back'] = '/pages/';

			$dados = [
				'nome' => $nome,
				'arquivo' => $config['file_name'],
				'zip' => $config['file_name'] . 'zip'
			];

			$this->upload2_model->insert($dados);
			$this->load->view('templates/success', $data);

			echo 'arquivo upado';
		} else {
			echo $this->upload->display_errors();
		}

		// $this->load->view('templates/header');
		// $this->load->view('upload/index');
		// $this->load->view('templates/footer');

	}
}
