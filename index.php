<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <?php include_once("conexion_bd/conexion.php"); ?>
    <div class="w-100 row">
        <div class="w-100 bg-primary p-3">
            <h1 class="text-center text-white">Prueba Servidor Universidad</h1>
        </div>
        <table class="w-75 m-auto table table-hover">
            <thead>
                <th>Id</th>
                <th>Nombre Producto</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Stock</th>
            </thead>
            <tbody>
                <?php 
                    $sql="SELECT * FROM PRODUCTO";
                    foreach($conn->query($sql) as $producto){
                        echo "<tr>";
                        echo "<td>$producto[0]</td>";
                        echo "<td>$producto[1]</td>";
                        echo "<td>$producto[2]</td>";
                        echo "<td>$producto[3]</td>";
                        echo "<td>$producto[4]</td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
        </table>
        <h1 class="text-center mt-3">Formulario Registro de productos</h1>
        <form class="w-50 p-2 m-auto row bg-warning rounded justify-content-center" action="backend/recibe_datos.php" method="POST">
            <div class="col-5 p-3">
                <label for="nombre">Nombre producto</label>
                <input class="form-control" type="text" name="nombre" required>
            </div>
            <div class="col-3 p-3">
                <label for="precio">Precio</label>
                <input class="form-control" type="number" name="precio" required>
            </div>
            <div class="col-5 p-3">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" required>
            </div>
            <div class="col-3 p-3">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" name="stock" required>
            </div>
            <div class="col-6 row">
                <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Registrar Producto">
            </div>
        </form>

    </div>
    <script>
        const btn = document.getElementById("submit");

        btn.addEventListener("click",(e)=>{
            swal({
                title:"Producto Registrado correctamente",
                icon: "success"
            });
        });
    </script>
</body>
</html>