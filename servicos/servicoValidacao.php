<?php

function validaNome(string $nome) :bool
{
//Informou que o nome não pode ser vazio (segurança)
    if(empty($nome)){
//    echo '!ERRO O nome e cpf não podem ser vazios';
        setarMensDeErro(" <br> O nome não pode ser vazio, favor preecher o campo.");
        return false;
    }
//quantidade de caracter
    else if(strlen($nome) < 3) {
        setarMensDeErro(' <br> O nome deve conter mais que três caracteres');
        return false;
    }
//nome muito grande
    else if(strlen($nome)>45){
        setarMensDeErro(' <br>O nome não deve ter mais que quarenta e cinco caracteres');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{
    //varificar se ele é de qual tipo
    if(!is_numeric($idade)){
        setarMensDeErro('<br> Informe a sua idade');
       return false;
    }
    return true;
}


