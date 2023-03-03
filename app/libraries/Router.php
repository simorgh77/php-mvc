<?php

namespace App\libraries;
class Router{
   protected $url;
  protected $currentController='Pages';
  protected $currenMethod="login" ;
  protected $params=[];
public function __construct()
{
    $this->getUrl();
    if (isset($this->url[1]))
    if (file_exists("../app/controllers/" . ucwords($this->url[1]).'.php')){
       $this->currentController=ucwords($this->url[1]);
        unset($this->url[0]);
        unset($this->url[1]);
      $this->url=array_values($this->url);
    }
    require_once '../app/controllers/'.$this->currentController.".php";

    $this->currentController=new $this->currentController;

;
    if (isset($this->url[0])){
        if (method_exists($this->currentController,$this->url[0])){
            $this->currenMethod=$this->url[0];

                unset($this->url[0]);
        }
    }

    $this->params=$this->url?array_values($this->url):[];

  call_user_func_array([$this->currentController,$this->currenMethod],$this->params);


}

    public function getUrl(){

      $fullUrl=$_SERVER["REQUEST_URI"];
      $url=explode('/',$fullUrl);
      $url=array_filter($url,function ($item){
        if ($item !==''){
            return $item;
        }
      });
;
      $url=array_values($url);

      $this->url=$url;
  }
}