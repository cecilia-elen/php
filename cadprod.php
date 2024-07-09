<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 include_once ("listaprod.php");
 if( !empty($_POST['form_submit']) ) {
 obterDados($_POST);
 }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    
<form action="cadprod.php" method="get">
    <p> Produto: <input type="text" name="Produto" id="Produto"> </p>
    <p>Marca:
    <select id="Marca" name="Marca">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option> </select>
</p>
    <p>Tamanho:
    <select id="Tamanho" name="Tamanho">
  <option value="Pequeno">Carroceria</option>
  <option value="Normal">Padrão</option>
  <option value="Plus">Mais bancos</option>  </select>
 </p>

    <p>Preço Valor:
    <input type="text" name="Preço Valor" id="PV">
    </p>
    <p>Cor: <input type="color" name="Cor" id="Cor"></p>
    <p>Gênero: <br>
    <input type="radio" id="masculino" name="fav_language" value="masculino">
    <label for="masculino">Masculino</label><br>
  <input type="radio" id="feminino" name="Preço Valor" value="feminino">
  <label for="feminino">Feminino</label><br>
  <input type="radio" id="prefiron" name="Preço Valor" value="prefiron">
  <label for="prefiron">Prefiro não dizer</label>


</p>
    <p>Modelo:</p>
    <select id="Modelo" name="Modelo">
    <option value="1">Um legal</option>
  <option value="2">Um padrãozinho</option>
  <option value="3">Um exótico</option>
  <option value="4">Um q geral acha feio</option> </select>
</p>
    <p>Preço Compra: <input type="text" name="Preço Compra" id="PC"></p>
    
    <p>Data da Compra: <input type="date" name="datacompra" id="datacompra"></p> 
     <p>Enviar</p>
<button>
   
    <input type="submit" value="enviar">
   
    </button>
</body>
</html>