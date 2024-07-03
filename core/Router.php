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
      $layoutContent=$this->layoutContent();
      $viewContent=$this->renderOnlyView($view);
      return str_replace('{{content}}',$viewContent,$layoutContent);
     }
     protected function layoutContent(){
      ob_start();
      include_once Application::$ROOT_DIR."/views/layouts/main.php";
      return ob_get_clean();
     }
     protected function renderOnlyView($view){
      ob_start();
      include_once Application::$ROOT_DIR."/views/$view.php";
      return ob_get_clean();
     }
}