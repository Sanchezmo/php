<?php include('./includes/header.php'); ?>
<?php include('./includes/navbar.php');
session_start(); 
include('./includes/driverdb.php');

function desglosarFecha($fecha){
    $fecha=explode('-',$fecha);
    nombraMes($fecha);
    return ($fecha[2]." ".nombraMes($fecha[1])." ".$fecha[0]);
}
function nombraMes($mes){
    if($mes==1){
        return "Enero";
    }else if($mes==2){
        return "Febrero";
    }else if($mes==3){
        return "Marzo";
    }else if($mes==4){
        return "Abril";
    }else if($mes==5){
        return "Mayo";
    }else if($mes==6){
        return "Junio";
    }else if($mes==7){
        return "Julio";
    }else if($mes==8){
        return "Agosto";
    }else if($mes==9){
        return "Septiembre";
    }else if($mes==10){
        return "Octubre";
    }else if($mes==11){
        return "Noviembre";
    }else if($mes==12){
        return "Diciembre";
    }else{

    }
}

?>
<hr>
</hr>
<div class="container" style="margin-top:5%; ">
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
            <h2 class="featurette-heading">
               <?php echo desglosarFecha($row['Fecha'])?> <span class="text-muted"><?php echo $row['Titulo']?></span>
            </h2>
            <p class="lead"><?php echo $row['Contenido']?></p>
        </div>
        <div class="col-md-5">
            <?php if($row['Extension']=='jpg'||$row['Extension']=='png'){
                        $img="<img width='320 heigth=240'src='".$row['Archivo']."'>";
                        echo $img;
                         
        }elseif($row['Extension']=='mp4'){
                    $video="<video width='320 heigth=240'><source src='".$row['Archivo']."' type='video/mp4'><source src='".$row['Archivo']."' type='video/ogg'>Su explorador no soporta video</video>";
                    echo $video;
        }elseif($row['Extension']=='vacio'){
                        //no hay contenido
                }else{
                    $img="<img width='320 heigth=240' src='https://cdn.pixabay.com/photo/2017/02/12/21/29/false-2061132_640.png'>";
                    echo $img;
                          
            }?>
        </div>
    </div>
    <hr class="featurette-divider mb-1" style="margin-top:5%">
</div>
<?php }?>


<?php //include('./includes/wallet.php'); ?>
<?php include('./includes/footer.php'); ?>