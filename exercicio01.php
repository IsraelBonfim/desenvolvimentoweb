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
       $a = isset($_GET["ano"])?$_GET["ano"]:1900;
       $i = date("Y") - $a;
       echo "voçe nasceu em $a e terá $i anos. <br/>";
       if($i>=18) {
           $v = "ja pode votar";
           $d = "ja pode dirigir";
       }
       else {
           $v = "nao pode votar";
           $d = "nao pode dirigir";
       }
       echo "com essa idade vc $v e tambem $d";

    ?>
</div>
</body>
</html>
 