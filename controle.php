<?php
    $codigo = $_GET['codigo'];
    $nome = $_GET['nome'];
    $cargo = $_GET['cargo'];

    include 'funcionario.php';
    $func = new funcionario();
    
    $func->setCodigo($codigo);
    $func->setNome($nome);
    $func->setCargo($cargo);

    include 'funcionarioDAO.php';
    $funcDao = new funcionarioDao();

    $funcDao->cadastrarFuncionario($func);

?>