<?php
/*
 * Melhor prática usando Prepared Statements
 * 
 */

 include_once("../header.php");
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');


// executa SQL no BD e seleciona todos os ALUNOS

$retorno = $conexao->prepare('SELECT d.nomedisciplina, d.iddisciplina, d.carga_horaria, d.curso, p.nomeprof
 FROM disciplina as d
 JOIN professor as p on d.idprofessor = p.idprofessor');

//armazena dados de todos os ALUNOS em um array
$retorno->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
<div class="content">
 

 

  <title>Document</title>
</head>

<body> 
  <div class="tabela">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CARGA HORÁRIA</th>
        <th>PROFESSOR</th>
        <th>CURSO</th>
        <th>AÇÕES</th>
      </tr>
    </thead>

    <tbody>
      <tr><!--pega linha por linha do array $retorno e coloca na variavel $value  -->
        <?php foreach ($retorno->fetchall() as $value) { ?>
        <tr>
          <td> <?php echo $value['iddisciplina'] ?> </td>
          <td> <?php echo $value['nomedisciplina'] ?> </td>
          <td> <?php echo $value['carga_horaria'] ?> </td>
          <td> <?php echo $value['nomeprof'] ?> </td>
          <td> <?php echo $value['curso'] ?> </td>

          <td><!-- codigo para alterar aluno escolhido, enviar via post para o form Altaluno.php -->
            <form method="POST" action="altdisciplina.php">
              <input name="iddisciplina" type="hidden" value="<?php echo $value['iddisciplina']; ?>" />
              <button name="alterar" type="submit" class="botao">Alterar</button>
            </form>

          </td>

          <td><!-- codigo para excluir aluno escolhido, enviar via get para excluir no crudaluno.php -->
            <form method="GET" action="cruddisciplina.php">
              <input name="iddisciplina" type="hidden" value="<?php echo $value['iddisciplina']; ?>" />
              <button name="excluir" type="submit" class="botao" onclick="<?php  echo "<script type='text/javascript'>
                                       alertconfirm(' {$nome} foi Cadastrado  com sucesso ');
                                      window.location='../index.php';
                                  </script>" ?>">Excluir</button>
            </form>

          </td>



        </tr>
      <?php } ?>
      </tr>
    </tbody>
  </table>
 </div></div>
</body>

</html>

<?php
include_once("../footer.php");
?>