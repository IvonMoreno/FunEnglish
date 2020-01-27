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
  alert("Correcto: Please en ingles es por favor");
}
  function Error()
 {
  alert("fallaste: Please en ingles es por favor");
 }
 function getRadioButtonSelectedValue(ctrl)
{
    for(i=0;i<ctrl.length;i++){
        if(ctrl[i].checked ){
            if (ctrl[i].value=="2") {
             
               var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/happykids.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Correcto()",100);
            window.location.href="Dtos.php?variable1=1&variable2=6";

            }else
            {
             var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/Error.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Error()",100);
               window.location.href="Seleccion7.php";
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
  <div id="div">
<form name="frmSO">
  <h1>
    Escucha el video y elige la Traducci&oacute;n correcta 
  </h1>
          
      <video src="Videos/please.webm" width="280" height="200" controls=""></video>
           <p>
           <input type="radio"  name="seis" value="1">Hola
           <input type="radio"  name="seis" value="2">Por favor
           <input type="radio"  name="seis" value="3">Bienvenido
           </p>       
<p>
 <input id="centrar" type="button" value="Verificar"   onclick="getRadioButtonSelectedValue(document.frmSO.seis)"/>
</p> 
</form>

</div>
</center>
</body>
<footer id="fu" style="background-color:#4335F0; width: 100% ">
        &copy; 2019 Derechos reservados | FunEnglish Kids Corporation
      </footer>
</html>