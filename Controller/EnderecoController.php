<?php

    namespace App\Controller;
    
    use App\Model\{EnderecoModel, CidadeModel};
    use Exception;

    include 'Controller.php';

    class EnderecoController extends Controller
    {
        public static function GetLogradouroByCep(): void
        {

        }

        public static function GetLogradouroByBairroAndCidade(): void
        {
            
        }

        public static function GetCidadesByUF(): void
        {

        }

        public static function GetBairrosByCidade(): void
        {

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