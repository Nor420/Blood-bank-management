<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
    <Title>Admin login</Title>
    <link rel="stylesheet" type="text/css"  href="css/s1.css">
</head>
<body>
    <div class="fullname" >
        <div id="inner_fullname" ></div>
            <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;"> Bank Management System</a></h2> </div>
            <div id="body">
                <br>
                <?php
                 $un=$_SESSION['un'];
                if (!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h1>Welcome Admin  </h1> <br>  <br>
                     <ul>
                        <li><a href="donor-reg.php">Donor Registration</a></li>
                        <li><a href="donor-list.php">Donor List</a></li>
                        <li><a href="stock-blood-list.php">Stock blood List</a></li>
                    </ul><br> <br>  <br><br>  <br>  

                    <ul>
                        <li><a href="out-stock-blood.php">Out stock blood List</a></li>
                        <li><a href="exchange-blood.php">Exchange Blood Registration</a></li>
                        <li><a href="NGO-list.php">Exchange Blood List</a></li>
                    </ul> 
               

                
            </div>
           
            <div id="footer">
            <h4 style="text-align: center;">Copyright</h4>
            <p style="text-align: center;">
                 <a href="logout.php" style="color: white;">Logout</a>
                 </p>
                    </div>
        </div>
</div>
</body>
</html>

