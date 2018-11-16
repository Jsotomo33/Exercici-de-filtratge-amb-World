# Exercici-de-filtratge-amb-World

1. Nos descargamos la BBBDD desde el siguiente link:

http://downloads.mysql.com/docs/world.sql.gz

2. Descomprimos la base de datos con gunzip:

Gunzip NombreDeArchivo

3. Metemos la BBDD world en nuestra base de datos:

mysql -u jose -p world < world.sql

4. Creamos los credenciales para conectarnos a la base de datos:

$conn = mysqli_connect('localhost','jose','jose123')


