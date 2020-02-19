<?php
/*class registro {

   public $objCon;
  function __construct(){
      
      //nos conectamos a la base de datos...
        require 'conexiondb.php';
        $this->objCon = new DataBase();
      
  }
  
  public function register (){*/

$server   ="localhost";
$username = "root";
$password = "";
$db       = "tiendaonline";

$con =  mysqli_connect($server,$username,$password,$db);
if (!$con){
  die("Connection failed:". mysqli_connect_error());
}
echo "<br>";
      
      $email = $_POST['email'];
      $contrasena = $_POST['contrasena'];
      $confir_contrasena = $_POST['contrasenaconfir'];
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];
      $documento = $_POST['documento'];
      $tipo_documento = $_POST['tipodocumento'];
      $fecha_nacimiento = $_POST['fecha_nacimiento'];

      
      
      $query ="INSERT INTO registro_usuario VALUES ('$email','$contrasena','$confir_contrasena','$nombres,$apellidos','$documento','$tipo_documento','$fecha_nacimiento')";
      

          
          $resultado = $con->query($query);
          
          if(!$resultado){
              echo("Error al guardar datos comuniquese a soporte para ser atendido");
          }else {
               echo("Gracias por registrarte en tiendaonline");
          }
      
 /* }
    
}*/

?>