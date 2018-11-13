<?php
/**
 * Created by PhpStorm.
 * User: LAURA
 * Date: 12/11/2018
 * Time: 09:29 PM
 */
$db= conectar();
$users=$db-> real_escape_string($_POST['users']);//Escapa las caracteristicas especiales de la cadena
$password=$db-> real_escape_string($_POST['password']);
$sql=$db->query("SELECT * FROM user");
$datos=$sql->fetch_array();
if($datos[1]==$users and $datos[2]==$password){
    $html=1;
}else{
    $html = "<div class='alert alert-dismissible alert-danger'>
        <strong>ERROR!</strong> <a>El usuario o la contraseña es incorrecta</a>
        </div>";
}
echo $html;
$db->close();