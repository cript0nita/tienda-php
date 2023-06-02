<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h3>Tienda</h3>
    <a href="formulariofamilia.php" class="button"> Insertar familia </a>
    <a href="formularioproducto.php" class="button"> Insertar producto </a>
    <hr>
    <form method="POST">
        
        <select name="familia">
            <option value="">-- Selecciona --</option>
            <?php foreach ($familias as $familia): ?>
                <option value="<?php echo $familia['id_familia'] ?>">
                    <?php echo $familia['descripcion'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Filtrar">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Familia</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto):?>
            <tr>
                <td><?php echo $producto['id_producto'] ?></td>
                <td><?php echo $producto['descripcion'] ?></td>
                <td><?php echo $producto['familia'] ?></td>
                <td><?php echo $producto['precio'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>