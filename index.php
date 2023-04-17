<?php include('./includes/header.php'); ?>
<?php include('./includes/navbar.php');
session_start(); 
include('./includes/driverdb.php');

?>
<div class="container-fluid" style="background-color:darkblue">
    <div class="row">
        <div class="col">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/foto-gratis/accion-jugador-futbol-estadio_1150-14598.jpg?w=1380&t=st=1681721447~exp=1681722047~hmac=41f1773453a188f18304d1572a38c34becb4cbb9448f619827c61a9a71595291"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/foto-gratis/foto-primer-pelota-tenis-que-golpea-red-concepto-deporte_8353-6582.jpg?w=1380&t=st=1681721247~exp=1681721847~hmac=2d93149b4c553bb6153e0786c7deea0903ad70144cd89b6ae969bcd0e91ef2b9"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/foto-gratis/futbol-concepto-exito-meta_1150-5276.jpg?w=1380&t=st=1681721463~exp=1681722063~hmac=5d436d058c8a878d89aac39e8356b98a01e84ac4fa2a867a71c147060bdd931f"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <?php $querynotice='SELECT * FROM Articulos';
            $result=mysqli_query($conexion,$querynotice);
             while ($row = mysqli_fetch_array($result)){?>
            <div class="card"  id="<?php echo $row['Id']?>">
                
                <div class="card-body">
                
                    <h5 class="card-title" style="text-aling:center;color:blue"><img src="https://cdn.pixabay.com/photo/2016/03/31/14/37/check-mark-1292787_640.png" style="width: 10rem;"class="card-img-top" alt="..."><?php echo $row['Titulo']?></h5>
                    <p class="card-text"><?php echo $row['Contenido']?></p>

                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<?php //include('./includes/wallet.php'); ?>
<?php include('./includes/footer.php'); ?>