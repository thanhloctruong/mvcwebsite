<?php
class Home extends Controller{
    function Hi(){
        $acan = $this->model("ProductModel");
        echo $acan->GetTitle();
        $this->view("MasterLayout",["page"=>"product"]);
    }
    function Contact(){
        $this->view('MasterLayout',["page"=>'contact']);
    }
    function Show(){
        //call model


        // call views
    }
}
?>