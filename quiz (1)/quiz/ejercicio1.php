<!DOCTYPE html>
<html>
<head>
	<title>QUIZ</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<body>
<h1> QUIZ.</h1><br/>

<script languaje="JavaScript" type="text/javascript">

function actucap(){
  var obj=document.getElementById("cap");
  if (!obj) obj=window.document.all.cap;
    if (obj){
      obj.src= "ejemplo1?" ;
      }
    }
</script>



<form Method="POST">

 <H2>1.- Selecciona la opción correcta: </H2><br/><br/>

<table border="5" style="margin: 0 auto;">

  <tr>
    <th scope="row"><IMG SRC="tarde.jpg" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Welcome </option> <option>Good Bye</option> <option>Good Afternoon</option></select></th>

    <th><IMG SRC="bye.png" WIDTH=200 HEIGHT=200> <select name="saludos1"> <option>Good morning</option> <option>Good Bye</option> <option>Hello</option></select></th>

    <th><IMG SRC="disculpa.jpg" WIDTH=200 HEIGHT=200 > <select name="saludos2"> <option>Hello</option> <option>Excuse me</option> <option>sorry</option></select></th>

    <th><IMG SRC="porfavor.jpg" WIDTH=200 HEIGHT=200 > <select name="saludos3"> <option>please</option> <option>Good Bye</option> <option>Hello</option></select></th>

  </tr>

  <tr>
    <th><IMG SRC="bien.gif" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Welcome</option> <option>Good Bye</option> <option>Hello</option></select></th>

    <td><IMG SRC="noche.jpg" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Good night</option> <option>Good Bye</option> <option>Hello</option></select></td>

    <td><IMG SRC="dia.jpg" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Good mornig</option> <option>Good Bye</option> <option>Hello</option></select></td>

    <td><IMG SRC="hola.jpg" WIDTH=200 HEIGHT=200> <select name="saludos"> <option>Excuse Me</option> <option>Good Bye</option> <option>Hello</option></select></td>
  </tr>
</table><br/><br/>

<center>
        <input type="submit" value="Enviar" name="registro"></button>  
</center>

</form>

</body>
</html>
