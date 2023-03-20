<?php

    use App\Controller\EnderecoController;
use App\Model\CidadeModel;

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ($url)
    {
        case '/endereco/by-cep':
            EnderecoController::GetCepByLogradouro();
        break;

        case '/logradouro/by-bairro':
            EnderecoController::GetLogradouroByBairroAndCidade();
        break;

        case '/cidade/by-uf':
            CidadeModel::GetCidadesByUF();
        break;

        case '/bairro/by-cidade':
            EnderecoController::GetBairrosByCidade();
        break;

        default:
            http_response_code(403);
        break;
    }

?>