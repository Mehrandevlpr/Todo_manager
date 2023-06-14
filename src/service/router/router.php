<?php

namespace App\service\router;

use App\exception\router\routeClassNotFound;
use App\exception\router\routeMethodNotFound;
use App\exception\router\routeMiddlewareNotFound;
use App\exception\router\routeNotFound;
use App\service\request\request;
use App\service\view\view;

use function PHPUnit\Framework\isNull;

class router {
    
    

    const BASE_MIDDLEWARE = 'App\\middlware\\'; 
    const BASE_CONTROLLER = 'App\\controller\\'; 

    public static function route(){
        $request= new request();
        $allRoutes = getAllRoute();

        if(! in_array( $request->getCurrentRoute() , array_keys($allRoutes) ) ){

            view::renderError('notFound');
            $myfile = fopen( BASE_LOG_PATH."route\\logs.txt" , "a") or die( "Unable to open file!" );
            $txt = "user {$request->remote_add} : route no found is : ' " . $request->getCurrentRoute() . "' \r\n" ;
            fwrite( $myfile , $txt );
            fclose( $myfile );
            die();
        }

        $targetUri       = $allRoutes[ $request->request_uri ];
        [$class,$method] = explode( '@' , $targetUri['target'] );

        if( ! class_exists( self::BASE_MIDDLEWARE . $targetUri['middleware'] )  && ! isNull( $targetUri['middleware'] ) ){

            throw new routeMiddlewareNotFound('Middleware Not Found!');
            exit;
        }
        
        if(! class_exists( self::BASE_CONTROLLER . $class )){

            throw new routeClassNotFound('Controller Not Found!');
            exit;
        }
        
        $controllerFullName =  self::BASE_CONTROLLER . $class  ;
        $class = new $controllerFullName($request);

        if(! method_exists($class,$method)){

            throw new routeMethodNotFound('Method Not Found!');
        }

        $class->$method($request);
        
        
    }

    public static function has_method($method){
        return true;
    }

}

?>