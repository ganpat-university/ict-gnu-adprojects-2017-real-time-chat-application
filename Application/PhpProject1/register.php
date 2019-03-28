<?php

include 'connect.php';


session_start();



//something
if(isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['dob']) || isset($_POST['pno']) || isset($_POST['email']) || isset($_POST['password_2']) || isset($_POST['password_1'])){  

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
       if ($_POST['password_1'] == $_POST['password_2']) {

        //define other variables with submitted values from $_POST
        $firstname = $mysqli->real_escape_string($_POST['firstname']);
        $lastname =  $mysqli->real_escape_string($_POST['lastname']);
        $email    =  $mysqli->real_escape_string($_POST['dob']);
        $pno    =  $mysqli->real_escape_string($_POST['pno']);
        $dob    =  $mysqli->real_escape_string($_POST['email']);
        //md5 hash password for security
        $password_1 = md5($_POST['password_1']);

        //for welcome page
        
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
        
       
        $sql = "INSERT INTO users (firstname, lastname, dob, pno, email, password_1) VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['dob'] . "', '" . $_POST['pno'] . "' , '" . $_POST['email'] . "' , '" . md5($_POST['password_1']) . "')";
	//$result = $db_handle->insertQuery($query);
        
     }


       
   }
       
            
        if ($mysqli->query($sql) === true)
        {
            
    //redirect the user to welcome.php
            echo "successful";
            header( "location: index.htm" );
        }

        
    }
 

    
?>
