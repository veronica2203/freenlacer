
<?php

if($_SERVER["REQUEST_METHOD"] =="POST"){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "prueba";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
    die("No hay conexión: ".mysqli_connect_error());
}
$nombre = $_POST["user"];
$pass = $_POST["password"];
$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
   
    echo "Bienvenido:" .$nombre;
}
else
{
   
    echo "No ingreso";
    echo "<script> alert('Error');window.location= 'index.html' </script>";
}

mysqli_close($conn);
}
?>

