<?php 
	
	class controller {

		public function model($model){
			require_once "./mvc/model/".$model.".php";
			return new $model;
		}
		public function view($view,$data=[]){
			require_once "./mvc/view/admin/".$view.".php";
		}
		public function view_cus($view,$data=[]){
			require_once "./mvc/view/cus/".$view.".php";
		}
		
		
	}
 ?>