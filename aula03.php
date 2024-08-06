<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style>
         table{
            border-collapse: collapse;
         }
         td{
            border: 1px solid black;
         }
         </style>
</head>
<body>
    <?php
    echo "<h1> Contando de 1 até 10</h1>";
    for($x=1; $x<=10; $x++){
        echo "$x <br>";
    };
    echo "<h1> Tabela de 1 a 10 em PHP </h1>";
    echo "<table><tr>";
    for ($i=1; $i<=10; $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr></table>";

    ?>
</body>
</html>
