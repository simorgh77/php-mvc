<?php

namespace App\libraries;
class Core{
   protected $url;
  protected $currentController='HomePage';
  protected $currenMethod="index" ;
  protected $params=[];
public function __construct()
{
    $this->getUrl();

    if (file_exists("../app/controllers/" . ucwords($this->url[2]).'.php')){
       $this->currentController=ucwords($this->url[2]);
    }
    require_once '../controllers/'.$this->currentController.".php";


}

    public function getUrl(){

      $fullUrl=$_SERVER["REQUEST_URI"];
      $url=explode('/',$fullUrl);
      unset($url[0]);
      $this->url=$url;
  }
}