<?php



function defineCatCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

//print_r($categorias);
    removeMensErro();

if(validaNome($nome) && validaIdade($idade)) {
    if ($idade >= 6 && $idade <= 12) {
        for ($i = 0; $i <= count($categorias); $i++) {
            if ($categorias[$i] == 'infantil') {
                setarMensDeSucesso('O nadador ' . $nome . ' tem: ' . $idade . ' anos,  e compete na categoria ' . $categorias[$i]);
                return null;
            }
        }
    } else if ($idade < 18) {
        for ($i = 0; $i <= count($categorias); $i++) {
            if ($categorias[$i] == 'adolescente') {
                setarMensDeSucesso('O nadador ' . $nome . ' tem: ' . $idade . ' anos,  e compete na categoria ' . $categorias[$i]);
                return null;
            }
        }
    } else {
        for ($i = 0; $i <= count($categorias); $i++) {
            if ($categorias[$i] == 'adulto') {
            }
            setarMensDeSucesso('O nadador ' . $nome . ' tem: ' . $idade . ' anos,  e compete na categoria ' . $categorias[$i]);
            return null;
        }
    }

}
else{
        removeMensSucesso();
        return
            obterMensDeErro();
    }
}




