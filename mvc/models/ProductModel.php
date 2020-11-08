<?php
    class ProductModel{
        public function GetTitle(){
            $qr = "SELECT * FROM T_SanPham";
        return mysqli_query($this->con, $qr);
        }
        
    }

?>