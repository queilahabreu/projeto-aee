<?php session_start();

/*
    mostrar quais foram os valores que estavam sendo repetidos e a quantidade desses valores 
        ShowMeRepeat

*/


//Receber os dados do formulário
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array, ignorando a quebra de linha
$dados = file($arquivo_tmp, FILE_IGNORE_NEW_LINES);


 #Função para pegar os arquivos que estão sendo duplicados
function getDuplicates( $array ) {
    return array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
}
 
$duplicados = getDuplicates($dados);

/*
echo "Foram ".count($duplicados)." valores duplicados.";
echo "<br> <br> <br>";
echo "Os valores foram: ";
echo "<br> <br> <br>";


foreach($duplicados as $item){
    echo $item .'<br>';
 }
*/
 

##ARMAZENANDO DUPLICADAS EM ARQUIVO DE TEXTO 

$valores = fopen('control/valores_duplicados.txt','w');
// escreve o conteúdo do array no arquivo .txt

foreach($duplicados as $value){
    fwrite($valores, $value);
    fwrite($valores, "\r\n");
}

fclose($valores);

$_SESSION['total'] = count($duplicados);
$_SESSION['rodando'] = 1;

header("location: ../index.php?p=prog3");