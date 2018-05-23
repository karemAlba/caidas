<?php 
$user = trim($_POST['user']);
$pass = trim($_POST['pass']);
$ok= 1;
if($user=="" or $pass=="")
{
$mensaje = "Favor de llenar los campos";
print "<meta http-equiv='refresh' content='0;url=../index.php?mensaje=$mensaje'>";
$ok= 0;
}

include ('conn.php');
include ('classusuarios.php');
$usuarios = new usuarios();
$usuarios->setuser($user);
$usuarios->setpass($pass);
$usuarios->setrol ($rol);

$resultado = $usuarios->searchbypass();
if($resultado==0)
{
$mensaje = "Usuario o contraseña invalido";
print "<meta http-equiv='refresh' content='0;url=../index.php>";

$ok= 0;
}
if ($ok ==1)
{
$idu   = $usuarios->getidu();
$rol   = $usuarios->getrol();

session_start();
$_SESSION['iduses']=$idu;
$_SESSION['auth']=$rol;

$auth= $_SESSION['auth'];
    if ($auth == 1) {
        header("location: ../caidas.php");
    } elseif ($auth == 0) {
    	header("location: ../index.php");
    }
}
?> 