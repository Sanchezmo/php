<?php include('./includes/header.php');?>
<?php include('./includes/navbar.php');?>
<?php include('./includes/driverdb.php');
    if(isset($_POST['CustomerID']) && isset($_POST['CustomerName'])&& isset($_POST['Address'])&& isset($_POST['City'])&& isset($_POST['PostalCode'])&& isset($_POST['Country'])){
        $id=$_POST['CustomerID'];
        $name=$_POST['CustomerName'];
        $address=$_POST['Address'];
        $city=$_POST['City'];
        $cp=$_POST['PostalCode'];
        $country=$_POST['Country'];
        
        $query= "UPDATE Customers SET CustomerName='$name', Address='$address', City='$city', Country='$country', PostalCode='$cp' WHERE CustomerID=$id";
        
        mysqli_query($conexion,$query);
        header("Location: clientes.php");
    
       
    }
    if(isset($_POST['CustomerIDI']) && isset($_POST['CustomerNameI'])&& isset($_POST['AddressI'])&& isset($_POST['CityI'])&& isset($_POST['PostalCodeI'])&& isset($_POST['CountryI'])){
        $idi=$_POST['CustomerIDI'];
        $namei=$_POST['CustomerNameI'];
        $addressi=$_POST['AddressI'];
        $cityi=$_POST['CityI'];
        $cpi=$_POST['PostalCodeI'];
        $countryi=$_POST['CountryI'];
        
        $queryi= "INSERT INTO Customers (CustomerID,CustomerName, Address, City, PostalCode, Country) VALUES('$idi','$namei','$addressi','$cityi','$cpi','$countryi')";
        
        mysqli_query($conexion,$queryi);
        header("Location: clientes.php");
    
       
    }?>

<div class="card">
    <h1>Clientes</h1>
</div>
<div class="card">
    <form method="post" action="clientes.php">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">CP</th>
                    <th scope="col">País</th>
                    <th scope="col">Insertar</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
             $query = 'SELECT count(*) as cuenta FROM Customers';
            $result_count= mysqli_query($conexion , $query);
            $array_id=mysqli_fetch_array($result_count);
            $lastid=1+$array_id['cuenta'];
            ?>
                    <td><input name="CustomerIDI" type="text" value="<?php echo $lastid; ?>" size="1"></td>
                    <td><input name="CustomerNameI" type="text" placeholder="valor"></td>
                    <td><input name="AddressI" type="text" placeholder="valor"></td>
                    <td><input name="CityI" type="text" placeholder="valor"></td>
                    <td><input name="PostalCodeI" type="text" placeholder="valor"></td>
                    <td><input name="CountryI" type="text" placeholder="valor"></td>
                    <td><button type="submit" name="insert" class="btn btn-warning">INSERTAR</button></td>
                </tr>
            </tbody>
        </table>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">CP</th>
                <th scope="col">País</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>

            <?php $query2='SELECT * FROM Customers';
            $result_clientes=mysqli_query($conexion,$query2);
             while ($row = mysqli_fetch_array($result_clientes)){?>
            <form method="post" action="clientes.php" id="<?php echo $row['CustomerID']?>">
                <tr>
                    <th scope="row"><?php echo $row['CustomerID']?></th>
                    <input name="CustomerID" type="hidden" value="<?php echo $row['CustomerID']?>">
                    <td><input name="CustomerName" type="text" value="<?php echo $row['CustomerName']?>"></td>
                    <td><input name="Address" type="text" value="<?php echo $row['Address']?>"></td>
                    <td><input name="City" type="text" value="<?php echo $row['City']?>"></td>
                    <td><input name="PostalCode" type="text" value="<?php echo $row['PostalCode']?>"></td>
                    <td><input name="Country" type="text" value="<?php echo $row['Country']?>"></td>

                    <td>
                       
                        <button type="submit" name="<?php echo $row['CustomerID']?>"
                            class="btn btn-success">UPDATE</button>
                    </td>
                    <td>
                        <input type="button"
                            onclick="location.href='borrar.php?id=<?php echo $row['CustomerID']?>&tabla=Customers&idcampo=CustomerID&page=clientes.php';"
                            value="BORRAR" class="btn btn-danger" />

                </tr>
            </form>
            <?php } ?>

        </tbody>
    </table>
</div>


<?php include('./includes/footer.php');?>