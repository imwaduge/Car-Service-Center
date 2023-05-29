<?php 

   $name = $_POST['name'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $license_Plate = $_POST['license_Plate'];
   $model = $_POST['model'];
   $year = $_POST['year'];
   $package = $_POST['package'];
   
   $date = $_POST['date']; 
   $time = $_POST['timeslot'];
   $request = $_POST['request'];

 


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
    
$sql = "INSERT INTO appoinment (`name`, `email`, `contact`, `license_Plate`, `model`, `year`, `package`,  `date`, `time`, `request`)VALUES('$name','$email','$contact','$license_Plate','$model',$year,'$package','$date','$time','$request');";
$sqlc="select count(time) as apcount from appoinment where date='$date' and time=$time;";
$data=$con->query($sqlc);
$noa=mysqli_fetch_array($data);

if($noa[0]<5){
   
    if($con->query($sql))
        {     
            header("Location: payment.html");
            exit();
        }
    else{
        echo"Somthing went wrong";
        }
    }
else{
    echo "Time Slot is Full.. Please Choose another Time..";
}
$con ->close();

}




?>