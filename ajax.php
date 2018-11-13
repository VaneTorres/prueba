<?php
/**
 * Created by PhpStorm.
 * User: Vanessa
 * Date: 01/06/2018
 * Time: 11:43 PM
 */

if ( $_POST ) {
    require('core/core.php');
    switch ( isset( $_GET[ 'mode' ] ) ? $_GET[ 'mode' ] : null ) {
        case 'form';
            require('core/models/functions/goForm.php');
            break;
        case 'formlogin';
            require( 'core/models/functions/goLogin.php' );
        break;
        case 'edit';
            require( 'core/models/functions/goEdit.php' );
        break;
        default:
            header( 'location: ?view=login' );
            break;
    }
}