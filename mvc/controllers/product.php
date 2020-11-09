<?php
    class Product extends Controller{
        function Hi(){
            $this->view('MasterLayout',["page"=>'product'
            ]);
        }
        
    }
?>