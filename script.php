<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

//buscando as informações de index action
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];

//Informou que o nome não pode ser vazio (segurança)
if(empty($nome && $cpf)){
//    echo '!ERRO O nome e cpf não podem ser vazios';
    $_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio, favor preecher o campo.";
    header( 'location: index.php');
    return;

}
//quantidade de caracter
else if(strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que tres caracteres';
    header('location: index.php');
    return;
}
//nome muito grande
else if(strlen($nome)>45){
    $_SESSION['mensagem-de-erro'] = 'O nome não deve ter mais que quarenta e cinco caracteres';
    header( 'location: index.php');
    return;
}
//varificar se ele é de qual tipo
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'informe a idade';
    header( 'location: index.php');
    return;
}

/*var_dump($nome, $idade);
return 0;*/

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++ ) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' CPF: ' . $cpf . ' tem: ' . $idade . ' compete na categoria ' . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}else if ($idade < 18) {
    for($i = 0; $i <= count($categorias); $i++ ) {
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' CPF: ' . $cpf . ' tem: ' . $idade . ' compete na categoria ' . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
        }
        $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' CPF: ' . $cpf . ' tem: ' . $idade . ' compete na categoria ' . $categorias[$i];
        header('location: index.php');
        return;
    }
}