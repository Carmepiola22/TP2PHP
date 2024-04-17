<?php
$Name="Choco";
$Password="1234";
if (isset($_POST['ingresar'])) {  
    if (($_POST['nombre']== $Name)&& ($_POST['pass']== $Password))
    echo"bien capo";
else
echo "mal ahi";
}

?>