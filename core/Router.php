<?php
namespace app\core;

use app\core\Requset;

class Router{
    public Requset $request;
    protected array $routes=[];
    public function __construct($request){
      $this->request=$request;
    }
     public function get($path,$callback){
        $this->routes['get'][$path]=$callback;
     }

     public function resolve(){
       $path= $this->request->getPath();
       $method=$this->request->getMethod();
      $callback=$this->routes[$method][$path] ?? false;
      if($callback===false){
        return 'not found';
      }
      if(is_string($callback)){
        return $this->renderView($callback);
      }
    return call_user_func($callback);
     }
     public function renderView($view) {
      include_once __DIR__."/../views/$view.php";
     }
}