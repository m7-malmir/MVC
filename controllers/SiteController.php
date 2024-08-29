<?php
namespace app\controllers;

use app\core\Application;
use app\core\Router;
use app\core\controller;
use app\core\Requset;

class SiteController extends Controller{
    public  function home(){
       $params=[
        'name'=>"arcturus"
       ];
       return $this->render('home',$params);
       //return Application::$app->router->renderView('home',$params);
    }
    public  function contact(){
       return $this->render('contact');
       //return Application::$app->router->renderView('contact');
    }
    public function handleContact(Requset $requset){
       $body = $request->getBody();
      echo '<pre>';
      var_dump($body);
      echo '</pre>';
      exit;
      return 'handling submiting data';
    }
}