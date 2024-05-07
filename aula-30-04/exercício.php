<?php

echo "<br>Aluno 1: <br>";
$aluno1["nome"] = "Cecília";
$aluno1["idade"] = 18;
$aluno1["endereço"] = "Minha casa";
$aluno1["cidade"] = "Guanambi";
$aluno1["estado"] = "Bahia";
$aluno1["cpf"] = "40028922";

echo "Nome:" . $aluno1["nome"]; 
echo "<br>Idade:" . $aluno1["idade"];
echo "<br>Endereço:" . $aluno1["endereço"]; 
echo "<br>Cidade:" . $aluno1["cidade"];
echo "<br>Estado:" . $aluno1["estado"];
echo "<br>CPF:" . $aluno1["cpf"];         


    
$aluno2["nome"] = "Raifran";
$aluno2["idade"] = 18;
$aluno2["endereço"] = "";
$aluno2["cidade"] = "Pesqueiro";
$aluno2["estado"] = "Bahia";
$aluno2["cpf"] = "777";

echo "<br>Aluno 2: <br>";
echo "<br>Nome:" . $aluno2["nome"]; 
echo "<br>Idade:" . $aluno2["idade"];
echo "<br>Endereço:" . $aluno2["endereço"]; 
echo "<br>Cidade:" . $aluno2["cidade"];
echo "<br>Estado:" . $aluno2["estado"];
echo "<br>CPF:" . $aluno2["cpf"];  
    
$professor["nome"] = "Fábio";
$professor["idade"] = 30;
$professor["endereço"] = "Um Lugar";
$professor["cidade"] = "Guanambi";
$professor["estado"] = "Bahia";
$professor["cpf"] = "000000000";

echo "<br>Professor: <br>";
echo "<br>Nome:" . $professor["nome"]; 
echo "<br>Idade:" . $professor["idade"];
echo "<br>Endereço:" . $professor["endereço"]; 
echo "<br>Cidade:" . $professor["cidade"];
echo "<br>Estado:" . $professor["estado"];
echo "<br>CPF:" . $professor["cpf"];  

?>
