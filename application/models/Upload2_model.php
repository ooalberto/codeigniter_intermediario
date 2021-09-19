<?php
class Upload2_model extends CI_Model
{
    var $table = 'arquivos';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert($dados)
    {

        if (!isset($dados)) { //fiz do meu jeito
            $nome = $this->input->post('nome');
            $arquivo = rand(1, 1955) . trim($nome);

            $dados = [
                'nome' => $arquivo . '.pdf',
                'arquivo' => $arquivo,
                'zip' => $arquivo . '.zip',
            ];
        }
        $this->db->insert($this->table, $dados);
    }
}
