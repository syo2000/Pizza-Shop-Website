<?php

    class pizza_model extends DB {
        
        public function get(){
            $sql = "SELECT
            c.ProductID as ProductID,
            c.ComboName as Combo,
            c.Description as Descript,
            c.Price as Price
            FROM pizza c";
            return mysqli_query($this->con,$sql);
        }

        public function price($productid){
            $sql = "SELECT * FROM pizza WHERE ProductID = '$productid'";
            return mysqli_query($this->con, $sql);
        }
    }
?>