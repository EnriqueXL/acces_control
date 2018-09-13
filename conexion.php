 <?php
 $conectar=mysqli_connect('localhost','root','');
  $base=mysqli_select_db('usuarios');
  $user=$_POST['Usuar'];
  $pass=$_POST['contras'];
  $sql="INSERT INTO personan VALUES('$user','$pass')";
  $ejecutar=mysqli_query($sql);
?>