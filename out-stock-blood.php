<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
    <Title>OUT OF STOCK BLOOD</Title>
    <link rel="stylesheet" type="text/css"  href="css/s1.css">
    <style type="text/css">
    tr {
        
        height: 50px;
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
                <h1>OUT OF STOCK BLOOD</h1> <br>  <br>
                <center> <div id=form>
                <table>
                    <tr>
                         
                       
                       <td><center><b><font color="#0f32b"> Out of Stock Blood Type </font></b></center></td>
                       
                       <?php
                        $q = $db->query("SELECT blood_type, COUNT(donor_registration.bgroup) AS COUNT 
                FROM (SELECT 'O+' as blood_type UNION ALL
                      SELECT 'AB+' UNION ALL
                      SELECT 'AB-') as blood_types
                LEFT JOIN donor_registration 
                ON blood_types.blood_type = donor_registration.bgroup
                GROUP BY blood_types.blood_type
                HAVING COUNT = 0 OR COUNT IS NULL");
                while($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                        ?>
                    <tr>
                                     <td><center><?= $r1->blood_type; ?></center></td>
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

