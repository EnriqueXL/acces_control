<?php
if($_POST){
	$a=$_POST["trabajador"];
	$b=$_POST["edad"];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prueba");
mysqli_query($link,"insert into personal value ('$a','$b')");
mysqli_close($link);
Echo "<font color='Green' size=10><b>Registro almacenado</b></font>";
}
?>