<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] ='idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];

//Informou que o nome não pode ser vazio (segurança)
if(empty($nome && $cpf)){
    echo '!ERRO O nome e cpf não podem ser vazios';
    return;
}
//quantidade de caracter
if(strlen($nome) < 3){
    echo 'O nome deve conter mais que tres caracteres';
    return;
}
//nome muito grande
if(strlen($nome)>45){
    echo 'O nome fora do padrão';
    return;
}
//varificar se ele é de qual tipo
if(!is_numeric($idade)){
    echo'Digite um número valido';
    return;
}


/*var_dump($nome, $idade);
return 0;*/

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++ ) {
        if ($categorias[$i] == 'infantil')
            echo 'O nadador ' .$nome. ' CPF: ' .$cpf. ' tem: ' .$idade . ' compete na categoria ' .$categorias[$i];
    }
}else if ($idade < 18) {
    for($i = 0; $i <= count($categorias); $i++ ){
        if( $categorias[$i] == 'adolescente')
            echo  'O nadador '.$nome. ' CPF: '.$cpf. ' tem: '.$idade. ' compete na categoria '.$categorias[$i];
    }
} else {
    for($i = 0; $i <= count($categorias); $i++ ){
        if( $categorias[$i] == 'adulto')
            echo  'O nadador '.$nome. ' CPF: '.$cpf. ' tem: '.$idade. ' compete na categoria '.$categorias[$i];
    }
}