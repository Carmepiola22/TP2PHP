<?php
$nombre="";
$contraseña="";
if (isset($_POST['registrar'])&&($_POST['pass'])) {  
$nombre=$_POST['registrar'];
$contraseña=$_POST['pass'];
header('Location: index.html');
else
echo "error"
}

?>