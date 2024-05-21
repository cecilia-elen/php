<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ATIVIDADE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <pre>
        <?php

echo "<h2> o array:</h2>";

$alunos = array(
    'Juliana' => 4,
    'Ivan' => 2,
    'Yasmim' => 7,
    'Maria' => 1,
    'Tatiane'  => 9,
    'Fabrício' => 6
)


?>

<?php
print_r($alunos);
?>

<?php
echo "<h2> alunos aprovados </h2>";


for($a=0; $a<=count($array['alunos'])-1; $a++){?>

<?php print_r($array['alunos'][$a]['id']);
?>
</pre>
</body>
</html>