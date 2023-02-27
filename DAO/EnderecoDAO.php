<?php

    namespace App\DAO;

    use App\Model\EnderecoModel;

    class EnderecoDAO extends DAO
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function SelectLogradouroByCep(int $cep)
        {
            $sql = "SELECT * FROM logradouro WHERE cep = ? ";

            $stmt = $this->conexao-prepare($sql);
            $stmt->binValue(1, $cep);
            $stmt->execute();

            $endereco_obj->arr_cidades = $this->SelectCidadesByUF($endereco_obj->UF);

            return $endereco_obj;   
        }

        public function SelectCidadesByUF($uf)
        {
            $sql = "SELECT * FROM cidade WHERE uf = ? ORDER BY descricao";
        }
    }
?>