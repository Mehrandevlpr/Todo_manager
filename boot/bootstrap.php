<?php


$path =__DIR__;
$path = str_replace( 'boot' , '' , $path );
define( 'BASE_PATH' , realpath( $path ) . DIRECTORY_SEPARATOR );
define( 'STORAGE_PATH' , BASE_PATH.'upload' . DIRECTORY_SEPARATOR );
define( 'BASE_VIEW_PATH' , realpath( $path.'template') . DIRECTORY_SEPARATOR );
define( 'BASE_LOG_PATH' , realpath( $path.'log') . DIRECTORY_SEPARATOR );
define( 'BASE_URL' , 'http://todo/' );
define( 'SANITIZE_ALL' , 0 );

include BASE_PATH . 'src/helper/functions.php';



?>