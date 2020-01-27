<!DOCTYPE html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="principal.css">
    <script src= "usuarios_registrados.js"></script>
    <title>Curiosidades</title>
    </head>

        <header>
          <div id="titulo">
            FunEnglish Kids
            <br>
            <br>
      <li>
  <lu><a href="default.html">Principal</a></lu>
  <lu><a href="news.asp">Perfil</a></lu>
  <lu><a href="contact.asp">Contactos</a></lu>
  <lu><a href="about.asp">Acerca de FunEnglisk Kids</a></lu>
    </li>
            </div>
            <div id="clientes">
              <center>
                <form action="cerrarsesion.php">
                <img id="yo" src="Imagenes/lobito bandera.png" width="100px"><br>
                <button>Cerrar sesion</button>
              </form>
              </center>
         <br>
         <br>
         </div>
 
        </header> 
         <?php
        session_start();
      ?>
   
     
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
              <script type="text/javascript">
    function Correcto()
 {
  alert("Correcto: Buenos dias en ingles es good morning");
 }
  function Error()
 {
  alert("Fallaste: Buenos dias en ingles es good morning");
 }
 function getRadioButtonSelectedValue(ctrl,variable)
{
  band=0;
    for(i=0;i<ctrl.length;i++){
        if(ctrl[i].checked ){
            if (ctrl[i].value=="1" ) {
              band=1;
               var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/happykids.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Correcto()",100);
            // var x = setTimeout("Correcto()", 100); 
            // clearTimeout(x); 
            window.location.href="Dtos.php?variable1=variable&variable2=1";

            }else
            {
               var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/Error.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Error()",100);
             //window.location.href="Seleccion2.html";
            window.location.href="Seleccion2.html";
            }
         
                             }
          
                               } 
  </script>
<section>
  <center>
          <h1>Empezemos</h1>

   
         
          <aside>
            <h2>Leccion 1: Saludos</h2>
        

            
           <form name="frmSO">
  <h1>Elige la Opcion correcta</h1>
  <h1> Hola</h1> 
<p>
  <audio src="Audios/hello.mp3" controls></audio>
</p>
  <label class="checkeable">
  <input type="radio"  name="uno" value="1" /><img src="Imagenes/hello.jpeg">
  </label>
<label class="checkeable">
  <input type="radio"  name="uno" value="2" /><img  src="Imagenes/goodbye.jpeg">
</label>
  <p>
 <input id="centrar" type="button" value="Verificar"   onclick="getRadioButtonSelectedValue(document.frmSO.uno, <?php echo $_SESSION['id']?>)"/>
</p> 
</form>
        </aside>
</center>
    </section>
         
        
        <br>
        <br>
        <br>
         


               <footer id="fu" style="background-color:#8DC16A; width: 100% ">
        &copy; 2018 Derechos reservados | FunEnglisk Kids Corporation
      </footer>
        

             

    </body>
</html>


