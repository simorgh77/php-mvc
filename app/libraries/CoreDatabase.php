<?php

class CoreDatabase{
    private string $host="mysql";
    private string $user="root";
    private string $pass="root";
    private string $db_name="step1_php";
    protected static  $instance=null;
    protected static string|null $error=null;


    private function __construct()
    {

        try {
            $conn=new PDO("mysql:host=localhost",$this->user,$this->pass);
            var_dump($conn);
            die();
        }catch (Exception $e){
            var_dump($e->getMessage());
           $this->error=$e->getMessage();
        }
    }
    public static function DbInstance(){

        if (is_null(self::$instance)){
             new CoreDatabase();
             if (isset(self::$error)){
                 return self::$error;
             }
        }
        return self::$instance;
    }
}