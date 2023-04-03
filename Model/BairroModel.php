<?php

    namespace App\Model;

    use App\DAO\EnderecoDAO;
    use FFI\Exception;

    class BairroModel extends Model
    {
        public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd; //

        public function GetLogradouroByBairroAndCidade(int $id_cidade, string $uf)
        {
            try
            {
                $dao = new EnderecoDAO();
                return $dao->SelectLogradouroByBairroAndCidade($id_cidade, $uf);
            }
            catch (Exception $e)
            {
                throw $e;
            }
        }

        public function GetBairrosByCidade(int $id_cidade)
        {
            try
            {
                $dao = new EnderecoDAO();
                return $dao->SelectBairrosByCidade($id_cidade);
            }
            catch (Exception $e)
            {
                throw $e;
            }
        }
    }
?>