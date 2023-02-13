<?php

    namespace App\Controller;

    include 'Controller.php';

    class EnderecoController extends Controller
    {
        public static function teste()
        {
            //var_dump("Querid#s Alun#s!");
            //parent::GetResponseAsJSON("Querid#s Alun#s!");

            $cidades = ['Jaú', 'Bariri', 'DC', 'Itapuí'];

            parent::GetResponseAsJSON($cidades);
        }
    }
?>