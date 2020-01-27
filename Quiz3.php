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
<body>
    <script type="text/javascript">
  function capturar()
    {
      cont=0;
        // obtenemos el valor por el numero de elemento
      var porElementos1=document.forms["frmSO"].elements[0].value;
      alert(porElementos1);
        var cars = ["welcome", "please", "excuse me","good nigth","good morning","hello","good afternoon","good bye"];
        i=0;    
for (var j = 0; j< 8; j++) {
  var prueba=document.forms["frmSO"].elements[j].value;
  
  if( prueba.length != 0){
     
       if(document.forms["frmSO"].elements[j].value==cars[j])
       {
            cont=cont+1;
          } else
          {
            
           alert("Incorrecto: Fallaste en el ejercicio " +j+ ", Intenta nuevamente");
           cont=0;
           return 0;
     }
  }else{
     
    alert("Te falto contestar la opcion " +j+ ", Intenta nuevamente");
    return 0;
  }
   
   
    }
    if(cont==8){
  alert("Correcto: Continuemos con el siguiente ejercicio");
  window.location.href="datosQ.php?variable2=4";
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
    <br>
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
<H2>3.-Observa las palabras de recuadro y coloca la palabra correcta en los cuadros.</H2>
</font>
<br/><br/>
<div style = "padding:12px; background-color:#F8C471; line-height:3.0;">
<center><FONT FACE="Sarabun" size="3px"> good morning &nbsp;&nbsp;&nbsp;&nbsp; good afternoon &nbsp;&nbsp;&nbsp;&nbsp; hello &nbsp;&nbsp;&nbsp;<br/>
 excuse me &nbsp;&nbsp;&nbsp;  please &nbsp;&nbsp;&nbsp;  welcome &nbsp;&nbsp;&nbsp; <br/>
 good bye &nbsp;&nbsp;&nbsp;  good nigth &nbsp;&nbsp;&nbsp; </FONT> </center>
</div>
<table border="3" style="margin: 0 auto;">

  <tr>

    <th scope="row"><h2>0</h2><IMG src="Imagenes/bienve.gif" WIDTH=200 HEIGHT=200 border="3"><br/></center>
    <input type="text" name="tarde" required/></center>

    <th><h2>1</h2><IMG SRC="Imagenes/sorry.jpg" WIDTH=200 HEIGHT=200 border="3"><br/></center>
    <input type="text" name="bye" id="hola" required/></center>

    <th><h2>2</h2><IMG SRC="Imagenes/disculpa1.jpg" WIDTH=200 HEIGHT=200 border="3"><br/><center><input type="text" name="disculpa" required/></center>
    </tr><br/>

    <tr>
    <th><h2>3</h2><IMG SRC="Imagenes/noche2.jpg" WIDTH=200 HEIGHT=200 border="3"><br/><center><input type="text" name="porfavor" required/></center>

    <th><h2>4</h2><IMG SRC="Imagenes/mod.jpg" WIDTH=200 HEIGHT=200 border="3"><br/><center><input type="text" name="bien"/></center>

    <td><h2>5</h2><IMG SRC="Imagenes/hey.jpg" WIDTH=200 HEIGHT=200 border="3"><br/><center><input type="text" name="noche"/></center>
    </tr>

    <tr>
    <td><h2>6</h2><IMG SRC="Imagenes/tarde1.jpg" WIDTH=200 HEIGHT=200 border="3"><br/><center><input type="text" name="dia"/></center>

    <td><h2>7</h2><IMG SRC="Imagenes/adios.jpg" WIDTH=200 HEIGHT=200 border="3"><br/> <center><input type="text" name="hola"/></center>
  </tr>

</table>
<input type="button" value="Verificar" onclick="capturar()"> 


</div>
</div>
</center>
</form>
</body>
</html>
