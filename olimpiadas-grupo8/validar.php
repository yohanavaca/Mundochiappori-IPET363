<?php

//inicia la sesion

session_start();

//trae los datos ingresados

$usuario_session = $_POST['usuario'];
$password_session= $_POST['password'];

//verifica si los datos ingresados coinciden con los de la base

if($usuario_session=='admin' && $password_session=='espe363'){
  $_SESSION['administrador'] = $usuario_session;
  header("Location: administrador.php#session");
} else {
  echo "incorrecto";
}  




?>
