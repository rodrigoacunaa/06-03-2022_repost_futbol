<?php 

include("../conection.php");

$email=$_POST['email_name'];
$codigo_unico=$_POST['unic_code_name'];
session_start();
$SESSION['email_name']=$email;

$conexion= conectame();

$query="SELECT * FROM `apd` where `mail` ='$email' and `codigo_unico` ='$codigo_unico'";

$resultado=mysqli_query($conexion,$query);

$datos=mysqli_num_rows($resultado);


if ($datos) {

	$_SESSION['color'] = $color_apd;

	header("location:../pages/index_apd.php");
}else{

	?>
	 <h1>ERROR AL INICIAR SESIÓN</h1>
	 <?php 

}

	 mysqli_free_result($resultado);
	 mysqli_close($conexion);

	  ?>

	  