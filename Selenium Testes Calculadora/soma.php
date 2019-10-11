<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Calculadora</title>
</head>
<body>
 <form action="#" method="POST">
 <label>Primeiro Número:</label>
 <input type="text" required="required" name="v1"/>
 <br>
 <label>Segundo Número:</label>
 <input type="text" required="required" name="v2"/>
 <br>
 <input type="submit" name="operacao" value="+"/>
 <input type="submit" name="operacao" value="-"/>
 <input type="submit" name="operacao" value="*"/>
 <input type="submit" name="operacao" value="/"/>

 </form>
</body>
</html>
<?php
$valor1 = $_POST['v1'];
$valor2 = $_POST['v2'];
$op = $_POST['operacao'];
if( !empty($op)) {
   if($op == '+') {
   $resultado = $valor1 + $valor2;
   } else if($op == '-') {
   $resultado = $valor1 - $valor2;
   } else if($op == '*') {
   $resultado = $valor1 * $valor2;
   } else {
   $resultado = $valor1 / $valor2;
   }
} 
   echo  "<span id=\"resultado\">$resultado</span>"
?>
