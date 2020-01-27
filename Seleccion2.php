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
  alert("Correcto: Buenos dias en ingles es good morning");
 }
  function Error()
 {
  alert("Fallaste: Buenos dias en ingles es good morning");
 }
 function getRadioButtonSelectedValue(ctrl)
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
            window.location.href="Dtos.php?variable2=2";

            }else
            {
               var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/Error.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Error()",100);
             //window.location.href="Seleccion2.html";
            window.location.href="Seleccion3.php";
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
  <h1>Elige la opci&oacute;n correcta</h1>
  <h2>Buenos d&iacute;as </h2>
<p>
  <audio src="Audios/good morning.mp3" controls></audio>
   &nbsp; &nbsp; &nbsp;
  <img src="Imagenes/Tortuga1.png" width="30px">
  <audio src="Audios/02good morningL.mp3" controls></audio> 
</p>
  <label class="checkeable">
  <input type="radio"  name="dos" value="1" />
    <img src="Imagenes/morningR.jpg">

</label>
    
<label class="checkeable">
  <input type="radio"  name="dos" value="2" /> <img  src="Imagenes/GN.jpeg">
</label>

<p>
  <input id="centrar" type="button" value="Verificar"   onclick="getRadioButtonSelectedValue(document.frmSO.dos)"/>
</p> 
</form>

</div>
</center>

</body>
   <footer id="fu" style="background-color:#4335F0; width: 100% ">
        &copy; 2019 Derechos reservados | FunEnglish Kids Corporation
      </footer>

</html>