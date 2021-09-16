<?php

class Pages_model extends CI_Model
{
	public $table = 'pages';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($id = null)
	{
		if (empty($id)) {
			$query = $this->db->get($this->table);
			return $query->result();
		} else {
			$query = $this->db->get_where($this->table, ['id' => $id]);
			return $query->first_row();
		}
	}

	public function insert()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), '_', true);

		$data = [
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'slug' => $slug
		];
		return	$this->db->insert($this->table, $data);
	}



	public function update($id)
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), '_', true);

		$data = [
			'title' => $this->input->post('title'),
			'body'  => $this->input->post('body'),
			'slug' => $slug
		];
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}


	public function delete($id)
    {

        return $this->db->delete($this->table, ['id'=>$id]);
		
    }
}
