<?php
namespace app\core;

use Requset;

class Router{
    public Requset $request;
    protected array $route=[];
     public function get($path,$callback){
        $this->route['get'][$path]=$callback;
     }

     public function resolve(){
        
     }
}