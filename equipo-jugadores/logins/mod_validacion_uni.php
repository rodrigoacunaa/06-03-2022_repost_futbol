<?php
include("../conection.php");
$conexion= conectame();

$email=$_POST['email_name'];
$password=$_POST['password_name'];

  	$result = mysqli_query($conexion, "SELECT * FROM `apd`,`postulantes` WHERE `mail` = '$email'");



  	
//ta mal :(
  	if($row = mysqli_fetch_array($result)){

  		if($row['mail'] == $email){
  			// echo "email encontrado correctamente";

  			if ($row['password'] == $password) {

  				if($row['tipo'] == 1){

  				
  				// echo "Sesion iniciada correctamente como apd";

  				session_start();

  				$_SESSION['email_name'] = $row['mail'];

  				$_SESSION['password'] = $row['password'];
  				header("location:../pages/index_apd.php");

  															}

  			else if($row['tipo'] == 1){
  				
  				// echo "Sesion iniciada correctamente como postulante";
  				session_start();

  				$_SESSION['email_name'] = $row['mail'];

  				$_SESSION['password'] = $row['password'];
  				header("location:../pages/index_post.php");

  			}


  			}

  		}



  	}




	

 ?>




 <!-- if($row['tipo'] == 1){
		header("location:../pages/index_apd.php ");

	}
	else if($row['tipo'] == 2){
		header("location: ../pages/index_post.php");
	}
	else{
		echo "error en la eleccion de tipo de usuario";
	} -->