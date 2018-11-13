<?php
/**
 * Created by PhpStorm.
 * User: LAURA
 * Date: 27/08/2018
 * Time: 01:44 AM
 */

    function conectar(){
        $con=mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME)
        or die("Error con la conexion a la base de datos".mysqli_error());
        return $con;
    }


