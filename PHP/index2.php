<?php
    session_start();
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Fomulario de incrição </title>
    <meta nome = "author" content=""= >
    <meta nome = "description" content="">
    <meta nome = "viewport" content="width = device - width, inicial-scale=1">
</head>

<body>

<p> FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</P>

<form action="script.php" method="post">
    <?php
        $MensagemDeSucesso = isset($_SESSION['Mensagem de sucesso']) ? $_SESSION['Mensagem de sucesso'] : '';
        if(!empty($MensagemDeSucesso))
        {
            echo $MensagemDeSucesso;
        }
        
        
        
        
        $MensagemDeErro = isset($_SESSION['Mensagem de erro']) ? $_SESSION['Mensagem de erro'] : '';
        if(!empty($MensagemDeErro))
        {
            echo $MensagemDeErro;
        } 
    ?>
    <p>seu nome:<input type="text" name="nome"/><p>
    <p>sua idade:<input type="text" neme="idade"/><p>
    <p> <input type="submit" value= "Enviar dados do competidor"/></p>

</form>

</body>

</html>
