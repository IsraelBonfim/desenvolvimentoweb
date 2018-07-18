<!DOCTYPE HTML>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="_css/estilo.css"/>
   <title>Operadores Aritimeticos</title>
</head>
<body>
<div>
   <?php
   $n1 = $_GET["a"];
   $n2 = $_GET["b"];
   echo "<h2>Valores Recebidos: $n1 e $n2</h2>";
   $m = ($n1+$n2)/2;
   echo "A soma vale ". ($n1+$n2);
   echo "<br/>A sub vale ". ($n1-$n2);
   echo "<br/>A mult. vale ". ($n1*$n2);
   echo "<br/>A div. vale ". ($n1/$n2);
   echo "<br/>O mod. vale ". ($n1%$n2);
   echo "<br/>A média é: ". ($m);
   /* $n1 = 3;
    $n2 = 2;
    $s = $n1 + $n2;
    echo "A soma entre $n1 e $n2 é igual a $s";*/
   ?>
</div>
</body>
</html>