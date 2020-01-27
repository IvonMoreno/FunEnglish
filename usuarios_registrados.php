<!DOCTYPE html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="principal.css">
    <link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Sarabun" rel="stylesheet">
    <script src= "usuarios_registrados.js"></script>
    <title>Curiosidades</title>
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
                
                <form action="cerrarsesion.php">
                <img id="yo" src="Imagenes/lobito bandera.png" width="100px"><br>
                <span>Un ingl&eacute;s divertido solo lo encuentras aqu&iacute; </span>
                <br>
                <button>Cerrar sesi&oacuten;</button>
                
              </form>
             
              </center>
         <br>
         <br>
         </div>
        </header> 
       
   
     
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


    <body>

<section>
  <center>
          <h1>Welcome a FunEnglish Kids</h1>
         
          <aside>
               <?php
        session_start();
       
      ?>
            <h2>Lecci&oacute;n 1: Saludos</h2>
            <div  style="display: inline-block; width: 40%">
            <h3>Primero veamos un video</h4> 
            <a title="video" href="video.php"><img src="Imagenes/video" width="150" /></a>
            </div>
            <div style="display: inline-block; width: 40%">
               <h3>Es hora de los ejercicios</h4> 

               <a title="video" href="Seleccion.php"><img src="Imagenes/Eje.jpg" width="150" /></a>
            </div>
            <br>
            <br>
            <div style="display: inline-block; width: 40%">
                 <h3>Diviertete jugando</h4> 
               <a title="video" href="Pagina.html"><img src="Imagenes/Juego.jpg" width="150" /></a>
            </div>
            <div style="display: inline-block; width: 40%">
              <h3>Pon a prueba tus conocimientos</h4> 
               <a title="video" href="Quiz1.php"><img src="Imagenes/Quiz.jpg" width="150" /></a>
             
            </div>
        </aside>
</center>
    </section>
         
        
        <br>
        <br>
        <br>
         


               <footer id="fu" style="background-color:#4335F0; width: 100% ">
        &copy; 2019 Derechos reservados | FunEnglish Kids Corporation
      </footer>    
    </body>
</html>


