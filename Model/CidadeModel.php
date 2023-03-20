<?php

    namespace App\Model;

    use App\DAO\EnderecoDAO;
use Exception;

    class CidadeModel extends Model
    {
        public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

        public function GetCidadesByUF(string $uf)
        {
            try
            {
                $dao = new EnderecoDAO();
                return $dao->SelectCidadesByUF($uf);
            }
            catch (Exception $e)
            {
                throw $e;
            }
        }
    }
?>