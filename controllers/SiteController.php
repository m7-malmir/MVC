<?php
namespace app\controllers;

use app\core\Application;
use app\core\Router;

class SiteController{
    public static function contact(){
       $params=[
        'name'=>"arcturus"
       ];
       return Application::$app->router->renderView('contact',$params);
    }
    public static function handleContact(){
        return 'handling submiting data';
    }
}