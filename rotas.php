<?php

    use App\Controller\EnderecoController;

    $url = parse_url($_SERVER['REQUEST_UR1'], PHP_URL_PATH);

    switch ($url)
    {
        case '/endereco/by-cep':
            EnderecoController::GetLogradouroByCep();
        break;

        case '/logradouro/by-bairro':
            EnderecoController::GetLogradouroByBairroAndCidade();
        break;

        case '/cidade/by-uf':
            EnderecoController::GetCidadesByUF();
        break;

        case '/bairro/by-cidade':
            EnderecoController::GetBairrosByCidade();
        break;

        default:
            http_response_code(403);
        break;
    }

?>