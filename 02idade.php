<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = 2018 - $ano;
        echo "$nome é $sexo e tem $idade anos";
    ?>
</div>
</body>
</html>
 