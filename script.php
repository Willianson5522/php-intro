<?php
    session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//validacoes
if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 30){
    $_SESSION['mensagem-de-erro'] = 'o nome é muito extenso';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
    header('location: index.php');
    return;
}




if ($idade >= 6 && $idade <= 12){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
        }            
    }
}
else if ($idade >= 13 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adolecente'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ". $nome ." compete na categoria adolecente";
            header('location: index.php');
            return;
        }
    }
}
else 
for ($i = 0; $i <= count($categorias); $i++){
    if ($categorias[$i] == 'adulto'){
        if ($categorias[$i] == 'adulto'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ". $nome ." compete na categoria adulto";
            header('location: index.php');
            return;
        }
    }     
}