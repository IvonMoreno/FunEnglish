<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="../js/cart_2.js"></script>
    <meta charset="utf-8">
    <body>
<?php
 $usuario = 'root';
 $contrasena = "";
 $host = "localhost";
 $db = "funenglish"; 
 $usuarioB = $_POST["nombre"];
 $contrasenaB = $_POST["passw"];
 $edad= $_POST["edad"];
 $C_E= $_POST["mail"];
 $genero= $_POST["genero"];
 $Puntuacion=0;
 $intentos=0;
   try {
     $conexion = new PDO("mysql:host=$host;dbname=$db;",$usuario,$contrasena);
     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * from usuarios where Nombre = '".$usuarioB."' or Correo_Electronico='".$C_E."'";
     $resultado=$conexion->prepare($sql);
     $resultado->execute();
     $numero_registro= $resultado->rowCount();
       if ($numero_registro!=0){
          echo'<script type="text/javascript">
          window.location.href="Registro.html";
          alert(" El usuario ya existe");
          </script>';
           }
       else{
          $sql= "INSERT INTO usuarios (Nombre,Contrasena,Correo_Electronico,Edad,Genero,Puntuacion,Intentos)
          VALUES (:usuarioB, :contrasenaB, :C_E, :edad, :genero, :Puntuacion, :Intentos)";
          $resultado=$conexion->prepare($sql);
          $resultado->execute(array(":usuarioB"=>$usuarioB,":contrasenaB"=>$contrasenaB,":C_E"=>$C_E,":edad"=>$edad,":genero"=>$genero,":Puntuacion"=>$Puntuacion,":Intentos"=>$intentos));
          $numero_registro= $resultado->rowCount();
              
      }
      if ($numero_registro!=0){
         echo'<script type="text/javascript">
         window.location.href="Registro.html";
         alert("Usuario registrado correctamente");
         </script>';
                              }
    }catch(PDOException $e)
    {echo $sql . "<br>" . $e->getMessage();}
?>
    </body>
</head>
</html>
