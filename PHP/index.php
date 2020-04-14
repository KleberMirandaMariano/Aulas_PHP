<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adoslecente';
$categorias[] = 'adulto';
$categorias[] = 'idosos';
//print_r($categorias);

$nome = 'Kleber';
$idade = 33;

//var_dump($nome);
//var_dump($idade);

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