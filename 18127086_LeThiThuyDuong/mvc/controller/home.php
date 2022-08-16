<?php 
	
	class home extends controller {
		
		public function index(){
			
		 	$this->view("template",[
				"page"=>"pages/index"
			]);	
			// $this->view("login",[
			// 	 ]);	
		 }
	}
 ?>