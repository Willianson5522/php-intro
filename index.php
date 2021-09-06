<?php
/*

*/
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
//print_r($categorias); printa o array

$nome = 'Eduardo';
$idade = 12;

//var_dump($nome); da mais informacoes sobre a variavel como tipo e quantidade de caracteres
//var_dump($idade);

if ($idade >= 6 && $idade <= 12){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " compete na categoria " .$categorias[$i];
    }
}
elseif ($idade >= 13 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++){
        if ($cadegorcategoriasias[$i] == 'adolecente')
            echo "O nadador ". $nome ." compete na categoria adolecente";
    }
}
else 
for ($i = 0; $i <= count($categorias); $i++){
    if ($categorias[$i] == 'adulto')
        echo "O nadador ". $nome ." compete na categoria adulto";
}