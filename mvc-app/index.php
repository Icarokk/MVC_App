<?php
require_once 'app/controllers/PessoaController.php';

$controller = new PessoaController();

if (isset($_GET['acao'])) {
    switch ($_GET['acao']) {
        case 'salvar':
            $controller->salvar();
            break;
        case 'listar':
            $controller->listar();
            break;
        case 'editar':
            $controller->editar();
            break;
        case 'excluir':
            $controller->excluir();
            break;
            
        // case 'listarjson':
        //     $controller->listarjson();
        //     break;
        // case 'editarjson':
        //     $controller->editarjson();
        //     break;
        // case 'excluirsjon':
        //     $controller->excluirjson();
        //     break;
    }
} else {
    include 'app/views/form.php';
}
?>
