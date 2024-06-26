<?php
class Requset{





    public function getPath(){
        $path=$_SERVER['REQUEST_URI'] ?? '/';
        $position=strpos($path,'?');
        
    }
    public function getMethod(){
        
    }
}