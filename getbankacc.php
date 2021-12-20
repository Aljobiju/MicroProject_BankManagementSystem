
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/feedback1.css">
   
        
</head>

<body>
<div class="main-container">
        <!-- Header Navbar  --> 
        <nav class="navbar">
            <img src="assets/images/logo5.png">
            <ul class="nav-links">
                <li><a href="accounts.php">Accounts</a></li>
                <a href="adminhome.html"><li>Add new Account</li></a>
               <a href="adminfeedback.php"> <li>Feedback</li></a>
            </ul>
            <a href="index.php"><button class="btn">Log Out</button></a>
        </nav>
        
</style>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","bank_management");
if($con==false)
{
}
$cid=$_POST['cid'];
$name=$_POST['name'];
$address=$_POST['addr'];
$acctype=$_POST['acc_type'];
$balance=$_POST['balance'];
$sql="INSERT INTO bank_account VALUES($cid,'$name','$address','$acctype',$balance)";
if($con->query($sql)==true)
{
}
 else
 {
 }
 header('location: adminhome.php');
?>

</body>
</html>

</body>

</html>


