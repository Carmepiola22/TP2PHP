
<?php
$nombre="d";
$contraseña="a";

if (isset($_POST['ingresar']) || isset($_POST['registrar'])) {  
    if (($_POST['nombre']== $nombre) && ($_POST['password2']== $contraseña)){
    header('Location: listo.html');
    echo"bien capo";
    }
else
echo "mal ahi";
}

?>