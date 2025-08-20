<?php
// debe ser igual a las variables definidas en "text" dentro del formulario en INDEX.
// INSERT INTO tabla de la base de dato que estemos trabajando.
include("connection.php");
$con = connection();

$codigo = $_POST['codigo'];
$descuento = $_POST['descuento'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO productos VALUES ('$codigo','$descuento','$precio','$cantidad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>