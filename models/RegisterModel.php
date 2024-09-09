<?php
namespace app\models;
use app\core\Model;

class RegisterModel extends Model{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function register($data){
        echo 'creating new user';
    }


}



