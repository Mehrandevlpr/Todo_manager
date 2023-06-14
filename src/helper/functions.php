<?php


function basePath($path) {
    return realpath(\BASE_PATH . DIRECTORY_SEPARATOR . $path);
}
function getAllRoute(){
    return include_once BASE_PATH . 'configs/web.php';
}
function getRouteconfigs($key){
    $configs =  include BASE_PATH . 'configs/web.php';
    return $configs[$key];
}
function getPdoconfigs($key){
    $configs =  include BASE_PATH . 'configs/pdo.php';
    return $configs[$key];
}
function BaseTemplate(){
    return include_once BASE_PATH . 'configs/web.php';
}
function baseUrl($uri=''){
    return BASE_URL . "$uri";
}
function basetemplateUrl($uri=''){
    return baseUrl("template/$uri");
}
function basetemplatePath($uri=''){
    return basePath("template". DIRECTORY_SEPARATOR ."$uri");
}
// function getAllRoute(){
//     return include_once BASE_PATH . 'configs/web.php';
// }


?>