<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adoslecente';
$categorias[] = 'adulto';
$categorias[] = 'idosos';

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if ($idade >= 6 && $idade <=12)
{
    for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')            
            {
                $_SESSION['mensagem-de-sucesso'] =  " O nadador " . $nome . " Compete na categoria " .$categorias[$i];
                header( $string. 'location: index2.ph');
                return;
            }
    }
}
else if($idade >= 13 && $idade <=18)
{
    for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
        {
            $_SESSION['mensagem-de-sucesso'] =  " O nadador " . $nome . " Compete na categoria " .$categorias[$i];
            header( $string. 'location: index2.ph');
            return;
        }
    } 
}
else
{
    for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] =  " O nadador " . $nome . " Compete na categoria " .$categorias[$i];
            header( $string. 'location: index2.ph');
            return;
        }  
    }  
}