<?php
/**
 * Created by PhpStorm.
 * User: LAURA
 * Date: 27/08/2018
 * Time: 01:28 AM
 */
$db= conectar();
$process=$db-> real_escape_string($_POST['process']);//Escapa las caracteristicas especiales de la cadena
$description=$db-> real_escape_string($_POST['description']);
$presupuesto=$db-> real_escape_string($_POST['presupuesto']);
$date=$db-> real_escape_string($_POST['date']);
$option=$db-> real_escape_string($_POST['option']);
$sql=$db->query("SELECT numprocess FROM form WHERE numprocess='$process'");
$result=$sql->fetch_row();
if($result == 0 ){
    $db->query("INSERT INTO form (numprocess, description, date, sede, money) VALUES ('$process','$description','$date','$option','$presupuesto')");
    $html = 1;
}else{
        $html = "<div class='alert alert-dismissible alert-danger'>
        <strong>ERROR!</strong> <a>El número de procesos ingresado</a> ya existe.
        </div>";

}
$db->close();
echo $html;
