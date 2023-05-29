<?php 

   $name = $_GET['name'];
   $email = $_GET['email'];
   $subject = $_GET['subject'];
   $message = $_GET['message'];
   


   $servername = "localhost";
   $username = "root";
   $password = "";
   $database ="reg";
   
   $con = mysqli_connect($servername,$username,$password,$database);
 
   if (!$con)
   {
       die("error:".mysqli_connect_error());
   }

else{ 
    
    
$sql  = "INSERT INTO `message`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";



if(mysqli_query($con,$sql))
                {     
                echo "Message send successfully";
                }
        else
            {
                echo"Somthing went wrong";
            }
          }
?>