<?php
namespace app\core;
class Requset{

    public function getPath(){
        $path=$_SERVER['REQUEST_URI'] ?? '/';
        $position=strpos($path,'?');

        if($position===false){
            return $path;
        }

        return substr($path,0,$position);
     
    }
    public function getMethod(){
        
    }
}