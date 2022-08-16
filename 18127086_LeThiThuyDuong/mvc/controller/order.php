<?php 
	
	class order extends controller {
		public $order;
		public $pizza;
		function __construct(){
			$this->order = $this->model("order_model");
			$this->pizza = $this->model("pizza_model");
		}
		public function index(){
			
		  	$this->view("template",[
				"page"=> "pages/listplayer",
				"listofplayer"=>$this->order->get(),
			]);	
		}
		public function add(){
			if(isset($_POST['submit']))
			{
				$productid = $_POST["ProductID"];
				$quantity = $_POST["Quantity"];
				$result =$this->pizza->price($productid);
				if(mysqli_num_rows($result)){
                    
                    while($row = mysqli_fetch_array($result)){
                        $price = $row["Price"];
                    }
					$amount = $price * $quantity;
					$resp = $this->order->insert($_POST, $amount);
					// if(mysqli_num_rows($resp)){
                    
					// 	while($row = mysqli_fetch_array($resp)){
					// 		$temp = $row["OrderID"];
					// 		echo "<pre>";
					// 		print_r($temp);
					// 		echo "</pre>";  
					// 	}
					// }
                	$this->view_cus("template",[
						"page"=> "pages/detail",
						"detail"=>$resp
					]);
				}
				
			}
		  	$this->view_cus("template",[
				"page"=> "pages/book",
				"combopizza"=>$this->pizza->get()
			]);
		}
		public function edit($orderid){
			if(isset($_POST['submit']))
			{
				$status = $this->order->getstatus($orderid);
				if(mysqli_num_rows($status)){
                    
                    while($row = mysqli_fetch_array($status)){
                        $CurrentStatus = $row["Status"];
                    }
					if($CurrentStatus == "DAKHOITAO"){
						$productid = $_POST["ProductID"];
						$quantity = $_POST["Quantity"];
						$result =$this->pizza->price($productid);
						if(mysqli_num_rows($result)){
                    
							while($row = mysqli_fetch_array($result)){
								$price = $row["Price"];
							}
							$amount = $price * $quantity;
							$resp = $this->order->edit($orderid, $_POST, $amount);
							
						}
					}
                	
				}					
			}
			
		  	$this->view_cus("template",[
				"page"=> "pages/edit_detail",
				"combopizza"=>$this->pizza->get()
			]);
		}
		
		public function tracuu(){
			// $this->view("template",[
			// 	"page"=> "pages/listplayer",
			// 	"listofplayer"=>$this->player->get_club($clubid)
			// ]);
			$this->view_cus("template",[
				"page"=> "pages/detailorder",
				"listofplayer"=>$this->order->get()
			]);
		}
		public function detail(){
			// $this->view("template",[
			// 	"page"=> "pages/listplayer",
			// 	"listofplayer"=>$this->player->get_club($clubid)
			// ]);
			$this->view_cus("template",[
				"page"=> "pages/detail",
				"listofplayer"=>$this->order->get()
			]);
		}
	
		

	}
 ?>