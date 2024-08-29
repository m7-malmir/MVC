<?php

namespace app\core;
use app\core\Requset;
use app\core\Router;
use app\core\Response;
//use app\core\Controller;

class Application{
    public static string $ROOT_DIR;
    public Router $router;
    public Requset $request;
    public Response $response;
    public static Application $app; 
    public function __construct($rootPath){
        self::$ROOT_DIR=$rootPath;
        self::$app=$this;
        $this->request=new Requset();
        $this->response=new Response();
        $this->router=new Router($this->request, $this->response);
    }
    public function run(){
       echo $this->router->resolve();
    }
}