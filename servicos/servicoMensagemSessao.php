<?php
session_start();

//mensagem de sucesso
function setarMensDeSucesso(string $mensagem) : void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensSucesso() : ?string
{
    if(isset($_SESSION['mensagem-de-sucesso']))
        return  $_SESSION['mensagem-de-sucesso'];
    return null;
}

//mensagem de erro
function setarMensDeErro(string $mensagem):void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensDeErro() : ?string
{
    if(isset($_SESSION['mensagem-de-erro']))
        return  $_SESSION['mensagem-de-erro'];
    return null;
}

function removeMensSucesso() : void
{
    if(isset($_SESSION['mensagem-de-sucesso']))
        unset ($_SESSION['mensagem-de-sucesso']);
}

function  removeMensErro() : void
{
    if(isset($_SESSION['mensagem-de-erro']))
        unset  ($_SESSION['mensagem-de-erro']);
}


