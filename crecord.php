<?php
$url='127.0.0.1:3306';
$username = "id19587883_reg1234";
$password = "Reg#123456789";
$dbname = "id19587883_reg";
$checkbox1 = $_GET['services'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  
$NI = $_GET['nic'];


  
$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `servicerecord`(`customer_nic`, `Services`) VALUES ('$NI','$chk')";


if(mysqli_query($conn,$sql)) {

    echo 'Data added sucessfully';
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   
}

mysqli_close($conn);

?>