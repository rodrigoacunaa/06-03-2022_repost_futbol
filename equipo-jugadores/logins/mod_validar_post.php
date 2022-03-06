<?php 

include("../conection.php");

$email=$_POST['email_name'];
$clave=$_POST['clave_name'];
session_start();
$SESSION['email_name']=$email;

$conexion= conectame();

$query="SELECT * FROM `postulantes` where `mail` ='$email' and `clave` ='$clave'";

$resultado=mysqli_query($conexion,$query);

$datos=mysqli_num_rows($resultado);


if ($datos) {
	// $_SESSION['color'] = $color_post;

	header("location:../pages/index_post.php");
}else{

	?>
	<?php 

	 include("../");
	 ?>
	 <h1>ERROR AL INICIAR SESIÓN</h1>
	 <?php 

}

	 mysqli_free_result($resultado);
	 mysqli_close($conexion);

	  ?>

	  