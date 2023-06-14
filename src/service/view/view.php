<?php

namespace App\service\view;

class view {


    public static function render($template,$data=[],$layout=null){

        $tempPath = str_replace('.','\\',$template);
        $fullPath = BASE_VIEW_PATH . $tempPath .'.php';
        if(!file_exists($fullPath) && !is_readable($fullPath)){
            self::renderError('error',$data);
        }
        ob_start();
        extract($data);
        include_once $fullPath ;
        $view = ob_get_clean();
        if( is_null( $layout ) )
             echo $view;
        
    }

    public static function renderError($template,$data=[]){

        $tempPath = str_replace('.','\\',$template);
        $fullPath = BASE_VIEW_PATH . 'error' . DIRECTORY_SEPARATOR . $tempPath .'.php';
        include_once $fullPath;

    }
}






?>