<?php

use App\models\ModelClass;

require_once "../models/ModelClass.php";
class LoginController{
    protected  $model;
    public function __construct()
    {
       $this->model = new ModelClass();
        return $this;
    }

    public function validateUser(string $email)
    {
       return $this->model->fetchByEmail($email);
    }
}


//if($_SERVER["REQUEST_METHOD"]=="POST"){
    //$mydata = file_get_contents("php://input");
//$mydata=get_object_vars(json_decode($mydata));
//$email=$mydata["email"];
//$password=$mydata["password"];

    $req=new LoginController();

    $req->validateUser("tahakhorasani77@gmail.com");
//}
//else{
//    header("Location:/public/");
//}

