<?php
class App{

    // www......../ c  / A./ param..

    protected $controller="Home";
    protected $action;
    protected $params = [];

    function __construct(){
        $arr = $this -> UrlProcess();
        //print_r($arr);
        //xu li contoller
        if(file_exists("./mvc/controllers/".$arr[0].".php")){
            $this ->controller = $arr[0];
            //huy gia tri thu 0
            unset($arr[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        // xu li action
        if(isset($arr[1])){
            if(method_exists($this->controller, $arr[1])){
                $this ->action = $arr[1];
            };
            //huy gia trij thu 1
            unset($arr[1]);
        }
        // xu li params
        $this-> params = $arr ? array_values($arr):[];
        call_user_func_array([$this->controller,$this->action,$this->params]);
    }
    function UrlProcess(){
        if( isset($_GET["url"])){
            //$u = $_GET["url"];
            // lam gon tach ki tu la
            return explode("/", filter_var(trim($_GET["url"],"/")));
        }
        

    }

}

?>