<?php





$un=$_POST['uname'];
$pw=$_POST['pass'];

//connect to db
$sname= "localhost";

$uname= "root";

$password = "";

$db_name = "reg";

//check connection
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
    //check admin password
    if($un=='admin' and $pw=='1234'){
        header("Location: admin_dash.php?dashb=+Dashboard");
        exit();
        
    }
    else{


             header("Location: adminlogin2.html");
                    exit();
        
   }
    

    
?>