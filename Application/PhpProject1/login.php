<?php

//forgetting to sanatize the input data

$errors=''; // variable to store error message

if(isset($_POST['submit']))  
{
   
    if(empty($_POST['email']) || empty($_POST['password_1'])){   
        $error = "you need to enter email and password";
    } 
    else { 
        //define $email and $password_1
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
    }
    
    session_start();
    

    $con=mysqli_connect("localhost:3307","root","","accounts");//mysqli("localhost","username of database","password of database","database name")
    $query = "SELECT * FROM `users` WHERE email='".$email."' and password_1='".md5($password_1)."'";
    //$result=mysqli_query($con,"SELECT * FROM users WHERE email='".$email."' and password_1`='".$password_1."'");
    $result = mysqli_query($con, $query);
    if($result)
    {
        //$rw = mysqli_num_rows(mysqli_fetch_array($result));
        
        $row = mysqli_num_rows($result);
        
        // echo $row;
        
        if($row == 1){
            
        
        header("location: index.htm");
      
        }
    
        else
            
            $message = "Please Fill Proper Details";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
                
       
	//echo "please fill proper details";
	//header("Refresh: 5; location:index.php");
    }
        
    
    
   //    mysqli_close($conn); //closing connection
                     
                       
}
?>

