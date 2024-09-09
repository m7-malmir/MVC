<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Requset;

class AuthController extends Controller{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Requset $requset){
        if ($requset->isPost()) {
            return 'handle submited data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}