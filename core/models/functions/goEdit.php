<?php
/**
 * Created by PhpStorm.
 * User: LAURA
 * Date: 12/11/2018
 * Time: 11:20 PM
 */
$db= conectar();
$process=$db-> real_escape_string($_POST['process']);//Escapa las caracteristicas especiales de la cadena
$description=$db-> real_escape_string($_POST['description']);
$presupuesto=$db-> real_escape_string($_POST['presupuesto']);
$date=$db-> real_escape_string($_POST['date']);
$option=$db-> real_escape_string($_POST['option']);
$sql=$db->query("SELECT numprocess FROM form WHERE numprocess='$process'");
$result=$sql->fetch_row();
if($result != 0 ){
    $db->query("UPDATE form SET numprocess='$process', description='$description', date='$date', sede='$option', money='$presupuesto'  WHERE numprocess='$process' ");
    $html = 1;
}else{
    $html = "<div class='alert alert-dismissible alert-danger'>
        <strong>ERROR!</strong> <a>El número de procesos ingresado no existe</a> 
        </div>";

}
$db->close();
echo $html;
