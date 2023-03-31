<?php include('./includes/header.php');?>
<?php include('./includes/navbar.php');?>
<?php include('./includes/driverdb.php');?>
<div class="container">
    <div class="card">
        <h1>Pedidos</h1>
        <?php if(isset($conexion)) {
    echo "Conectado a BD";
}?>
    </div>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ID Proveedor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">ID Transporte</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
             $query = 'SELECT * FROM Orders';
            $result_clientes= mysqli_query($conexion , $query);
            while ($row = mysqli_fetch_array($result_clientes)){?>
                <tr>
                    <th scope="row"><?php echo $row['OrderID']?></th>
                    <td> <?php echo $row['CustomerID']?></td>
                    <td> <?php echo $row['OrderDate']?></td>
                    <td><?php echo $row['ShipperID']?></td>
                   
                    <td>
                        <div class="alert alert-warning" role="alert">
                            <a href="editar.php?id=<?php echo $row['OrderID']?>&tabla=Orders&idcampo=OrderID&page=pedidos.php">Editar</a>
                        </div>

                    </td>
                    <td>
                        <div class="alert alert-danger" role="alert">
                            <a href="borrar.php?id=<?php echo $row['OrderID']?>&tabla=Orders&idcampo=OrderID&page=pedidos.php">Borrar</a>
                        </div>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php include('./includes/footer.php');?>