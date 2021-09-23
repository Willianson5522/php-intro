<?php

session_start();

function setarMensagemSucesso(string $mensagem) : void{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string{ // ? faz com que o retorno pode devolver uma string ou null
    if(isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];

    return null;
}

function setarMensagemErro(string $mensagem) : void{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string{ 
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];

    return null;
}

function removerMensagemSucesso() : void{
    if(isset($_SESSION['mensagem-de-sucesso'])) //verifica se esta setada
        unset($_SESSION['mensagem-de-sucesso']); //remove se tiver algo setado
}

function removerMensagemErro() : void{
    if(isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);
}