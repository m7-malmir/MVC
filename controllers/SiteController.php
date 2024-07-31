<?php
namespace app\controllers;

use app\core\Router;

class SiteController{
    public static function contact(){
       // Router->resolve();
       return 'CONTACT';
    }
    public static function handleContact(){
        return 'handling submiting data';
    }
}