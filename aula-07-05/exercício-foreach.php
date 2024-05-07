<?php

echo "<br>Aluno 1: <br>";
$aluno1["nome"] = "Cecília";
$aluno1["idade"] = 18;
$aluno1["endereço"] = "Minha casa";
$aluno1["cidade"] = "Guanambi";
$aluno1["estado"] = "Bahia";
$aluno1["cpf"] = "40028922";

foreach ($aluno1 as $chave => $dados) {
    echo "$chave = $dados<br>";
}

    
$aluno2["nome"] = "Raifran";
$aluno2["idade"] = 18;
$aluno2["endereço"] = "";
$aluno2["cidade"] = "Pesqueiro";
$aluno2["estado"] = "Bahia";
$aluno2["cpf"] = "777";

echo "<br>Aluno 2: <br>";
foreach ($aluno2 as $chave => $dados) {
    echo "$chave = $dados<br>";
}

    
$professor["nome"] = "Fábio";
$professor["idade"] = 30;
$professor["endereço"] = "Um Lugar";
$professor["cidade"] = "Guanambi";
$professor["estado"] = "Bahia";
$professor["cpf"] = "000000000";

echo "<br>Professor: <br>";
foreach ($professor as $chave => $dados) {
    echo "$chave = $dados<br>";
}


?>
