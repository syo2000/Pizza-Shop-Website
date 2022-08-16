<?php
    class login extends controller{

        public $login;
        function __construct(){
            $this->login=$this->model("login_model");
           
        }
        public function index(){
            $this->view("login",[]);
            // $result_mess = false;
            if(isset($_POST["submit"])){
                $userid_input = $_POST["UserName"];
                $pass_input = $_POST["Password"];
                $result =$this->login->login($userid_input);
            //     echo "<pre>";
			// print_r($result);
			// echo "</pre>";
                // if(mysqli_num_rows($result)){
                    
                    while($row = mysqli_fetch_array($result)){
                        $userid = $row["UserName"];
                        $password = $row["Password"];
                    }
                    if($pass_input == $password){
                        // $_SESSION["userid"]=$userid;
                        $this->view("template",[
                            "page"=>"pages/index"
                        ]);	
                    }
                    else{
                        $this->view("login",[]);
                    }
                    
                // }
            }
            
        }
        //  public function login(){
            
        //      $result_mess = false;
        //      if(isset($_POST["submit"])){
        //         $userid_input = $_POST["userid"];
        //         $pass_input = $_POST["password"];
             
                
              
        //          $result =$this->login->login($userid);
        //          if(mysqli_num_rows($result)){
        //              while($row = mysql_fetch_array($result)){
        //                  $userid = $row["userid"];
        //                  $password = $row["password"];
        //              }
        //              if($pass_input == $password){
        //                 $_SESSION["userid"]=$userid;
        //                  $this->view("template",[
        //                      "page"=>"pages/index",
        //                      "result"=>$result_mess = true,
        //                  ]);
        //              }
        //              else{
        //                  $this->view("login",[
        //                      "result"=>$result_mess,
        //                  ]);
        //              }
        //          }
        //      }
        //  }
        public function logout(){
            unset($_SESSION["userid"]);
            session_destroy();
            $this->view("login",[]);
        }
    
    }
    

?>