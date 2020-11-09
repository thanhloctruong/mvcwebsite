<?php
    class ProductModel extends Database {
        public function GetProduct(){
            $qr = "SELECT * FROM T_SanPham";
        return mysqli_query($this->con, $qr);
        }
        
    }

?>