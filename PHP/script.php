<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adoslecente';
$categorias[] = 'adulto';
$categorias[] = 'idosos';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio por favor preencha novamente';
    header( $string. 'location: index2.php'); 
    return;
}
else if(strlen($nome)<3)
{
    $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 caracteres';
    header( $string. 'location: index2.php'); 
    return;
}
else if(strlen($nomr)>40)
{
    $_SESSION['mensagem de erro'] = 'O nome não pode conter mais de 40 caracteres';
    header( $string. 'location: index2.php'); 
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION['mensagem de erro'] = 'Informe um número para idade';
    header( $string. 'location: index2.php');
    return;  
}

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