<?php 
    include("connection.php");
    $con=connection();

    $codigo=$_GET['codigo'];

    $sql="SELECT * FROM productos WHERE codigo='$codigo'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="text" name="codigo" placeholder="ingrese el codigo" value="<?= $row['codigo']?>">
                <input type="text" name="descuento" placeholder="ingrese la descripcion" value="<?= $row['descuento']?>">
                <input type="text" name="precio" placeholder="ingrese el precio" value="<?= $row['precio']?>">
                <input type="text" name="cantidad" placeholder="ingrese la cantidad" value="<?= $row['cantidad']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>