<?php

use App\helpers\ViewHelper;
use App\models\ModelClass;
class Pages extends ViewHelper{
 public $dataView=[];
    public function login(){
        $this->loginPage();
    }
    public function register(){
     $this->RegisterPage();
    }
}