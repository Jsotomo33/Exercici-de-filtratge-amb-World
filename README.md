# Exercici-de-filtratge-amb-World

1. Nos conectamos a MySQL:
$conn = mysqli_connect('localhost','jose','jose123');

2.Escogemos la BBDD con la que vamos a trabajar:
mysqli_select_db($conn, 'world');

3. Guardamos la query en una variable:
$consulta = "SELECT * FROM country;";

4. Enviamos la consultar al SGBD para obtener el resultado:
$resultat = mysqli_query($conn, $consulta);
