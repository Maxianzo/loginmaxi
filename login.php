<?php
//$_POST
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser = "admin";
$ckpass = "1234";

//&& eso es Y   

if ($usuario == $ckuser && $contrasenia == $ckpass) {
// print "entrasete pero ";
header("location:https://www.php.net/manual/es/language.operators.php");
}

else {
  //  print "error de contraseña";
  header("location:erro.html");
}

?>
