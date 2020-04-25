<?php


function defineCategoriaDoCompetidor(string $nome, string $idade) = ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adoslecente';
    $categorias[] = 'adulto';
    $categorias[] = 'idosos';
    if (validaNome($nome)) && (validaIdade($idade))
    {
        if ($idade >= 6 && $idade <=12)
        {
            for($i=0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'infantil')            
                {
                    setarMensagemSucesso($mensagem: " O nadador " . $nome . " Compete na categoria " .$categorias[$i]);  
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <=18)
        {
            for($i=0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'adolescente')
                {
                    setarMensagemSucesso($mensagem: " O nadador " . $nome . " Compete na categoria " .$categorias[$i]);
                    return null;
                }
            } 
        }
        else
        {
            for($i=0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'adulto')
                {
                     setarMensagemSucesso($mensagem: " O nadador " . $nome . " Compete na categoria " .$categorias[$i]);
                    return null;
                }  
            }  
        }
    }
    else 
    {
        return obterMensagemErro();
    }
}
    