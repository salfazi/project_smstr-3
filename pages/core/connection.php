<?php
date_default_timezone_set( 'Asia/Jakarta' );
//Atur zona waktu di PHP

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'db_laundry';

$db_connect = mysqli_connect( $DBHOST, $DBUSER, $DBPASSWORD, $DBNAME );

if ( mysqli_connect_error() ) {
    header( 'Location: ../../../pages-error-404.html' );
}

?>