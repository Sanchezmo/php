<?php include('./includes/header.php'); ?>
<?php include('./includes/navbar.php');
session_start(); 
include('./includes/driverdb.php');

?>
<hr></hr>
<div class="container" style="background-color:; ">
    <div class="row" style="width:50%;margin-left:25%;">
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
</div>
<?php $querynotice='SELECT * FROM Articulos ORDER BY Id DESC LIMIT 3';
            $result=mysqli_query($conexion,$querynotice);
             while ($row = mysqli_fetch_array($result)){?>
<div class="container">
    <hr class="featurette-divider" id="<?php echo $row['Id']?>">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $row['Fecha']?> <span
                    class="text-muted"><?php echo $row['Titulo']?></span></h2>
            <p class="lead"><?php echo $row['Contenido']?></p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>

        </div>
    </div>
    <hr class="featurette-divider mb-1">
</div>
<?php }?>

<?php //include('./includes/wallet.php'); ?>
<?php include('./includes/footer.php'); ?>