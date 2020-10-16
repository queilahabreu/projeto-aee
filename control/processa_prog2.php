<?php 

/*
    Programa que mostra arquivo sem números/palavras repetidas (e remove o NULL)
    ShowNotRepeat

*/


//Receber os dados do formulário
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array, ignorando a quebra de linha
$dados = file($arquivo_tmp, FILE_IGNORE_NEW_LINES);

$SemDuplicadas = array_unique($dados);

#removendo o NULL
$key = array_search('NULL', $SemDuplicadas);
if($key!==false){
    unset($SemDuplicadas[$key]);
}

echo "<br> <br> <br>";

##Sem o NULL e sem duplicadas
foreach($SemDuplicadas as $item){
   echo $item .'<br>';
}


 

?>