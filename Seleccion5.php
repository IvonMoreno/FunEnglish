<!DOCTYPE html >
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
   <link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Sarabun" rel="stylesheet">

</head>
    <header>
        <?php
        session_start();
      ?>
            <p id="titulo">
             FunEnglish Kids 
            </p>
            <div id="clientes">
              <center>
                <img id="yo" src="Imagenes/lobito bandera.png" width="70px"><br>
             <span>Un ingl&eacute;s divertido solo lo encuentras aqu&iacute; </span> 
              </center>
             </div>
        </header>
<body>
  <script type="text/javascript">

    function Correcto()
 {
  alert("Correcto: Bienvenido en ingles es welcome");
}
  function Error()
 {
  alert("fallaste:Bienvenido en ingles es welcome");;
 }

 function getRadioButtonSelectedValue(ctrl)
{
  band=0;
    for(i=0;i<ctrl.length;i++){
        if(ctrl[i].checked ){
            if (ctrl[i].value=="3" ) {
              band=1;
             
              var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/happykids.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Correcto()",100);
            window.location.href="Dtos.php?variable1=1&variable2=5";

            }else
            {
              var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/Error.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Error()",100);
              window.location.href="Seleccion6.php";
            }
         
                             }
          
                               } 
}
  </script>
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
<form name="frmSO">
  <h1>
    Elige la Traducci&oacute;n correcta 
  </h1>
  <p>
   <audio src="Audios/welcome.mp3" controls></audio>
   &nbsp; &nbsp; &nbsp;
  <img src="Imagenes/Tortuga1.png" width="30px">
  <audio src="Audios/05welcomeL.mp3" controls></audio> 
     </p>
           <img src="Imagenes/welcome1.gif">
           <p>
           <input type="radio"  name="cinco" value="1">Hola
           <input type="radio"  name="cinco" value="2">Buenas noches
           <input type="radio"  name="cinco" value="3">Bienvenido
           </p>    

<p>
 <input id="centrar" type="button" value="Verificar"   onclick="getRadioButtonSelectedValue(document.frmSO.cinco)" />
</p> 
</form>

</div>
</center>
</body>
<footer id="fu" style="background-color:#4335F0; width: 100% ">
        &copy; 2019 Derechos reservados | FunEnglish Kids Corporation
      </footer>
</html>