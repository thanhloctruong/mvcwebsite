<?php
class Home extends Controller{
    function Hi(){
        $acan = $this->model("ProductModel");
        echo $acan->GetProduct();
        $this->view("MasterLayout",["page"=>"product",
        "SP"=>$acan->GetProduct()
        
        ]);
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