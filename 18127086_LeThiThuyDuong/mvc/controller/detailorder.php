<?php 
	
	class detailorder extends controller {
		
		public function index(){
			
		 	$this->view_cus("template",[
				"page"=>"pages/detailorder"
			]);	
				
		 }
		 public function update(){
			
			$this->view_cus("template",[
			   "page"=>"pages/update"
		   ]);	
			   
		}
		 
	}
 ?>