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
     <!-- FORMULÁRIO PARA ENVIAR DADOS PARA FORMULARIO CRUDALUNO.PHP USANDO METODO POST  -->
  <form method="POST" action="crudaluno.php">
    <label for="">nome aluno</label>
     <input type="text" name="nomealuno">
     <label for="">idade</label>
     <input type="number" name="idade"> 
     <input type="submit" name="cadastrar" value="cadastrar">
     </form>
</body>
</html>
<?php
include_once("../footer.php");
?>