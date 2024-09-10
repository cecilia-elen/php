<?php
include_once("../header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>
<!-- FORMULÁRIO PARA ENVIAR DADOS PARA FORMULARIO CRUDPROF USANDO METODO POST  -->
  <form method="POST" action="crudprof.php">
    <label for="">nome professor</label>
     <input type="text" name="nomeprof" placeholder="Digite o nome do professor"  required>
     <label for="">idade</label>
     <input type="number" name="idade"> 
     <br><br>

     <input type="submit" name="cadastrar" value="cadastrar">
     </form>

     
     <button class="button"><a href="../index.php">Voltar</a></button>

   
</body>
</html>

<?php
include_once("../footer.php");
?>