<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Israel Bonfim-PHP</title>
</head>
<body>
<div>
    <?php
       $ano = $_GET["an"];
       $idade = 2018 - $ano;
       echo "Quem nasceu em $ano tem idade de $idade anos.";
       $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
       echo " E dessa forma seu voto e $tipo";
    ?>
</div>
</body>
</html>
 