<!DOCTYPE html>
<html>
<head>
 
	<title>QUIZ</title>
  <link rel="stylesheet" type="text/css" href="mystyle1.css">
  <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Sarabun" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Cherry+Swash|Sarabun" rel="stylesheet">
  </style>
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
  function capturar()
    {
      cont=0;
        // obtenemos el valor por el numero de elemento
      var porElementos1=document.forms["frmSO"].elements[0].checked;
     var porElementos2=document.forms["frmSO"].elements[1].checked;
      var porElementos3=document.forms["frmSO"].elements[2].checked;
      var porElementos4=document.forms["frmSO"].elements[3].checked;
     var porElementos5=document.forms["frmSO"].elements[4].checked;
      var porElementos6=document.forms["frmSO"].elements[5].checked;
        var cars = ["morning", "night", "Excuse","Hello","Welcome","Please"];
        i=0;  
for (var j = 0; j< 18; j++) {
    if(document.forms["frmSO"].elements[j].checked){
         if(document.forms["frmSO"].elements[j].value==cars[i]){
           cont=cont+1;
           i=i+1;
          } else
          {
           alert("Incorrecto: Fallaste en el ejercicio " +i+ ", Intenta nuevamente");
           cont=0;
           return 0;
     }
   
    }
  }

if(cont==6){
  alert("Correcto: Continuemos con el siguiente ejercicio");
  window.location.href="datosQ.php?variable2=5";
}


        // Obtenemos el valor por el id
     //  var porId=document.getElementById("seleccion").value;
        // Obtenemos el valor por el Nombre
      //  var porNombre=document.getElementsByName("seleccion")[0].value;
        // Obtenemos el valor por el tipo de tag
      //  var porTagName=document.getElementsByTagName("select")[0].value;
        // Obtenemos el valor por el nombre de la clase
      //  var porClassName=document.getElementsByClassName("formulario_select")[0].value;
 
        //document.getElementById("resultado").innerHTML=" \
       //     Por elementos: "+porElementos+" \
       //     <br>Por ID: "+porId+" \
       //     <br>Por Nombre: "+porNombre+" \
        //    <br>Por TagName: "+porTagName+" \
        //    <br>Por ClassName: "+porClassName;
   }
    </script>
  <marquee direction="right"> 
  <center>
	<h1> QUIZ</h1><br/>
  </center>
  </marquee>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<form name="frmSO">
<center>
<div id="div2">
<H2>4.- Escucha, observa y selecciona la opción correcta.</H2>
<font color="black" face="Sarabun" size="5px">
<table border="5" style="margin: 0 auto;">

<tr>
<th scope="row">0<video src="Videos/goodmorning.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<div style="text-align:left;">Good ________<br/>
<br>
<input type="radio" name="saludos" value="bye">bye
<br>
<input type="radio" name="saludos" value="morning">morning
<br>
<input type="radio" name="saludos" value="mornin">mornin <IMG SRC="Imagenes/vi1.jpg" align="right" WIDTH=80 HEIGHT=80 border="3"><br/><br/></th>

<th scope="row">1<video src="Videos/goodnight.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<div style="text-align:left;">Good ________<br/>
<br>
<input type="radio" name="saludos1" value="night">night
<br>
<input type="radio" name="saludos1" value="morning">morning
<br>
<input type="radio" name="saludos1" value="naight">naight <IMG SRC="Imagenes/vi2.jpg" align="right" WIDTH=80 HEIGHT=80 border="3"><br/><br/></th>
</tr>


<tr>
<th>2<video src="Videos/excuseme.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<div style="text-align:left;">________ me <br/>
<br>
<input type="radio" name="saludos2" value="Excuse">Excuse
<br>
<input type="radio" name="saludos2" value="Excuse me" >Excuse me
<br>
<input type="radio" name="saludos2" value="Excusa">Excusa <IMG SRC="Imagenes/vi3.jpg" align="right" WIDTH=80 HEIGHT=80 border="3"><br/><br/></th>



<th>3<video src="Videos/hello.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<div style="text-align:left;">________ <br/>
<br>
<input type="radio" name="saludos3" value="Hella">Hella
<br>
<input type="radio" name="saludos3" value="Hello">Hello
<br>
<input type="radio" name="saludos3" value="Please">Please <IMG SRC="Imagenes/vi4.jpg" align="right" WIDTH=80 HEIGHT=80 border="3"><br/><br/></th>
</tr>


<tr>
<th>4<video src="Videos/welcome.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<div style="text-align:left;">________ <br/>
<br>
<input type="radio" name="saludos4" value="welcomen">welcomen
<br>
<input type="radio" name="saludos4" value="Welcome">Welcome
<br>
<input type="radio" name="saludos4" value="Excuse Me">Excuse Me <IMG SRC="Imagenes/vi5.gif" align="right" WIDTH=80 HEIGHT=80 border="3"><br/><br/></th>


<th>5<video src="Videos/please.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<div style="text-align:left;">________ <br/>
<br>
<input type="radio" name="saludos5" value="pleases">pleases
<br>
<input type="radio" name="saludos5" value="pleis">pleis
<br>
<input type="radio" name="saludos5" value="Please">Please <IMG SRC="Imagenes/sorry.jpg" align="right" WIDTH=80 HEIGHT=80 border="3"><br/><br/></th>
</tr>


</table>
</font>
<br/><br/>

        <input type="button" value="Verificar" onclick="capturar()">  

</div>
</center>
</form>
</body>
</html>