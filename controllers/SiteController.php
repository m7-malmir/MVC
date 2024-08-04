<?php
namespace app\controllers;

use app\core\Application;
use app\core\Router;
use app\core\controller;
class SiteController extends Controller{
    public static function home(){
       $params=[
        'name'=>"arcturus"
       ];
       return $this->render('home',$params);
    }
    public static function contact(){
       return $this->render('contact');
    }
    public static function handleContact(){
        return 'handling submiting data';
    }
}