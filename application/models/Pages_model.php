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
		}else{
			$query = $this->db->get_where($this->table,['id'=>$id]);
			return $query->first_row();
		}	
	}
}
