<?php namespace App\models;
use App\models\ModelInterface;
use App\libraries\Database;
class ModelClass implements ModelInterface {
    private $dataBase;

    /**
     * @param $dataBase
     */
    public function __construct($dataBase)
    {
        $this->dataBase = Database::DbInstance();
    }


    public function insert($data)
    {
        try {
            $keys=join(",",array_keys($data)) ;
            $values=join(',',array_map(fn($item)=>":$item",array_keys($data)));
            $statement=$this->dataBase->prepare("insert into step1 ($keys) values ($values)");
            $statement->execute(
                $data
            );
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteById($id)
    {
        try {
        $statement=$this->dataBase->prepare("delete from step1 where id=:id");
        $statement->bindParam('id',$id);
        $statement->execute();
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchById($id)
    {
        try {


        $statement=$this->dataBase->prepare("select * from step1 where id=:id");
        $statement->bindParam('id',$id);
        $statement->execute();
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchByEmail($email)
    {
        try {
            $statement = $this->dataBase->prepare("select * from step1 where email=:email");
            $statement->bindParam('email', $email);
            $statement->execute();
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchAll($id)
    {
        try {
            $statement = $this->dataBase->prepare("select * from step1 ");
            $statement->bindParam('email', $email);
            $statement->execute();
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }

    //not fixed
    public function updateById($id,$newData)
    {
        try {
            $statement = $this->dataBase->prepare("update step1 ");
            $statement->bindParam('email', $email);
            $statement->execute();
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function updateByEmail($email,$newData)
    {
        try {
            $statement = $this->dataBase->prepare("select * from step1 ");
            $statement->bindParam('email', $email);
            $statement->execute();
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //
}