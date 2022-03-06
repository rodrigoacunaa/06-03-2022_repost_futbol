<?php
include('../conection.php');
// echo "funciona";
	$conexion = conectame();
	
			
			$valor_2= $_POST['username_name'];
			$valor_3= $_POST['password_name'];
			$valor_4= $_POST['telefono_name'];
			$valor_5= $_POST['email_name'];
			$valor_6= $_POST['ent_soc_name'];
			$valor_7= $_POST['fullname_name'];
			$valor_8= $_POST['surname_name'];
			$valor_9= $_POST['unic_code_name'];
			$valor_10= $_POST['club_rep_name'];
			$valor_tipo= 1;

			if(isset($_POST['submit_name'])){

				mysqli_query($conexion, "INSERT INTO `apd`(`user`, `password`, `telefono`, `mail`, `entidad_social`, `nombre_apd`, `apellido_apd`, `codigo_unico`, `club_rep`, `tipo`) VALUES ('".$valor_2."', '".$valor_3."', '".$valor_4."', '".$valor_5."', '".$valor_6."', '".$valor_7."', '".$valor_8."', '".$valor_9."', '".$valor_10."', '".$valor_tipo."')");

			        // echo "datos cargados correctamente";

			

			 
			



			 }

			 ?>