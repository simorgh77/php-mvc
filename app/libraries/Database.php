<?php

namespace App\libraries;
class Database{
    private string $host="localhost";
    private string $user="root";
    private string $pass="";
    private string $db_name="step1_php";
    protected static  $instance=null;
    protected static string|null $error=null;
    private function __construct()
    {
        try {
            self::$instance=new \PDO("mysql:host={$this->host};dbname={$this->db_name}",$this->user,$this->pass);
        }catch (\Exception $e){
           $this->error=$e->getMessage();
        }
    }
    public static function DbInstance(){
        if (is_null(self::$instance)){
             new Database();
             if (isset(self::$error)){
                 return self::$error;
             }
        }
        return self::$instance;
    }
}