<?php

class Pages_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get()
	{
		$query = $this->db->get('pages');
		return $query->result();
		
	}
}
