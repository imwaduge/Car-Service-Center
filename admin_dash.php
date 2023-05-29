<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Car Service Centers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="css/dashboard button.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


    <style>
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table tr{background-color: #f2f2f2;}
            
            #table tr:hover {background-color: #ddd;}
            
            #table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #cd0606;
                color: white;
            }
            .heading{
                    color: rgb(13, 0, 114);
                    font-size:100%;
                    }
            .heading:hover {
                    color: rgb(255, 255, 255);
                    font-size:110%;
                    }

            .sidebar0{
                    display:flex;
            }

            .sidebar1{
                    width:10%;
            }

            .sidebar2{
                    width:90%;
            }


            .box4 {
                width: 150%;
                height: 150%;
                
            }

            
    </style>
</head>

<body>

<div class="main" id="go-home"></div>

<!-- Spinner Start 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
 Spinner End -->


 
<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">  </i>GPSI PREMIUM</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Home<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </nav>
<!-- Navbar End -->









<div class="sidebar0">



    <div class="sidebar1">
                            
                            <div class="sidebar">
                                        
                                    <div class="logo-details">
                                        
                                            
                                            
                                    </div>
                                        <!--<ul class="nav-list"> -->
                                                    <li>
                                                        <br>
                                                        <div class="logo-details">
                                                            <div class="logo_name">Admin Panel</div>
                                                            <i class='bx bx-menu' id="btn" ></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class='bx bx-search' ></i>
                                                        <input type="text" placeholder="Search...">
                                                        <span class="tooltip">Search</span>
                                                    </li>
                                                    <li>
                                                        <a href="?dashb=+Dashboard">
                                                        <i class='bx bx-grid-alt'></i>
                                                        <span class="links_name">Dashboard</span>
                                                        </a>
                                                        <span class="tooltip">Dashboard</span>
                                                    </li>
        
                                                    <li>
                                                    <a href='?vri=+Register+Info'>
                                                        <i class='bx bx-user' ></i>
                                                        <span class="links_name">Register Details</span>
                                                    </a>
                                                    <span class="tooltip">Register Details</span>
                                                    </li>
        
                                                    <li>
                                                    <a href='?app=Appoinment'>
                                                        <i class='bx bx-pie-chart-alt-2' ></i>
                                                        <span class="links_name">Appoinment</span>
                                                    </a>
                                                    <span class="tooltip">Appoinment</span>
                                                    </li>
        
                                                    <li>
                                                    <a href='?msg=Messages+'>
                                                        <i class='bx bx-chat' ></i>
                                                        <span class="links_name">Messages</span>
                                                    </a>
                                                    <span class="tooltip">Messages</span>
                                                    </li>
                                                    
                                                    <li class="profile">
                                                    <a href="index.html">
                                                        <div class="profile-details">
                                                                    <div class="lout">  &nbsp;&nbsp;&nbsp;&nbsp;Log Out</div>      
                                                        </div>
                                                        <i class='bx bx-log-out' id="log_out" >&nbsp;&nbsp;</i>
                                                    </a>
                                                    </li>
                                        <!--</ul>-->
                            </div>
        
    </div>



    <div class="sidebar2">
    
                    <div class = "main">
                        <div class = "reg">
                            
                            
                                    
                        </div>
                    </div>
                                            <?php
                                                //Reg start
                                                if(isset($_GET['vri'])){
                                                    $conn= new mysqli('localhost','root','','reg');
                                                    if($conn->connect_error){
                                                        die('Not Connected..');
                                                    }
                                                    else{
                                                        ?>
                                                        <br>
                                                        <div class=" wow fadeInUp" data-wow-delay="1s">
                                                        <h1>Register Details</h1>
                                                        </div> <br>
                                                        <?php
                                                        $sql="select * from registration";
                                                        $data=$conn->query($sql);
                                                        echo "<table border='1px' id ='table'> <tr><th>First Name</th><th>Last Name</th><th>Gender</th><th>Address</th><th>NIC</th><th>Contact No</th><th>Email</th><th>User Name</th><th>Password</th></tr>";
                                                        while($raw=mysqli_fetch_array($data)){
                                                            echo "<tr><td>".$raw[0]."</td><td>".$raw[1]."</td><td>".$raw[2]."</td><td>".$raw[3]."</td><td>".$raw[4]."</td><td>".$raw[5]."</td><td>".$raw[6]."</td><td>".$raw[7]."</td><td>".$raw[8]."</td></tr>";
                                                        }
                                                        echo"</table>";
                                                        $conn->close();
                                                    }
                                                    
                                                }
                                                //Reg end


                                                //Appoinment start
                                                if(isset($_GET['app'])){
                                                    $conn= new mysqli('localhost','root','','reg');
                                                    if($conn->connect_error){
                                                        die('Not Connected..');
                                                    }
                                                    else{
                                                        ?>
                                                        <br>
                                                        <h1>Appoinment Details</h1> <br> <?php
                                                        $sql="select * from appoinment";
                                                        $data=$conn->query($sql);
                                                        echo "<table border='1px' id='table' align = 'right'> <tr><th>Name</th><th>Email</th><th>Contact</th><th>License Plate</th><th>Model</th><th>Year</th><th>Package</th><th>file</th><th>Date</th><th>Time</th><th>Request</th></tr>";
                                                        while($app=mysqli_fetch_array($data)){
                                                            echo "<tr><td>".$app[0]."</td><td>".$app[1]."</td><td>".$app[2]."</td><td>".$app[3]."</td><td>".$app[4]."</td><td>".$app[5]."</td><td>".$app[6]."</td><td>".$app[7]."</td><td>".$app[8]."</td><td>".$app[9]."</td><td>".$app[10]."</td></tr>";
                                                        }
                                                        echo"</table>";
                                                        $conn->close();
                                                    }
                                                }
                                                //Appoinment end



                                                //MSG start
                                                    if(isset($_GET['msg'])){
                                                        $conn= new mysqli('localhost','root','','reg');
                                                        if($conn->connect_error){
                                                            die('Not Connected..');
                                                        }
                                                        else{  
                                                            ?>
                                                            <br>
                                                            <h1>Messages</h1> <br> <?php
                                                            $sql="select * from message";
                                                            $data=$conn->query($sql);
                                                        
                                                            
                                                            echo "<table border='1px' id='table' align = 'right'> <tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
                                                            while($msg=mysqli_fetch_array($data)){
                                                                echo "<tr><td>".$msg[0]."</td><td>".$msg[1]."</td><td>".$msg[2]."</td><td>".$msg[3]."</td></tr>";
                                                            }
                                                            echo"</table>";
                                                            $conn->close();
                                                        }
                                                    
                                                }
                                                //MSG end

                                                //dashb start
                                                if(isset($_GET['dashb'])){
                                                    $conn= new mysqli('localhost','root','','reg');
                                                    if($conn->connect_error){
                                                        die('Not Connected..');
                                                    }
                                                    else{  
                                                        ?>
                                                        <br>
                                                        <h1>Hi, Welcome!</h1> <br>
                                                        
                                                        
                                                        <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-absolute overflow-hidden">
                                <div class="box4" width="100px">
                                    <h1>GAYAAA</h1>
                                
                                </div>
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <h1>GAYCCC</h1>
                                </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Profile-2.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.facebook.com/pathum.dilshan.754" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://wa.me/+94769346154" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Pathum Dilshan</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Profile-3.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://wa.me/+94712303513" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Sachithra Piyumal</h5>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Profile-4.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.facebook.com/IshanMadusankaWaduge/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/ishan_madusanka_waduge/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href="https://wa.me/+94767711597" target="_blank"><i class="fab fa-whatsapp" target="_blank"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Ishan Madusanka </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

                                                        <br><br><br>
                                                        
                                                        
                                                        
                                                        
                                                        <?php
                                                        
                                                        
                                                    }

                                                }
                                                //sgrg end

                                            ?>
    </div>

</div>









    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-1 mt-0 wow fadeIn position-fixed bottom-0" data-wow-delay="0.2s">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="text-center mb-3 mb-md-0">
                        &copy; All Right Reserved.
                        Designed By <a class="border-bottom" href="index.html">GPSI Premium</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <script src="js/dashboard button.js"></script>
    
</body>

</html>