<?php


    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $gen = $_POST['gender'];
    $addre = $_POST['address'];
    $NI = $_POST['NIC'];
    $num = $_POST['number'];
    $em = $_POST['email'];
    $user = $_POST['userName'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];


  $servername = "localhost";
  $username = "root";
  $password = "";
  $database ="reg";
  
  $con = mysqli_connect($servername,$username,$password,$database);

  if (!$con)
  {
      die("error:".mysqli_connect_error());
  }
  if($password1 == $password2) {
$sql = "INSERT INTO `registration`(`first`, `last`, `gen`, `addre`, `NI`, `num`, `em`, `user`, `pass1`, `pass2`) VALUES ('$first','$last','$gen','$addre','$NI','$num','$em','$user','$password1','$password2')";

        if(mysqli_query($con,$sql))
                {     
                echo "registration successfully";
                }
        else
            {
                echo"Somthing went wrong";
            }
          }
        
else{
        echo "Password not matched";
  }

 

    

