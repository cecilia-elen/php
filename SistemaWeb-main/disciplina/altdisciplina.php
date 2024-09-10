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

  <?php
  //incluir arquivo de conexao com o BD
  require_once('../conexao.php');

  //armazena id 
  $iddisciplina = $_POST['iddisciplina'];

  ##sql para selecionar apens um aluno
  $sql = "SELECT * FROM disciplina where iddisciplina= :iddisciplina";

  # junta o sql a conexao do banco
  $retorno = $conexao->prepare($sql);

  ##diz o paramentro e o tipo  do paramentros
  $retorno->bindParam(':iddisciplina', $iddisciplina, PDO::PARAM_INT);

  #executa a estrutura no banco
  $retorno->execute();

  #transforma o retorno em array
  $array_retorno = $retorno->fetch();

  ##armazena retorno em variaveis
  $nome = $array_retorno['nomedisciplina'];
  $iddisciplina = $array_retorno['iddisciplina'];
  $idprofessor = $array_retorno['idprofessor'];
  $carga_horaria = $array_retorno['carga_horaria'];
  $curso = $array_retorno['curso'];




  ?>
  <!-- formulario para cadastrar aluno metodo post, enviar dados para form crudaluno.php -->
  <div class="content">
    <div class="form">
    <form method="POST" action="cruddisciplina.php">
      <div>
    <label for="">nome disciplina</label>
      <input type="text" name="nome" id="" value="<?php echo $nome ?>">
      <label for="">nome curso</label>
      <input type="text" name="curso" id="" value="<?php echo $curso ?>">
    </div>
      <label for="">Carga horária</label>
      <input type="number" name="carga_horaria" id="" value="<?php echo $carga_horaria ?>">
      <label for="">Professor</label>
      <input type="number" name="idprofessor" id="" value="<?php echo $idprofessor ?>">

      <input type="hidden" name="iddisciplina" id="" value="<?php echo $iddisciplina ?>">

    </form>
  </div></div>
</body>

</html>

<?php
include_once("../footer.php");
?>