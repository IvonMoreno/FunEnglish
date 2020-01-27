<!DOCTYPE html >
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Sarabun" rel="stylesheet">

</head>
<header>
          <div id="titulo">
             FunEnglish Kids
            <br>
            <br>
      <li>
  <lu><a href="usuarios_registrados.php">Home</a></lu>
  <lu><a href="perfil.php">Profile</a></lu>
  <lu><a href="Nosotros.php">About</a></lu>
    </li>
            </div>
              <div id="clientes">
              <center>
                <img id="yo" src="Imagenes/lobito bandera.png" width="70px"><br>
             <span>Un ingl&eacute;s divertido solo lo encuentras aqu&iacute; </span> 
              </center>
             </div>
        </header>
<body>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <center>
    <div id="div" >
     <p>
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
try{

      $conexion = new PDO("mysql:host=$host;dbname=$db;",$usuario,$contrasena);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
     $sql=$conexion->prepare("SELECT * FROM usuarios WHERE ID='$v1'"); 
     $sql->execute();
      ?>
      <br>
      <br>
      <span>Nombre:</span>
       <?php
        echo $_SESSION['Nombre'];
        ?>
        <br>
      <span>correo:</span>
        <?php
        echo $_SESSION['correo'];
         ?>
         <br>
        <span>Edad:</span>
           <?php
        echo $_SESSION['edad'];
        ?>
         <br>
               <span>Puntuaci&oacute;n:</span>
           <?php
        echo $_SESSION['puntuacion'];
    

      }catch(exception $e){
    die('error: ' . $e->GetMessage() );
   }
  ?>
     </p>
     <p>
       
     </p>
     <p>
      
    
    </div>
    </center>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <footer style="background-color:#4335F0; width: 100% ">
        &copy; 2019 Derechos reservados | FunEnglisk Kids Corporation
      </footer>
</html>