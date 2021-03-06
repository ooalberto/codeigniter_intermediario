<?php

class Users_model extends CI_Model
{
    protected $table_name = 'users';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getByEmail()
    {
        $email = $this->input->post('email');
        $query = $this->db->get_where($this->table_name, array('email' => $email));
        return $query->first_row();
    }

    public function getByEmailAndPassword()
    {
        $user = $this->getByEmail();

        if (!$user) {
            return false;
        }

        $password = $this->input->post('password');
        $hash = $user->password;

        if (!password_verify($password, $hash)) {
            return false;
        }

        return $user;
    }

    public function insert()
    {
        $data = [
            'name' => $this->input->post('nome'),
            // 'senha' => $this->input->post('senha'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('senha'), PASSWORD_BCRYPT)
        ];

        return $this->db->insert($this->table_name, $data);
    }
}

