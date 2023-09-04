<?php
    include 'Controller/PessoaController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ($url) {
        case '/mvc-php/App/index.php':
            echo 'Pagina incial';
        break;
        
        case '/mvc-php/App/index.php/pessoa':
            PessoaController::index();
        break;

        case '/mvc-php/App/index.php/pessoa/form':
            PessoaController::form();
        break;

        case '/mvc-php/App/index.php/pessoa/form/save':
            PessoaController::save();
        break;

        default:
            echo 'Erro 404';
        break;
    }


?>