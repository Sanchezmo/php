<?php include('./includes/header.php');?>
<?php include('./includes/navbar.php');?>
<?php include('./includes/driverdb.php');
    if(isset($_GET['id']) && isset($_GET['tabla'])&& isset($_GET['idcampo'])&& isset($_GET['page'])){
        $id=$_GET['id'];
        $tabla=$_GET['tabla'];
        $idcampo=$_GET['idcampo'];
        $page=$_GET['page'];
        
        $query= "DELETE FROM $tabla WHERE $idcampo = $id";
        
        //$result_delete=mysqli_query($conexion, $query);
        if(!$result_delete){
            
        }else{
       
           header("Location: $page");
        }
        
       
    }
?>
<div><?php echo $query;?></div>
<div><?php echo $page;?></div>


<?php include('./includes/footer.php');?>