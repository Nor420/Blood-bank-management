<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
    <Title>Exchange Registration</Title>
    <link rel="stylesheet" type="text/css"  href="css/s1.css">
</head>
<body>
    <div class="fullname" >
        <div id="inner_fullname" ></div>
            <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;"> Bank Management System</a></h2> </div>
            <div id="body">
                <?php
                 $un=$_SESSION['un'];
                if (!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h3>Exchange Blood Registration </h3> 
                <center><div id="form">
                <form action="" method="post">
                <table>
                <tr>
                     <td width="200px" height="px">Enter Name </td>
                     <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                     <td width="200px" height="50px">Enter Email </td>
                            <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter Email"></td>
                            
                        </select>

                 </tr>
                 <tr>
                 <td width="200px" height="50px">Address </td>
                        <td width="200px" height="50px"><textarea name="Address"></textarea></td>
                        <td width="200px" height="50px">Enter City </td>
                        <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                    
                        </tr>
                        <tr>
                        <td width="200px" height="50px">Enter Age </td>
                     <td width="200px" height="50px"><input type="number" name="age" placeholder="Enter Age"></td>
                     <td width="200px" height="50px">Select blood type </td>
                            <td width="200px" height="50px">
                            <select name ="bgroup">
                            <option> O+</option>
                            <option> AB+</option>
                            <option> AB-</option>
                        
                        </tr>
                        <tr>
                        <td width="200px" height="50px">Mobile Number </td>
                       
                       <td width="200px" height="50px"><input type="integer" name="mobile_number" placeholder="Mobile Number"></td>
                        
                            <td width="200px" height="50px">Exchange Blood </td>
                            <td width="200px" height="50px">
                            <select name ="exbgroup">
                            <option> O+</option>
                            <option> AB+</option>
                            <option> AB-</option>
                            
                        </select>
                        </tr>
                        <tr>
                        <td><input type="submit" name="sub"  value="save"> </td>
                        </tr>
                </table>
                </form>
                <?php
                if(isset($_POST['sub']))
                {
                    if(empty($_POST['name']) || empty($_POST['Address']) || empty($_POST['age']) || empty($_POST['email']) || empty($_POST['bgroup']) || empty($_POST['city']) || empty($_POST['mobile_number'])) {
                        echo "<script>alert('Please fill out all the fields!');</script>";
                    }
                    else{
                    $name = $_POST['name'];
                    $address = $_POST['Address']; // Corrected variable name
                    $age = $_POST['age'];
                    $email = $_POST['email'];
                    $bgroup = $_POST['bgroup'];
                    $city = $_POST['city'];
                    $mobilenumber = $_POST['mobile_number'];
                    $exbgroup = $_POST['exbgroup'];
                    
                
                    $q = $db->prepare("INSERT INTO exchange_b(name, address, age, email, bgroup, city, mobile_number ,exbgroup) 
                                      VALUES (:name, :address, :age, :email, :bgroup, :city, :mobile_number,:exbgroup )");
                    $q->bindValue(':name', $name); 
                    $q->bindValue(':address', $address);
                    $q->bindValue(':age', $age);
                    $q->bindValue(':email', $email);
                    $q->bindValue(':bgroup', $bgroup);
                    $q->bindValue(':city', $city);
                    $q->bindValue(':mobile_number', $mobilenumber);
                    $q->bindValue(':exbgroup', $exbgroup);
                    
                
                    if($q->execute()) {
                        echo "<script>alert(' Registration Successfull !')</script>";
                    } else {
                        echo "<script>alert('Registration failed!')</script>";
                    }
                }
            }
                ?>
               

                
            </div>
           <br> <br> <br>
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

