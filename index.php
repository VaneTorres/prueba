<?php
/**
 * Created by PhpStorm.
 * User: LAURA
 * Date: 25/08/2018
 * Time: 05:25 PM
 */

require('core/core.php');
if (isset( $_GET[ 'view' ] ) and file_exists( 'core/controllers/'.$_GET['view'].'Controller.php' )) {
    include ('core/controllers/'.$_GET['view'].'Controller.php' );
} else{
    echo "Ups! Esta página no existe.";
}
