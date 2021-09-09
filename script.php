<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//validacoes
if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3){
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}

if(strlen($nome) > 30){
    echo 'o nome é muito extenso';
    return;
}

if(!is_numeric($idade)){
    echo 'Informe um número para idade';
    return;
}

if ($idade >= 6 && $idade <= 12){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " compete na categoria " .$categorias[$i];
    }
}
elseif ($idade >= 13 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adolecente')
            echo "O nadador ". $nome ." compete na categoria adolecente";
    }
}
else 
for ($i = 0; $i <= count($categorias); $i++){
    if ($categorias[$i] == 'adulto')
        echo "O nadador ". $nome ." compete na categoria adulto";
}