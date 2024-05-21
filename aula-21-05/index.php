<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<pre>
    <?php

    $array = array(
        'alunos' =>[
            [
                'id' => 1,
                'nome' => 'fabio',
                'idade' => 25
            ],
            [   'id' => 2,
                'nome' => 'Jão',
                'idade' => '32'],
            [
                'id' => 3,
                'nome' => 'mareia',
                'idade' => 42
            
        ]
    
     ]
)
   


    ?>
</pre>
<pre>
    <?php
print_r($array['alunos'][0]['nome']);


?>




</pre>


<pre>
<table>
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>IDADE</th>
  </tr>
  <tr>
    <td> <?php print_r($array['alunos'][0]['id']);?> </td>
    <td><?php print_r($array['alunos'][0]['nome']);?></td>
    <td><?php print_r($array['alunos'][0]['idade']);?></td>
  </tr>
  <tr>
    <td><?php print_r($array['alunos'][1]['id']);?></td>
    <td><?php print_r($array['alunos'][1]['nome']);?></td>
    <td><?php print_r($array['alunos'][1]['idade']);?></td>
  </tr>

  <tr>
    <td><?php print_r($array['alunos'][2]['id']);?></td>
    <td><?php print_r($array['alunos'][2]['nome']);?></td>
    <td><?php print_r($array['alunos'][2]['idade']);?></td>
  </tr>
</table>

</pre>


<pre>

<table>
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>IDADE</th>
  </tr>
  <?php
    
    for($a=0; $a<=count($array['alunos'])-1; $a++){?>

  <tr>
    <td><?php print_r($array['alunos'][$a]['id']);?></td>
    <td><?php print_r($array['alunos'][$a]['nome']);?></td>
    <td><?php print_r($array['alunos'][$a]['idade']);?></td>
  </tr>
    <?php } ?>
 
</table>

</pre>

</body>
</html>

