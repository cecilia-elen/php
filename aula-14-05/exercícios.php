<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1> Funções PHP para manipulação de arrays</h1>


    <pre>   
<?php

echo "<h2> Array que usaremos:</h2>";

$bolo = array(
    "preco" => 45,
    "sabor" => array("red velvet","morango","uva"),
    "tamanho" => 60,
    "fatias" => "muitas"
);

print_r($bolo);




echo "<h2> Função array_keys - obter chaves</h2>";

$chaves = array_keys($bolo);
print_r($chaves);




echo "<h2> array_values - valores do array</h2>";
$valores = array_values($bolo);
print_r($valores);




echo "<h2> array_search - busca valores no array e retornam a chave</h2>";
$buscachave = array_search("muitas",$bolo);
print_r($buscachave);




echo "<h2> array_key_existis - determina a existência de uma certa chave em um array</h2>";

if (array_key_exists("paraguaio",$bolo)) {
    echo "paraguaio é coisa de bolo. <br>";
} 
else {
    echo "paraguaio não tem NADA a ver com bolo.<br>";
}





echo "<h2> in_array - determina se um valor existe em certa chave</h2>";
if (in_array(45,$bolo)) {
    echo "na chave 'preco' encontrou-se 45 reais. <br>";
} 
else {
    echo "tá doido????.<br>";
}




echo "<h2> isset - determina se uma variável foi inicializada</h2>";
if (isset($cuscuz)) {
    echo "Essa variável existe. <br>";
} 
else {
    echo "foi não.<br>";
}





echo "<h2> unset - remove variáveis</h2>";

echo "<h3> antes </h3>";
print_r($bolo);

unset($bolo["fatias"]);

echo "<h3> depois </h3>";
print_r($bolo);





echo "<h2> empty - determina se uma variável está vazia</h2>";
if (isset($bolo)) {
    echo "Essa variável tá preenchida. <br>";
} 
else {
    echo "Essa variável não tem nada.<br>";
}





echo "<h2> array_push - adiciona elementos no fim do array</h2>";

echo "<h3> antes </h3>";
print_r($bolo);

array_push($bolo["sabor"], 'coca');

echo "<h3> depois </h3>";
print_r($bolo);




echo "<h2> Função array_pop - obter elementos do final da array</h2>";

$elemento = array_pop($bolo);
print_r($elemento);


echo "<h2> array_shift - remove o primeiro elemento da array</h2>";

echo "<h3> antes </h3>";
print_r($bolo);

array_shift($bolo["sabor"]);

echo "<h3> depois </h3>";
print_r($bolo);



echo "<h2> array_unshift - adiciona elementos no início do array</h2>";

echo "<h3> antes </h3>";
print_r($bolo);

array_unshift($bolo["sabor"], 'goiabada', 'maracujá');

echo "<h3> depois </h3>";
print_r($bolo);



echo "<h2> Função count - contar números de elementos de bolo</h2>";

$quantidade = count($bolo);
print_r($quantidade);
?>

<?php

echo "<h2> explode - divide uma string em um array</h2>";

echo "<h3> string antes</h3>";

$string = "azul,vermelho,amarelo,laranja,roxo,cinza,preto";
print_r($string);

echo "<h3> string depois</h3>";

$cores = explode(",", $string);
print_r($cores);


echo "<h2> implode - divide um array em uma string</h2>";

$string = implode(',', $cores);
print_r($string);
?>

<?php

echo "<h2> array_combine - combina informações criando arrays</h2>";

$chaves = array('horário', 'ativdade', 'estado');
$elementos = array('madrugada', 'psw', 'cansada');

$fusao = array_combine($chaves, $elementos);
print_r($fusao);
?>

<?php

echo "<h2> array_diff - aponta diferenças entre arrays</h2>";

echo "<h3> os arrays</h3>";

$pessoas1 = array('carlos', 'andressa', 'julia', 'nilton', 'ivanilson');
$pessoas2 = array('nilton', 'ivanilson', 'fábio', 'georgia');
print_r($pessoas1);
print_r($pessoas2);


echo "<h3> diferenças</h3>";

$discrepancia = array_diff($pessoas1, $pessoas2);

print_r($discrepancia);


echo "<h2> array_intersect - aponta semelhanças entre arrays</h2>";

$semelhanca = array_intersect($pessoas1, $pessoas2);

print_r($semelhanca);
?>
</pre>
?>





</body>
</html>