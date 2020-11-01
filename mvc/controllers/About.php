<?php
    class About extends Controller{
        function Hi(){
            $this->view('MasterLayout',["page"=>'about']);
        }
    }
?>