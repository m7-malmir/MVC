<?php

namespace app\core;
use app\core\Requset;
use app\core\Router;
class Application{
    public Router $router;
    public Requset $request;
    public function __construct(){
     
        $this->request=new Requset();
        $this->router=new Router($this->request);
    }
    public function run(){
        $this->router->resolve();
    }
}