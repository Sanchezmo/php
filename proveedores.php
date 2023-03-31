<?php include('./includes/header.php');?>
<?php include('./includes/navbar.php');?>
<?php include('./includes/driverdb.php');?>
<div class="container">
    <div class="card">
        <h1>Proveedores</h1>
        <?php if(isset($conexion)) {
    echo "Conectado a BD";
}?>
    </div>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">CP</th>
                    <th scope="col">País</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
             $query = 'SELECT * FROM Suppliers';
            $result_clientes= mysqli_query($conexion , $query);
            while ($row = mysqli_fetch_array($result_clientes)){?>
                <tr>
                    <th scope="row"><?php echo $row['SupplierID']?></th>
                    <td> <?php echo $row['SupplierName']?></td>
                    <td> <?php echo $row['ContactName']?></td>
                    <td> <?php echo $row['Address']?></td>
                    <td><?php echo $row['City']?></td>
                    <td><?php echo $row['PostalCode']?></td>
                    <td><?php echo $row['Country']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td>
                        <div class="alert alert-warning" role="alert">
                            <a href="editar.php?id=<?php echo $row['SupplierID']?>&tabla=Suppliers&idcampo=SupplierID&page=proveedores.php">Editar</a>
                        </div>

                    </td>
                    <td>
                        <div class="alert alert-danger" role="alert">
                            <a href="borrar.php?id=<?php echo $row['SupplierID']?>&tabla=Suppliers&idcampo=SupplierID&page=proveedores.php">Borrar</a>
                        </div>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php include('./includes/footer.php');?>