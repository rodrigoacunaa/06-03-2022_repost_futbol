<?php 

include("../conection.php");

$email=$_POST['email_name'];
$password=$_POST['password_name'];
session_start();
$SESSION['email_name']=$email;

$conexion= conectame();

$query="SELECT * FROM `apd` where `mail` ='$email' and `password` ='$password'";

$resultado=mysqli_query($conexion,$query);

$datos=mysqli_num_rows($resultado);


if ($datos) {

 $row = mysqli_fetch_assoc($resultado);

 // $_SESSION['email_name'] = $row[''];

 	echo "sesion iniciada con exito";

	header("location:../pages/index_apd.php");
}

else{

	?>
	 <h1>ERROR AL INICIAR SESIÓN</h1>
	 <?php 

}

	 mysqli_free_result($resultado);
	 mysqli_close($conexion);

	  ?>

	  