<?php 
	
	class home_cus extends controller {
		
		public function index(){
			
		 	$this->view_cus("template",[
				"page"=>"pages/index"
			]);	
				
		 }
		 public function menu(){
			
			$this->view_cus("template",[
			   "page"=>"pages/menu"
		   ]);	
		   
		}
		 
	}
 ?>