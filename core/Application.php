<?php

namespace app\core;
use app\core\Requset;
use app\core\Router;
class Application{
    public static string $ROOT_DIR;
    public Router $router;
    public Requset $request;
    public function __construct($rootPath){
        self::$ROOT_DIR=$rootPath;
        $this->request=new Requset();
        $this->router=new Router($this->request);
    }
    public function run(){
       echo $this->router->resolve();
    }
}