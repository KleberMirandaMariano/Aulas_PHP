<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adoslecente';
$categorias[] = 'adulto';
$categorias[] = 'idosos';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}
if(strlen($nome)<3)
{
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}
if(strlen($nomr)>40)
{
    echo 'O nome é muito extenso';
}
if(!is_numeric($idade))
{
    echo 'Informe um número para a idade';
}

if ($idade >= 6 && $idade <=12)
{
    for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
            echo " O nadador " . $nome . " Compete na categoria infantil ";
    }
}
else if($idade >= 13 && $idade <=18)
{
    for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
            echo " O nadador " . $nome . "Compete na categoria adolesncete ";
    } 
}
else
{
    for($i=0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
        echo " O nadador " . $nome . " Compete na categoria adulto ";  
    }  
}