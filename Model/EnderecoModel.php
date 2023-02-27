<?php

    namespace App\Model;

    use App\DAO\EnderecoDAO;
    use FFI\Exception;

    class EnderecoModel extends Model
    {
        public $id_logradouro, $tipo, $descricao, $id_cidade,
        $uf, $complemento, $descricao_sem_numero,
        $descricao_cidade, $codigo_cidade_ibge, $descricao_bairro;

        public $arr_cidades;

        public function GetLogradouroByCep(int $cep)
        {
            try
            {
                $dao = new EnderecoDAO();
    
                return $dao->SelectLogradouroByCep($cep);
            } catch(Exception $e)
            {
                throw $e;
            }
        }

        public function GetCepByLogradouro(int $logradouro)
        {
            try
            {
                $dao = new EnderecoDAO();
                return $dao->SelectCepByLogradouro($logradouro);
            } catch(Exception $e)
            {
                echo $e->GetMessage();
            }
        }
    }


?>