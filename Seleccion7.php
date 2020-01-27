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
  alert("Correcto: Good afternoon es buenas tardes");
}
  function Error()
 {
  alert("fallaste:Good afternoon es buenas tardes");
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
            window.location.href="Dtos.php?variable2=7";

            }else
            {
             var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/Error.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Error()",100);
       window.location.href="Dtos.php?variable2=7";
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
     Escucha el audio y elige la Traducci&oacute;n correcta 
  </h1>
          <audio src="Audios/good afternoon.mp3" controls></audio>
          &nbsp; &nbsp; &nbsp;
         <img src="Imagenes/Tortuga1.png" width="30px">
         <audio src="Audios/03good afternoonL.mp3" controls></audio>

           <p>
           <input type="radio"  name="siete" value="1">Buenas noches 
           <input type="radio"  name="siete" value="2">Buenos dias
           <input type="radio"  name="siete" value="3">Buenas tardes
           </p>       
<p>
 <input id="centrar" type="button" value="Verificar"   onclick="getRadioButtonSelectedValue(document.frmSO.siete)"/>
</p> 
</form>

</div>
  <br>
  <br>
  <br>
  <br>
<br>
<footer style="background-color:#4335F0; width: 100% ">
        &copy; 2019 Derechos reservados | FunEnglish Kids Corporation
      </footer>

</body>

</html>