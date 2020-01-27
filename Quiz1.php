<!DOCTYPE html>
<html>
<head>
 
  <title>QUIZ</title>
  <link rel="stylesheet" type="text/css" href="mystyle1.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
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
  <body>
    <script type="text/javascript">
                  alert("Recuerda: si es la primera vez que lo intentas se acomulara un punto por cada ejercicio Correcto");
                 </script>
 <br>
 <br>
  <marquee direction="right"> 
  <center>
  <h1> QUIZ</h1><br/>
  </font>
  </center>
  </marquee>
  <script type="text/javascript">
  function capturar()
    {
      cont=0;
        // obtenemos el valor por el numero de elemento
       
        var cars = ["Buenas tardes", "Adios", "sorry","please","Welcome","Good night","Good Morning","Hello"];   
for (var i = 0; i < 8; i++) {
 if(document.forms["frmSO"].elements[i].value==cars[i]){
cont=cont+1;
 }else
 {
alert("Incorrecto: fallaste en el " +i+ ",Intenta nuevamente");
cont=0;
break;
 }

}
if(cont==8){
  alert("Correcto, Continuemos con el siguiente ejercicio");
  window.location.href="datosQ.php?variable2=2";
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

<form name="frmSO">
  <center>
    <div id="div">
 <H2>1.- Selecciona la opción correcta: </H2><br>
<table border="5" style="margin: 0 auto;">
  <tr>
    <th scope="row">0<IMG SRC="Imagenes/tarde.jpg" WIDTH=200 HEIGHT=200> <select name="saludos">  <option>Bienvenido </option> <option>Adios</option> <option>Buenas tardes</option></select></th>

    <th>1<IMG SRC="Imagenes/bye.png" WIDTH=200 HEIGHT=200> <select name="saludos1"> <option>Buenos dias</option> <option>Adios</option> <option>Hola</option></select></th>

    <th>2<IMG SRC="Imagenes/disculpa.jpg" WIDTH=200 HEIGHT=200 > <select name="saludos2"> <option>Hello</option> <option>Excuse me</option> <option>sorry</option></select></th>

    <th>3<IMG SRC="Imagenes/porfavor.jpg" WIDTH=200 HEIGHT=200 > <select name="saludos3"> <option>please</option> <option>Good Bye</option> <option>Hello<</option></select></th>
   
  </tr>

  <tr>
    <th>4<IMG SRC="Imagenes/bien.gif" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Welcome</option> <option>Good Bye</option> <option>Hello</option></select></th>

    <td>5<IMG SRC="Imagenes/noche.jpg" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Sorry</option> <option>Good Bye</option> <option>Good night</option></select></td>

    <td>6<IMG SRC="Imagenes/dia.jpg" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Good Bye</option> <option>Good Morning</option> <option>Hello</option></select></td>

    <td>7<IMG SRC="Imagenes/hola.jpg" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Excuse Me</option> <option>Good Bye</option> <option>Hello</option></select></td>
  </tr>
</table>
 <input id="centrar" type="button" value="Verificar"  onclick="capturar()"/>
 </div>
 </center>
</form>
</body>

</html>
