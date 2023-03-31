<?php include('./includes/header.php');?>
<?php include('./includes/navbar.php');?>
<?php include('./includes/driverdb.php');?>
<div class="container">
    <div class="card">
        <h1>Productos</h1>
        <?php if(isset($conexion)) {
    echo "Conectado a BD";
}?>
    </div>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Formato</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
             $query = 'SELECT * FROM Products';
            $result_clientes= mysqli_query($conexion , $query);
            while ($row = mysqli_fetch_array($result_clientes)){?>
                <tr>
                    <th scope="row"><?php echo $row['ProductID']?></th>
                    <td> <?php echo $row['ProductName']?></td>
                    <td> <?php echo $row['SupplierID']?></td>
                    <td> <?php echo $row['CategoryID']?></td>
                    <td><?php echo $row['Unit']?></td>
                    <td><?php echo $row['Price']?></td>
                    
                    <td>
                        <div class="alert alert-warning" role="alert">
                            <a href="editar.php?id=<?php echo $row['ProductID']?>&tabla=Products&idcampo=ProductID&page=productos.php">Editar</a>
                        </div>

                    </td>
                    <td>
                        <div class="alert alert-danger" role="alert">
                            <a href="borrar.php?id=<?php echo $row['ProductID']?>&tabla=Products&idcampo=ProductID&page=productos.php">Borrar</a>
                        </div>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php include('./includes/footer.php');?>