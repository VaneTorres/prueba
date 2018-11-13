<?php
/**
 * Created by PhpStorm.
 * User: LAURA
 * Date: 12/11/2018
 * Time: 02:45 AM
 */
$db= conectar();
$sql=$db->query("SELECT * FROM form");
while($datos=$sql->fetch_array()){
    $dolar=$datos[4]*0.00031;
    $html="<tr class='info'> <td>" . $datos[0] . "</td><td>" . $datos[1] . "</td>
      <td>" . $datos[2] . "</td><td>".$datos[3] . "</td><td>" . $datos[4] . "</td><td>" . $dolar . "</td><td>
    <a href='?view=edit'><button id='editar'>Editar</button></a> </td></tr>";
    echo $html;
}
$db->close();
