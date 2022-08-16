<?php

    class login_model extends DB{

        public function login($username){
            $sql = "SELECT * FROM account WHERE UserName = '$username'";
            return mysqli_query($this->con, $sql);
        }
        
    }


?>