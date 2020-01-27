<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<body>
		<?php
    session_start();
  
	  $usuario = 'root';
    $contrasena = "";
    $host = "localhost";
    $db = "funenglish"; 
try{
      $conexion = new PDO("mysql:host=$host;dbname=$db;",$usuario,$contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql="SELECT * FROM usuarios WHERE Nombre=:us AND Contrasena=:pass";
      $resultado=$conexion->prepare($sql);
     //$result = $conexion->query($sql);
      $usF=htmlentities(addslashes($_POST["usuario"]));
      $password=htmlentities(addslashes($_POST["Contraseña"]));
      $resultado->bindValue(":us",$usF);
      $resultado->bindValue(":pass",$password);
      $resultado->execute();
      //$result    = $mysqli->query($resultado);
      $numero_registro= $resultado->rowCount();
      if ($numero_registro!=0){
       $_SESSION["usuario"]=$_POST["usuario"];
       $_SESSION["Contraseña"]=$_POST["Contraseña"];
       while ($result3 = $resultado->fetch(PDO::FETCH_OBJ)){
         $_SESSION['id']=$result3->ID;
         $_SESSION['Nombre']=$result3->Nombre;
         $_SESSION['correo']=$result3->Correo_Electronico;
         $_SESSION['edad']=$result3->Edad;
         $_SESSION['puntuacion']=$result3->Puntuacion;
                                                           }
      echo $_SESSION['id'];
      header("location:usuarios_registrados.php");
                              }
      else{
          echo'<script type="text/javascript">
          alert("Usuario no encontrado");
          </script>';
          header("location:login.html");
          }
 }catch(exception $e){
    die('error: ' . $e->GetMessage() );
   }
	?>
	</body>
</head>
</html>
 