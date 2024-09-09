<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Requset;
use app\models\RegisterModel;
class AuthController extends Controller{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Requset $requset){
        if ($requset->isPost()) {
            $registerModel=new RegisterModel();
            echo '<pre>';
            var_dump($requset->getBody());
            echo '</pre>';
            exit;
            return 'handle submited data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}