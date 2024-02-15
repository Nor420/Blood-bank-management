<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
 <head>sss
    <Title>stock blood list</Title>
    <link rel="stylesheet" type="text/css"  href="css/s1.css">
    <style type="text/css">
        td{
            width: 150px;
            height: 30px;

        }
    
        </style>
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
                <h1>Stock blood list  </h1> <br>  <br>
                <center> <div id=form>
                <table>
                    <tr>
                         
                       
                       <td><center><b><font color="#0f32b">Blood Type Available</font></b></center></td>
                       <td><center><b><font color="#0f32b">Count</font></b></center></td>
                       
                       <?php
                        $q = $db->query("SELECT bgroup AS Blood_Types, COUNT(*) AS COUNT FROM donor_registration GROUP BY bgroup");
                        while($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <tr>
                                
                        <td><center><?= $r1->Blood_Types; ?></center></td>
                         <td><center><?= $r1->COUNT; ?></center></td>
                    </tr>
                        <?php

                    }
                    ?>

                    </tr>
                </table>

                
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

