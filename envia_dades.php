<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$conn = mysqli_connect('localhost','jose','jose123');

		mysqli_select_db($conn, 'world');

		$consulta = "SELECT ci.Name as ciudad , co.Name as pais FROM city ci, country co where ci.CountryCode = co.code AND ci.CountryCode ='".$_POST["pais"]."'";

		$resultat = mysqli_query($conn, $consulta);

			if (!$resultat) {
     			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
     			$message .= 'Consulta realitzada: ' . $consulta;
     			die($message);
 		}

 	?>

 	<?


		 while( $registre = mysqli_fetch_assoc($resultat) ){
		 	echo $_POST["pais"]. " ";
		 	echo $registre["ciudad"]." ". $registre["pais"];
		 	echo "<br />";
		 }
		 	

	?>

</body>
</html>