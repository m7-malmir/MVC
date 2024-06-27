<?php
namespace app\core;

use app\core\Requset;

class Router{
    public Requset $request;
    protected array $route=[];
    public function __construct($request){
      $this->request=$request;
    }
     public function get($path,$callback){
        $this->route['get'][$path]=$callback;
     }

     public function resolve(){
        $this->request->getPath();
     }
}