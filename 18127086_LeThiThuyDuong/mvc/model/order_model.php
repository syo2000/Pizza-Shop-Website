<?php

    class order_model extends DB {
        function generate_row_ID($table)
        {
    
            $querry = "select max(OrderID) as maxID from $table";
    
            $data = mysqli_fetch_array(mysqli_query($this->con,$querry));
            
            return $data[0];
        }
        public function get(){
            $sql = "SELECT 
            o.OrderID as OrderID , 
            o.CustomerName as CustomerName, 
            o.Phone as Phone,
            o.Address as Address,
            o.CreatedTime as CreatedTime,
            o.Status as Status,
            o.ModifiedTime as ModifiedTime,
            o.Quantity as Quantity,
            o.Amount as Amount,
            o.RegisterCode as RegisterCode,
            p.ComboName as Combo,
            p.Price as Price,
            p.ProductID as ProductID 
            FROM pizza p 
            join donhang  o 
            on p.ProductID = o.ProductID";
            return mysqli_query($this->con,$sql);
        }
        public function insert($POST, $amount){
            $OrderID = $this->generate_row_ID('donhang') + 1;
            $RegisterCode = abs( crc32( uniqid() ) );
            $CustomerName = $POST["CustomerName"];
            $Phone = $POST["Phone"];
			$Address = $POST["Address"];
			$ProductID = $POST["ProductID"];
			$Quantity = $POST["Quantity"];
			$Note = $POST["Note"];
            $sql = "INSERT INTO `donhang` (OrderID, CustomerName, Phone, Address, CreatedTime, Status, ProductID, Quantity, Amount, Note, RegisterCode, ModifiedTime) VALUES 
            ('$OrderID', '$CustomerName', '$Phone', '$Address', Now(), 'DAKHOITAO', '$ProductID', '$Quantity', '$amount', '$Note', '$RegisterCode', Now())";
            
            $query = mysqli_query($this->con, $sql);

            $result = "SELECT * FROM donhang d WHERE d.OrderID = '$OrderID'";
            return mysqli_query($this->con, $result);
        }
        public function edit($orderid, $POST, $amount){
            $CustomerName = $POST["CustomerName"];
            $Phone = $POST["Phone"];
			$Address = $POST["Address"];
			$ProductID = $POST["ProductID"];
			$Quantity = $POST["Quantity"];
			$Note = $POST["Note"];
            $sql = "UPDATE donhang SET CustomerName= '$CustomerName', Phone = '$Phone', Address = '$Address', ProductID = '$ProductID', Quantity = '$Quantity', Amount = '$amount', ModifiedTime = Now(), Note = '$Note' WHERE OrderID = '$orderid'";
            $result = false;
            if (mysqli_query($this->con, $sql)){
                $result = true;
            }
            return json_encode($result);
        }


        public function editstatus($OrderID, $POST){
            $Status =  $POST["Status"];
            $sql = "UPDATE donhang  SET Status = '$Status'WHERE OrderID = '$OrderID'";
            $result = false;
            if (mysqli_query($this->con, $sql)){
                $result = true;
            }
            return json_encode($result);
        }
        public function getstatus($id){
            $sql = "select d.Status FROM donhang d WHERE OrderID = $id";
            return mysqli_query($this->con, $sql);
        }

    }
?>