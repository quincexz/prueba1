<?php

include("connection.php");
$con = connection();

$codigo = $_POST['codigo'];
$descuento = $_POST['descuento'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql="UPDATE productos SET codigo='$codigo', descuento='$descuento', precio='$precio', cantidad='$cantidad";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>