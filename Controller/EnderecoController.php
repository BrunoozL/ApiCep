<?php

    namespace App\Controller;

use App\DAO\EnderecoDAO;
use App\Model\{BairroModel, EnderecoModel, CidadeModel};
    use Exception;

    include 'Controller.php';

    class EnderecoController extends Controller
    {
        public static function GetCepByLogradouro(): void
        {
            try
            {
                $logradouro = $_GET['logradouro'];

                $model = new EnderecoModel();
                $model->GetCepByLogradouro($logradouro);

                parent::GetResponseAsJSON($model->rows);

            } 
            catch (Exception $e)
            {
                parent::GetExcepitionAsJSON($e);
            }
        }

        public static function GetLogradouroByBairroAndCidade(): void
        {
            try
            {
                $bairro = 
                parent::GetStringFromUrl(
                    isset($_GET['bairro']) ? $_GET['bairro'] : null,
                    'bairro');

                $id_cidade = 
                parent::GetIntFromUrl(
                    isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null,
                    'cep');

                $model = new BairroModel();
                $model->GetLogradouroByBairroAndCidade($bairro, $id_cidade);

                parent::GetResponseAsJSON($model->rows);
            } 
            catch (Exception $e)
            {
                parent::GetExcepitionAsJSON($e);
            }
        }

        public static function GetLogradouroByCep(): void
        {
            try
            {
                $cep = parent::GetIntFromUrl(
                    isset($_GET['cep']) ? $_GET['cep'] : null);

                $model = new EnderecoModel();

                parent::GetResponseAsJSON($model->GetLogradouroByCep($cep));
            }
            catch (Exception $e)
            {
                parent::GetExcepitionAsJSON($e);
            }
        }

        public static function GetBairrosByCidade(): void
        {
            try
            {
                    $id_cidade = parent::GetIntFromUrl(
                        isset($_GET['id_cidade']) ? $_GET['id_cidade'] : null);
                
                    $model = new BairroModel();

                    parent::GetResponseAsJSON($model->GetBairrosByCidade($id_cidade));
            }
            catch (Exception $e)
            {
                parent::GetExcepitionAsJSON($e);
            }
        }

        public static function GetCidadesByUF(): void
        {
            try 
            {
                $uf = parent::GetIntFromUrl(isset($_GET['uf']) ? $_GET['uf'] : null);

                $model = new CidadeModel();

                parent::GetResponseAsJSON($model->GetCidadesByUF($uf));
            }
            catch (Exception $e)
            {
                parent::GetExcepitionAsJSON($e);
            }
        }
        
        /* public static function teste()
        {
            //var_dump("Querid#s Alun#s!");
            //parent::GetResponseAsJSON("Querid#s Alun#s!");

            $cidades = ['Jaú', 'Bariri', 'DC', 'Itapuí'];

            parent::GetResponseAsJSON($cidades);
        } */
    }
?>