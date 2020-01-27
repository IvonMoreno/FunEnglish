<!DOCTYPE html>
<html>
<head>
 
	<title>QUIZ</title>
   <link rel="stylesheet" type="text/css" href="mystyle1.css">
  <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Sarabun" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Cherry+Swash|Sarabun" rel="stylesheet">
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
  <marquee direction="right"> 
  <center>
   <font color="red" face="Acme">
	<h1> QUIZ</h1><br/>
  </font>
  </center>
  </marquee>
<body>
  <script type="text/javascript">
  function capturar()
    {
      cont=0;
        // obtenemos el valor por el numero de elemento
        var cars = ["Excuse me", "Hello", "welcome","Good morning","Please"];
        i=0;  
for (var j = 0; j< 15; j++) {
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

if(cont==5){
  alert("Correcto: Continuemos con el siguiente ejercicio");
  window.location.href="datosQ.php?variable2=3";
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
    <br>
    <br>
    <br>
    <br>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<center>
<form name="frmSO">
<div id="div2">

<H2>2.- Escucha y selecciona la opción correcta.</H2>
<font color="black" face="Sarabun" size="5px">
<div  style="display: inline-block; width: 40%">
  <h2>0</h2>
<video src="Videos/excuseme.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<input  type="radio" name="saludos" value="Excuse mi">Excuse mi
<br>
<input type="radio" name="saludos" value="Excuse me">Excuse me
<br>
<input type="radio" name="saludos" value="Excuseme">Excuseme<br/><br/>

</div>
<div  style="display: inline-block; width: 40%">
<h2>1</h2>
<video src="Videos/hello.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>


<input type="radio" name="saludos1" value="Excuse me">Excuse me
<br>
<input type="radio" name="saludos1" value="Hello">Hello
<br>
<input type="radio" name="saludos1" value="Heloo">Heloo<br/><br/>

</div>
<div  style="display: inline-block; width: 40%">
<h2>2</h2>
<video src="Videos/welcome.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>


<input type="radio" name="saludos2" value="welcome">welcome
<br>
<input type="radio" name="saludos2" value="Goog afternoon">Goog afternoon
<br>
<input type="radio" name="saludos2" value="welcoming">welcoming<br/><br/>

</div>
<div  style="display: inline-block; width: 40%">
<h2>3</h2>
<video src="Videos/goodmorning.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>


<input type="radio" name="saludos3" value="Good night">Good night
<br>
<input type="radio" name="saludos3" value="Good morning">Good morning
<br>
<input type="radio" name="saludos3" value="Goodmorning">Goodmorning<br/><br/>

</div>
<div  style="display: inline-block; width: 40%">
<h2>4</h2>
<video src="Videos/please.webm" preload="none" controls="" type="video/mp4" width="200" height="200" > </video><br/><br/>

<input type="radio" name="saludos4" value="Please">Please
<br>
<input type="radio" name="saludos4" value="Plase">Plase
<br>
<input type="radio" name="saludos4" value="Plis">Plis<br/><br/>

</div>
<center>
        <input type="button" value="Verificar" onclick="capturar()"> 
</center>
</div>
</font>
</form>
</center>
</body>
</html>

