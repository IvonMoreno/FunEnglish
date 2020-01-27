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
<body>
  <script type="text/javascript">
  function capturar()
    {
      cont=0;
        // obtenemos el valor por el numero de elemento
      var porElementos1=document.forms["frmSO"].elements[0].value;
        var cars = ["2", "5", "1","4","8","6","3","7"];
        i=0;  
      

for (var j = 0; j< 8; j++) {
  var prueba=document.forms["frmSO"].elements[j].value;
  if( prueba.length != 0){
       if(document.forms["frmSO"].elements[j].value==cars[j])
       {
            cont=cont+1;
          } else
          {
            
           alert("Incorrecto, fallaste en el ejercicio " +j+ "Intenta nuevamente");
           cont=0;
           return 0;
     }
  }else{
     
    alert("Te falto contestar la opcion " +j+ "Intenta nuevamente");
    return 0;
  }
   
   
    }
    if(cont==8){
  alert("Correcto: Felicidades emos terminado");
  window.location.href="datosQ.php?variable2=6";
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
  </font>
  </center>
  </marquee>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<form name="frmSO">
<center>
<div id="div2">
<H2>5.-Inserta el número correspondiente.</H2></font><br/><br/>

<br/>
<table border="1" style="margin: 0 auto;" WIDTH="50%">

  <tr>
    <th><h2>1</h2> <br/ >
    <th scope="row"><IMG SRC="Imagenes/frase1.jpg" WIDTH=200 HEIGHT=100 border="3">  
    <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res3.gif" WIDTH=200 HEIGHT=100 border="3"> 
    </tr><br/>

    <tr>
    <th><h2>2</h2><br/>
    <th><IMG SRC="Imagenes/frase2.jpg" WIDTH=200 HEIGHT=100 border="3"> 
     <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res5.gif" WIDTH=200 HEIGHT=100 border="3"> 
    </tr>

    <tr>
    <th><h2>3</h2><br/>
    <th><IMG SRC="Imagenes/frase3.gif" WIDTH=200 HEIGHT=100 border="3"><br/>
     <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res6.gif" WIDTH=200 HEIGHT=100 border="3"> 
  </tr>

  <tr>
    <th><h2>4</h2><br/>
    <th><IMG SRC="Imagenes/frase4.gif" WIDTH=200 HEIGHT=100 border="3"><br/>
     <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res7.jpg" WIDTH=200 HEIGHT=100 border="3"> 
  </tr>

  <tr>
    <th><h2>5</h2><br/>
    <th><IMG SRC="Imagenes/frase5.gif" WIDTH=200 HEIGHT=100 border="3"><br/>
    <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res2.gif" WIDTH=200 HEIGHT=100 border="3"> 
  </tr>

  <tr>
    <th><h2>6</h2><br/>
    <th><IMG SRC="Imagenes/frase6.jpg" WIDTH=200 HEIGHT=100 border="3"><br/>
    <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res9.gif" WIDTH=200 HEIGHT=100 border="3"> 
  </tr>

  <tr>
    <th><h2>7</h2><br/>
    <th><IMG SRC="Imagenes/frase7.jpg" WIDTH=200 HEIGHT=100 border="3"><br/>
    <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res4.gif" WIDTH=200 HEIGHT=100 border="3"> 
  </tr>

  <tr>
    <th><h2>8</h2><br/>
    <th><IMG SRC="Imagenes/frase8.gif" WIDTH=200 HEIGHT=100 border="3"><br/>
    <th><input type="text" name="disculpa" size="5" style="text-align:center;"><br/>
    <th scope="row"><IMG SRC="Imagenes/res8.jpg" WIDTH=200 HEIGHT=100 border="3"> 
  </tr>

  
       

</table>
 <input type="button" value="Verificar" onclick="capturar()"> 
</div>
</center>



</form>
</body>
</html>

