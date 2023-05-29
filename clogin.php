<?php

$sname= "localhost";

$uname= "root";

$password = "";

$db_name = "reg";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

session_start(); 



if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        echo "User Name is required";

        exit();

    }else if(empty($pass)){

        echo"Password is required";

        exit();

    }else{

        $sql = "SELECT * FROM registration WHERE user='$uname' AND pass1='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user'] === $uname && $row['pass1'] === $pass) {
                header("Location: index-AfterLogin.html");
                exit();
                ?>
                  
                
                

                

           <?php
            if(isset($_GET['record'])){
                $conn= new mysqli('localhost','root','','reg');
                if($conn->connect_error){
                    die('Not Connected..');
                    
                }
                else{
                 

                    $sql="select * from servicerecord";
                    $data=$conn->query($sql);
                    echo "<table border='1px' id ='table'> <tr><th>Customer NIC</th><th>Services</th></tr>";
                    while($raw=mysqli_fetch_array($data)){
                        echo "<tr><td>".$raw[0]."</td><td>".$raw[1]."</td></tr>";
                    }
                    echo"</table>";
                    $conn->close();
                    
                }
                
            }
                
              

                exit();

            }
            
            else{

           header("Location: Sign in2.html");
           exit();}

        }else{
  
            header("Location: Sign in2.html");
            exit();}
 
        }

    }

else{

    

    exit();
}
?>