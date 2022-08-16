<?php 
	
	class order_admin extends controller {
		public $order;
		public $pizza;
		function __construct(){
			$this->order = $this->model("order_model");
			$this->pizza = $this->model("pizza_model");
		}
		
		public function index(){
			
			$data = [
				"page"=> "pages/dsorder",
				"combopizza"=>$this->pizza->get(),
				"dsorder"=>$this->order->get(),
			];
		  	$this->view("template",$data);
		  	
		}
		public function edit($OrderID){
			if(isset($_POST['submit']))
			{
				$this->order->editstatus($OrderID, $_POST);				
			}
			
		  	$this->view("template",[
				"page"=> "pages/edittrangthai"
			]);
		}

		

		
	
	
		

	}
 ?>