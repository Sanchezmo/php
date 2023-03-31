<?php include('./includes/driverdb.php');
    if(isset($_GET['id']) && isset($_GET['tabla'])&& isset($_GET['idcampo'])&& isset($_GET['page'])){
        $id=$_GET['id'];
        $tabla=$_GET['tabla'];
        $idcampo=$_GET['idcampo'];
        $page=$_GET['page'];
        
        $query= "SELECT * FROM $tabla WHERE $idcampo = $id";
        $result_update=mysqli_query($conexion,$query);
       
    }?>
<?php include('./includes/header.php');?>
<?php include('./includes/navbar.php');?>
<div class="card">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">CP</th>
                <th scope="col">País</th>
                <th scope="col">UPDATE</th>
               
            </tr>
        </thead>
        <tbody>
            <form method="post" action="">
                <?php
            
            while ($row = mysqli_fetch_array($result_update)){?>

                <tr>
                    <th scope="row"><?php echo $row['CustomerID']?></th>
                    <td><input type="text" placeholder="<?php echo $row['CustomerName']?>"></td>
                    <td> <input type="text" placeholder="<?php echo $row['Address']?>"></td>
                    <td><input type="text" placeholder="<?php echo $row['City']?>"></td>
                    <td><input type="text" placeholder="<?php echo $row['PostalCode']?>"></td>
                    <td><input type="text" placeholder="<?php echo $row['Country']?>"></td>
                    <td>
                        <button type="submit" class="btn btn-success">UPDATE</button>

                    </td>

                </tr>
                <?php } ?>
            </form>
        </tbody>
    </table>
</div>

</div>
<?php include('./includes/footer.php');?>