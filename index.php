<?php
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
</head>
<body>
<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php
    $mensagemDeErro = obterMensSucesso();
    if(!empty($mensagemDeErro)){
        echo $mensagemDeErro;
    }
    $mensagemDeSucesso = obterMensDeErro();
    if(!empty($mensagemDeSucesso)) {
        echo $mensagemDeSucesso;
    }


    ?>
    <p>Seu nome: <input type="text" name="nome"  maxlength="45" /></p>
    <p>Sua idade: <input type="text" name="idade" maxlength="3" /></p>
    <!--<p>digite seu CPF: <input type="text" name="cpf" size="11" /></p>-->

    <p><input type="submit" /></p>
</form>

</body>
</html>