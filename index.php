<?php
include('connection.php');
session_start()
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
            <div id="header"><h2>blood Bank Management System</h2> </div>
            <div id="body">
                <br><br> <br><br><br>
                <FORM action="" method="post">
                <table align="center">
                    <tr>
                        <td width="100px" height="60px"><b>Enter Username</b></td>
                        <td width="100px" height="60px"><input type="text" name="un"  placeholder="Enter Username "
                         style="width:150px; height:30px; border-radius:20px" ></td>
                    </tr>
                    <tr>
                        <td width="200px" height="60px"><b>Enter Password</b></td>
                        <td width="200px" height="60px"><input type="text" name="ps"  placeholder="Enter Password"
                        style="width:150px; height:30px; border-radius:20px" 
                        ></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="Login" style="width: 70px; height:30px; border-radius:5px;">
                        
                    </tr>
                </table>
                </FORM>
                <?php
                if( isset($_POST['sub']))
                    {
                          $un=$_POST['un'];
                          $ps=$_POST['ps'];
                          $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' &&  pass='$ps'");
                          $q->execute();
                          $res=$q->fetchAll(pdo::FETCH_OBJ);
                          if ($res)
                            {
                                $_SESSION['un']=$un;
                                header ("Location:admin-home.php");
                            }
                            else 
                            {
                                echo "<script> alert('Wrong User')</script>";
                            }
                        
                    


                

                        }
                        ?>

            </div>
            </body>
            <br><br>

            <div id="footer"><h4  align="center"> Copyright </h4> </div>
        </div>
</div>
</body>
</html>


