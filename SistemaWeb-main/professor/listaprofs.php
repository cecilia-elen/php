<?php
/*
 * Melhor prática usando Prepared Statements
 * 
 */

##permite acesso as variaves dentro do aquivo conexao
include_once("../header.php");
require_once('../conexao.php');

// executa SQL no BD e seleciona todos os professores
$retorno = $conexao->prepare('SELECT * FROM professor');
//armazena dados de todos os professores em um array
$retorno->execute();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Document</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>cpf</th>
        <th>siape</th>
        <th>idade</th>

      </tr>
    </thead>

    <tbody>
      <tr> <!--pega linha por linha do array $retorno e coloca na variavel $value  -->
        <?php foreach ($retorno->fetchall() as $value) { ?>
        <tr>
          <td> <?php echo $value['idprofessor'] ?> </td>
          <td> <?php echo $value['nomeprof'] ?> </td>
          <td> <?php echo $value['cpf'] ?> </td>
          <td> <?php echo $value['siape'] ?> </td>
          <td> <?php echo $value['idade'] ?> </td>


          <td><!-- codigo para alterar professor escolhido, enviar via post para o form Altprof.php -->
            <form method="POST" action="altprof.php">
              <input name="id" type="hidden" value="<?php echo $value['idprofessor']; ?>" />
              <button name="alterar" type="submit">Alterar</button>
            </form>

          </td>

          <td><!-- codigo para excluir professor escolhido, enviar via get para excluir no crudprof.php -->
            <form method="GET" action="crudprofessor.php">
              <input name="id" type="hidden" value="<?php echo $value['idprofessor']; ?>" />
              <button name="excluir" type="submit">Excluir</button>
            </form>

          </td>



        </tr>
      <?php } ?>
      </tr>
    </tbody>
  </table>
</body>

</html>

<?php
echo "<button class='button button3'><a href='../index.php'>voltar</a></button>";
include_once("../footer.php");
?>
