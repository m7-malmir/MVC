<?php
namespace app\core;

use Requset;
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