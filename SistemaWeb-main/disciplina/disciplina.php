<?php
include_once("../header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Cadastro disciplina</title>
</head>
<body>
<div class="content">
    <div class="form">
<form method="POST" action="cruddisciplina.php">
    <div>
    <label for="">nome disciplina</label>
     <input type="text" name="nome" placeholder="Digite o nome da disciplina "  required>
     <label for="">Carga Horária</label>
     <input type="number" name="carga_horaria">
     </div><br>
     <div>
     <label for=""> Coloque o ID do professor responsável</label>
     <input type="text" name="idprofessor" required>
     <label for="">curso</label>
     <input type="text" name="curso" placeholder="Digite o curso"  required>
</div>
     <br><br>

     <input type="submit" name="cadastrar" value="cadastrar">
     </form>
</div>
     </div>
    
</body>
</html>

<?php
include_once("../footer.php");
?>