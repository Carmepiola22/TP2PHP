
<?php
$nombre="";
$contraseña="";
if (isset($_POST['name']) && isset($_POST['password'])) {  
$nombre=$_POST['nombre'];
$contraseña=$_POST['password'];
header('Location: index.html');
}

$Name=$nombre;
$Password=$contraseña;

if (isset($_POST['ingresar'])) {  
    if (($_POST['nombre']== $nombre)&& ($_POST['pass']== $contraseña))
    echo"bien capo";
else
echo "mal ahi";
}

?>