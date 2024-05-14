<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Array-laços</h1>

    <h2>Exemplo 01</h2>

    <pre>

        <?php

        $A1 = array("Antonio","Luis","Jose","João");
        foreach($A1 as $dados);

         echo "$dados:";

        ?>

    </pre>

    <h2>Array com for</h2>

     <pre>

        <?php

        $A2= array(10,9,8,7);

       echo$A2[0];

       ?>

       </pre>


<h2> Array: Definição Explícita (com chave) <br></h2>
<pre>
    <?php
$var2 = array(
    20 => "Maria",
    25 => "José",
    35 => "Luis",
    40 => "João"
);
foreach($var2 as $dados){

echo "$dados: <br>";}
?>
</pre>

<h2>foreach com chave valor</h2>
<pre>
    <?php
$var = array(
    "Maria" => 25,
    "João" => 44,
    "José" => 12,
    "Neusa" => 73
);
foreach ($var as $chave => $valor){
    echo "$chave: tem $valor anos <br>";
}
?>

<h2> Exemplo print</h2>
<pre>
<?php
    print_r($var);
?>
</pre>

<?php
echo "<h2>Array multidimencional: definição explícita <br> </h2>";
$alunos= array("Maria" =>

array("endereço" => "Rua Chile 1046",
"bairro" => "Rebouças"),
"João" =>
 array("endereco" => "Rua Iapó 234",
 "bairro" => "Prado Velho"),

 "Zeca" =>
 array("endereco" => "Rua Iapó 234",
 "bairro" => "Prado Velho")
);

print_r($alunos["Maria"]["endereço"]);
print_r($alunos["Maria"]["bairro"]);


echo "<h2> impressão com foreach - array dentro do array <br></h2> ";

foreach($alunos as $chave => $aux)
echo $chave. ": <br>";
foreach($aux as $chave => $valor){
    echo " - $valor <br>";
}


?>



</body>
</html>
