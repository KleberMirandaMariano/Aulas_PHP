<?php
session_start();
function setarMessagemSucesso(string $menssagem) : void
{
    $_SESSION['mensagem de sucesso'] = $menssagem;
}

function obterMenssagemSucesso() : ?string
{
    if(isset($_SESSION['messagem de sucesso']))
        return $_SESSION['mensagem de sucesso']; 

    return null;
}

function setarMessagemDeErro(string $menssagem) : void
{
    $_SESSION['mensagem de erro'] = $menssagem;
}

function obterMenssagemErro() : ?string
{
    if(isset($_SESSION['messagem de erro']))
        return $_SESSION['mensagem de erro']; 

    return null;
}

function removerMessagemSucesso() : void 
{
    if(isset($_SESSION['messagem de sucesso']))
        unset($_SESSION['mensagem de sucesso']); 

    return null;
}

function removerMenssagemErro() : void
{
    if(isset($_SESSION['messagem de erro']))
        unset($_SESSION['mensagem de erro']); 

    return null;
} 