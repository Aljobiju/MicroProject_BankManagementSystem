<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/adminhome.css">
   
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
            <a href="index.html"><button class="btn">Log Out</button></a>
        </nav>




<?php
$con = mysqli_connect("localhost", "root", "", "bank_management");
// Check connection 
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Print host information 
//echo " +" . mysqli_get_host_info($con);
$sql = "SELECT * FROM data"; 
if($result = $con->query($sql)){ 
if($result->num_rows > 0){ 
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Feedback</th>
    </tr>"; 
// Attempt select query execution 
while($row = $result->fetch_array()){ 
    echo "<tr>"; 
    echo "<td>" . $row['name'] . "</td>"; 
    echo "<td>" . $row['feedback'] . "</td>"; 
    echo "</tr>"; 
    } 
}}

?>
</body>
</html>
