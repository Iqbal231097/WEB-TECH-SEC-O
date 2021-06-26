<?php
session_start();
 
if( isset ($_POST["remember"])) {
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	 setcookie ("username",$_POST["username"],time()+ 3600);
	 setcookie ("password",$_POST["password"],time()+ 3600);
	
	
	  if($username == "" || $password == ""){
			echo " no value inserted ";
		}
		

		     $data = file_get_contents('./iqbal.json');
               $js = json_decode($data, true);
        
        
           foreach($js as $user)
        {
            if(trim($_COOKIE['username']) == $username && trim($_COOKIE['password']) == $password){
				
				
				$_SESSION['flag'] = true; 
				
				 
				
				header('location: dashboard.php');
			}else{
				
				 echo "sorry you are not  registered yet";
			}
        }
       

	   
     
    }

	         
?>
	
	