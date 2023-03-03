<?php

namespace App\models;
interface ModelInterface{
    public function insert($data);
    public function deleteById($id);
    public function fetchById($id);
    public function fetchByEmail($email);
    public function fetchAll($id);
    public function updateById($id,$newData);
    public function updateByEmail($email,$newData);
}