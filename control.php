<?php 
if(isset($_POST['user'])&&isset($_POST['password'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    session_start();
    
    try{
        $conexion=mysqli_connect(
        'localhost',
        $user,
        $password,
        'Northwind'
    );
        if(isset($conexion)) {
            $_SESSION['login']='OK';
        header("Location: noticias.php");
        
        }
        
    }catch(Exception $e){
    
    $_SESSION['mensaje']='Usuario o contraseña incorrecta';
    header("Location: loginadmin.php");
    $_SESSION['login']='NO';
    }

}else{
    $_SESSION['mensaje']='No se admiten campos vacios';
    $_SESSION['login']='NO';
    
    
}
?>