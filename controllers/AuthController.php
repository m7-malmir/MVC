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
        $registerModel=new RegisterModel();
        if ($requset->isPost()) {
            
           $registerModel->loadData($requset->getBody());
     
           if ($registerModel->validate() && $requset->register()) {
                return 'Success';
           }
           echo '<pre>';
           var_dump($registerModel->errors);
           echo '</pre>';
           exit;
           return $this->render('register',[
            'model'=>$registerModel
           ]);
        }
        $this->setLayout('auth');
        return $this->render('register',[
            'model'=>$registerModel
           ]);
    }
}