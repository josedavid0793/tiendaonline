<?php
$server   ="localhost";
$username = "root";
$password = "";
$db       = "tiendaonline";

/*$mysqli = new mysqli($server,$username,$password) or die ("No se a podido establecer la conexión");
$sdb  =mysql_select_db($db,$mysqli) or die ("La base de datos no existe");*/
$con =  mysqli_connect($server,$username,$password,$db);
    if(!$con)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
       /* echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";*/

        return true;
    }

?>