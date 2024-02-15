<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
    <Title>Admin login</Title>
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
                <h1>Donor list  </h1> <br>  <br>
                <center> <div id=form>
                <table>
                    <tr>
                         
                        <td><center><b><font color="#0f32b">Name</font></b></center></td>
                        <td><center><b><font color="#0f32b">Age</font></b></center></td>
                        <td><center><b><font color="#0f32b">Blood type</font></b></center></td>
                        <td><center><b><font color="#0f32b">City</font></b></center></td>
                        <td><center><b><font color="#0f32b">Email</font></b></center></td>
                        <td><center><b><font color="#0f32b">Mobile Number</font></b></center></td>
                        <td><center><b><font color="#0f32b">Address</font></b></center></td>

                    </tr>
                    <?PHP
                    $q=$db->query("SELECT * FROM donor_registration");
                    while($r1=$q->fetch(PDO::FETCH_OBJ))
                    {
                        ?>
                       <tr>
    <td><center><?= $r1->name; ?></center></td>
    <td><center><?= $r1->age; ?></center></td>
    <td><center><?= $r1->bgroup; ?></center></td>
    <td><center><?= $r1->city; ?></center></td>
    <td><center><?= $r1->email; ?></center></td>
    <td><center><?= $r1->mobile_number; ?></center></td>
    <td><center><?= $r1->address; ?></center></td>
    <td>
        <form method="post" action="delete_donor.php">
            <input type="hidden" name="id" value="<?= $r1->id ?>">
            <button type="submit" name="delete" style="background-color: BLUE; color: white; padding: 5px 10px; border: none; border-radius: 5px;">Delete</button>
        </form>
    </td>
</tr>
                        <?PHP

                    }

                    ?>

                   
                </table>
                
                </div></center> 


                    
                
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

