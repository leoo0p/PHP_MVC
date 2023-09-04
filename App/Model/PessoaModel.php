<?php
class PessoaModel
{
    public $id, $nome, $cpf, $data_nascimento;
    public $rows;

    public function save()
    {
        include 'DAO/PessoaDAO.php';

        // Instância do objeto e conexão no banco de dados via construtor
        $dao = new PessoaDAO(); 

        $dao->insert($this);
    }
    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';
        
        // Instância do objeto e conexão no banco de dados via construtor
        $dao = new PessoaDAO();

        // Abastecimento da propriedade $rows com as "linhas" vindas do MySQL via camada DAO.
        $this->rows = $dao->select();
    }
}
