<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemDeErro($mensagem: 'O nome não pode ser vazio por favor preencha novamente');
        return false;
    }
    else if(strlen($nome)<3)
    {
        setarMensagemDeErro($mensagem: 'O nome não pode conter menos de 3 caracteres');
        return false;
    }    
    else if(strlen($nome)>40)
    {
        setarMensagemDeErro($mensagem: 'O nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{    
    if(!is_numeric($idade))
    {
        setarMensagemDeErro($mensagem: 'Informe um número para idade');
        return false;  
    }
    return true;   
}




