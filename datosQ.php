<?php
    session_start();
	$usuario = 'root';
    $contrasena = "";
    $host = "localhost";
    $db = "funenglish"; 
    $a=1;
    $R=0;
    $cont=0;
    $tema="saludos";
    $v1 = $_SESSION['id']; 
    $v2 = $_GET['variable2'];
try{

      $conexion = new PDO("mysql:host=$host;dbname=$db;",$usuario,$contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
     $sql=$conexion->prepare("SELECT * FROM usuarios WHERE ID='$v1'"); 
     $sql->execute();
  
    if ($var=$sql->fetch(PDO::FETCH_OBJ)){
    $cont =$var->Puntuacion+1;
    $modo=$var->Intentos;
    }
    if($modo==1){
   $sqlEC=$conexion->prepare("Update usuarios Set Puntuacion='$cont' WHERE ID='$v1'");
   $sqlEC->execute();
   switch ($v2) {
     case '2':

        header('Location:Quiz2.php');
       break;
      case '3':
        header('Location:Quiz3.php');
       break;
       case '4':
        header('Location:Quiz4.php');
       break;
       case '5':
        header('Location:Quiz5.php');
       break;
         case '6':
         $modo=2;
         $cont+1;
         $sqlEC=$conexion->prepare("Update usuarios Set Puntuacion='$cont' WHERE ID='$v1'");
   $sqlEC->execute();
   $sqlEC=$conexion->prepare("Update usuarios Set Intentos='$modo' WHERE ID='$v1'");
   $sqlEC->execute();
   header('Location:usuarios_registrados.php');
       break;
    
     
   }
 }
 else
     {
     echo'<script type="text/javascript">
         alert("Recuerda ya solo es repaso, ya no se acomularan puntos");
         </script>';
       switch ($v2) {
     case '2':

        header('Location:Quiz2.php');
       break;
      case '3':
        header('Location:Quiz3.php');
       break;
       case '4':
        header('Location:Seleccion4.php');
       break;
       case '5':
         header('Location:Quiz5.php');
       break;
        case '6':
         header('Location:usuarios_registrados.php');
       break;
    
    
   }
     }

      }catch(exception $e){
    die('error: ' . $e->GetMessage() );
   }
  ?>