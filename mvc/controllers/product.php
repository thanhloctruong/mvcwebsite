<?php
    class Product extends Controller{
        function Hi(){
            $this->view('MasterLayout',["page"=>'product']);
        }
        function laptop(){
        $qr = "SELECT * FROM T_SanPham";
        return mysqli_query($this->con, $qr);
        }
    }
?>