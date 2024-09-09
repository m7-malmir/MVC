<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Requset;

class AuthController extends Controller{
    public function login(){
        return $this->render('login');
    }
    public function register(Requset $requset){
        if ($requset->isPost()) {
            return 'handle submited data';
        }

        return $this->render('register');
    }
}