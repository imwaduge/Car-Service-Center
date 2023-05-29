<html>
<head>
    <title>Customer Login</title>
    <link rel = "stylesheet" href="RegisterFormStyle.css" type="text/css">
    <meta name="viewport" content="width=device-width , initial-scale= 1">
</head>
<body>
<div class = "main">
    <div class = "reg">
       
        
        <form action="crecord.php" method="POST" id="reg">
            <label> service :</label>
            <br>

            <label> Customer NIC:</label>
            <br>
            <input type="text" name = "nic" id = "name" placeholder="Customer NIC" required>
            <br>
           
          <form action="">
            <br>
            <input type="checkbox"  name="service[]" value = "Body Wash">Body Wash
            <br>
            <input type="checkbox"  name="service[]"value = "An engine oil change">An engine oil change
            <br>
            <input type="checkbox"  name="service[]"value = "Filter replacement">Filter replacement
            <br>
            <input type="checkbox"  name="service[]"value = "Checking lights, tyres, exhaust and operations of brakes and steering">Checking lights, tyres, exhaust and operations of brakes and steering
            <br>
            <input type="checkbox"  name="service[]"value = "Checking hydraulic fluid and coolant levels
            ">Checking hydraulic fluid and coolant levels
            <br>
            <input type="checkbox"  name="service[]"value = "Checking the cooling system">Checking the cooling system 
            <br>
            <input type="checkbox"  name="service[]"value = "Suspension checks">Suspension checks
            <br>
            <input type="checkbox"  name="service[]"value = "Steering alignment">Steering alignment
            <br>
            <input type="checkbox"  name="service[]"value = "Testing the car’s battery condition">Testing the car’s battery condition
            <br>

            <button type="submit"  name ="submit" class="btn btn-secondary w-100 py-3">Submit</button>

        </form>

        </form>

    </div>

</div>
</body>
</html>