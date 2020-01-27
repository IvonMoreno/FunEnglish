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
        <script type="text/javascript">
     function Correcto()
 {
 alert("Correcto: Hola niñas, buenos dias en ingles es hello girls");
}
  function Error()
 {
  alert("Fallaste:Hola niñas, buenos dias en ingles es hello girls, good morning");
 }
 function getRadioButtonSelectedValue(ctrl)
{
    for(i=0;i<ctrl.length;i++){
        if(ctrl[i].checked ){
            if (ctrl[i].value=="2" ) {
              var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/happykids.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Correcto()",100);
            window.location.href="Dtos.php?variable2=4";

            }else
            {
              var audioElement = document.createElement('audio');
             // indicamos el archivo de audio a cargar
             audioElement.setAttribute('src', 'Audios/Error.mp3');
             // Si deseamos que una vez cargado empieze a sonar...
             audioElement.setAttribute('autoplay', 'autoplay');
             setTimeout("Error()",100);
             window.location.href="Seleccion5.php";
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
<body>
  <center>
  <div id="div">
<form  name="frmSO">
          <h1>Elige la opci&oacute;n correcta para completar la oraci&oacute;n </h1>
          <h2> Hola ni&ntilde;as, buenos d&iacute;as </h2>
          <labe id="formT">Hello girls, ______________</labe>

          <p>
           <input  type="radio"  name="cuatro" value="1" >Good night
         </p>
         <p>
            <input  type="radio"  name="cuatro" value="2" >Good morning
            </p>
            <p>
             <input  type="radio"  name="cuatro" value="3" >Good afternoon
           </p>
           <p class="left">
            <img src="Imagenes/giphy.gif"> 
           </p>
           <p>
  <input id="centrar" type="button" value="Verificar"   onclick="getRadioButtonSelectedValue(document.frmSO.cuatro)"/>
</p> 
</form>

</div>
</center>
</body>
<footer id="fu" style="background-color:#4335F0; width: 100% ">
        &copy; 2019 Derechos reservados | FunEnglish Kids Corporation
      </footer>
</html>