<?php
namespace app\core;

class Router{
    protected array $route=[];
     public function get($path,$callback){
        $this->route['get'][$path]=$callback;
     }

     public function resolve(){
    
     }
}