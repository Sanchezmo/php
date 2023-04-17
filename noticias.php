<?php include('./includes/header.php');?>
<?php include('./includes/navbar.php');?>
<?php include('./includes/driverdb.php');
session_start();
if($_SESSION['login']!="OK"){header("Location: loginadmin.php");}
    if(isset($_POST['Id']) && isset($_POST['Fecha'])&& isset($_POST['Titulo'])&& isset($_POST['Contenido'])){
        $id=$_POST['Id'];
        $fecha=$_POST['Fecha'];
        $titulo=$_POST['Titulo'];
        $contenido=$_POST['Contenido'];
                
        $query= "UPDATE Articulos SET Titulo='$titulo', Fecha='$fecha', Contenido='$contenido' WHERE Id=$id";
        echo $query;
        mysqli_query($conexion,$query);
        header("Location: noticias.php");
    
       
    }
    if(isset($_POST['FechaI'])&& isset($_POST['TituloI'])&& isset($_POST['ContenidoI'])){
        
        $fechai=$_POST['FechaI'];
        $tituloi=$_POST['TituloI'];
        $contenidoi=$_POST['ContenidoI'];
        
        $queryi= "INSERT INTO Articulos (Fecha, Titulo, Contenido) VALUES('$fechai','$tituloi','$contenidoi')";
        echo $queryi;
        mysqli_query($conexion,$queryi);
        header("Location: noticias.php");
    
       
    }?>
<div class="container-fluid">
    <div class="card">
        <h1>Noticias</h1>
    </div>
    <div class="card">
        <form method="post" action="noticias.php">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">FECHA</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">CONTENIDO</th>
                        <th scope="col">INSERTAR</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
             $query = 'SELECT count(*) as cuenta FROM Articulos';
            $result_count= mysqli_query($conexion , $query);
            $array_id=mysqli_fetch_array($result_count);
            $lastid=1+$array_id['cuenta'];?>



                        <td><input name="FechaI" type="date" require></td>
                        <td><input name="TituloI" type="text" require placeholder="valor" size="25"></td>
                        <td><input name="ContenidoI" type="text" require placeholder="valor" size="110"></td>

                        <td><button type="submit" name="insert" require class="btn btn-warning">INSERTAR</button></td>
                        <td><input name="IdI" type="hidden" require value="<?php echo $lastid; ?>" size="1"></td>

                    </tr>
                </tbody>
            </table>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">FECHA</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">CONTENIDO</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">BORRAR</th>
                </tr>
            </thead>
            <tbody>

                <?php $query2='SELECT * FROM Articulos';
            $result_clientes=mysqli_query($conexion,$query2);
             while ($row = mysqli_fetch_array($result_clientes)){?>
                <form method="post" action="noticias.php" id="<?php echo $row['Id']?>">
                    <tr>

                        <input name="Id" type="hidden" value="<?php echo $row['Id']?>">
                        <td><input name="Fecha" type="date" value="<?php echo $row['Fecha']?>"></td>
                        <td><input name="Titulo" type="text" value="<?php echo $row['Titulo']?>" size="25"></td>
                        <td><input name="Contenido" type="text" value="<?php echo $row['Contenido']?>" size="100"></td>


                        <td>

                            <button type="submit" name="<?php echo $row['Id']?>" class="btn btn-success">UPDATE</button>
                        </td>
                        <td>
                            <input type="button"
                                onclick="location.href='borrar.php?id=<?php echo $row['Id']?>&tabla=Articulos&idcampo=Id&page=noticias.php';"
                                value="BORRAR" class="btn btn-danger" />

                    </tr>
                </form>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<?php include('./includes/footer.php');?>