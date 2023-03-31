<?php 
if(isset($_POST['user'])&&isset($_POST['password'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    session_start();
    //$_SESSION['mensaje']="Usuario o contraseña incorrecta";
    try{
        $conexion=mysqli_connect(
        'localhost',
        $user,
        $password,
        'Northwind'
    );
        if(isset($conexion)) {
        header("Location: index.php");
        }
        
    }catch(Exception $e){
    
    $_SESSION['mensaje']='Usuario o contraseña incorrecta';
    header("Location: login.php");
    }

}else{
    $_SESSION['mensaje']='No se admiten campos vacios';
    header("Location: login.php");
    
}
?>