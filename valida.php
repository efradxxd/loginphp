
<?php session_start();
if(isset($_SESSION['usuario'])){
    header('Location: principal.php');
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    require('conexion.php');
    $consulta = $conexion ->prepare('SELECT * FROM USUARIOS WHERE USUARIO=:usuario AND PASS=:password');
    $consulta = execute(array(':usuario')=>$usuario,':password'=>$password);

    $resultado= $consulta ->fecth();
    if($resultado!==false){
        $_SESSION['usuario']=$usuario;
        header('Location: principal.php');
    }else{
        header('Location: index.php');
    }
}
?>