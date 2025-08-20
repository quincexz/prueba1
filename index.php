<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear Producto</h1>

        <form action="insert_productos.php" method="POST">
            <input type="text" name="codigo" placeholder="Ingrese el codigo">
            <input type="text" name="descuento" placeholder="Ingrese la descripcion del producto">
            <input type="text" name="precio" placeholder="Ingrese el precio del producto">
            <input type="text" name="cantidad" placeholder="Ingrese la cantidad">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Productos registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>codigo</th>
                    <th>descuento</th>
                    <th>precio</th>
                    <th>cantidad</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['codigo'] ?></th>
                        <th><?= $row['descuento'] ?></th>
                        <th><?= $row['precio'] ?></th>
                        <th><?= $row['cantidad'] ?></th>
                        <th><a href="update.php?codigo=<?= $row['codigo'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_productos.php?codigo=<?= $row['codigo'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>




