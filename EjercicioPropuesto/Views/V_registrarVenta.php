<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <title>LABORATORIO 12</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>REGISTRAR VENTA</h1>
                <br>
                <form action="Controller/registrar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="dni" placeholder="DNI">
                    <input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
                    <input type="text" class="form-control mb-3" name="precioUnitario" placeholder="Precio Unitario">
                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
                    <input type="text" class="form-control mb-3" name="precioTotal" placeholder="Precio total">
                    <input type="submit" class="btn btn-primary" value="Registrar">
                </form>
                <br>
                <a href="Views/V_mostrarVentas.php" class="btn btn-primary">Ver Ventas</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>  
</body>

</html>